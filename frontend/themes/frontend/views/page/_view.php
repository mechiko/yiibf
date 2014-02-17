<div class="view">

        <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('page/view', 'id'=>$data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
    <?php echo CHtml::encode($data->category_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('lang')); ?>:</b>
    <?php echo CHtml::encode($data->lang); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('parent_id')); ?>:</b>
    <?php echo CHtml::encode($data->parent_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('creation_date')); ?>:</b>
    <?php echo CHtml::encode($data->creation_date); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('change_date')); ?>:</b>
    <?php echo CHtml::encode($data->change_date); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
    <?php echo CHtml::encode($data->user_id); ?>
    <br />

    <?php /*
    <b><?php echo CHtml::encode($data->getAttributeLabel('change_user_id')); ?>:</b>
    <?php echo CHtml::encode($data->change_user_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('title_short')); ?>:</b>
    <?php echo CHtml::encode($data->title_short); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
    <?php echo CHtml::encode($data->title); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('slug')); ?>:</b>
    <?php echo CHtml::encode($data->slug); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('body')); ?>:</b>
    <?php echo CHtml::encode($data->body); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('keywords')); ?>:</b>
    <?php echo CHtml::encode($data->keywords); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
    <?php echo CHtml::encode($data->description); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
    <?php echo CHtml::encode($data->status); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('is_protected')); ?>:</b>
    <?php echo CHtml::encode($data->is_protected); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('order')); ?>:</b>
    <?php echo CHtml::encode($data->order); ?>
    <br />

    */ ?>
    <?php if (Yii::app()->user->checkAccess('Page.*')): ?>
        <div class="admin-container show">
            <?php echo CHtml::link('<i class="icon-edit"></i> '.Yii::t('crud', 'Update {model}', array('{model}' => Yii::t('crud', 'Page'))), array('page/update', 'id' => $data->id, 'returnUrl' => Yii::app()->request->url), array('class' => 'btn')); ?>
        </div>
    <?php endif; ?>

</div>
