<?php

require_once 'src/Factory/FileLoginAlertFactory.php';
require_once 'src/Factory/DatabaseLoginAlertFactory.php';
require_once 'src/Factory/EmailLoginAlertFactory.php';

use EsgiIw\TpDesignPattern\Factory\FileLoginAlertFactory;
use EsgiIw\TpDesignPattern\Factory\DatabaseLoginAlertFactory;
use EsgiIw\TpDesignPattern\Factory\EmailLoginAlertFactory;

// Création d'alertes de connexion à l'aide des différentes factories
$fileFactory = new FileLoginAlertFactory();
$fileAlert = $fileFactory->createAlert();
$fileAlert->sendAlert();

$databaseFactory = new DatabaseLoginAlertFactory();
$databaseAlert = $databaseFactory->createAlert();
$databaseAlert->sendAlert();

$emailFactory = new EmailLoginAlertFactory();
$emailAlert = $emailFactory->createAlert();
$emailAlert->sendAlert();
