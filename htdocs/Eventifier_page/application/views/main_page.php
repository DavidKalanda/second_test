    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill">
                  <video src="videos/video05.mp4" autoplay loop width="100%"></video>
                </div>
                <div class="carousel-caption">
                  <h1>Want to have another Beautiful experience?</h1>
                  <h2>Because every Event counts</h2>
                    <!-- <button type="button" class="btn btn-default btn-lg" href="<?= base_url('createEvent') ?>">
                      <a>Create Event</a>
                    </button> -->
                    <div class="">
                        <a class="btn btn-default btn-lg" href="<?= base_url('createEvent') ?>">Create Event</a>
                    </div>
                    <br></br>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row form-group">
            <div class="col-lg-12">
                <h2 class="page-header">
                    Local Events
                </h2>
            </div>
            <br></br>

            <!-- Event info -->
            <?php foreach($events as $event): ?>

              <?php
              $date=date_create($event['start_date']);
              $time=date_create($event['start_time']);
              ?>

              <div class="col-xs-12 col-md-4">
                  <div class="panel panel-default">
                      <div class="panel-image">
                        <div class="event_picture">
                          <div class="event_price">
                            <h6><b>$<?= ($event['price']) ?></b></h6>
                          </div>
                          <img src="/Eventifier_page/images/Music.jpg" class="panel-image-preview" />
                        </div>
                          <h4><?= ($event['title']) ?></h4>
                          <h4> <small><?php echo date_format($date,"\n l jS F Y") ?> - <?php echo date_format($time, 'g:i A') ?></small></h4>
                          <!-- <p><?= ($event['start_date']) ?> - <?= ($event['start_time']) ?></p> -->
                      </div>

                      <!-- <div class="panel-body">
                        <?php if (strlen($event['content'])>200): ?>
                          <p><?= substr($event['content'],0,200) ?>...</p>
                        <?php else: ?>
  								        <?= $event['content'] ?>
  							       <?php endif ?>
                           <a href="#" class="btn btn-default">Learn More</a>
                      </div> -->
                      <div class="panel-footer text-center">
                          <a href="#download"><span class="glyphicon glyphicon-download"></span></a>
                          <a href="#facebook"><span class="fa fa-facebook"></span></a>
                          <a href="#twitter"><span class="fa fa-twitter"></span></a>
                          <a href="#share"><span class="glyphicon glyphicon-share-alt"></span></a>
                      </div>
                  </div>
                </div>
             <?php endforeach ?>
        </div>

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                </div>
            </div>
        </div>

        <hr>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

<!-- Create event pop up -->
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
                    <input type="text" name="first_name" value=""/>
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
                            <input type="text" class="form-control" name="first_name" placeholder="Name" required="" value="<?php echo !empty($first_name['first_name'])?$first_name['first_name']:''; ?>">
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
                </div>  <!-- div class="col-md-8 col-md-offset-1" -->
            </div>  <!-- div class="row" -->
        </div><!-- /.modal-content -->
    </div><!-- div class="modal-dialog -->
</div>
</html>
