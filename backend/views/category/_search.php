<div class="wide form">

    
    <?php
    $form=$this->beginWidget('TbActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
    )); ?>

    
    
        <div class="row">
            <?php echo $form->label($model,'id'); ?>
            <?php ; ?>

        </div>

    
        <div class="row">
            <?php echo $form->label($model,'parent_id'); ?>
            <?php echo $form->textField($model,'parent_id'); ?>

        </div>

    
        <div class="row">
            <?php echo $form->label($model,'alias'); ?>
            <?php echo $form->textField($model,'alias',array('size'=>60,'maxlength'=>150)); ?>

        </div>

    
        <div class="row">
            <?php echo $form->label($model,'lang'); ?>
            <?php echo $form->textField($model,'lang',array('size'=>2,'maxlength'=>2)); ?>

        </div>

    
        <div class="row">
            <?php echo $form->label($model,'name'); ?>
            <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>250)); ?>

        </div>

    
        <div class="row">
            <?php echo $form->label($model,'image'); ?>
            <?php echo $form->textField($model,'image',array('size'=>60,'maxlength'=>250)); ?>

        </div>

    
        <div class="row">
            <?php echo $form->label($model,'short_description'); ?>
            <?php echo $form->textArea($model,'short_description',array('rows'=>6, 'cols'=>50)); ?>

        </div>

    
        <div class="row">
            <?php echo $form->label($model,'description'); ?>
            <?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>

        </div>

    
        <div class="row">
            <?php echo $form->label($model,'status'); ?>
            <?php echo $form->checkBox($model,'status'); ?>

        </div>

    
    <div class="row buttons">
        <?php echo CHtml::submitButton(Yii::t('crud', 'Search')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->
