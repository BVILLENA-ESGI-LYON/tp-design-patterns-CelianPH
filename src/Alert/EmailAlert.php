<?php

namespace EsgiIw\TpDesignPattern\Alert;

class EmailAlert implements AlertContentInterface
{
    public function getContent(): string
    {
        return "Contenu de l'alerte par email.";
    }
}
