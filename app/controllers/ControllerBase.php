<?php
declare(strict_types=1);

use App\library\DbSingleton;
use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    public $db;
    public function initialize()
    {
        require_once APP_PATH . '/library/DbSingleton.php';  // Убедись, что путь корректен

        $this->db = DbSingleton::getInstance()->getConnection();
        // Устанавливаем макет по умолчанию
        $this->view->setTemplateAfter('main');
    }
}

