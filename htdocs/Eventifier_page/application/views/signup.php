<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>/signup_assets/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?php echo base_url();?>/signup_assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/signup_assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/signup_assets/css/styles.css">
</head>

<body>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <?php echo form_open('Welcome/user_registration'); ?>
                <h3 class="text-center"><strong>Create</strong> an account.</h3>
                <div class="form-group">
                    <input class="form-control" type="text" name="first_name" placeholder="First Name" autofocus>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="last_name" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" name="email_address" placeholder="Email">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="conf_password" placeholder="Password (repeat)">
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label class="control-label">
                            <input type="checkbox">I agree to the license terms.</label>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" name="register" style="background-color:rgb(229,28,113);">Sign Up</button>
                </div><a href="<?= base_url('login') ?>" class="already">You already have an account? Login here.</a></form>
          </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
