<?php if (!Session::select('login')) { 
	redirect(baseUrl('uye/login'));
} ?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Kartal Elektronik</title>
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo baseurl().ADMIN ?>css/matrix-style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo baseUrl().UYE; ?>css/my.css">
<link href="<?php echo baseurl().ADMIN ?>font-awesome/css/font-awesome.css" rel="stylesheet" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo baseUrl().UYE; ?>js/my.js"></script>
<?php //include('editor.php'); ?>
 </head>
 <body>
 	<div class="container-fluid header">
 		<div class="container">
 			<div class="col-md-6">
 				<div class="logo">Kartal Elektronik</div>
 			</div>
 			<div class="col-md-6">
 				<div class="ustmenu">
 					<ul>
 						<li><a href="/uye/">Anasayfa</a></li>
 						<li><a href="/uye/icerik">Yazılarım</a></li>
 						<li><a href="/uye/bitpazari">Bit Pazarı</a></li>
 						<li><a href="/uye/tamir">Tamirlerim</a></li>
 						<li><a href="/uye/members/edit"><button class="btn btn-primary">Üyelik Ayarlarım</button></a></li>
 						<li><a href="<?php echo baseUrl(); ?>" target="_blank">Site</a></li>
 						<li><a href="<?php echo baseUrl() ?>uye/login/cikis">Çıkış</a></li>
 					</ul>
 				</div>
 			</div>
 			
 		</div>
 	</div>
 	<div class="container">
 		<br>
