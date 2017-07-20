
<!-- Events Container -->
<link href="<?php echo base_url();?>/css/homepage.css" rel="stylesheet">
<script src="<?php echo base_url();?>/js/homepage.js" type="text/javascript"></script>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill">
                  <video width="100%" src="videos/video06.mp4" autoplay loop ></video>
                </div>
                <div class="carousel-caption">
                  <h1>Create another Beautiful experience</h1>
                  <h2>Because every Event counts</h2>
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

                  <form action="" class="search-form">
                      <div class="form-group has-feedback">
                  		<label for="search" class="sr-only">Search</label>
                  		<input type="text" class="form-control" name="search" id="search" placeholder="search">
              		    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                  	</div>
                  </form>
                </h2>
            </div>
            <br></br>

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
            <div class="stats wb-red-bg">
                <span class="fa fa-heart-o" rel="tooltip" title="Liked"> <strong>47</strong></span>
                <span class="fa fa-eye" rel="tooltip" title="Viewed"> <strong>137</strong></span>

                <span class="fa fa-photo pull-right"  rel="tooltip" title="Photos"> <strong>4</strong></span>
            </div>
        </div>
      <?php endforeach; ?>
        <hr>
      </div>

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

    <!-- open login modal -->
    <!-- <script>

    <?php if (isset($_POST['login'])) { ?>
      $(function(){
        $("#login").modal('show');
      });

    <?php } ?>
    </script> -->

</body>
</html>
