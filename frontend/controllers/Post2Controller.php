<?php
/**
 * @var $rows
 */
namespace frontend\controllers;

use frontend\models\MyModel;
use frontend\models\Post;
use Yii;
use yii\data\ActiveDataProvider;
use yii\data\Sort;
use yii\db\Query;
use yii\web\Controller;
use yii\data\Pagination;

class Post2Controller extends Controller
{



    public function actionList($id)
    {
        $query = Post::find();

        return $this->render('list', [
            'model'=>$query,
        ]);
    }
}