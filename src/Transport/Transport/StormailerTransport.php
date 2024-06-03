<?php

// src/StormailerBundle/Mailer/Transport/StormailerTransport.php
namespace App\StormailerBundle\Mailer\Transport;

use Symfony\Component\Mailer\Envelope;
use Symfony\Component\Mailer\SentMessage;
use Symfony\Component\Mailer\Transport\TransportInterface;
use Symfony\Component\Mime\RawMessage;

class StormailerTransport implements TransportInterface
{
    private $host;
    private $port;

    public function __construct(string $host, int $port)
    {
        $this->host = $host;
        $this->port = $port;
    }

    public function send(RawMessage $message, Envelope $envelope = null): ?SentMessage
    {
        // Implementa la lógica para enviar el correo usando Stormailer
        echo sprintf("Enviando correo a través de Stormailer a %s:%d\n", $this->host, $this->port);
        
        return new SentMessage($message, $envelope ?? new Envelope($message->getFrom()[0], $message->getTo()));
    }

    public function __toString(): string
    {
        return sprintf('stormailer://%s:%d', $this->host, $this->port);
    }
}
