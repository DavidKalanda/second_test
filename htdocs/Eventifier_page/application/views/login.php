<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
  <div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
      <br /><br /><br />
    <div class="well well-lg">
      <h1><b>Login</b></h1>
      <br /><br /><br />
    <?= form_open('welcome/login_validation'); ?>
      <label>Username</label>
      <input type="text" name="first_name" value="" autofocus/>
      <br /><br />
      <div class="">
        <label>Password</label>
        <input type="password" name="password" value=""/>
      </div>
      <br /><br />
      <div class="">
        <input type="submit" name="insert" value="Login">
        <?php echo $this->session->flashdata("error"); ?>
      </div>
      <br /><br />
    </form>
  </div>
  </div>
  </div>

</body>
</html>
