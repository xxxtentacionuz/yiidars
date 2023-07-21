<?php

namespace frontend\models;

use common\models\User;
use yii\db\ActiveRecord;

class category2 extends ActiveRecord
{
    public static function tableName()
    {
        return 'category';
    }

    public function getPost()
    {
        return $this->hasMany(Post::class, ['category_id'=>'id']);
    }

}