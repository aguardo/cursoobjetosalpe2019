<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\data\ActiveDataProvider;
use app\models\Noticias;
use yii\db\Query;

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
       
        
        $query = Noticias::find();
   //     var_dump($query);
        
       
       
        /*$query = new Query;
        
        $query->select(['*'])
         ->from('noticias');
 //var_dump($query);*/
        
       
        
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            ]);
        
        
        return $this->render('index',[
            'dataProvider' => $dataProvider            
        ]);
    }
    
    public function actionFoto(){
        
        
        $noticia = Noticias::findOne(random_int(1, Noticias::find()->count()-1));
        
        return $this->render('hoja2',[
            'img' => 'arbol.jpg',
            'model' => $noticia,           
        ]);
        
        
        
    }
    
    public function actionPagina2(){
        
        
       return $this->render('pagina2');
        
        
        
    }

    
    public function actionVideo(){
        
        
       return $this->render('video');
        
        
        
    }
    
    
    
    
}
