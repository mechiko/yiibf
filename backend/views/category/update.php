<?php
$this->breadcrumbs[Yii::t('crud','Categories')] = array('admin');
$this->breadcrumbs[$model->{$model->tableSchema->primaryKey}] = array('view','id'=>$model->{$model->tableSchema->primaryKey});
$this->breadcrumbs[] = Yii::t('crud', 'Update');
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Category')?> <small><?php echo Yii::t('crud','Update')?> #<?php echo $model->id ?></small></h1>

<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
<?php
$this->renderPartial('_form', array(
'model'=>$model));
?>

<?php

/*
Code example to include an editable detail view:

<h2>
    <?php echo Yii::t('crud','Editable Detail View')?></h2>

<?php
$this->widget('EditableDetailView', array(
    'data' => $model,
    'url' => $this->createUrl('editableSaver'),
));
?>

*/
?>



<h2>
    <?php echo Yii::t('crud', 'Categories'); ?> </h2>

<div class="btn-group">
<?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => '', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'buttons'=>array(
        // TODO
        #array('label'=>Yii::t('crud','Create'), 'icon'=>'icon-plus', 'url' => array('category/create','Category' => array('parent_id'=>$model->id), 'returnUrl' => Yii::app()->request->url), array('class'=>''))
    ),
));
?></div>

