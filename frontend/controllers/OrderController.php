<?php

namespace frontend\controllers;

use frontend\models\Order;
use yii\web\Controller;

class OrderController extends Controller
{
        public function actionIndex()
        {
            $order = Order::findOne(1);
            vd($order->products);
        }
}