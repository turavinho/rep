<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Answer]].
 *
 * @see Answer
 */
class AnswerQuery extends \yii\db\ActiveQuery
{
    public function byId($id)
    {
        return $this->andWhere(['id' => $id]);
    }

    public function isActive()
    {
        return $this->andWhere('is_closed = 0');
    }

    /**
     * @inheritdoc
     * @return Answer[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Answer|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