<?php
$relatedSearchModel = $this->getRelatedSearchModel($model, 'categories');
$this->widget('TbGridView',
    array(
        'id'=>'category-grid',
        'dataProvider'=>$relatedSearchModel->search(),
        'filter' => count($model->categories) > 1 ? $relatedSearchModel : null,
        'pager' => array(
            'class' => 'TbPager',
            'displayFirstAndLast' => true,
        ),
    'columns'=>array(
        'id',
                array(
            'class' => 'editable.EditableColumn',
            'name' => 'alias',
            'editable' => array(
                'url' => $this->createUrl('/category/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'lang',
            'editable' => array(
                'url' => $this->createUrl('/category/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'name',
            'editable' => array(
                'url' => $this->createUrl('/category/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'image',
            'editable' => array(
                'url' => $this->createUrl('/category/editableSaver'),
                //'placement' => 'right',
            )
        ),
        #'short_description',
        #'description',
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'status',
            'editable' => array(
                'url' => $this->createUrl('/category/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('category/view', array('id' => \$data->id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('category/update', array('id' => \$data->id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('category/delete', array('id' => \$data->id))",
        ),
    ),
));
?>


<h2>
    <?php echo Yii::t('crud', 'News'); ?> </h2>

<div class="btn-group">
<?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => '', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'buttons'=>array(
        // TODO
        #array('label'=>Yii::t('crud','Create'), 'icon'=>'icon-plus', 'url' => array('news/create','News' => array('category_id'=>$model->id), 'returnUrl' => Yii::app()->request->url), array('class'=>''))
    ),
));
?></div>

<?php
$relatedSearchModel = $this->getRelatedSearchModel($model, 'news');
$this->widget('TbGridView',
    array(
        'id'=>'news-grid',
        'dataProvider'=>$relatedSearchModel->search(),
        'filter' => count($model->news) > 1 ? $relatedSearchModel : null,
        'pager' => array(
            'class' => 'TbPager',
            'displayFirstAndLast' => true,
        ),
    'columns'=>array(
        'id',
                array(
            'class' => 'editable.EditableColumn',
            'name' => 'lang',
            'editable' => array(
                'url' => $this->createUrl('/category/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'creation_date',
            'editable' => array(
                'url' => $this->createUrl('/category/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'change_date',
            'editable' => array(
                'url' => $this->createUrl('/category/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'date',
            'editable' => array(
                'url' => $this->createUrl('/category/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'title',
            'editable' => array(
                'url' => $this->createUrl('/category/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'alias',
            'editable' => array(
                'url' => $this->createUrl('/category/editableSaver'),
                //'placement' => 'right',
            )
        ),
        #'short_text',
        /*
        #'full_text',
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'image',
            'editable' => array(
                'url' => $this->createUrl('/category/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'link',
            'editable' => array(
                'url' => $this->createUrl('/category/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
                    'name'=>'user_id',
                    'value'=>'CHtml::value($data,\'user.itemLabel\')',
                            'filter'=>CHtml::listData(User::model()->findAll(array('limit'=>1000)), 'id', 'itemLabel'),
                            ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'status',
            'editable' => array(
                'url' => $this->createUrl('/category/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'is_protected',
            'editable' => array(
                'url' => $this->createUrl('/category/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'keywords',
            'editable' => array(
                'url' => $this->createUrl('/category/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'description',
            'editable' => array(
                'url' => $this->createUrl('/category/editableSaver'),
                //'placement' => 'right',
            )
        ),
        */
        array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('news/view', array('id' => \$data->id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('news/update', array('id' => \$data->id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('news/delete', array('id' => \$data->id))",
        ),
    ),
));
?>


<h2>
    <?php echo Yii::t('crud', 'Pages'); ?> </h2>

<div class="btn-group">
<?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => '', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'buttons'=>array(
        // TODO
        #array('label'=>Yii::t('crud','Create'), 'icon'=>'icon-plus', 'url' => array('page/create','Page' => array('category_id'=>$model->id), 'returnUrl' => Yii::app()->request->url), array('class'=>''))
    ),
));
?></div>

<?php
$relatedSearchModel = $this->getRelatedSearchModel($model, 'pages');
$this->widget('TbGridView',
    array(
        'id'=>'page-grid',
        'dataProvider'=>$relatedSearchModel->search(),
        'filter' => count($model->pages) > 1 ? $relatedSearchModel : null,
        'pager' => array(
            'class' => 'TbPager',
            'displayFirstAndLast' => true,
        ),
    'columns'=>array(
        'id',
                array(
            'class' => 'editable.EditableColumn',
            'name' => 'lang',
            'editable' => array(
                'url' => $this->createUrl('/category/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'parent_id',
            'editable' => array(
                'url' => $this->createUrl('/category/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'creation_date',
            'editable' => array(
                'url' => $this->createUrl('/category/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'change_date',
            'editable' => array(
                'url' => $this->createUrl('/category/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
                    'name'=>'user_id',
                    'value'=>'CHtml::value($data,\'user.itemLabel\')',
                            'filter'=>CHtml::listData(User::model()->findAll(array('limit'=>1000)), 'id', 'itemLabel'),
                            ),
        array(
                    'name'=>'change_user_id',
                    'value'=>'CHtml::value($data,\'changeUser.itemLabel\')',
                            'filter'=>CHtml::listData(User::model()->findAll(array('limit'=>1000)), 'id', 'itemLabel'),
                            ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'title_short',
            'editable' => array(
                'url' => $this->createUrl('/category/editableSaver'),
                //'placement' => 'right',
            )
        ),
        /*
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'title',
            'editable' => array(
                'url' => $this->createUrl('/category/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'slug',
            'editable' => array(
                'url' => $this->createUrl('/category/editableSaver'),
                //'placement' => 'right',
            )
        ),
        #'body',
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'keywords',
            'editable' => array(
                'url' => $this->createUrl('/category/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'description',
            'editable' => array(
                'url' => $this->createUrl('/category/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'status',
            'editable' => array(
                'url' => $this->createUrl('/category/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'is_protected',
            'editable' => array(
                'url' => $this->createUrl('/category/editableSaver'),
                //'placement' => 'right',
            )
        ),
        array(
            'class' => 'editable.EditableColumn',
            'name' => 'order',
            'editable' => array(
                'url' => $this->createUrl('/category/editableSaver'),
                //'placement' => 'right',
            )
        ),
        */
        array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('page/view', array('id' => \$data->id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('page/update', array('id' => \$data->id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('page/delete', array('id' => \$data->id))",
        ),
    ),
));
?>

