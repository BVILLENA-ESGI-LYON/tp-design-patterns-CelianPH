<?php

require_once 'src/Observer/EventObserver.php';
require_once 'src/Model/Entity/Event.php';

use EsgiIw\TpDesignPattern\Observer\EventObserver;
use EsgiIw\TpDesignPattern\Model\Entity\Event;

// Classe Observable
class EventManager
{
    private $eventObservers = [];

    public function addObserver(EventObserver $observer): void
    {
        $this->eventObservers[] = $observer;
    }

    public function notifyObservers(Event $event): void
    {
        foreach ($this->eventObservers as $observer) {
            $observer->handleEventUpdate($event);
        }
    }

    public function modifyEvent(Event $event): void
    {
        $this->notifyObservers($event);
    }
}

// Observateur
class EmailNotificationObserver implements EventObserver
{
    public function handleEventUpdate(Event $event): void
    {
        echo "Notification email envoyée pour l'événement : " . $event->getTitle() . "\n";
    }
}

$eventManager = new EventManager();

$emailObserver = new EmailNotificationObserver();
$eventManager->addObserver($emailObserver);

$event = new Event();
$event->setTitle('Événement 1');
$event->setDescription('Ceci est un événement de test');

$eventManager->modifyEvent($event);
