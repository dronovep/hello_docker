<?php

namespace Root\db\access;

class Super extends Requisites
{

    protected static function getUsername(): string
    {
        return 'postgres';
    }

    protected static function getPassword(): string
    {
        return 'pgsql424258541';
    }
}