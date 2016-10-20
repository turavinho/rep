<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%answer_item}}".
 *
 * @property integer $id
 * @property integer $answer_id
 * @property integer $quiz_item_id
 * @property string $result
 */
class AnswerItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%answer_item}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['answer_id', 'quiz_item_id', 'result'], 'required'],
            [['answer_id', 'quiz_item_id'], 'integer'],
            [['result'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'answer_id' => 'id анткеты',
            'quiz_item_id' => 'id вопроса',
            'result' => 'Результат',
        ];
    }

    /**
     * @inheritdoc
     * @return AnswerItemQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AnswerItemQuery(get_called_class());
    }
}
