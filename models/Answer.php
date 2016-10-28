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
    public function answer()
    {
        return $this->$model->answer;
    }

    public function getQuiz()
    {
        return $this->hasOne(Quiz::className(), ['id' => 'quiz_id']);  //relation 1 to many Answer *-> Quiz
    }

    public function getAnswerItem()
    {
         return $this->hasMany(AnswerItem::className(), ['answer_id]' => 'id']); //relation 1 to many Answer *<- AnswerItem
    }
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
            ['quiz_id', 'required'],
            [['name', 'last_name', 'gender'], 'filter', 'filter' => 'trim'],
            [['quiz_id', 'is_closed', 'age'], 'filter', 'filter' => 'intval'],
            [['start_time'], 'safe'],
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

    public function beforeSave($insert)     //записываем в анкету время старта
    {
        if ($this->start_time == '0000-00-00 00:00:00')
        {
            $this->last_name=date('Y-m-d H:i:s');
        }
        return parent::beforeSave($insert);
    }

    public function isPersonalDataComplete()
    {
        return !empty($this->last_name) && !empty($this->name) && !empty($this->age) && !empty($this->gender);
    }
}
