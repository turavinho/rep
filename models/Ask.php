<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%ask}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $quest_id
 * @property string $type
 * @property string $options
 */
class Ask extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ask}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'quest_id', 'type', 'options'], 'required'],
            [['options'], 'string'],
            [['title', 'quest_id', 'type'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название вопроса',
            'quest_id' => 'id анкеты',
            'type' => 'Тип вопроса',
            'options' => 'Параментры вопроса в json',
        ];
    }

    /**
     * @inheritdoc
     * @return AskQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AskQuery(get_called_class());
    }
}
