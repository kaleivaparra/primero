<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inscripcion_revista_arla".
 *
 * @property integer $rev_codigo
 * @property string $rev_nombre_revista
 * @property string $rev_descripcion
 * @property integer $ciu_codigo
 * @property integer $pais_codigo
 * @property string $rev_sitio_web
 * @property integer $rev_anio_inicio
 * @property integer $fre_codigo
 * @property integer $sop_codigo
 * @property string $rev_institucion
 * @property string $rev_facultad
 * @property string $rev_editorial
 * @property string $rev_calle
 * @property string $rev_codigo_postal
 * @property string $rev_telefono
 * @property string $rev_fecha_creacion
 * @property string $rev_ultima_modificacion
 * @property integer $ei_codigo
 *
 * @property EncargadosRevista[] $encargadosRevistas
 * @property IdiomaRevista[] $idiomaRevistas
 * @property IndexacionesRevista[] $indexacionesRevistas
 * @property Ciudad $ciuCodigo
 * @property Frecuencia $freCodigo
 * @property Soporte $sopCodigo
 * @property EstadoInscripcion $eiCodigo
 * @property Issn[] $issns
 * @property RevisionInscripcionRevistaArla[] $revisionInscripcionRevistaArlas
 * @property RevistaTemas[] $revistaTemas
 * @property SolicitudIndexacionArla[] $solicitudIndexacionArlas
 * @property UltimoNumero[] $ultimoNumeros
 */
class InscripcionRevistaArla extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inscripcion_revista_arla';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rev_nombre_revista', 'rev_descripcion', 'ciu_codigo', 'pais_codigo', 'rev_sitio_web', 'rev_anio_inicio', 'fre_codigo', 'sop_codigo', 'rev_institucion', 'rev_facultad', 'rev_editorial', 'rev_calle', 'rev_codigo_postal', 'rev_telefono', 'rev_fecha_creacion', 'rev_ultima_modificacion', 'ei_codigo'], 'required'],
            [['ciu_codigo', 'pais_codigo', 'rev_anio_inicio', 'fre_codigo', 'sop_codigo', 'ei_codigo'], 'integer'],
            [['rev_fecha_creacion', 'rev_ultima_modificacion'], 'safe'],
            [['rev_nombre_revista', 'rev_sitio_web'], 'string', 'max' => 500],
            [['rev_descripcion'], 'string', 'max' => 1000],
            [['rev_institucion', 'rev_facultad', 'rev_calle', 'rev_codigo_postal'], 'string', 'max' => 100],
            [['rev_editorial'], 'string', 'max' => 200],
            [['rev_telefono'], 'string', 'max' => 20],
            [['ciu_codigo'], 'exist', 'skipOnError' => true, 'targetClass' => Ciudad::className(), 'targetAttribute' => ['ciu_codigo' => 'ciu_codigo']],
            [['fre_codigo'], 'exist', 'skipOnError' => true, 'targetClass' => Frecuencia::className(), 'targetAttribute' => ['fre_codigo' => 'fre_codigo']],
            [['sop_codigo'], 'exist', 'skipOnError' => true, 'targetClass' => Soporte::className(), 'targetAttribute' => ['sop_codigo' => 'sop_codigo']],
            [['ei_codigo'], 'exist', 'skipOnError' => true, 'targetClass' => EstadoInscripcion::className(), 'targetAttribute' => ['ei_codigo' => 'ei_codigo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rev_codigo' => 'Código de Revista',
            'rev_nombre_revista' => 'Nombre Revista',
            'rev_descripcion' => 'Descripción',
            'ciu_codigo' => 'Ciudad',
            'pais_codigo' => 'País',
            'rev_sitio_web' => 'Sitio Web',
            'rev_anio_inicio' => 'Año Inicio',
            'fre_codigo' => 'Frecuencia',
            'sop_codigo' => 'Soporte',
            'rev_institucion' => 'Institución',
            'rev_facultad' => 'Facultad',
            'rev_editorial' => 'Editorial',
            'rev_calle' => 'Calle',
            'rev_codigo_postal' => 'Código Postal',
            'rev_telefono' => 'Teléfono',
            'rev_fecha_creacion' => 'Fecha Creación',
            'rev_ultima_modificacion' => 'Última Modificación',
            'ei_codigo' => 'Estado Inscripción',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEncargadosRevistas()
    {
        return $this->hasMany(EncargadosRevista::className(), ['rev_codigo' => 'rev_codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdiomaRevistas()
    {
        return $this->hasMany(IdiomaRevista::className(), ['rev_codigo' => 'rev_codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIndexacionesRevistas()
    {
        return $this->hasMany(IndexacionesRevista::className(), ['rev_codigo' => 'rev_codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCiuCodigo()
    {
        return $this->hasOne(Ciudad::className(), ['ciu_codigo' => 'ciu_codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFreCodigo()
    {
        return $this->hasOne(Frecuencia::className(), ['fre_codigo' => 'fre_codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSopCodigo()
    {
        return $this->hasOne(Soporte::className(), ['sop_codigo' => 'sop_codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEiCodigo()
    {
        return $this->hasOne(EstadoInscripcion::className(), ['ei_codigo' => 'ei_codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIssns()
    {
        return $this->hasMany(Issn::className(), ['rev_codigo' => 'rev_codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRevisionInscripcionRevistaArlas()
    {
        return $this->hasMany(RevisionInscripcionRevistaArla::className(), ['rev_codigo' => 'rev_codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRevistaTemas()
    {
        return $this->hasMany(RevistaTemas::className(), ['rev_codigo' => 'rev_codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSolicitudIndexacionArlas()
    {
        return $this->hasMany(SolicitudIndexacionArla::className(), ['rev_codigo' => 'rev_codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUltimoNumeros()
    {
        return $this->hasMany(UltimoNumero::className(), ['rev_codigo' => 'rev_codigo']);
    }
}
