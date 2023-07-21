<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\db\Query;

class News extends Model
{
    public $title;
    public $author_id;
    public $description;
    public $category_id;

    public function rules()
    {
        return [
            [['title','author_id','description'], 'required'],
            ['title', 'string'],
            ['author_id', 'integer'],
            ['category_id', 'integer'],
            ['description', 'string'],
        ];
    }


    public function count()
    {
        $rows = (new Query())
            ->select('*')
            ->from('news')
            ->count();
        return ceil($rows / 5);
    }


}

