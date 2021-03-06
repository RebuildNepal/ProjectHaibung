<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        $calendars = EventCalendar::model()->findAll(array('order' => 'EventDate ASC'));
        $this->render('index', array('calendars' => $calendars));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $this->layout = 'other';
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    public function actionAbout() {
        $this->layout = 'other';
        $this->render('about');
    }

    public function actionGallery() {
        $this->layout = 'other';
        $this->render('gallery');
    }

    public function actionBlog() {
        $this->layout = 'other';
        $blogs = Blog::model()->findAll(array('order' => 'DateCreated DESC'));
        $this->render('blog', array('blogs' => $blogs));
    }

    public function actionContact() {
        $this->layout = 'other';
        $this->render('contact');
    }
    
    public function actionEvents(){
        $this->layout = 'other';
        $calendars = EventCalendar::model()->findAll(array('order' => 'EventDate ASC'));
        $this->render('events', array('calendars' => $calendars));
    }
    
    public function actionSummary(){
        $this->layout = 'other';
        $this->render('summary');
    }
    
    public function actionDonor(){
        $this->layout = 'other';
        $criteria = new CDbCriteria();
        $criteria->order = 'Amount DESC';
        $donors = Donors::model()->findAll($criteria);
        $this->render('donors', array('donors' => $donors));
    }
    
    public function actionSponsor(){
        $this->layout = 'other';
        $this->render('sponsor');
    }

}
