<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Frecuencia;
use app\models\Soporte;
use app\models\Idioma;
use app\models\Pais;
use app\models\Temas;
use app\models\Indexaciones;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\InscripcionRevistaArla */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inscripcion-revista-arla-form">

    <?php
    $form = ActiveForm::begin([
                "method" => "post",
                'enableClientValidation' => true,
    ]);
    ?>
<?php echo $form->errorSummary(array($model, $modelIdiomaRevista, $modelTemasRevista, $modelIndexaRevista)); ?>
    <table>
        <tr>
            <td><?= $form->field($model, 'rev_nombre_revista')->textInput(['maxlength' => true]) ?></td>
            <td><?= $form->field($model, 'rev_descripcion')->textarea(['maxlength' => true]) ?></td>
            <td><?= $form->field($model, 'ei_codigo')->textInput() ?></td>
        </tr>
        <tr>
            <?php
            $paises = ArrayHelper::map(Pais::find()->orderBy('pais_descripcion')->all(), 'pais_codigo', 'pais_descripcion');
            ?>
            <td><?= $form->field($model, 'ciu_codigo')->textInput() ?></td>
            <td><?= $form->field($model, 'pais_codigo')->dropDownList($paises, ['prompt' => 'Seleccione País']) ?></td>
            <td><?= $form->field($model, 'rev_sitio_web')->textInput(['maxlength' => true]) ?></td>
            <td><?= $form->field($model, 'rev_anio_inicio')->textInput() ?></td>
        </tr>
        <tr>
            <?php
            $frecuencias = ArrayHelper::map(Frecuencia::find()->all(), 'fre_codigo', 'fre_descripcion');
            $soportes = ArrayHelper::map(Soporte::find()->all(), 'sop_codigo', 'sop_descripcion');
            ?>
            <td><?= $form->field($model, 'fre_codigo')->dropDownList($frecuencias, ['prompt' => 'Seleccione Frecuencia']) ?></td>
            <td><?= $form->field($model, 'sop_codigo')->dropDownList($soportes, ['prompt' => 'Seleccione Soporte']) ?></td>
            <td><?= $form->field($model, 'rev_institucion')->textInput(['maxlength' => true]) ?></td>
            <td><?= $form->field($model, 'rev_facultad')->textInput(['maxlength' => true]) ?></td>
        </tr>
        <tr>
            <td><?= $form->field($model, 'rev_editorial')->textInput(['maxlength' => true]) ?></td>
            <td><?= $form->field($model, 'rev_calle')->textInput(['maxlength' => true]) ?></td>
            <td><?= $form->field($model, 'rev_codigo_postal')->textInput(['maxlength' => true]) ?></td>
            <td><?= $form->field($model, 'rev_telefono')->textInput(['maxlength' => true]) ?></td>
        </tr>
        <tr>
            <?php
            $idiomas = ArrayHelper::map(Idioma::find()->all(), 'idi_codigo', 'idi_descripcion');
            $temas = ArrayHelper::map(Temas::find()->all(), 'tem_codigo', 'tem_descripcion');
            $indexaciones = ArrayHelper::map(Indexaciones::find()->all(), 'inde_codigo', 'inde_descripcion');
            ?>
            <td><?=
                $form->field($modelIdiomaRevista, 'idi_codigo')->dropDownList($idiomas, ['class' => 'form-control', 'multiple' => true]);
            ?></td>
            <td><?=
                $form->field($modelTemasRevista, 'tem_codigo')->widget(Select2::classname(), [
                    'name' => 'kv-state-240',
                    'data' => $temas,
                    'language' => 'es',
                    'size' => Select2::MEDIUM,
                    'options' => ['placeholder' => 'Seleccione Temas ...', 'multiple' => true],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]);
                ?></td>
            <td><?=
                $form->field($modelIndexaRevista, 'inde_codigo')->widget(Select2::classname(), [
                    'name' => 'kv-state-240',
                    'data' => $indexaciones,
                    'language' => 'es',
                    'size' => Select2::MEDIUM,
                    'options' => ['placeholder' => 'Seleccione Indexaciones ...', 'multiple' => true],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]);
                ?></td>
        </tr>
    </table>

    <div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'Crear Revista' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
