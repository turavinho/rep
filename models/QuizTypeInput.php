<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%quiz_type_input}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $code
 */
class QuizTypeInput extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%quiz_type_input}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'code'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название типа вопроса',
            'code' => 'Тип вопроса',
        ];
    }

    /**
     * @inheritdoc
     * @return QuizTypeInputQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new QuizTypeInputQuery(get_called_class());
    }
}
