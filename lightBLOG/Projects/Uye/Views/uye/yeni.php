
<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Kartal Elektronik</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?php //echo Import::style('css/bootstrap.min.css') ?> 
        <link rel="stylesheet" href="<?php echo baseurl(ADMIN.'css/bootstrap.min.css') ?>" />
        <link rel="stylesheet" href="<?php echo baseurl(ADMIN.'css/bootstrap-responsive.min.css')?>" />
        <link rel="stylesheet" href="<?php echo baseurl(ADMIN.'css/matrix-login.css')?>" />
        <link href="<?php echo baseurl(ADMIN.'font-awesome/css/font-awesome.css')?>" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">            
            <form id="loginform" class="form-vertical"  method="post">
                 <div class="control-group normal_text"> <h3>KARTAL ELEKTRONİK ÜYE KAYIT </h3></div>
                  <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"></i></span><input type="text" name="isim" placeholder="Adınız Soyadınız" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-envelope"></i></span><input type="email" name="email" placeholder="Mail Adresiniz" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="pass" placeholder="Şifrenizi Girin" />
                        </div>
                    </div>
                </div>
                    <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="pass1" placeholder="Şifrenizi Tekrar Girin" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                   
                    <span class="pull-right"><button type="submit" class="btn btn-success">Kaydet</button ></span>
                </div>
            </form>
            
        </div>
        
        <script src="<?php echo baseurl(ADMIN.'js/jquery.min.js')?>"></script>  
        <script src="<?php echo baseurl(ADMIN.'js/matrix.login.js')?>"></script> 
    </body>

</html>
