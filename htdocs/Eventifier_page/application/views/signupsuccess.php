<link href="<?php echo base_url();?>/css/bootstrap.css" rel="stylesheet">

<div class="container">
	<div class="row text-center">
        <div class="col-sm-6 col-sm-offset-3">
        <br><br> <h2 style="color:rgb(229,28,113)">Success</h2>
        <h3>Dear, <?= $first_name.' '.$last_name?></h3>
        <p style="font-size:20px;color:#5C5C5C;">Thank you for signing up with Relnos. We have sent you an email "<?= $email_address?>" with your details. Please go to your email now and verify your account.</p>
        <a href="<?= base_url('login') ?>" class="btn btn-success" style="background-color:rgb(229,28,113); color:white;">     Log in      </a>
    <br><br>
        </div>

	</div>
</div>
