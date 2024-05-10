<?php

namespace EsgiIw\TpDesignPattern\Builder;

use EsgiIw\TpDesignPattern\Model\Entity\Mail;

class MailBuilder
{
    private $mail;

    public function __construct()
    {
        $this->mail = new Mail();
    }

    public function setRecipient(string $recipient): self
    {
        $this->mail->setRecipient($recipient);
        return $this;
    }

    public function setSubject(string $subject): self
    {
        $this->mail->setSubject($subject);
        return $this;
    }

    public function setMessage(string $message): self
    {
        $this->mail->setMessage($message);
        return $this;
    }

    public function setAttachment(string $attachment): self
    {
        $this->mail->setAttachment($attachment);
        return $this;
    }

    public function build(): Mail
    {
        return $this->mail;
    }
}
