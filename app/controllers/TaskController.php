<?php

use Phalcon\Mvc\Controller;

class TaskController extends ControllerBase
{
    public function indexAction($userId)
    {
        $user = User::findFirstById($userId);

        // Проверяем, существует ли пользователь
        if (!$user) {
            $this->response->redirect('user/index');
            return;
        }

        // Передаем пользователя и его задачи в представление
        $this->view->user = $user;
        $this->view->tasks = $user->tasks;
    }


    public function createAction($userId)
    {
        // Если форма была отправлена
        if ($this->request->isPost()) {
            $task = new Task();
            $task->title = $this->request->getPost('title');
            $task->description = $this->request->getPost('description');
            $task->user_id = $userId;

            if ($task->save()) {
                // Перенаправляем пользователя на страницу задач
                $this->response->redirect("task/index/$userId");
            } else {
                $this->view->errors = $task->getMessages();
            }
        }

        // Передаем переменную userId в представление
        $this->view->userId = $userId;
    }

}
