<?php

namespace Root\pages\not_found;

use Root\core\AbstractView;

class View extends AbstractView
{
    public function __construct()
    {
        $this->setData(['message' => (new Model())->getEmptyPageText()]);
    }
}