<?php

require_once 'src/Factory/EmailAlertContentFactory.php';
require_once 'src/Factory/SmsAlertContentFactory.php';

use EsgiIw\TpDesignPattern\Factory\EmailAlertContentFactory;
use EsgiIw\TpDesignPattern\Factory\SmsAlertContentFactory;

// Création d'alertes de contenu
$emailFactory = new EmailAlertContentFactory();
$emailAlert = $emailFactory->createAlertContent();
echo $emailAlert->getContent() . PHP_EOL;

$smsFactory = new SmsAlertContentFactory();
$smsAlert = $smsFactory->createAlertContent();
echo $smsAlert->getContent() . PHP_EOL;
