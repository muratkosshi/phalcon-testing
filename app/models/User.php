<?php

use Phalcon\Mvc\Model;

class User extends Model
{
    public $id;
    public $name;
    public $email;
    public $password;
    public $created_at;

    public function initialize()
    {
        $this->setSource('users');  // Соответствие с таблицей в БД
        $this->hasMany('id', 'Task', 'user_id', [
            'alias' => 'tasks'
        ]);
    }
}

