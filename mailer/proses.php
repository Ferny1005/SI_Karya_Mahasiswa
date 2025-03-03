<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kirim Permintaan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
</head>
<body>

<div class="container">
  <h2 align="center">Kirim Permintaan Stakeholder</h2><br>
  <form class="form-horizontal" method="POST" enctype='multipart/form-data' id="FormEmail">
     <?php
                include "../koneksi.php";
                $id_permintaan = $_GET['id_permintaan'];
                  $data = mysqli_query($koneksi,"select id_permintaan, asal from permintaan where id_permintaan ='$id_permintaan'");
                  while($d = mysqli_fetch_array($data)){
                    $id_permintaan=$d['id_permintaan'];
                    $asal=$d['asal'];}
                    ?>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email Penerima:</label>
      <div class="col-sm-10">
        <input type="text" id="email" value="<?php echo $id_permintaan;?>" name="id_permintaan" hidden>
        <input type="email" class="form-control" id="email" value="<?php echo $asal;?>" name="email" readonly>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nama">Subjek:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="subjek" name="subjek">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pesan">Pesan:</label>
      <div class="col-sm-10">          
        <textarea class="form-control" rows="5" id="pesan" name="pesan"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Attachment">Attachment:</label>
      <div class="col-sm-10">          
        <input type="file" class="form-control" id="attachment" name="attachment">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
      </div>
    </div>
  </form>
</div>
<script type="text/javascript">
    $("form").submit(function(e) {
         e.preventDefault();
          var form = $('#FormEmail')[0];

         var data = new FormData(form);
        $.ajax({
            url: 'send-mail.php',
            type: 'post',
            enctype: 'multipart/form-data',
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            success: function(data) {
              alert(data);
              
            }
        });
    });
  </script>
</body>
</html>
