<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<div class="container" style="margin-top:50px;">
  <div class="well well-lg">
    <h2>User Registration</h2>
    <br><br>
    <?php echo form_open('Welcome/user_registration'); ?>
        <div class="form-group">
            <input autofoucus type="text" class="form-control" name="first_name" placeholder="Name" required="" value="<?php echo !empty($first_name['first_name'])?$first_name['first_name']:''; ?>">
          <?php echo form_error('first_name','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="last_name" placeholder="Last Name" required="" value="<?php echo !empty($last_name['last_name'])?$last_name['last_name']:''; ?>">
          <?php echo form_error('last_name','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email_address" placeholder="Email" required="" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
          <?php echo form_error('email_address','<span class="help-block">','</span>'); ?>
        </div>
        <!-- <div class="form-group">
            <input type="text" class="form-control" name="phone" placeholder="Phone" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
        </div> -->
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Password" required="">
          <?php echo form_error('password','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="conf_password" placeholder="Confirm password" required="">
          <?php echo form_error('conf_password','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
            <?php
            if(!empty($user['gender']) && $user['gender'] == 'Female'){
                $fcheck = 'checked="checked"';
                $mcheck = '';
            }else{
                $mcheck = 'checked="checked"';
                $fcheck = '';
            }
            ?>
        </div>
        <div class="form-group">
            <input type="submit" name="regisSubmit" class="btn-primary" value="Submit"/>
        </div>
    </form>
    <p class="footInfo">Already have an account? </p>
      </div>
</div>
</body>
</html>
