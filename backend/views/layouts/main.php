<?php
	Yii::app()->clientScript->coreScriptPosition=CClientScript::POS_END;
	Yii::app()->clientscript
//		->registerCssFile( Yii::app()->baseUrl . '/css/bootstrap.css')
		->registerCssFile( Yii::app()->baseUrl . '/css/bootstrap-theme.css')
//		->registerCssFile( Yii::app()->baseUrl . '/css/font-awesome.css')
		->registerCssFile( Yii::app()->baseUrl . '/css/my.css')
//		->registerScriptFile('//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', CClientScript::POS_END)
//		->registerCoreScript('jquery')
//		->registerScriptFile(Yii::app()->baseUrl . '/js/modernizr.js', CClientScript::POS_HEAD)
//		->registerScriptFile(Yii::app()->baseUrl . '/js/bootstrap.js', CClientScript::POS_END)
		->registerScriptFile(Yii::app()->baseUrl . '/js/my.js', CClientScript::POS_END);
//		Yii::App()->clientScript->registerCoreScript('jquery');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $this->pageTitle; ?></title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico">
<!--Uncomment when required-->
<!--<link rel="apple-touch-icon" href="images/apple-touch-icon.png">-->
<!--<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">-->
<!--<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">-->
</head>
<body>
<!-- Begin Body -->
<div class="container">
	<header>
		<h1 class="fa fa-home fa-3x"></h1>
	</header>
</div>
<?php $this->renderPartial('application.views.layouts.header'); ?>
<div class="container">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 columns">
				<?php echo $content; ?>
			</div>
		</div>
	</div>
</div>
</body>
</html>