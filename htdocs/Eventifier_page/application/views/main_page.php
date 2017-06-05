    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill">
                  <video src="videos/video03.mp4" autoplay loop width="100%"></video>
                </div>
                <div class="carousel-caption">
                    <button type="button" class="btn btn-default btn-lg">
                      <a href="<?= base_url('createEvent') ?>";><b>Create Event</b></a>
                    </button>
                    <br></br>
                    <button type="button" class="btn btn-default btn-lg">
                      <a href="<?= base_url('signup') ?>";>Sign up</a>
                    </button>
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
            <div class="row">
              <div class="col-xs-12 col-md-4">
                  <div class="panel panel-default">
                      <div class="panel-image">
                          <img src="/Eventifier_page/images/Music.jpg" class="panel-image-preview" />
                          <h6>$<?= ($event['price']) ?></h6>
                          <h4><?= ($event['title']) ?></h4>
                          <p>Date:<?= ($event['start_date']) ?> - Time:$<?= ($event['start_time']) ?></p>
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
