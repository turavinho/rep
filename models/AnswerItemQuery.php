<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[AnswerItem]].
 *
 * @see AnswerItem
 */
class AnswerItemQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return AnswerItem[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return AnswerItem|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
