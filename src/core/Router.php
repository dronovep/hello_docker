<?php

namespace Root\core;

use Root\pages\not_found\Controller as PageNotFoundController;
use Root\pages\task_list\Controller as TaskListController;

class Router
{
    const URL_TO_CONTROLLER_MAP = [
      '/' => TaskListController::class
    ];

    public function getControllerForURL(string $url) :Controller {
        if (array_key_exists($url, self::URL_TO_CONTROLLER_MAP)) {
            $controller_class = self::URL_TO_CONTROLLER_MAP[$url];
        } else {
            $controller_class = PageNotFoundController::class;
        }

        return new $controller_class();
    }
}