<?php

namespace Root;

use PDO;
use Root\core\Router;
use Root\db\access\Visitor;

class App
{
    public function run() {
        $controller = (new Router())->getControllerForURL($_REQUEST['url']);
        $controller->execute($_REQUEST);
    }

    public function simpleTestRun() {
//        var_dump($_REQUEST);
//        exit;
        $connection = null;

        $connection = new PDO(Visitor::getDSN());

        $stmt = $connection->query(/** @lang PostgreSQL */'SELECT * FROM tv_task_list', PDO::FETCH_ASSOC);
        $stmt->execute();


        var_dump($stmt->fetchAll());
    }
}