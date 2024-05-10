<?php

namespace EsgiIw\TpDesignPattern\Observer;

use EsgiIw\TpDesignPattern\Model\Entity\Event;

interface EventObserver
{
    public function handleEventUpdate(Event $event): void;
}
