<?php

namespace EsgiIw\TpDesignPattern\Model\Entity;

class Mail
{
    private $recipient;
    private $subject;
    private $message;
    private $attachment;

    public function setRecipient(string $recipient): void
    {
        $this->recipient = $recipient;
    }

    public function setSubject(string $subject): void
    {
        $this->subject = $subject;
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    public function setAttachment(string $attachment): void
    {
        $this->attachment = $attachment;
    }

    // Getters for attributes (optional)

    public function getRecipient(): string
    {
        return $this->recipient;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getAttachment(): string
    {
        return $this->attachment;
    }
}
