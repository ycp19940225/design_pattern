<?php

namespace App\structural_mode\Dependency;

class Connection
{
    /**
     * @var ArrayConfig
     */
    private $config;
    private $host;

    public function __construct(ArrayConfig $config)
    {
        $this->config = $config;
    }

    public function connect()
    {
        $this->host = $this->config->get('host');

        // todo 连接
    }

    public function getHost()
    {
        return $this->host;
    }
}