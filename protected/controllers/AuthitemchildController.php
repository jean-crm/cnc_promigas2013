<?php

class AuthitemchildController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete update', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'create', 'delete', 'index', 'update', 'view'),
                'expression' => 'Yii::app()->user->checkAccess("Admin1")',
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($parent, $child) {
//        if (!empty($_POST['parent']) && !empty($_POST['child'])) {
        $model = Authitemchild::model()->getElement($parent, $child);
        if (!empty($model)) {
            $this->render('view', array(
                'model' => $model,
            ));
        } else {
            throw new CHttpException('El elemento no existe.');
        }
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Authitemchild;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Authitemchild'])) {
            $model->attributes = $_POST['Authitemchild'];
            if ($model->save())
                $this->redirect(array('index'));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($parent, $child) {

        $model = $this->loadModel2($parent, $child);
//            $model = $this->loadModel($id);
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        if (isset($_POST['Authitemchild'])) {
            $model->attributes = $_POST['Authitemchild'];
            if ($model->save()) {
                $parent = $model->parent;
                $child = $model->child;
                $this->redirect(array('view', 'parent' => $parent, 'child' => $child));
            }
        }
        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($parent, $child) {
        $this->loadModel2($parent, $child)->delete();
//        $this->loadModel($id)->delete();
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Authitemchild');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Authitemchild('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Authitemchild']))
            $model->attributes = $_GET['Authitemchild'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Authitemchild the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Authitemchild::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    public function loadModel2($parent, $child) {
        $model = Authitemchild::model()->getElement($parent, $child);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Authitemchild $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'authitemchild-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
