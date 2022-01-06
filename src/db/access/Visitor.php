<?php

namespace Root\db\access;

class Visitor extends Requisites
{

    static function getUsername(): string
    {
        return 'visitor';
    }

    static function getPassword(): string
    {
        return 'visitorpassword';
    }
}