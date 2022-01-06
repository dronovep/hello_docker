<?php

namespace Root\db\access;

class Admin extends Requisites
{

    protected static function getUsername(): string
    {
        return 'admin';
    }

    protected static function getPassword(): string
    {
        return 'adminpassword';
    }
}