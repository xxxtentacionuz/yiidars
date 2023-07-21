<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class category extends ActiveRecord
{
    public function getTablname()
    {
        return 'category';
    }

    public function getPosts()
    {
        return $this->hasMany(Post::class, ['category_id'=> 'id']);
    }

}