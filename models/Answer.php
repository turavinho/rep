<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%answer}}".
 *
 * @property integer $id
 * @property integer $quiz_id
 * @property string $name
 * @property string $last_name
 * @property string $age
 * @property string $gender
 * @property string $start_time
 * @property integer $is_closed
 */
class Answer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%answer}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['quiz_id', 'name', 'last_name', 'age', 'gender', 'start_time', 'is_closed'], 'required'],
            [['quiz_id', 'is_closed'], 'integer'],
            [['start_time'], 'safe'],
            [['name', 'last_name', 'age', 'gender'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'quiz_id' => 'id анкеты',
            'name' => 'Имя анкетируемого',
            'last_name' => 'Фамилия анкетируемого',
            'age' => 'Возраст анкетируемого',
            'gender' => 'Возраст анкетируемого',
            'start_time' => 'Время начала заполнения анкеты',
            'is_closed' => 'Состояние анкеты',
        ];
    }

    /**
     * @inheritdoc
     * @return AnswerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AnswerQuery(get_called_class());
    }
}
