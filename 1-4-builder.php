<?php

require_once 'src/Builder/MailBuilder.php';
require_once 'src/Model/Entity/Mail.php';

use EsgiIw\TpDesignPattern\Builder\MailBuilder;

// Création d'un mail avec le MailBuilder
$mailBuilder = new MailBuilder();
$mail = $mailBuilder
    ->setRecipient('recipient@example.com')
    ->setSubject('Sujet du mail')
    ->setMessage('Contenu du mail')
    ->setAttachment('chemin/vers/fichier.pdf')
    ->build();

// Affichage des détails du mail
echo "Destinataire : " . $mail->getRecipient() . PHP_EOL;
echo "Sujet : " . $mail->getSubject() . PHP_EOL;
echo "Message : " . $mail->getMessage() . PHP_EOL;
echo "Pièce jointe : " . $mail->getAttachment() . PHP_EOL;
