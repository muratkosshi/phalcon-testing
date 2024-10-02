<?php

use Phalcon\Mvc\Model;

class Task extends Model
{
    public $id;
    public $title;
    public $description;
    public $user_id;
    public $created_at;

    public function initialize()
    {
        $this->setSource('tasks');  // Соответствие с таблицей в БД
        $this->belongsTo('user_id', 'User', 'id', [
            'alias' => 'user'
        ]);
    }
}
