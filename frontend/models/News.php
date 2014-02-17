<?php

Yii::import('application.models._base.BaseNews');

class News extends BaseNews
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}