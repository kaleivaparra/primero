<?php

namespace app\controllers;

use Yii;
use app\models\InscripcionRevistaArla;
use app\models\IdiomaRevista;
use app\models\RevistaTemas;
use app\models\IndexacionesRevista;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InscripcionRevistaArlaController implements the CRUD actions for InscripcionRevistaArla model.
 */
class InscripcionRevistaArlaController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
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
     * Lists all InscripcionRevistaArla models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => InscripcionRevistaArla::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionIndex_()
    {

        return $this->render('index_');
    }

    /**
     * Displays a single InscripcionRevistaArla model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new InscripcionRevistaArla model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new InscripcionRevistaArla();
        $modelIdiomaRevista= new IdiomaRevista();
        $modelTemasRevista = new RevistaTemas();
        $modelIndexaRevista = new IndexacionesRevista();

        //Mostrará un mensaje en la vista cuando el usuario se haya registrado
        $msg = null;

        //Validación mediante ajax
        if ($model->load(Yii::$app->request->post()) && $modelIdiomaRevista->load(Yii::$app->request->post())
                && $modelTemasRevista->load(Yii::$app->request->post())
                && $modelIndexaRevista->load(Yii::$app->request->post())
                && Yii::$app->request->isAjax) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model,$modelIdiomaRevista,$modelTemasRevista,$modelIndexaRevista);
        }

        //Validación cuando el formulario es enviado vía post
        //Esto sucede cuando la validación ajax se ha llevado a cabo correctamente
        //También previene por si el usuario tiene desactivado javascript y la
        //validación mediante ajax no puede ser llevada a cabo
        if ($model->load(Yii::$app->request->post()) && $modelIdiomaRevista->load(Yii::$app->request->post())
                && $modelTemasRevista->load(Yii::$app->request->post())
                && $modelIndexaRevista->load(Yii::$app->request->post())) {
            //if ($model->validate()) {
                //Preparamos la consulta para guardar la Revista
                
                $revista = new InscripcionRevistaArla;
                $revista->rev_nombre_revista = $model->rev_nombre_revista;
                $revista->rev_descripcion = $model->rev_descripcion;
                $revista->ciu_codigo = $model->ciu_codigo;
                $revista->pais_codigo = $model->pais_codigo;
                $revista->rev_sitio_web = $model->rev_sitio_web;
                $revista->rev_anio_inicio = $model->rev_anio_inicio;
                $revista->fre_codigo = $model->fre_codigo;
                $revista->sop_codigo = $model->sop_codigo;
                $revista->rev_institucion = $model->rev_institucion;
                $revista->rev_facultad = $model->rev_facultad;
                $revista->rev_editorial = $model->rev_editorial;
                $revista->rev_calle = $model->rev_calle;
                $revista->rev_codigo_postal = $model->rev_codigo_postal;
                $revista->rev_telefono = $model->rev_telefono;
                $revista->rev_fecha_creacion = date('Y-m-d');
                $revista->rev_ultima_modificacion = date('Y-m-d');
                $revista->ei_codigo = 1;

                //Si la revista es guardada correctamente
                if ($revista->insert()) {
                    foreach ($_POST['IdiomaRevista'] as $clave => $valor) {
                        foreach ($valor as $pos => $idi){
                            $modelIdiomaRevista = new IdiomaRevista();
                            $modelIdiomaRevista->idi_codigo = $idi;
                            $modelIdiomaRevista->rev_codigo = $revista->rev_codigo;
                            $modelIdiomaRevista->insert();
                            $msg = 'Idioma Guardado';
                        }
                    }
                    
                    foreach ($_POST['RevistaTemas'] as $clave2 => $valor2) {
                        foreach ($valor2 as $pos2 => $tem){
                            $modelTemasRevista = new RevistaTemas();
                            $modelTemasRevista->tem_codigo = $tem;
                            $modelTemasRevista->rev_codigo = $revista->rev_codigo;
                            $modelTemasRevista->insert();
                            $msg = 'Tema Guardado';
                        }
                    }
                    
                    foreach ($_POST['IndexacionesRevista'] as $clave3 => $valor3) {
                        foreach ($valor3 as $pos3 => $indexa){
                            $modelIndexaRevista = new IndexacionesRevista();
                            $modelIndexaRevista->inde_codigo = $indexa;
                            $modelIndexaRevista->rev_codigo = $revista->rev_codigo;
                            $modelIndexaRevista->insert();
                            $msg = 'Indexación Guardada';
                            $this->redirect(array('index'));
                        }
                    }
                } 
        }
        return $this->render("create", [
            "model" => $model, 
            "msg" => $msg, 
            "modelIdiomaRevista" => $modelIdiomaRevista,
            "modelTemasRevista" => $modelTemasRevista,
            "modelIndexaRevista" => $modelIndexaRevista
                ]);
    }

    /**
     * Updates an existing InscripcionRevistaArla model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->rev_codigo]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing InscripcionRevistaArla model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the InscripcionRevistaArla model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return InscripcionRevistaArla the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = InscripcionRevistaArla::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
