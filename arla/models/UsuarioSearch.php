<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Usuario;

/**
 * UsuarioSearch represents the model behind the search form about `app\models\Usuario`.
 */
class UsuarioSearch extends Usuario
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usu_codigo', 'per_codigo', 'activate'], 'integer'],
            [['usu_username', 'usu_nombres', 'usu_apellido_paterno', 'usu_apellido_materno', 'usu_email', 'usu_password', 'authKey', 'accessToken'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Usuario::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'usu_codigo' => $this->usu_codigo,
            'per_codigo' => $this->per_codigo,
            'activate' => $this->activate,
        ]);

        $query->andFilterWhere(['like', 'usu_username', $this->usu_username])
            ->andFilterWhere(['like', 'usu_nombres', $this->usu_nombres])
            ->andFilterWhere(['like', 'usu_apellido_paterno', $this->usu_apellido_paterno])
            ->andFilterWhere(['like', 'usu_apellido_materno', $this->usu_apellido_materno])
            ->andFilterWhere(['like', 'usu_email', $this->usu_email])
            ->andFilterWhere(['like', 'usu_password', $this->usu_password])
            ->andFilterWhere(['like', 'authKey', $this->authKey])
            ->andFilterWhere(['like', 'accessToken', $this->accessToken]);

        return $dataProvider;
    }
}
