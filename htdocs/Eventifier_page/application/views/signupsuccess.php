<div class="container">
	<div class="row text-center">
        <div class="col-sm-6 col-sm-offset-3">
        <br><br> <h2 style="color:#0fad00">Success</h2>
        <!-- <img src="http://osmhotels.com//assets/check-true.jpg"> -->
        <h3>Dear, <?= $first_name.' '.$last_name?></h3>
        <p style="font-size:20px;color:#5C5C5C;">Thank you for signing up with Relnos. We have sent you an email "<?= $email_address?>" with your details
Please go to your above email now and login.</p>
        <a href="<?= base_url('login') ?>" class="btn btn-success">     Log in      </a>
    <br><br>
        </div>

	</div>
</div>
