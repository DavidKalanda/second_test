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
                    <input class="form-control" type="text" name="first_name" placeholder="First Name" value="<?php echo set_value('first_name'); ?>"autofocus><div style="color:red"><strong><?php echo form_error('first_name'); ?></strong></div>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="last_name" placeholder="Last Name" value="<?php echo set_value('last_name'); ?>"><div style="color:red"><strong><?php echo form_error('last_name'); ?></strong></div>
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" name="email_address" placeholder="Email" value="<?php echo set_value('email_address'); ?>"><div style="color:red"><strong><?php echo form_error('email_address'); ?></strong></div>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Password"><div style="color:red"><strong><?php echo form_error('password'); ?></strong></div>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="conf_password" placeholder="Password (repeat)"><div style="color:red"><strong><?php echo form_error('conf_password'); ?></strong></div>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label class="control-label">
                            <input type="checkbox" onchange="document.getElementById('register').disabled = !this.checked;">I agree to the I agree to the <a href= "#">license terms.</a></label>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" name="register" style="background-color:rgb(229,28,113);" id="register" disabled>Sign Up</button>
                    <h4><a href="<?= base_url('login') ?>" class="already">You already have an account? Login here.</a></h4>
                </div>
          </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
