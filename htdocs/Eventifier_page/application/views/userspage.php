<!-- Events Container -->
<link href="<?php echo base_url();?>/css/userspage.css" rel="stylesheet">
<link href="<?php echo base_url();?>/css/homepage.css" rel="stylesheet">
<script src="<?php echo base_url();?>/js/userspage.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>/js/homepage.js" type="text/javascript"></script>
<link href="<?php echo base_url();?>/emoji/twemoji-awesome.css" rel="stylesheet">
  <div id="welcome_message" class="container" style="height: 350px; width: 100%; overflow: hidden;">
    <h1>
      <a href="" class="typewrite" data-period="2000" data-type='[ "Welcome <?=$user['first_name'] ?>!", "Scroll Down to see whats poping" ]'>
        <span class="wrap"></span>
      </a>
    </h1>
  </div>
    <!-- Page Content -->
    <div class="container">
        <!-- Marketing Icons Section -->
        <div class="row">
          <a class="btn btn-primary" href="<?= base_url('createEvent') ?>">Create Event</a>
          <a href="#" class="btn"><i class="icon-align-justify"></i> <strong>List</strong></a>
        </div>
        <!-- <div class="row"> -->

        <!-- </div> -->
        <!-- <a class="btn btn-primary" href="<?= base_url('createEvent') ?>">Create Event</a> -->
        <hr>

        <!-- Call to Action  -->
        <?php foreach ($events as $event): ?>
        <?php $date=date_create($event['start_date']);$time=date_create($event['start_time']);?>
        <!-- Call to Action Section -->
        <div class="col-md-3">
            <div class="view">
                <div class="caption">
                <h3><?= ($event['title']) ?></h3>
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
                <p><a href="<?= base_url('profile') ?>/<?= ($event['created_by']) ?>"><?= ($event['created_by']) ?></a></p>
                <span class="wb wb-beds pull-right"> <strong>4</strong> </span>
                <span class="wb wb-baths pull-right"> <strong>3</strong> </span>
            </div>
            <!-- for emojis -->
            <!-- <div class="stats wb-red-bg">
              <span><i class="twa twa-lg twa-thought-balloon" rel="tooltip" title="Interested"></i><strong style="color: #c2185b; font-size: 15px;">137</strong></span>
              <span style="margin-left: 6pc;"><i class="twa twa-lg twa-runner" rel="tooltip" title="Going"></i><strong style="color: #c2185b; font-size: 15px;">47</strong></span>
              <span class="pull-right"><i class="twa twa-lg twa-eyeglasses" rel="tooltip" title="Views"></i><strong style="color: #c2185b; font-size: 15px;"><?= ($event['visitors']) ?></strong></span>
            </div> -->
            <div class="stats wb-red-bg">
                <span class="fa fa-heart-o" rel="tooltip" title="Liked"> <strong>47</strong></span>
                <span class="fa fa-eye" rel="tooltip" title="Viewed"> <strong><?= ($event['visitors']) ?></strong></span>

                <span class="fa fa-photo pull-right"  rel="tooltip" title="Photos"> <strong>4</strong></span>
            </div>

        </div>
        <?php endforeach; ?>


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
