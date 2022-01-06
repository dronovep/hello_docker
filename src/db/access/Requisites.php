<?php

namespace Root\db\access;

abstract class Requisites
{
    protected static final function getHost(): string {
        return '/var/run/postgresql/';
    }
    public static final function getDSN(): string {
        return
            "pgsql:dbname=postgres" . ";" .
            "host=" . static::getHost() . ";" .
            "user=" . static::getUsername() . ";" .
            "password=" . static::getPassword();
    }

    protected static abstract function getUsername(): string;
    protected static abstract function getPassword(): string;
}