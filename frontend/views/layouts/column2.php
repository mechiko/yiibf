<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
  <div class="row">
	<div class="col-sm-10">
			<?php echo $content; ?>
	</div>
	<div id="sidebar-wrapper" class="col-sm-2">
		<div id="sidebar" class="affix">
			<?php
				$this->beginWidget('zii.widgets.CPortlet', array(
					'title'=>'Operations',
				));
				$this->widget('zii.widgets.CMenu', array(
					'items'=>$this->menu,
					'htmlOptions'=>array('class'=>'nav nav-pills nav-stacked','id'=>'sidebar'),
				));
				$this->endWidget();
			?>
		</div>
	</div>
  </div>
</div>
<?php $this->endContent(); ?>