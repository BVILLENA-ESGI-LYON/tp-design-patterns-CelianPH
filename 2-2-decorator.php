<?php

require_once 'src/Decorator/Event/EventDecorator1.php';
require_once 'src/Decorator/Event/EventDecorator2.php';
require_once 'src/Decorator/Event/EventDecorator3.php';
require_once 'src/Model/Entity/Event.php';

use EsgiIw\TpDesignPattern\Decorator\Event\EventDecorator1;
use EsgiIw\TpDesignPattern\Decorator\Event\EventDecorator2;
use EsgiIw\TpDesignPattern\Decorator\Event\EventDecorator3;
use EsgiIw\TpDesignPattern\Model\Entity\Event;

$event = new Event();
$event->setTitle('Événement test');
$event->setDescription('Ceci est un événement de test');
$event->setDateTime('2024-05-15 10:00:00');

$decorator1 = new EventDecorator1($event);
echo "Description décorée : " . $decorator1->getDescription() . PHP_EOL;

$decorator2 = new EventDecorator2($event);
echo "Titre décoré : " . $decorator2->getTitle() . PHP_EOL;

$decorator3 = new EventDecorator3($event);
echo "Date/heure décorée : " . $decorator3->getDateTime() . PHP_EOL;
