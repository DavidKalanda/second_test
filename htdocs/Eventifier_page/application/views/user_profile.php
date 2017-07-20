<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/user_profile.css">
<script src="<?php echo base_url();?>/js/user_profile.js" type="text/javascript"></script>
<div class="wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<header id="header">

					<div class="slider">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
								<div class="item active">
								<img src="<?= base_url('') ?>images/comp5.jpg">
								</div>
							</div>
						</div>
					</div>

					<nav class="navbar navbar-default">

						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
							<a class="user_image" href="#"><img class="img-responsive" src="images/me2.jpg"></a>
							<span class="site-name"><?=$user['first_name'] ?>  <?=$user['last_name'] ?></span>
							<?php if ($user['user_id'] != $_SESSION['user_id']): ?>
								<?php if ($follow == 'Follow' ): ?>
									<span class="site-description">
										<!-- <button class="followBtn followButton" rel="6" onclick="<?= base_url()?>Welcome/addFollower/<?= ($user['user_id']) ?>/<?=($_SESSION['user_id']) ?>">Follow</button> -->
										<a onclick="changeText()" id="follow" class="followBtn followButton" href="<?= base_url('Welcome/addFollower')?>/<?= ($user['user_id']) ?>/<?=($_SESSION['user_id']) ?>"><?=$follow ?></a>
									</span>
								<?php else: ?>
									<span class="site-description">
										<!-- <button class="followBtn followButton" rel="6" onclick="<?= base_url()?>Welcome/addFollower/<?= ($user['user_id']) ?>/<?=($_SESSION['user_id']) ?>">Follow</button> -->
										<a onclick="changeText()" id="follow" class="followBtn followButton" href="<?= base_url('Welcome/removeFollower')?>/<?= ($user['user_id']) ?>/<?=($_SESSION['user_id']) ?>"><?=$follow ?></a>
									</span>
								<?php endif; ?>

							<?php endif; ?>
						</div>

						<div class="collapse navbar-collapse" id="mainNav" >

							<div class="tabbable-panel">
								<div class="tabbable-line">

									<ul class="nav main-menu navbar-nav nav-tabs">
									<li class="active"><a href="#user1" data-toggle="tab">My Events</a></li>
									<li><a href="#user2" data-toggle="tab">About Me</a></li>
									<li><a href="#user3" data-toggle="tab">Organizations I am part of</a></li>
									<li><a href="#user4" data-toggle="tab">Followers</a></li>
									<li><a href="#user5" data-toggle="tab">Following</a></li>
									<li><a href="#user6" data-toggle="tab">Previous events</a></li>
									<li><a href="#user7" data-toggle="tab">Future events</a></li>
									</ul>
									<ul class="nav  navbar-nav navbar-right">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</nav>



				</div>

				</header>

				<div class="tab-content">

		            <div class="tab-pane active" id="user1">
		              <h1>My events</h1>
									<div class="container">
								    <ul class="timeline">
											<?php foreach ($events as $event): ?>
							        <?php $date=date_create($event['start_date']);$time=date_create($event['start_time']);?>
								        <li>
													<div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
								          <div class="timeline-panel">
								            <div class="timeline-heading">
								              <h4 class="timeline-title"><?= ($event['title']) ?></h4>
								              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> <?php echo date_format($time, 'g:i A') ?></small></p>
								            </div>
								            <div class="timeline-body">
								              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
															<hr>
															<?php if ($user['user_id'] == $_SESSION['user_id']): ?>
															<div class="btn-group">
								                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
								                  <i class="glyphicon glyphicon-cog"></i> <span class="caret"></span>
								                </button>
								                <ul class="dropdown-menu" role="menu">
								                  <li><a href="<?= base_url('editEvent')?>/<?= ($event['event_id']) ?>">Edit</a></li>
								                  <li class="divider"></li>
								                  <li><a href="<?= ($event['event_id']) ?>" data-toggle="modal" data-target="#delete">Delete</a></li>
								                </ul>
								              </div>
															<?php endif; ?>
														</div>
								          </div>
								        </li>
												<?php endforeach; ?>
								    </ul>
								</div>
								<?php foreach ($events as $event): ?>
								<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
						        <div class="modal-dialog">
						            <div class="modal-content">
						                <div class="modal-header">
						                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
						                    <h4 class="modal-title custom_align" id="Heading">Delete</h4>
						                </div>
														<div class="modal-body">
												        <p>You are about to delete.</p>
												        <p>Do you want to proceed?</p>
												    </div>
														<div class="modal-footer">
												      <a href="<?= base_url('event_controller/deleteEvent')?>/<?= ($event['event_id']) ?>" id="btnYes" class="btn danger">Yes</a>
												      <a href="#" data-dismiss="modal" aria-hidden="true" class="btn secondary">No</a>
												    </div>

						            </div><!-- /.modal-content -->
						        </div><!-- div class="modal-dialog -->
						    </div>
								<?php endforeach; ?>
           			</div>
           			<div class="tab-pane" id="user2">
		              <h1>Page 2</h1>
           			</div>
           			<div class="tab-pane" id="user3">
		              <h1>Page 3</h1>
           			</div>
           			<div class="tab-pane" id="user4">
		              <h1>Page 4</h1>
           			</div>
           			<div class="tab-pane" id="user5">
		              <h1>Page 5</h1>
           			</div>


			</div>
		</div>
	</div>
</div>
