
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
           
                 <div class="control-group normal_text"> <h3>KARTAL ELEKTRONİK ÜYE KAYIT </h3></div>
                
             <img src="<?php echo baseUrl(); ?>images/finish.png" alt="">

<h2>Aktivizasyon işleminiz başarılı olmuştur. <br>Sitemize üye olduğunuz için teşekkür ederiz </h2>

<a  class="btn btn-primary" href="<?php echo baseUrl(); ?> ">Anasayfaya git</a>

<a  class="btn btn-primary" href="<?php echo baseUrl('uye'); ?>">Üye girişi.</a>

                
            </form>
            
        </div>
        
        <script src="<?php echo baseurl(ADMIN.'js/jquery.min.js')?>"></script>  
        <script src="<?php echo baseurl(ADMIN.'js/matrix.login.js')?>"></script> 
    </body>

</html>


