<?php
$this->breadcrumbs[Yii::t('crud','Pages')] = array('admin');
$this->breadcrumbs[] = $model->id;
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Page')?> <small><?php echo Yii::t('crud','View')?> #<?php echo $model->id ?></small></h1>



<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
    <b><?php echo CHtml::encode($model->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($model->id), array('view', 'id'=>$model->id)); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('category_id')); ?>:</b>
    <?php echo CHtml::encode($model->category_id); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('lang')); ?>:</b>
    <?php echo CHtml::encode($model->lang); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('parent_id')); ?>:</b>
    <?php echo CHtml::encode($model->parent_id); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('creation_date')); ?>:</b>
    <?php echo CHtml::encode($model->creation_date); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('change_date')); ?>:</b>
    <?php echo CHtml::encode($model->change_date); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('user_id')); ?>:</b>
    <?php echo CHtml::encode($model->user_id); ?>
    <br />

    <?php /*
    <b><?php echo CHtml::encode($model->getAttributeLabel('change_user_id')); ?>:</b>
    <?php echo CHtml::encode($model->change_user_id); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('title_short')); ?>:</b>
    <?php echo CHtml::encode($model->title_short); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('title')); ?>:</b>
    <?php echo CHtml::encode($model->title); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('slug')); ?>:</b>
    <?php echo CHtml::encode($model->slug); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('body')); ?>:</b>
    <?php echo CHtml::encode($model->body); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('keywords')); ?>:</b>
    <?php echo CHtml::encode($model->keywords); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('description')); ?>:</b>
    <?php echo CHtml::encode($model->description); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('status')); ?>:</b>
    <?php echo CHtml::encode($model->status); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('is_protected')); ?>:</b>
    <?php echo CHtml::encode($model->is_protected); ?>
    <br />

    <b><?php echo CHtml::encode($model->getAttributeLabel('order')); ?>:</b>
    <?php echo CHtml::encode($model->order); ?>
    <br />

    */ ?>


<h2>
    <?php echo Yii::t('crud','Data')?></h2>

<p>
    <?php
    $this->widget('TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
            'id',
        array(
            'name'=>'category_id',
            'value'=>($model->category !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->category->itemLabel, array('//category/view','id'=>$model->category->id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        'lang',
        'parent_id',
        'creation_date',
        'change_date',
        array(
            'name'=>'user_id',
            'value'=>($model->user !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->user->itemLabel, array('//user/view','id'=>$model->user->id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        array(
            'name'=>'change_user_id',
            'value'=>($model->changeUser !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->changeUser->itemLabel, array('//user/view','id'=>$model->changeUser->id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        'title_short',
        'title',
        'slug',
        'body',
        'keywords',
        'description',
        'status',
        'is_protected',
        'order',
),
        )); ?></p>

