<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ciudades".
 *
 * @property int $id
 * @property string|null $nombre
 * @property float|null $habitantes
 * @property string|null $escudo
 * @property string|null $mapa
 */
class Ciudades extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ciudades';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['habitantes'], 'number'],
            [['nombre', 'escudo', 'mapa'], 'string', 'max' => 225],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'habitantes' => 'Habitantes',
            'escudo' => 'Escudo',
            'mapa' => 'Mapa',
        ];
    }
}
