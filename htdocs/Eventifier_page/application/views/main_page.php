    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill">
                  <video src="videos/video06.mp4" autoplay loop width="100%"></video>
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

              <!-- handles the dates on the celandar -->
              <?php
              $date=date_create($event['start_date']);
              $time=date_create($event['start_time']);
              ?>

              <div class="col-xs-12 col-md-4">
                  <div class="panel panel-default">
                    <a style= "text-decoration:none; color:black" href="<?= base_url('event') ?>/<?= ($event['event_id']) ?>">
                      <div class="panel-image">
                        <div class="event_picture">
                          <div class="event_price">
                            <h6><b>$<?= ($event['price']) ?></b></h6>
                          </div>
                          <img src="uploads/<?= ($event['event_image']) ?>" class="panel-image-preview" />
                        </div>
                          <h4><?= ($event['title']) ?></h4>
                          <h4> <small><?php echo date_format($date,"\n l jS F Y") ?> - <?php echo date_format($time, 'g:i A') ?></small></h4>
                      </div>
                    </a>

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
                          <a href="#"><span class="glyphicon glyphicon-share-alt"></span></a>
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
</html>
