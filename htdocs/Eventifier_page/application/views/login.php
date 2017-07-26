<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventifier</title>
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>/login_assets/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?php echo base_url();?>/login_assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/login_assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/login_assets/css/styles.css">
</head>

<body>
    <div class="login-clean">
        <?= form_open('welcome/login_validation'); ?>
            <h2 class="sr-only">Login Form</h2>
            <div class="outter">
              <img src="<?= base_url('') ?>images/logo4.png" alt="" class="image-circle">
            </div>
            <div class="form-group">
                <input class="form-control" type="email" name="email_address" placeholder="Email" autofocus>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
              <div> <?= $error_msg?></div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit" style="background-color:rgb(229,28,113);">Log In</button>
            </div><a href="<?= base_url('signup') ?>" class="new">New to Relnos? Sign Up</a>
            <a href="#" class="forgot">Forgot your email or password?</a></form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
