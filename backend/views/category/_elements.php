    <div class="row">
        <div class="span8"> <!-- main inputs -->

            <div class="form-horizontal">

                
    <?php echo $form->textFieldRow($model,'alias',array('maxlength'=>150)); ?>

    <?php echo $form->textFieldRow($model,'lang',array('maxlength'=>2)); ?>

    <?php echo $form->textFieldRow($model,'name',array('maxlength'=>250)); ?>

    <?php echo $form->textFieldRow($model,'image',array('maxlength'=>250)); ?>

    <?php echo $form->html5EditorRow($model, 'short_description', array('rows'=>6, 'cols'=>50, 'class'=>'span8', 'options' => array(
                    'link' => true,
                    'image' => false,
                    'color' => false,
                    'html' => true,
            ))); ?>

    <?php echo $form->html5EditorRow($model, 'description', array('rows'=>6, 'cols'=>50, 'class'=>'span8', 'options' => array(
                    'link' => true,
                    'image' => false,
                    'color' => false,
                    'html' => true,
            ))); ?>

    <?php echo $form->textFieldRow($model,'status'); ?>

            </div>
        </div>
        <!-- main inputs -->

        <div class="span4"> <!-- sub inputs -->
            

        </div>
        <!-- sub inputs -->
    </div>
