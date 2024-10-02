<?php

use Phalcon\Mvc\Controller;

class UserController extends ControllerBase
{
    public function indexAction()
    {
        $users = User::find();  // Получаем всех пользователей
        $this->view->users = $users;
    }

    public function createAction()
    {
        if ($this->request->isPost()) {
            $user = new User();
            $user->name = $this->request->getPost('name');
            $user->email = $this->request->getPost('email');
            $user->password = password_hash($this->request->getPost('password'), PASSWORD_BCRYPT);

            if ($user->save()) {
                $this->response->redirect('user/index');
            } else {
                $this->view->errors = $user->getMessages();
            }
        }
    }
}
