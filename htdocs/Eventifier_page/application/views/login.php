<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

  <h1><b>Login</b></h1>
  <div class="container">
    <br /><br /><br />
    <?= form_open('welcome/login_validation'); ?>
      <label>Enter Username</label>
      <input type="text" name="user_name" value=""/>
      <br /><br />
      <div class="">
        <label>Enter Password</label>
        <input type="text" name="password" value=""/>
      </div>
      <br /><br />
      <div class="">
        <input type="submit" name="insert" value="Login">
        <?php echo $this->session->flashdata("error"); ?>
      </div>
      <br /><br />
      <!-- <div class="">
        <?php echo anchor('signup', 'Sign up'); ?>
      </div> -->
    </form>
  </div>

</body>
</html>
