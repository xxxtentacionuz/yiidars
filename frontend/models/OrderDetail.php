<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class OrderDetail extends ActiveRecord
{
    public static function tableName()
    {
        return 'order_detail';
    }

}