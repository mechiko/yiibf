<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<?php Yii::app()->user->setFlash('success', '<strong>Well done!</strong> You have successfully created your Yii application.');?>
<?php $this->widget('bootstrap.widgets.TbAlert'); ?>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <tt><?php echo __FILE__; ?></tt></li>
	<li>Layout file: <tt><?php echo $this->getLayoutFile('main'); ?></tt></li>
</ul>

<?php $this->beginWidget(
	'bootstrap.widgets.TbModal',
	array(
		'id' => 'myModal',
			'htmlOptions' => array(
			'tabindex' => -1,
//	    	'role' => 'dialog',
			'aria-labelledby' => 'myModalLabel',
//	    	'aria-hidden' => true,
		)
	)
); ?>

	<div class="modal-header">
		<a class="close" data-dismiss="modal">&times;</a>
		<h4>Modal header</h4>
	</div>

	<div class="modal-body">
		<p>One fine body...</p>
	</div>

	<div class="modal-footer">
		<?php $this->widget(
			'bootstrap.widgets.TbButton',
			array(
				'type' => 'primary',
				'label' => 'Save changes',
				'url' => '#',
				'htmlOptions' => array('data-dismiss' => 'modal'),
			)
		); ?>
		<?php $this->widget(
			'bootstrap.widgets.TbButton',
			array(
				'label' => 'Close',
				'url' => '#',
				'htmlOptions' => array('data-dismiss' => 'modal'),
			)
		); ?>
	</div>

<?php $this->endWidget(); ?>
<?php $this->widget(
	'bootstrap.widgets.TbButton',
	array(
		'label' => 'Click me',
		'type' => 'primary',
		'htmlOptions' => array(
			'data-toggle' => 'modal',
			'data-target' => '#myModal',
		),
	)
);
?>

<?php $gridDataProvider = new CArrayDataProvider(array(
	array('id'=>1, 'firstName'=>'Mark', 'lastName'=>'Otto', 'language'=>'CSS'),
	array('id'=>2, 'firstName'=>'Jacob', 'lastName'=>'Thornton', 'language'=>'JavaScript'),
	array('id'=>3, 'firstName'=>'Stu', 'lastName'=>'Dent', 'language'=>'HTML'),
));
?>
<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'type'=>'striped bordered condensed',
	'dataProvider'=>$gridDataProvider,
	'template'=>"{items}",
//	'htmlOptions' => array(
//		'class' => 'table-responsive grid-view',
//	),
	'columns'=>array(
		array('name'=>'id', 'header'=>'#'),
		array('name'=>'firstName', 'header'=>'First name'),
		array('name'=>'lastName', 'header'=>'Last name'),
		array('name'=>'language', 'header'=>'Language'),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'viewButtonUrl'=>'Yii::app()->controller->createUrl("view",array("id"=>$data["id"]))',
			'updateButtonUrl'=>'Yii::app()->controller->createUrl("update",array("id"=>$data["id"]))',
			'deleteButtonUrl'=>'Yii::app()->controller->createUrl("delete",array("id"=>$data["id"]))',
			'htmlOptions'=>array('style'=>'width: 50px'),
		),
	),
)); ?>