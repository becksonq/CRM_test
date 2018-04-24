<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;
use dektrium\user\models\User;


/**
 * This is the model class for table "projects".
 *
 * @property int $id
 * @property int $user_id
 * @property string $project_name
 * @property int $cost
 * @property int $date_start
 * @property int $date_finish
 *
 * @property \dektrium\user\models\User $user
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'cost', 'date_start', 'date_finish'], 'integer'],
            [['project_name'], 'string', 'max' => 255],
            [
                ['user_id'],
                'exist',
                'skipOnError'     => true,
                'targetClass'     => \dektrium\user\models\User::class,
                'targetAttribute' => ['user_id' => 'id']
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'           => 'ID',
            'user_id'      => 'Исполнитель',
            'project_name' => 'Название проекта',
            'cost'         => 'Стоимость',
            'date_start'   => 'Дата начала',
            'date_finish'  => 'Дата окончания',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(\dektrium\user\models\User::class, ['id' => 'user_id']);
    }

    /**
     * @return array
     */
    public static function getUsersList()
    {
        return ArrayHelper::map(User::find()->orderBy('id')->asArray()->all(), 'id', 'username');
    }
}
