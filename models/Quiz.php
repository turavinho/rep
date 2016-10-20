<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%quiz}}".
 *
 * @property integer $id
 * @property string $title
 * @property integer $time
 * @property integer $sort
 */
class Quiz extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%quiz}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'time', 'sort'], 'required'],
            [['time', 'sort'], 'integer'],
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
            'title' => 'Заголовок анкеты',
            'time' => 'Время на анкету',
            'sort' => 'Порядок вывода анкет',
        ];
    }

    /**
     * @inheritdoc
     * @return QuizQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new QuizQuery(get_called_class());
    }
}
