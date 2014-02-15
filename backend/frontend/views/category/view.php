<?php
$this->breadcrumbs[Yii::t('crud','Categories')] = array('admin');
$this->breadcrumbs[] = $model->id;
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Category')?> <small><?php echo Yii::t('crud','View')?> #<?php echo $model->id ?></small></h1>



<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
    <b><?php echo CHtml::encode($model->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($model->id), array('view', 'id'=>$model->id)); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('parent_id')); ?>:</b>
    <?php echo CHtml::encode($model->parent_id); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('alias')); ?>:</b>
    <?php echo CHtml::encode($model->alias); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('lang')); ?>:</b>
    <?php echo CHtml::encode($model->lang); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('name')); ?>:</b>
    <?php echo CHtml::encode($model->name); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('image')); ?>:</b>
    <?php echo CHtml::encode($model->image); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('short_description')); ?>:</b>
    <?php echo CHtml::encode($model->short_description); ?>
    <br />

    <?php /*
    <b><?php echo CHtml::encode($model->getAttributeLabel('description')); ?>:</b>
    <?php echo CHtml::encode($model->description); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('status')); ?>:</b>
    <?php echo CHtml::encode($model->status); ?>
    <br />

    */ ?>

<h2><?php echo CHtml::link(Yii::t('app','Categories'), array('//category/admin'));?></h2>
<ul>
                <?php if (is_array($model->categories)) foreach($model->categories as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('//category/view','id'=>$foreignobj->id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('//category/update','id'=>$foreignobj->id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('//category/create', 'Category' => array('parent_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p><h2><?php echo CHtml::link(Yii::t('app','News'), array('//news/admin'));?></h2>
<ul>
                <?php if (is_array($model->news)) foreach($model->news as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('//news/view','id'=>$foreignobj->id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('//news/update','id'=>$foreignobj->id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('//news/create', 'News' => array('category_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p><h2><?php echo CHtml::link(Yii::t('app','Pages'), array('//page/admin'));?></h2>
<ul>
                <?php if (is_array($model->pages)) foreach($model->pages as $foreignobj) { 

                    echo '<li>';
                    echo CHtml::link($foreignobj->itemLabel, array('//page/view','id'=>$foreignobj->id));

                        echo ' '.CHtml::link(Yii::t('app','Update'), array('//page/update','id'=>$foreignobj->id), array('class'=>'edit'));

                }
            ?></ul><p><?php echo CHtml::link(
                Yii::t('app','Create'),
                array('//page/create', 'Page' => array('category_id'=>$model->{$model->tableSchema->primaryKey}))
                    );  ?></p>
<h2>
    <?php echo Yii::t('crud','Data')?></h2>

<p>
    <?php
    $this->widget('TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
            'id',
        array(
            'name'=>'parent_id',
            'value'=>($model->parent !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->parent->itemLabel, array('//category/view','id'=>$model->parent->id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        'alias',
        'lang',
        'name',
        'image',
        'short_description',
        'description',
        'status',
),
        )); ?></p>

