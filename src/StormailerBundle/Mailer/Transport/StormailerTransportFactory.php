<?php

// src/StormailerBundle/Mailer/Transport/StormailerTransportFactory.php
namespace App\StormailerBundle\Mailer\Transport;

use Symfony\Component\Mailer\Transport\Dsn;
use Symfony\Component\Mailer\Transport\TransportFactoryInterface;
use Symfony\Component\Mailer\Transport\TransportInterface;

class StormailerTransportFactory implements TransportFactoryInterface
{
    public function create(Dsn $dsn): TransportInterface
    {
        $host = $dsn->getHost();
        $port = $dsn->getPort();

        return new StormailerTransport($host, $port);
    }

    public function supports(Dsn $dsn): bool
    {
        return 'stormailer' === $dsn->getScheme();
    }
}
