<?php

require_once 'src/Facade/EventRepository.php';
require_once 'src/Facade/EventRepositoryFacade.php';
require_once 'src/Model/Entity/Event.php';

use EsgiIw\TpDesignPattern\Facade\EventRepository;
use EsgiIw\TpDesignPattern\Facade\EventRepositoryFacade;
use EsgiIw\TpDesignPattern\Model\Entity\Event;

$eventRepository = new EventRepository();
$eventFacade = new EventRepositoryFacade($eventRepository);

$event = new Event();
$event->setTitle('Événement 1');
$event->setDescription('Ceci est un événement de test');
$event->setDateTime('2024-05-15 10:00:00');
$eventFacade->addEvent($event);

$events = $eventFacade->getAllEvents();
echo "Liste des événements :\n";
foreach ($events as $event) {
    echo " - " . $event->getTitle() . ": " . $event->getDescription() . "\n";
}

$existingEvent = $eventFacade->getEventById(1);
if ($existingEvent) {
    $existingEvent->setTitle('Nouveau titre');
    $existingEvent->setDescription('Nouvelle description');
    $eventFacade->updateEvent($existingEvent);
    echo "Événement mis à jour avec succès.\n";
} else {
    echo "Événement non trouvé.\n";
}

$eventToDelete = $eventFacade->getEventById(1);
if ($eventToDelete) {
    $eventFacade->deleteEvent($eventToDelete);
    echo "Événement supprimé avec succès.\n";
} else {
    echo "Événement non trouvé.\n";
}
