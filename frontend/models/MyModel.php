<?php

namespace frontend\models;

use yii\base\Model;

class MyModel extends Model
{
    public $firstname;
    public $lastname;
    public $gender;
    public $age;

    public function rules()
    {
        return [
            [['firstname', 'lastname', 'gender'], 'required'],
            ['lastname', 'string'],
            ['age', 'integer'],
            ['firstname', 'string'],
            ['gender', 'string'],
        ];
    }
}