	<!-- Begin Navbar -->
	<div id="nav-wrapper" class="">
		<div id="nav" class="navbar-nav affix">
			<div class="container">
				<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Brand</a>
<?php if (Yii::app()->user->isGuest) { ?>
				<div class="navbar-collapse collapse" id="bs-navbar-collapse-1">
					<?php $this->widget('zii.widgets.CMenu',array(
						'htmlOptions' => array( 'class' => 'nav navbar-nav' ),
						'activeCssClass'	=> 'active',
						'items'=>array(
							array('label'=>'Home', 'url'=>array('/site/index')),
							array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
							array('label'=>'Contact', 'url'=>array('/site/contact')),
							array('label'=>'Login', 'url'=>array('/user/user/login')),
						),
					)); ?>
					<ul class="nav pull-right navbar-nav visible-lg">
						<li>
							<form class="navbar-form">
								<input type="text" class="form-control" placeholder="Search">
								<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
							</form>
						</li>
						<li>
							<a href="#"><i class="fa fa-flag"></i> <span class="badge">2</span></a>
						</li>
					</ul>
				</div>
<?php } else { ?>
				<div class="navbar-collapse collapse" id="bs-navbar-collapse-1">
					<?php $this->widget('zii.widgets.CMenu',array(
						'htmlOptions' => array( 'class' => 'nav navbar-nav' ),
						'activeCssClass'	=> 'active',
						'items'=>array(
							array('label'=>'Home', 'url'=>array('/site/index')),
							array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
							array('label'=>'Contact', 'url'=>array('/site/contact')),
							array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/user/user/logout'))
						),
					)); ?>
					<p class="navbar-text pull-right visible-lg">Logged in as <a href="#"><?php echo Yii::app()->user->name ?></a></p>
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
								<li class="divider"></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav pull-right navbar-nav visible-lg">
						<li>
							<form class="navbar-form">
								<input type="text" class="form-control" placeholder="Search">
								<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
							</form>
						</li>
						<li>
							<a href="#"><i class="fa fa-flag"></i> <span class="badge">2</span></a>
						</li>
					</ul>
				</div>
<?php } ?>
			</div>
		</div><!-- /.navbar -->
	</div>
