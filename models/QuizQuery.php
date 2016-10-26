<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Quiz]].
 *
 * @see Quiz
 */
class QuizQuery extends \yii\db\ActiveQuery
{
    public function nextUnAnswered(array $quizes)
    {
        if ($quizes) {
            $this->andWhere([['not in', 'id', $quizes]]);
        }
        return $this->addOrderBy(['sort' => SORT_ASC]);
    }

    /**
     * @inheritdoc
     * @return Quiz[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Quiz|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
