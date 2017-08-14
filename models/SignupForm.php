<?php

namespace app\models;

use yii\base\Model;

class SignupForm extends Model
{
    public $name;
    public $email;
    public $password;

    public function rules()
    {
        return [
            [['name', 'email', 'password'], 'required'],
            [['name', 'email'], 'trim'],
            [['email'], 'email'],
            [['name'], 'string'],
            [['email'], 'unique', 'targetClass' => 'app\models\User', 'targetAttribute' => 'email'],
            [['name'], 'unique', 'targetClass' => 'app\models\User', 'targetAttribute' => 'name']
        ];
    }

    public function signup()
    {
        $user = new User();
        $user->attributes = $this->attributes;
        return $user->save(false);
    }
}