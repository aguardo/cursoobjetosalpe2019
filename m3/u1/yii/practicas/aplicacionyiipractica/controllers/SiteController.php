<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\ContactForm_1;
use app\models\Productos;
use yii\data\ActiveDataProvider;
use yii\widgets\ListView;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }
    
    public function actionInformacion()
    {
        
        $model = new ContactForm();
        
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['informacion'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
            
        }
        
        return $this->render('informacion', [
            'model' => $model,
        ]);
    }
        
       
    
    
    public function actionTemas()
    {
        
        $model = new ContactForm_1();
        
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['informacion'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
            
        }
        
        return $this->render('temas', [
            'model' => $model,
        ]);
    }
    
    

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        
        return $this->render('about');
    }
    
    

    public function actionCorreo(){
        
        $correo = new ContactForm_1();
        
        $correo -> temas="Productos";
        $correo -> body = "contenido Correo";
        $correo -> email ="aguardo@gmail.com";
        $correo -> name = "Remitente"; 
        $correo -> surname = "Apellido";

        $correo -> contact(Yii::$app->params["informacion"]);
                
        
        
    }

    public function actionProductos(){
        
        $dataProvider = new ActiveDataProvider([
            'query' => Productos::find(),
            'pagination' => [
            'pageSize' => 2,
             ],
        ]);
        
       return $this->render('productos', [
            'dataProvider' => $dataProvider,
        ]);
                
        
        
    }
    
    public function actionOfertas(){
        
        $dataProvider = new ActiveDataProvider([
            'query' => Productos::find()->where(['oferta' => 1]),
            'pagination' => [
            'pageSize' => 2,
             ],
        ]);
        
       return $this->render('productos', [
            'dataProvider' => $dataProvider,
        ]);
                
        
        
    }
    
    
    
}
