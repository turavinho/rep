<?php
namespace app\modules\admin\models;

use app\models\Quest;
use app\models\Quiz;
use Yii;
use yii\base\Model;

class AdminForm extends Model
{
    public function getQuest()
    {
        return Quiz::find()->all();
    }
}
?>