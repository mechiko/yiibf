<?php
/**
 * SiteController class
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @copyright 2013 2amigOS! Consultation Group LLC
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
class SiteController extends Controller
{
    public $layout='//layouts/main';
	public $defaultAction = 'index';

	// это для отображения статичных файлов из каталога frontend/views/site/pages
	public function actions() {
	    return array(
	        'page' => array(
	            'class' => 'CViewAction',
	            'defaultView' => 'about'
	        )
	    );
	}
	/**
	 * Renders index
	 */
	public function actionIndex()
	{
/*		$this->menu=array(
							array('label' => 'Change password', 'url' => array('//user/user/changePassword')),
							array('label' => 'Delete account', 'url' => array('//user/user/delete')),
							array('label' => 'Logout', 'url' => array('//user/user/logout')),
				); */
		$this->render('index');
	}

	public function actionAbout()
	{
		$this->render('about');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
}