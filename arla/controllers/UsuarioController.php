<?php

namespace app\controllers;

use Yii;
use app\models\Usuario;
use app\models\InscripcionRevistaArla;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
//agregados
use yii\helpers\Html;
use yii\helpers\Url;
use yii\filters\AccessControl;

/**
 * UsuarioController implements the CRUD actions for Usuario model.
 */
class UsuarioController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access'=>[
                'class'=> AccessControl::className(),
                'only'=>['update','index'],
                'rules'=>[
                    [
                    'allow'=>true,
                    'roles'=>['gestor']
                    ],
                ]
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Usuario models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Usuario::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Usuario model.
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
     * Creates a new Usuario model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
        private function randKey($str = '', $long = 0) {
        $key = null;
        $str = str_split($str);
        $start = 0;
        $limit = count($str) - 1;
        for ($x = 0; $x < $long; $x++) {
            $key .= $str[rand($start, $limit)];
        }
        return $key;
    }

    public function actionConfirm() {
        $table = new Usuario;
        if (Yii::$app->request->get()) {

            //Obtenemos el valor de los parámetros get
            $id = Html::encode($_GET["id"]);
            $authKey = $_GET["authKey"];

            if ((int) $id) {
                //Realizamos la consulta para obtener el registro
                $model = $table
                        ->find()
                        ->where("usu_codigo=:usu_codigo", [":usu_codigo" => $id])
                        ->andWhere("authKey=:authKey", [":authKey" => $authKey]);

                //Si el registro existe
                if ($model->count() == 1) {
                    $activar = Usuario::findOne($id);
                    $activar->activate = 1;
                    if ($activar->update()) {
                        echo "Enhorabuena registro llevado a cabo correctamente, redireccionando ...";
                        echo "<meta http-equiv='refresh' content='8; " . Url::toRoute("site/login") . "'>";
                    } else {
                        echo "Ha ocurrido un error al realizar el registro, redireccionando ...";
                        echo "<meta http-equiv='refresh' content='8; " . Url::toRoute("site/login") . "'>";
                    }
                } else { //Si no existe redireccionamos a login
                    return $this->redirect(["site/login"]);
                }
            } else { //Si id no es un número entero redireccionamos a login
                return $this->redirect(["site/login"]);
            }
        }
    }

    public function actionCreate() {
        //Creamos la instancia con el model de validación
        $model = new Usuario;
        $modelRevista = new InscripcionRevistaArla;
        

        //Mostrará un mensaje en la vista cuando el usuario se haya registrado
        $msg = null;

        //Validación mediante ajax
        if ($model->load(Yii::$app->request->post()) && $modelRevista->load(Yii::$app->request->post()) && Yii::$app->request->isAjax) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model,$modelRevista);
        }

        //Validación cuando el formulario es enviado vía post
        //Esto sucede cuando la validación ajax se ha llevado a cabo correctamente
        //También previene por si el usuario tiene desactivado javascript y la
        //validación mediante ajax no puede ser llevada a cabo
        if ($model->load(Yii::$app->request->post()) && $modelRevista->load(Yii::$app->request->post())) {
            //if ($model->validate()) {
                //Preparamos la consulta para guardar el usuario
                $table = new Usuario;
                $table->usu_username = $model->usu_username;
                $table->eu_codigo=0;
                $table->usu_nombres=$model->usu_nombres;
                $table->usu_apellido_paterno=$model->usu_apellido_paterno;
                $table->usu_apellido_materno=$model->usu_apellido_materno;
                $table->usu_email_institucional = $model->usu_email_institucional;
                $table->usu_email_alternativo = $model->usu_email_alternativo;
                $table->usu_fecha_creacion = date('Y-m-d');
                $table->usu_cargo = $model->usu_cargo;
                //Encriptamos el password
                $table->usu_password = crypt($model->usu_password, Yii::$app->params["salt"]);
                //$table->usu_password = $model->usu_password;
                //Creamos una cookie para autenticar al usuario cuando decida recordar la sesión, esta misma
                //clave será utilizada para activar el usuario
                $table->authKey = $this->randKey("abcdef0123456789", 200);
                //Creamos un token de acceso único para el usuario
                $table->accessToken = $this->randKey("abcdef0123456789", 200);
                
                //Revista
                
                $revista = new InscripcionRevistaArla;
                $revista->rev_nombre_revista = $modelRevista->rev_nombre_revista;
                $revista->rev_descripcion = $modelRevista->rev_descripcion;
                $revista->ciu_codigo = $modelRevista->ciu_codigo;
                $revista->pais_codigo = $modelRevista->pais_codigo;
                $revista->rev_sitio_web = $modelRevista->rev_sitio_web;
                $revista->rev_anio_inicio = $modelRevista->rev_anio_inicio;
                $revista->fre_codigo = $modelRevista->fre_codigo;
                $revista->sop_codigo = $modelRevista->sop_codigo;
                $revista->rev_institucion = $modelRevista->rev_institucion;
                $revista->rev_facultad = $modelRevista->rev_facultad;
                $revista->rev_editorial = $modelRevista->rev_editorial;
                $revista->rev_calle = $modelRevista->rev_calle;
                $revista->rev_codigo_postal = $modelRevista->rev_codigo_postal;
                $revista->rev_telefono = $modelRevista->rev_telefono;
                $revista->rev_fecha_creacion = date('Y-m-d');
                $revista->rev_ultima_modificacion = date('Y-m-d');
                $revista->ei_codigo = 1;

                //Si el registro es guardado correctamente
                if ($table->insert()) {
                    //Nueva consulta para obtener el id del usuario
                    //Para confirmar al usuario se requiere su id y su authKey
                    if($revista->insert()){
                    $user = $table->find()->where(["usu_email_institucional" => $model->usu_email_institucional])->one();
                    $id = urlencode($user->usu_codigo);
                    $authKey = urlencode($user->authKey);

                    $subject = "Confirmar registro";
                    $body = "<h1>Haga click en el siguiente enlace para finalizar tu registro</h1>";
                    $body .= "<a href='http://localhost/arla/web/index.php?r=usuario/confirm&id=" . $id . "&authKey=" . $authKey . "'>Confirmar</a>";

                    //Enviamos el correo
                    Yii::$app->mailer->compose()
                            ->setTo($user->usu_email_institucional)
                            ->setFrom([Yii::$app->params["adminEmail"] => Yii::$app->params["title"]])
                            ->setSubject($subject)
                            ->setHtmlBody($body)
                            ->send();

                    $model->usu_username = null;
                    $model->eu_codigo = null;
                    $model->usu_nombres = null;
                    $model->usu_apellido_paterno = null;
                    $model->usu_apellido_materno = null;
                    $model->usu_email_institucional = null;
                    $model->usu_email_alternativo = null;
                    $model->usu_password = null;
                    $model->usu_fecha_creacion = null;
                    $model->usu_cargo = null;
                    $model->usu_password_repeat = null;
                    
                    $this->redirect(array('index'));
                    }else{
                        $msg="Error al ingresar la Revista";
                    }
                } 
        }
        return $this->render("create", ["model" => $model, "msg" => $msg, "modelRevista" => $modelRevista]);
    }


    /**
     * Updates an existing Usuario model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->usu_codigo]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Usuario model.
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
     * Finds the Usuario model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Usuario the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Usuario::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
