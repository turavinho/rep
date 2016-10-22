<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%quiz_item}}".
 *
 * @property integer $id
 * @property integer $quiz_id
 * @property string $title
 * @property integer $type_id
 */
class QuizItem extends \yii\db\ActiveRecord
{
    public function getQuizType()
    {
      return $this->hasOne(QuizTypeInput::className(), ['id' => 'type_id']); //relation 1 to many quiz-item *-> quiz-type-input
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%quiz_item}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['quiz_id', 'title', 'type_id'], 'required'],
            [['quiz_id', 'type_id'], 'integer'],
            [['title'], 'string', 'max' => 255],
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
            'title' => 'Заголовок вопроса',
            'type_id' => 'тип вопроса',
        ];
    }

    /**
     * @inheritdoc
     * @return QuizItemQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new QuizItemQuery(get_called_class());
    }
}
