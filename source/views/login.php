<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="../../favicon.ico">
        <title>Login to continue</title>
        <!-- Bootstrap core CSS -->
        <!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('asset/fonts/css/font-awesome.min.css'); ?>">

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url('asset/css/login.css'); ?>" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">                                                                    
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <h1 class="text-center login-title">Login to continue</h1>
                    <div class="account-wall">
                        <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                             alt="">                        
                             <?php
                             $attributs = array('class' => 'form-signin');
                             echo form_open('login', $attributs);
                             ?>
                        <input name="email" type="text" class="form-control" placeholder="Email" required autofocus>
                        <input name="password" type="password" class="form-control" placeholder="Password" required>                            
                        <?php
                        if (isset($message)):
                            echo $message;
                        endif;
                        ?>
                        <input name="submit" class="btn btn-lg btn-primary btn-block" type="submit" value="Login"/>
                        <label class="checkbox pull-left">
                            <input type="checkbox" value="remember-me">
                            Remember me
                        </label>
                        <a href="#" class="pull-right need-help">Reset Password </a><span class="clearfix"></span>                            
                        <?php echo form_close(); ?>
                    </div> 

                </div>
            </div>
        </div>
        <script src="<?php echo base_url() ?>asset/js/jquery-1.11.2.min"></script>
        <script src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>
    </body>
</html>
