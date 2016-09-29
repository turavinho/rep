<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%quest}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property integer $active
 * @property string $timer
 */
class Quest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%quest}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['active', 'timer'], 'integer'],
            [['title', 'description'], 'string', 'max' => 255],
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
            'description' => 'Описание анкеты',
            'active' => 'Активность анкеты',
            'timer' => 'timer',
        ];
    }

    /**
     * @inheritdoc
     * @return QuestQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new QuestQuery(get_called_class());
    }
}
