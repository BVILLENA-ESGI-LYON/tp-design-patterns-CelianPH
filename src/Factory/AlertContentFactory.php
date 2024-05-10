<?php

namespace EsgiIw\TpDesignPattern\Factory;

use EsgiIw\TpDesignPattern\Alert\AlertContentInterface;

interface AlertContentFactory
{
    public function createAlertContent(): AlertContentInterface;
}
