<?php

namespace EsgiIw\TpDesignPattern\Decorator\Event;

use EsgiIw\TpDesignPattern\Model\Entity\Event;

class EventDecorator1
{
    protected $event;

    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    public function getDescription(): string
    {
        return "Decorator 1 - " . $this->event->getDescription();
    }
}
