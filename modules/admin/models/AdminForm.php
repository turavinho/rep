<?php
namespace app\modules\admin\models;

use app\models\Quest;
use Yii;
use yii\base\Model;

class AdminForm extends Model
{
    public function getQuest()
    {
        return Quest::find()->all();
    }
}
?>