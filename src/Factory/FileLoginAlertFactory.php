<?php

namespace EsgiIw\TpDesignPattern\Factory;

use EsgiIw\TpDesignPattern\Alert\FileLoginAlert;
use EsgiIw\TpDesignPattern\Alert\LoginAlertInterface;

class FileLoginAlertFactory implements LoginAlertFactory
{
    public function createAlert(): LoginAlertInterface
    {
        return new FileLoginAlert();
    }
}
