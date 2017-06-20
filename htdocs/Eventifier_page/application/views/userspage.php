

    <!-- Header Carousel -->
    <!-- <header id="myCarousel" class="carousel slide"> -->
        <!-- Indicators -->
        <!-- <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol> -->

        <!-- Wrapper for Slides -->
        <!-- <div class="carousel-inner">
            <div class="item active"> -->
                <!-- Set the first background image using inline CSS below. -->
                <!-- <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item"> -->
                <!-- Set the second background image using inline CSS below. -->
                <!-- <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item"> -->
                <!-- Set the third background image using inline CSS below. -->
                <!-- <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div> -->

        <!-- Controls -->
        <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header> -->

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">
                  <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Events
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="#">All Events</a></li>
                        <li><a href="#">Your Events</a></li>
                      </ul>
                      <a class="btn btn-lg btn-default btn-block" href="<?= base_url('createEvent') ?>">Create Event</a>
                    </div>
                </h3>
            </div>

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
        <!-- /.row -->

        <!-- Portfolio Section -->
        <!-- <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Portfolio Heading</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
        </div> -->
        <!-- /.row -->

        <!-- Features Section -->
        <!-- <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Modern Business Features</h2>
            </div>
            <div class="col-md-6">
                <p>The Modern Business template by Start Bootstrap includes:</p>
                <ul>
                    <li><strong>Bootstrap v3.3.7</strong>
                    </li>
                    <li>jQuery v1.11.1</li>
                    <li>Font Awesome v4.2.0</li>
                    <li>Working PHP contact form with validation</li>
                    <li>Unstyled page elements for easy customization</li>
                    <li>17 HTML pages</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="http://placehold.it/700x450" alt="">
            </div>
        </div> -->
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="<?= base_url('createEvent') ?>">Create Event</a>
                </div>
            </div>
        </div>

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
