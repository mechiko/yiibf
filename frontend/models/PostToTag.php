<?php

Yii::import('application.models._base.BasePostToTag');

class PostToTag extends BasePostToTag
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}