<?php

namespace frontend\controllers;

use frontend\models\category;
use yii\web\Controller;

class CategoryController extends Controller
{
    public function actionIndex($id)
    {
        $category = Category::findOne($id);

        return $this->render('index',['category'=>$category]);
    }

    public function actionView($id)
    {
        $category = Category::findOne($id);

        return $this->render('view',['category'=>$category]);
    }
}