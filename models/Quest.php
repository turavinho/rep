<?php

namespace app\models;

use Yii;
use app\models\Ask;


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
0     */
    /**
     * Возвращает все вопросы анкеты
     */
    public function getAsks()
    {
        return $this->hasMany(Ask::className(), ['quest_id' => 'id']);
    }

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

    public function getReplies()
    {
        return $this->hasMany(Reply::className(), ['quest_id' => 'id']);
    }
}
