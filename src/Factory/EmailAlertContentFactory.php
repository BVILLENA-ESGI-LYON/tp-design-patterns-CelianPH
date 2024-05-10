<?php

namespace EsgiIw\TpDesignPattern\Factory;

use EsgiIw\TpDesignPattern\Alert\EmailAlert;
use EsgiIw\TpDesignPattern\Alert\AlertContentInterface;

class EmailAlertContentFactory implements AlertContentFactory
{
    public function createAlertContent(): AlertContentInterface
    {
        // Retourner une instance pour le contenu d'une alerte email
        return new EmailAlert();
    }
}
