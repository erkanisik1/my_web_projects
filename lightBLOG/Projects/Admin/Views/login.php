
<!DOCTYPE html>
<html lang="en">
    
<head>
        <title><?php echo settings('site_name'); ?> YÖNETİM</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?php //echo Import::style('css/bootstrap.min.css') ?> 
        <link rel="stylesheet" href="<?php echo ADMIN;  ?>css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo ADMIN; ?>css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="<?php echo ADMIN; ?>css/matrix-login.css" />
        <link href="<?php echo ADMIN; ?>font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">            
            <form id="loginform" class="form-vertical"  method="post">
                 <div class="control-group normal_text"> <h3><?php echo settings('site_name').' '.ML::select('loginwelcome'); ?> </h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-envelope"></i></span><input type="text" name="mail" placeholder="<?php echo ML::select('emailplaceholder'); ?>" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="pass" placeholder="<?php echo ML::select('passwordplaceholder'); ?>" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                   
                    <span class="pull-right"><button type="submit" class="btn btn-success"><?php echo ml::select('login') ?></button ></span>
                </div>
            </form>
            
        </div>
        
        <script src="<?php echo ADMIN; ?>js/jquery.min.js"></script>  
        <script src="<?php echo ADMIN; ?>js/matrix.login.js"></script> 
    </body>

</html>
