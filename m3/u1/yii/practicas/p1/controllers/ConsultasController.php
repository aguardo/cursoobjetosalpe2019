<?php

namespace app\controllers;

use Yii;
use app\models\Empleados;
use app\models\Departamentos;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\SqlDataProvider;


/**
 * NoticiasController implements the CRUD actions for Noticias model.
 */
class ConsultasController extends Controller {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Noticias models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Noticias model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Noticias model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Empleados();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing Noticias model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Noticias model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Noticias model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Noticias the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Empleados::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionConsulta1() {
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::find(),
        ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>'Datos de los Empleados',
            'descripcion' =>'SELECT * from emple',
            'columnas'=>['emp_no', 'apellido','oficio','dir','fecha_alt','salario','comision','dept_no'],
            'modelo' => 'Empleados'
        ]);
    }

    public function actionConsulta2() {
        $dataProvider = new ActiveDataProvider([
            'query' => Departamentos::findBySql("select * from depart"),
        ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>' Datos de los Departamentos',
            'descripcion' =>'SELECT * from depart',
            'columnas'=>['dept_no','dnombre','loc'],
             'modelo' => 'Departamentos'
        ]);
    }

    
    public function actionConsulta3() {
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::find(),
        ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>'Apellido y Oficio de los Empleados',
            'descripcion' =>'SELECT apellido, dnombre from emple join depart using (dept_no)',
            'columnas'=>['apellido', 'deptNo.dnombre'],
            'modelo' => 'Empleados'
        ]);
    }
        
    
    
    public function actionConsulta4() {

        $totalCount = Yii::$app->db
                ->createCommand('SELECT count(*) FROM depart')
                ->queryScalar();

        $dataProvider = new SqlDataProvider([
            'sql' => 'SELECT dept_no, dnombre from depart',
            'totalCount' => $totalCount,
            'pagination' => [
                'pageSize' => 2,
            ],
        ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
            'titulo'=>'Localización y número de cada departamento',
            'descripcion' =>'SELECT dept_no, dnombre from depart',
            'columnas'=>[[ 'label' => 'Departamento', 'value' => 'dept_no'],[ 'label' => 'Nombre', 'value' => 'dept_no']],
             'modelo' => 'Departamento'
        ]);
    }
    
    
    public function actionConsulta5() {
        $dataProvider = new ActiveDataProvider([
            'query' => Departamentos::find(),
        ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>'Número, Nombre y Localización de cada Departamento',
            'descripcion' =>'SELECT dept_no, dnombre, loc from depart',
            'columnas'=>[ 'dept_no', 'dnombre','loc'],
            'modelo' => 'Departamentos'
        ]);
    }
    
    
    public function actionConsulta6() {
       
        $numero = Empleados::find()->count();

        return $this->render('index_2', [
                  
             'titulo'=>'Número de Empleados',
            'descripcion' =>'SELECT count(*) from emple',
           'numero' => $numero,
            'modelo' => 'Empleados'
        ]);
    }
    
     public function actionConsulta7() {
       
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::find()->orderBy('apellido'),
        ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>'Datos de empleados ordenados por apellido de forma ascendente',
            'descripcion' =>'SELECT * FROM emple ORDER BY apellido',
            'columnas'=>['emp_no', 'apellido','oficio','dir','fecha_alt','salario','comision','dept_no'],
            'modelo' => 'Empleados'
        ]);
    }
    
    public function actionConsulta8() {
       
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::find()->orderBy( ['apellido' => SORT_DESC]),
        ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>'Datos de empleados ordenados por apellido de forma descendente',
            'descripcion' =>'SELECT * FROM emple ORDER BY apellido DESC',
            'columnas'=>['emp_no', 'apellido','oficio','dir','fecha_alt','salario','comision','dept_no'],
            'modelo' => 'Empleados'
        ]);
    }
    
    public function actionConsulta9() {
       
        $numero = Departamentos::find()->count();

        return $this->render('index_2', [
                  
             'titulo'=>'Número de Departamentos',
            'descripcion' =>'SELECT count(*) from depart',
           'numero' => $numero,
            'modelo' => 'Departamentos'
        ]);
    }
    
    public function actionConsulta10() {
       
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::find()->orderBy( ['dept_no' => SORT_DESC]),
        ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>'Datos de empleados ordenados por número de departamento descendente',
            'descripcion' =>'SELECT * FROM emple ORDER BY apellido DESC',
            'columnas'=>['emp_no', 'apellido','oficio','dir','fecha_alt','salario','comision','dept_no'],
            'modelo' => 'Empleados'
        ]);
    }
    
    public function actionConsulta11() {
       
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::find()->orderBy( ['dept_no' => SORT_DESC, 'oficio' => SORT_ASC]),
        ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>'Datos de empleados ordenados por número de departamento descendente y oficio ascendente',
            'descripcion' =>'SELECT * FROM emple ORDER BY apellido DESC oficio',
            'columnas'=>['emp_no', 'apellido','oficio','dir','fecha_alt','salario','comision','dept_no'],
            'modelo' => 'Empleados'
        ]);
    }
    
    public function actionConsulta12() {
       
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::find()->orderBy( ['dept_no' => SORT_DESC, 'apellido' => SORT_ASC]),
        ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>'Datos de empleados ordenados por número de departamento descendente y apellido ascendente',
            'descripcion' =>'SELECT * FROM emple ORDER BY apellido DESC oficio',
            'columnas'=>['emp_no', 'apellido','oficio','dir','fecha_alt','salario','comision','dept_no'],
            'modelo' => 'Empleados'
        ]);
    }
    
    public function actionConsulta13() {
       
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::find()->where(['>', 'salario', 2000])->select('emp_no')
        ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>'Códigos de empleados cuyo salario sea mayor de 2000',
            'descripcion' =>'SELECT emp_no FROM emple WHERE salario > 2000',
            'columnas'=>['emp_no'],
            'modelo' => 'Empleados'
        ]);
    }
    
    public function actionConsulta14() {
       
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::find()->where(['<', 'salario', 2000])->select(['emp_no','apellido'])
        ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>'Códigos de empleados y apellidos cuyo salario sea menor de 2000',
            'descripcion' =>'SELECT emp_no, apellido FROM emple WHERE salario < 2000',
            'columnas'=>['emp_no', 'apellido'],
            'modelo' => 'Empleados'
        ]);
    }
    
    public function actionConsulta15() {
       
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::find()->where(['between', 'salario', 1500, 2000]),
        ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>'Datos de empleados cuyo salario esté entre 1500 y 2000',
            'descripcion' =>'SELECT * FROM emple WHERE salario BETWEEN 1500 AND 2000',
            'columnas'=>['emp_no', 'apellido','oficio','dir','fecha_alt','salario','comision','dept_no'],
            'modelo' => 'Empleados'
        ]);
    }
    
    public function actionConsulta16() {
       
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::find()->where(['between', 'salario', 1500, 2000]),
        ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>'Datos de empleados cuyo salario esté entre 1500 y 2000',
            'descripcion' =>'SELECT * FROM emple WHERE salario BETWEEN 1500 AND 2000',
            'columnas'=>['emp_no', 'apellido','oficio','dir','fecha_alt','salario','comision','dept_no'],
            'modelo' => 'Empleados'
        ]);
    }
    
    public function actionConsulta17() {
       
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::find()->where(['like', 'oficio', 'ANALISTA']),
        ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>'Datos de empleados cuyo oficio sea ANALISTA',
            'descripcion' =>'SELECT * FROM emple WHERE oficio LIKE "ANALISTA"',
            'columnas'=>['emp_no', 'apellido','oficio','dir','fecha_alt','salario','comision','dept_no'],
            'modelo' => 'Empleados'
        ]);
    }
    
    public function actionConsulta18() {
       
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::find()->where(['like', 'oficio', 'ANALISTA'])->andWhere(['>', 'salario', 2000]),
        ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>'Datos de empleados cuyo oficio sea ANALISTA y cuyo salario sea mayor de 2000',
            'descripcion' =>'SELECT * FROM emple WHERE oficio LIKE "ANALISTA" AND salario > 2000',
            'columnas'=>['emp_no', 'apellido','oficio','dir','fecha_alt','salario','comision','dept_no'],
            'modelo' => 'Empleados'
        ]);
    }
    
    public function actionConsulta19() {


        $numero = Empleados::find()->where(['like', 'oficio', 'VENDEDOR'])->count();
        
        return $this->render('index_2', [
             'titulo'=>'Número de Empleados cuyo oficio sea VENDEDOR',
            'descripcion' =>'SELECT count(*) from emple WHERE oficio = "VENDEDOR"',
           'numero' => $numero,
            'modelo' => 'Empleados'
        ]);
    }
    
    public function actionConsulta20() {
       
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::find()->where(['or like', 'apellido', ['M%', 'N%'], false])->orderBy('apellido'),
        ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>'Datos de empleados cuyo apellido empiece for M o N y ordenados por apellido ascendente',
            'descripcion' =>'SELECT * FROM emple WHERE apellido LIKE "M%" OR apellido LIKE "N%" ORDER BY apellido',
            'columnas'=>['emp_no', 'apellido','oficio','dir','fecha_alt','salario','comision','dept_no'],
            'modelo' => 'Empleados'
        ]);
    }
    
    public function actionConsulta21() {
       
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::find()->where(['like', 'oficio', 'VENDEDOR'])->orderBy('apellido'),
        ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>'Datos de empleados cuyo oficio sea VENDEDOR ordenado por apellido ascendente',
            'descripcion' =>'SELECT * FROM emple WHERE oficio LIKE "VENDEDOR" ORDER BY apellido',
            'columnas'=>['emp_no', 'apellido','oficio','dir','fecha_alt','salario','comision','dept_no'],
            'modelo' => 'Empleados'
        ]);
    }
    
    public function actionConsulta22() {
       
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::find()->where(['=', 'salario', Empleados::find()->max('salario')]),
        ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>'Mostrar apellidos del empleado que más gana',
            'descripcion' =>'SELECT apellido FROM emple WHERE salario = (SELECT MAX(salario) from emple) ',
            'columnas'=>['apellido'],
            'modelo' => 'Empleados'
        ]);
    }
    
    
    public function actionConsulta23() {
       
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::find()->where(['dept_no' => 10, 'oficio' => 'ANALISTA'])->orderBy([ 'apellido' => SORT_ASC, 'oficio' => SORT_ASC]),
            ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>'Datos de empleados cuyo oficio sea ANALISTA y trabajen en el departamento 10 ordenador por apellido y oficio ascendente',
            'descripcion' =>'SELECT * FROM emple WHERE oficio LIKE "ANALISTA"  AND dept_no = 10 ORDER BY apellido,oficio',
            'columnas'=>['emp_no', 'apellido','oficio','dir','fecha_alt','salario','comision','dept_no'],
            'modelo' => 'Empleados'
        ]);
    }
    
    public function actionConsulta24() {
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::findBySql("select DISTINCT EXTRACT(MONTH FROM fecha_alt) as mes FROM emple ORDER BY mes"),
        ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>' Datos de meses en que los usuarios se han dado de alta',
            'descripcion' =>'SELECT DISTINCT EXTRACT(MONTH FROM fecha_alt) as mes FROM emple ORDER BY mes',
            'columnas'=>['mes'],
             'modelo' => 'Empleados'
        ]);
    }
       
    
    public function actionConsulta25() {
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::findBySql("select DISTINCT EXTRACT(YEAR FROM fecha_alt) as año FROM emple ORDER BY año"),
        ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>' Datos de años en que los usuarios se han dado de alta',
            'descripcion' =>'SELECT DISTINCT EXTRACT(YEAR FROM fecha_alt) as year FROM emple ORDER BY año',
            'columnas'=>['año'],
             'modelo' => 'Empleados'
        ]);
    }
    
    public function actionConsulta26() {
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::findBySql("select DISTINCT EXTRACT(DAY FROM fecha_alt) as dia FROM emple ORDER BY dia"),
        ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>' Datos de días en que los usuarios se han dado de alta',
            'descripcion' =>'SELECT DISTINCT EXTRACT(YEAR FROM fecha_alt) as year FROM emple ORDER BY dia',
            'columnas'=>['dia'],
             'modelo' => 'Empleados'
        ]);
    }
    
    
    public function actionConsulta27() {
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::find()->where(['>','salario',2000])->orWhere(["dept_no" => 20]),
            ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>'Mostar apellidos cuyo salario sea mayor de 2000 o el departamento sea 20',
            'descripcion' =>'SELECT * FROM emple WHERE salario > 2000 OR dept_no = 20',
            'columnas'=>['apellido'],
            'modelo' => 'Empleados'
        ]);
    }
    
    public function actionConsulta28() {
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::find(),
            ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>'Mostar apellido y nombre del departamento de los empleados',
            'descripcion' =>'SELECT apellido, dnombre FROM emple JOIN depart USING(dept_no)',
            'columnas'=>['apellido','deptNo.dnombre'],
            'modelo' => 'Empleados'
        ]);
    }
    
    public function actionConsulta29() {
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::find()->orderBy(['apellido'=> SORT_DESC]),
            ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>'Mostar apellido, oficio y nombre del departamento y nombre del departamento de empleados ordenados por apellido descendente',
            'descripcion' =>'SELECT apellido, oficio, dnombre FROM emple JOIN depart USING(dept_no) ORDER BY apellido',
            'columnas'=>['apellido','oficio','deptNo.dnombre'],
            'modelo' => 'Empleados'
        ]);
    }
    
    public function actionConsulta30() {
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::find()->groupBy('dept_no')->select('dept_no,count(*) as numero_empleados'),
            ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>'Listar número de empleados por departamento',
            'descripcion' =>'SELECT dept_no, count(*) FROM emple GROUP BY (dept_no)',
            'columnas'=>['dept_no','numero_empleados'],
            'modelo' => 'Empleados'
        ]);
    }  
    
     public function actionConsulta31() {
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::find()->groupBy('dept_no')->select('dept_no,count(*) as numero_empleados'),
            ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>'Listar número de empleados por departamento',
            'descripcion' =>'SELECT nombre, count(*) FROM emple JOIN depart USING(dept_no) GROUP BY (dept_no)',
            'columnas'=>['deptNo.dnombre','numero_empleados'],
            'modelo' => 'Empleados'
        ]);
    }  
    
    public function actionConsulta32() {
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::find()->orderBy(['oficio'=> SORT_ASC, 'apellido' => SORT_ASC]),
            ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>'Mostar apellido de los empleados y ordenarlos por oficio, apellido',
            'descripcion' =>'SELECT apellido, oficio, dnombre FROM emple ORDER BY oficio, apellido',
            'columnas'=>['apellido'],
            'modelo' => 'Empleados'
        ]);
    }
    
    public function actionConsulta33() {
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::find()->where(['like', 'apellido', 'A%', false]),
            ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>'Mostar empleados cuyo apellido empiece por A',
            'descripcion' =>'SELECT apellido FROM emple WHERE apellido LIKE "A%"',
            'columnas'=>['apellido'],
            'modelo' => 'Empleados'
        ]);
    }
    
    public function actionConsulta34() {
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::find()->where(['or like', 'apellido', ['A%','M%'], false]),
            ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>'Mostar empleados cuyo apellido empiece por A o M',
            'descripcion' =>'SELECT apellido FROM emple WHERE apellido LIKE "A%"',
            'columnas'=>['apellido'],
            'modelo' => 'Empleados'
        ]);
    }
    
     public function actionConsulta35() {
        $dataProvider = new ActiveDataProvider([
            'query' => Empleados::find()->where(['not like', 'apellido', '%Z', false]),
            ]);

        return $this->render('index_1', [
                    'dataProvider' => $dataProvider,
             'titulo'=>'Mostar empleados cuyo apellido no empiece por Z',
            'descripcion' =>'SELECT apellido FROM emple WHERE apellido NOT LIKE "%Z"',
             'columnas'=>['emp_no', 'apellido','oficio','dir','fecha_alt','salario','comision','dept_no'],
            'modelo' => 'Empleados'
        ]);
    }
    
}
    