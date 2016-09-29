<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[QuestReplies]].
 *
 * @see QuestReplies
 */
class QuestQuery extends \yii\db\ActiveQuery
{
    public function active()
    {
          return $this->andWhere('[[active]]=1');
    }

    /**
     * @inheritdoc
     * @return QuestReplies[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return QuestReplies|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
