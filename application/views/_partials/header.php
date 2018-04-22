<header>
	<div class="header-top">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<ul class="list-unstyled list-inline">
						<li>
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
						</li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<ul class="list-unstyled list-inline pull-right head-top-right">
						<li>
							<a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span>info@chemistryclasses.com</span></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-mobile" aria-hidden="true"></i><span>+91-9570472647</span></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-lock" aria-hidden="true"></i><span>Login</span></a>
						</li>
					</ul>
				</div>
			</div>	
		</div>
	</div>
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 logo">
					<a href="#"><img src="assets/dist/images/logo.png" class="img-responsive"></a>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<ul class="list-unstyled list-inline pull-right nav-menu">
						<?php 
							foreach ($menu as $key => $value) { ?>
								<li>
									<a href="<?php echo $value['url']; ?>"><?php echo $value['name']; ?></a>
								</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>	
</header>