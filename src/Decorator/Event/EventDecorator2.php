<?php

namespace EsgiIw\TpDesignPattern\Decorator\Event;

use EsgiIw\TpDesignPattern\Model\Entity\Event;

class EventDecorator2
{
    protected $event;

    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    public function getTitle(): string
    {
        return "Decorator 2 - " . $this->event->getTitle();
    }
}
