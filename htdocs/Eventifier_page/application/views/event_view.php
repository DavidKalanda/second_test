<?php
$date=date_create($event[0]['start_date']);
$time=date_create($event[0]['start_time']);
?>
<div class="container-fluid" id="event_view" >
    <section class="container">
		<div class="container-page">
			<div class="col-md-6">
        <img class="img-portfolio img-responsive" src="../uploads/<?= ($event[0]['event_image']) ?>">
			</div>

			<div class="col-md-6">
				<h2> <span itemprop="name"><?= ($event[0]['title']) ?></span></h2>
        <h4><?php echo date_format($date,"\n l jS F Y") ?> - <?php echo date_format($time, 'g:i A') ?></h4>
        <h4><?= ($event[0]['address']) ?></h4>
        <h6>$<?= ($event[0]['price']) ?></h6>
				<p>
					By clicking on "Register" you agree to The Company's' Terms and Conditions
				</p>
				<p>
					While rare, prices are subject to change based on exchange rate fluctuations -
					should such a fluctuation happen, we may request an additional payment. You have the option to request a full refund or to pay the new price. (Paragraph 13.5.8)
				</p>
				<p>
					Should there be an error in the description or pricing of a product, we will provide you with a full refund (Paragraph 13.5.6)
				</p>
				<p>
					Acceptance of an order by us is dependent on our suppliers ability to provide the product. (Paragraph 13.5.6)
				</p>

				<button name="going" type="submit" class="btn btn-primary">Get Ticket</button>
        <a class="btn btn-primary" href="<?= base_url('event_controller/add_attending')?>/<?= ($event[0]['event_id']) ?>/<?= $user_id  ?>">Attend</a>
			</div>
		</div>
	</section>
</div>
<br><br>






<div class="container" >
    <div class="row">
        <div class=" col-lg-offset-3 col-lg-6" >
            <div class="panel panel-default">
                <div class="panel-footer">
                    <div class="row">
                        <div id="social-links" class=" col-lg-12">
                            <div class="row">
                                <div class="col-xs-6 col-sm-3 col-md-2 col-lg-3 social-btn-holder">
                                    <a title="google" class="btn btn-social btn-block btn-google" target="_BLANK" href="http://plus.google.com/+You/">
                                        <i class="fa fa-google"></i> +You
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 col-lg-3 social-btn-holder">
                                    <a title="twitter" class="btn btn-social btn-block btn-twitter" target="_BLANK" href="http://twitter.com/yourid">
                                        <i class="fa fa-twitter"></i> /yourid
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 col-lg-3 social-btn-holder">
                                    <a title="github" class="btn btn-social btn-block btn-github" target="_BLANK" href="http://github.com/yourid">
                                        <i class="fa fa-github"></i> /yourid
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 col-lg-3 social-btn-holder">
                                    <a title="stackoverflow" class="btn btn-social btn-block btn-stackoverflow" target="_BLANK" href="http://stackoverflow.com/users/youruserid/yourid">
                                        <i class="fa fa-stack-overflow"></i> /yourid
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
