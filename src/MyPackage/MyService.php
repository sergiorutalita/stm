<?php

// src/MyPackage/MyService.php

namespace MyPackage;

class MyService
{
    private $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function doSomething()
    {
        // Utilizamos la configuración
        $param1 = $this->config['param1'];
        $param2 = $this->config['param2'];

        // Hacer algo con los parámetros...
    }
}

