<?php

namespace EsgiIw\TpDesignPattern\Decorator\Event;

use EsgiIw\TpDesignPattern\Model\Entity\Event;

class EventDecorator3
{
    protected $event;

    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    public function getDateTime(): string
    {
        return "Decorator 3 - " . $this->event->getDateTime();
    }
}
