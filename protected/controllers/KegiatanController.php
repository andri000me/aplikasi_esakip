<?php

class KegiatanController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='backend';

    public function beforeAction($action)
    {
        if (Yii::app()->user->isGuest )
            $this->redirect(Yii::app()->createUrl('login'));

        return true;
    }

	/**
	 * @return array action filters
	 */

	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','eselonEmpat','view','viewEselonEmpat'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','createEselonEmpat','update','updateEselonEmpat'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->isAllowAddEdit()',
			),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions'=>array('admin','delete'),
                'users'=>array('@'),
                'expression'=>'Yii::app()->user->isAllowDelete()',
            ),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	public function actionViewEselonEmpat($id)
	{
		$this->render('view_eselon_empat',array(
			'model'=>$this->loadModelEselonEmpat($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Kegiatan;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Kegiatan'])) {
			$model->attributes=$_POST['Kegiatan'];
			if ($model->save() ) {
				$this->redirect(array('view','id'=>$model->kegiatanid));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionCreateEselonEmpat()
	{
		$model=new KegiatanEselonEmpat;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['KegiatanEselonEmpat'])) {
			$model->attributes=$_POST['KegiatanEselonEmpat'];
			if ($model->save() ) {
				$this->redirect(array('viewEselonEmpat','id'=>$model->kegiatanid));
			}
		}

		$this->render('create_eselon_empat',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Kegiatan'])) {
			$model->attributes=$_POST['Kegiatan'];
			if ($model->save()) {
				$this->redirect(array('view','id'=>$model->kegiatanid));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	public function actionUpdateEselonEmpat($id)
	{
		$model=$this->loadModelEselonEmpat($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['KegiatanEselonEmpat'])) {
			$model->attributes=$_POST['KegiatanEselonEmpat'];
			if ($model->save()) {
				$this->redirect(array('viewEselonEmpat','id'=>$model->kegiatanid));
			}
		}

		$this->render('update_eselon_empat',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if (Yii::app()->request->isPostRequest) {
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if (!isset($_GET['ajax'])) {
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
			}
		} else {
			throw new CHttpException(400,'Permintaan tidak valid..!!.');
		}
	}

	public function actionDeleteEselonEmpat($id)
	{
		if (Yii::app()->request->isPostRequest) {
			// we only allow deletion via POST request
			$this->loadModelEselonEmpat($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if (!isset($_GET['ajax'])) {
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('eselonEmpat'));
			}
		} else {
			throw new CHttpException(400,'Permintaan tidak valid..!!.');
		}
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
        $model=new Kegiatan('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Kegiatan'])) {
        $model->attributes=$_GET['Kegiatan'];
        }

        $this->render('index',array(
        'model'=>$model,
        ));
	}

	public function actionEselonEmpat()
	{
        $model=new KegiatanEselonEmpat('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['KegiatanEselonEmpat'])) {
        $model->attributes=$_GET['KegiatanEselonEmpat'];
        }

        $this->render('index_eselon_empat',array(
        'model'=>$model,
        ));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Kegiatan('search');
		$model->unsetAttributes();  // clear any default values
		if (isset($_GET['Kegiatan'])) {
			$model->attributes=$_GET['Kegiatan'];
		}

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Kegiatan the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Kegiatan::model()->findByPk($id);
		if ($model===null) {
			throw new CHttpException(404,'The requested page does not exist.');
		}
		return $model;
	}

	public function loadModelEselonEmpat($id)
	{
		$model=KegiatanEselonEmpat::model()->findByPk($id);
		if ($model===null) {
			throw new CHttpException(404,'The requested page does not exist.');
		}
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Kegiatan $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax']==='kegiatan-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}