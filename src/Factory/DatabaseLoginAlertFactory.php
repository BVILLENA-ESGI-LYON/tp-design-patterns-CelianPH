<?php

namespace EsgiIw\TpDesignPattern\Factory;

use EsgiIw\TpDesignPattern\Alert\DatabaseLoginAlert;
use EsgiIw\TpDesignPattern\Alert\LoginAlertInterface;

class DatabaseLoginAlertFactory implements LoginAlertFactory
{
    public function createAlert(): LoginAlertInterface
    {
        return new DatabaseLoginAlert();
    }
}
