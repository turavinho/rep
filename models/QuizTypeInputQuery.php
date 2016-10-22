<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[quiz-type-input]].
 *
 * @see QuizTypeInput
 */
class QuizTypeInputQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return QuizTypeInput[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return QuizTypeInput|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
