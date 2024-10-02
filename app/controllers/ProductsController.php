<?php

use App\library\DbSingleton;
use Phalcon\Mvc\Controller;

class ProductsController extends ControllerBase
{
    public function indexAction()
    {
        // Получаем экземпляр Singleton
        $db = DbSingleton::getInstance()->getConnection();

        // Выполняем запрос на выборку всех продуктов
        $result = $this->db->fetchAll("SELECT * FROM products", \Phalcon\Db\Enum::FETCH_ASSOC);

        // Передаем данные в представление
        $this->view->products = $result;
    }



    public function createAction()
    {
        if ($this->request->isPost()) {
            // Получаем данные из формы
            $name = $this->request->getPost('name', 'string');
            $price = $this->request->getPost('price', 'float');

            // Получаем экземпляр Singleton


            // Выполняем запрос на вставку нового продукта
            $this->db->execute("INSERT INTO products (name, price) VALUES (:name, :price)", [
                'name' => $name,
                'price' => $price,
            ]);

            // Перенаправляем обратно на страницу списка продуктов
            $this->response->redirect('products/index');
        }
    }
}
