<?php

namespace EsgiIw\TpDesignPattern\Factory;

use EsgiIw\TpDesignPattern\Alert\LoginAlertInterface;

interface LoginAlertFactory
{
    public function createAlert(): LoginAlertInterface;
}
