<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
include '../koneksi.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

$email_penerima=$_POST['email'];
$nama_penerima='Stakeholder';
$pesan=$_POST['pesan'];
$subjek=$_POST['subjek'];
$id_permintaan=$_POST['id_permintaan'];
$file_attachments=$_FILES['attachment']['tmp_name'];
$name_attachments=$_FILES['attachment']['name'];

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'sulutdinaspendidikan@gmail.com';                     // SMTP username
    $mail->Password   = 'jarvaaucvixgrxeb';                               // SMTP password
    $mail->SMTPSecure = 'TLS';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('sulutdinaspendidikan@gmail.com', 'Politeknik Negeri Manado');
    
    $mail->addAddress($email_penerima, $nama_penerima);     // Add a recipient


    // Attachments
    $mail->addAttachment($file_attachments, $name_attachments);    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subjek;
    $mail->Body    = $pesan;

    $mail->send();
    echo 'Message has been sent';
    mysqli_query($koneksi,"delete from permintaan where id_permintaan='$id_permintaan'");
header("location:../");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}