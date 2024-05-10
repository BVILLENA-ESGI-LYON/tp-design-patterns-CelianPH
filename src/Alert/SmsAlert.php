<?php

namespace EsgiIw\TpDesignPattern\Alert;

class SmsAlert implements AlertContentInterface
{
    public function getContent(): string
    {
        return "Contenu de l'alerte par SMS.";
    }
}
