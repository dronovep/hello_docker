<?php

namespace Root\pages\not_found;

class Controller implements \Root\core\Controller
{
    public function execute(array $request): void
    {
        echo (new View())->render();
    }
}