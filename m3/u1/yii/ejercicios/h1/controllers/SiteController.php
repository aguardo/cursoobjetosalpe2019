<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Entradas;

class SiteController extends Controller
{
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
   
    public function actionListar(){
        
        $s = Entradas::find()->asArray()->all();
        
        return $this->render("listar",
                [
                    "datos" => $s,          
                ]
                
                
                );
        
        
    }
    
    public function actionListar1(){
        
        $s = Entradas::find()->all();
        
        return $this->render("listar",
                [
                    "datos" => $s,          
                ]
                
                
                );
        
        
    }
    
     public function actionListar2(){
        
        $s = Entradas::find()->select(['texto'])->asArray()->all();
        
        return $this->render("listar",
                [
                    "datos" => $s,          
                ]
                
                
                );
        
        
    }
    
    public function actionListar3(){
        
        $s = Entradas::find()->select(['texto'])->all();
        
        return $this->render("listar",
                [
                    "datos" => $s,          
                ]
                
                
                );
        
        
    }
    
    public function actionListar4(){
        
        $s = new Entradas();
        
        return $this->render("listar",
                [
                    "datos" => $s->find()->all(),          
                ]
                
                
                );
        
    }
    
    public function actionListar5(){
        
        $s = new Entradas();
        
        return $this->render("listar",
                [
                    "datos" => $s->findOne(1),          
                ]
                
                
                );
        
    }
    
    
    public function actionListar6(){
        
        return $this->render("listar",
                [
                    "datos" => Yii::$app->db->createCommand("SELECT * FROM entradas")->queryAll(), 
                ]
                
                
                );
        
    }
    
    public function actionMostrar(){
        
        $dataProvider = new \yii\data\ActiveDataProvider(
                [
                    'query' => Entradas::find(),                
                ]);
        
               
        return $this->render('mostrar', [
            
            'dataProvider' => $dataProvider,
                       
        ]);        
                
        
    }
   
    
    public function actionMostraruno(){
               
        return $this->render('mostrarUno', [
            
            'model' => Entradas::findOne(1),
                       
        ]);        
                
        
    }
    
    
    
    
    
}
