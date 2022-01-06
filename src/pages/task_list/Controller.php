<?php

namespace Root\pages\task_list;

use Root\core\Controller AS ControllerInterface;

class Controller implements ControllerInterface
{

    public function execute(array $request): void
    {
        echo (new View())->render();
    }
}