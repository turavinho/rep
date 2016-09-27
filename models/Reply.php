<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%reply}}".
 *
 * @property integer $id
 * @property string $quest_id
 * @property string $user_id
 * @property string $date
 */
class Reply extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%reply}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['quest_id', 'user_id'], 'integer'],
            [['date'], 'required'],
            [['date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'quest_id' => 'id анкеты',
            'user_id' => 'Автор ответа',
            'date' => 'Дата ответа',
        ];
    }

    /**
     * @inheritdoc
     * @return ReplyQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ReplyQuery(get_called_class());
    }
}
