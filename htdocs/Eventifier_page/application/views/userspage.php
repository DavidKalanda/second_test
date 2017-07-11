<!-- Events Container -->
<link href="<?php echo base_url();?>/css/userspage.css" rel="stylesheet">
<link href="<?php echo base_url();?>/css/homepage.css" rel="stylesheet">
<script src="<?php echo base_url();?>/js/userspage.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>/js/homepage.js" type="text/javascript"></script>

  <div id="welcome_message" class="container" style="height: 350px; width: 100%; overflow: hidden;">
    <h1>
      <a href="" class="typewrite" data-period="2000" data-type='[ "Welcome <?=$_SESSION['first_name'] ?>!", "Scroll Down to see upcoming events" ]'>
        <span class="wrap"></span>
      </a>
    </h1>
  </div>
    <!-- Page Content -->
    <div class="container">
        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">
                  <div class="dropdown">
                    <hr>
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Events
                      <span class="caret"></span>
                    </button>
                      <ul class="dropdown-menu">
                        <li><a href="#">All Events</a></li>
                        <li><a href="#">Your Events</a></li>
                      </ul>
                    </div>
                </h3>
            </div>
        </div>
        <!-- <a class="btn btn-lg btn-default btn-block" href="<?= base_url('createEvent') ?>">Create Event</a> -->
        <!-- <hr> -->

        <!-- Call to Action  -->
        <?php foreach ($events as $event): ?>
        <?php $date=date_create($event['start_date']);$time=date_create($event['start_time']);?>

        <!-- Call to Action Section -->
        <div class="col-md-3">
            <div class="view">
                <div class="caption">
                <h3>Wiseberry</h3>
                    <a href="" rel="tooltip" title="Add to Favorites"><span class="fa fa-heart-o fa-2x"></span></a>
                    <a href="<?= base_url('event') ?>/<?= ($event['event_id']) ?>" rel="tooltip" title="View"><span class="fa fa-search fa-2x"></span></a>
                </div>
                <div class="image-container">
                  <img src="uploads/<?= ($event['event_image']) ?>" class="img-responsive">
                </div>
                <div class="propertyType unit">
                    $<?= ($event['price']) ?>
                </div>
            </div>
            <div class="info">
                <p class="large" style="text-overflow: ellipsis"><?= ($event['title']) ?></p>
                <p class="medium wb-red"><?php echo date_format($date,"\n l jS F Y") ?> - <?php echo date_format($time, 'g:i A') ?></p>
                <span class="wb wb-beds pull-right"> <strong>4</strong> </span>
                <span class="wb wb-baths pull-right"> <strong>3</strong> </span>
            </div>
            <div class="stats wb-red-bg">
                <span class="fa fa-heart-o" rel="tooltip" title="Liked"> <strong>47</strong></span>
                <span class="fa fa-eye" rel="tooltip" title="Viewed"> <strong>137</strong></span>
                <span class="fa fa-photo pull-right"  rel="tooltip" title="Photos"> <strong>4</strong></span>
            </div>
        </div>
      <?php endforeach; ?>

        <hr>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
