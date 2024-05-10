<?php

namespace EsgiIw\TpDesignPattern\Factory;

use EsgiIw\TpDesignPattern\Alert\EmailLoginAlert;
use EsgiIw\TpDesignPattern\Alert\LoginAlertInterface;

class EmailLoginAlertFactory implements LoginAlertFactory
{
    public function createAlert(): LoginAlertInterface
    {
        return new EmailLoginAlert();
    }
}
