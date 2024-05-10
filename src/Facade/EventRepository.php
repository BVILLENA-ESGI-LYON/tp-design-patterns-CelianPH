<?php

namespace EsgiIw\TpDesignPattern\Facade;

use EsgiIw\TpDesignPattern\Model\Entity\Event;

class EventRepositoryFacade
{
    protected $eventRepository;

    public function __construct(EventRepository $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    public function addEvent(Event $event): void
    {
        $this->eventRepository->addEvent($event);
    }

    public function updateEvent(Event $event): void
    {
        $this->eventRepository->updateEvent($event);
    }

    public function deleteEvent(Event $event): void
    {
        $this->eventRepository->deleteEvent($event);
    }

    public function getEventById(int $id): ?Event
    {
        return $this->eventRepository->getEventById($id);
    }

    public function getAllEvents(): array
    {
        return $this->eventRepository->getAllEvents();
    }
}
