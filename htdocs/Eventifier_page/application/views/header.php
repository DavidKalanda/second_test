<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Eventifier</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php if (! isset($_SESSION['email_address'])): ?>
                  <a class="navbar-brand" href="<?= base_url('homepage') ?>">
                <?php else: ?>
                  <a class="navbar-brand" href="<?= base_url('userspage') ?>">
                <?php endif; ?>

                <img src="<?= base_url('') ?>images/logo_3.png" style="width:230px;height:100px; margin-left:-70px; margin-top:-30px;">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php if (! isset($_SESSION['email_address'])): ?>
                    <!-- <li>
                        <a href="<?= base_url('login') ?>"><i class="fa fa-sign-in" aria-hidden="true"></i> Log in</a>
                    </li> -->
                    <li>
                        <a href="<?= base_url('login') ?>"><i class="fa fa-sign-in" aria-hidden="true"></i> Log in</a>
                    </li>
                    <li>
                        <a href="<?= base_url('signup') ?>"><i class="fa fa-plus" aria-hidden="true"></i> Sign up</a>
                    </li>
                    <li>
                        <a href="<?= base_url('register_your_organization') ?>"><i class="fa fa-building-o" aria-hidden="true"></i> Register your organization</a>
                    </li>
                    <?php endif ?>
                    <?php if (isset($_SESSION['email_address'])): ?>
                    <li>
                        <a href="<?= base_url('#') ?>"><i class="fa fa-comment" aria-hidden="true"></i> Message</a>
                    </li>
                    <li>
                        <a href="<?= base_url('#') ?>"><i class="fa fa-bell" aria-hidden="true"></i></i> Notification</a>
                    </li>
                    <!-- <?php endif ?>
                    <?php if (isset($_SESSION['email_address'])): ?> -->
                    <li>
                        <a href="<?= base_url('logout') ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Log out</a>
                    </li>
                    <li>
                        <a href="<?= base_url('profile') ?>/<?= ($_SESSION['user_id']) ?>"><i class="fa fa-user" aria-hidden="true"></i> <?=$_SESSION['first_name'] ?></a>
                    </li>
                    <?php endif ?>
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="portfolio-1-col.html">1 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-2-col.html">2 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">3 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-4-col.html">4 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-item.html">Single Portfolio Item</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="blog-home-1.html">Blog Home 1</a>
                            </li>
                            <li>
                                <a href="blog-home-2.html">Blog Home 2</a>
                            </li>
                            <li>
                                <a href="blog-post.html">Blog Post</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="full-width.html">Full Width Page</a>
                            </li>
                            <li>
                                <a href="sidebar.html">Sidebar Page</a>
                            </li>
                            <li>
                                <a href="faq.html">FAQ</a>
                            </li>
                            <li>
                                <a href="404.html">404</a>
                            </li>
                            <li>
                                <a href="pricing.html">Pricing Table</a>
                            </li>
                        </ul>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Login pop up -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Login</h4>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                      <?= form_open('welcome/login_validation'); ?>
                      <br><br>
                      <div class="center-block">
    										<i class="fa fa-users fa-5x" aria-hidden="true"></i>
    									</div>
                      <br><br>
                        <label>Username</label>
                        <input type="text" name="first_name" autofocus required/>
                        <br /><br />
                        <div class="">
                          <label>Password</label>
                          <input type="password" name="password" required/>
                        </div>
                        <br /><br />
                        <div class="">
                          <input type="submit" name="insert" value="Login">
                          <?php echo $this->session->flashdata("error"); ?>
                        </div>
                        <br /><br />
                      </form>
                    </div>  <!-- div class="col-md-8 col-md-offset-1" -->
                </div>  <!-- div class="row" -->
            </div><!-- /.modal-content -->
        </div><!-- div class="modal-dialog -->
    </div>

    <!-- Sign-up popup -->
    <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Sign up</h4>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h2>User Registration</h2>
                        <br><br>
                        <?php echo form_open('Welcome/user_registration'); ?>
                            <div class="form-group">
                                <input type="text" class="form-control" name="first_name" placeholder="Name" required="" value="<?php echo !empty($first_name['first_name'])?$first_name['first_name']:''; ?>" autofocus>
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
                    </div>  <!-- div class="col-md-8 col-md-offset-1" -->
                </div>  <!-- div class="row" -->
            </div><!-- /.modal-content -->
        </div><!-- div class="modal-dialog -->
    </div>
