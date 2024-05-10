<?php

namespace EsgiIw\TpDesignPattern\Factory;

use EsgiIw\TpDesignPattern\Alert\SmsAlert;
use EsgiIw\TpDesignPattern\Alert\AlertContentInterface;

class SmsAlertContentFactory implements AlertContentFactory
{
    public function createAlertContent(): AlertContentInterface
    {
        // Retourner une instance pour le contenu d'une alerte SMS
        return new SmsAlert();
    }
}
