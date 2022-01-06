<?php

namespace Root\core;

interface Controller
{
    public function execute(array $request): void;
}