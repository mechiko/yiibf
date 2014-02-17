<div class="view">

        <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('category/view', 'id'=>$data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('parent_id')); ?>:</b>
    <?php echo CHtml::encode($data->parent_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('alias')); ?>:</b>
    <?php echo CHtml::encode($data->alias); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('lang')); ?>:</b>
    <?php echo CHtml::encode($data->lang); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
    <?php echo CHtml::encode($data->name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
    <?php echo CHtml::encode($data->image); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('short_description')); ?>:</b>
    <?php echo CHtml::encode($data->short_description); ?>
    <br />

    <?php /*
    <b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
    <?php echo CHtml::encode($data->description); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
    <?php echo CHtml::encode($data->status); ?>
    <br />

    */ ?>
    <?php if (Yii::app()->user->checkAccess('Category.*')): ?>
        <div class="admin-container show">
            <?php echo CHtml::link('<i class="icon-edit"></i> '.Yii::t('crud', 'Update {model}', array('{model}' => Yii::t('crud', 'Category'))), array('category/update', 'id' => $data->id, 'returnUrl' => Yii::app()->request->url), array('class' => 'btn')); ?>
        </div>
    <?php endif; ?>

</div>
