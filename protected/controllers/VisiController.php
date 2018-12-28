<?php

class VisiController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
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

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Visi;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Visi'])) {
			$model->attributes=$_POST['Visi'];
			if ($model->save()) {
				//$this->redirect(array('view','id'=>$model->id_instansi));
                $this->redirect(array("visi/index"));
			}
		}

		$this->render('create',array(
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

		if (isset($_POST['Visi'])) {
			$model->attributes=$_POST['Visi'];
			if ($model->save()) {
				//$this->redirect(array('view','id'=>$model->id_instansi));
                $this->redirect(array("visi/index"));
			}
		}

		$this->render('update',array(
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

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		/*$dataProvider=new CActiveDataProvider('Visi');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));*/

        $criteria = new CDbCriteria();
        if (!Yii::app()->user->isAdmin()) {
            $criteria->addCondition("id_instansi=:idx");
            $criteria->params = array(':idx' => Yii::app()->session['opd']);
        }

        $data["jmlVisi"] = Visi::model()->count($criteria);


       // if (Yii::app()->user->isAdmin()) {
            $model = new Visi('search');
            $model->unsetAttributes();  // clear any default values
            if (isset($_GET['Visi'])) {
                $model->attributes = $_GET['Visi'];
            }
      /*  } else
        {
            $model = Visi::model()->find('id_instansi=:par',array(':par'=>Yii::app()->user->getOpd()));
        }
        print_r( $model);
	*/
        $this->render('index',array(
            'model'=>$model,'jmlVisi'=>$data["jmlVisi"]
        ));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Visi('search');
		$model->unsetAttributes();  // clear any default values
		if (isset($_GET['Visi'])) {
			$model->attributes=$_GET['Visi'];
		}

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Visi the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Visi::model()->findByPk($id);
		if ($model===null) {
			throw new CHttpException(404,'The requested page does not exist.');
		}
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Visi $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax']==='Visi-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}