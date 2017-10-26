<?php

declare(strict_types=1);

class Logger
{
    private $handler;

    public function __construct(\Handler\HandlerInterface $handler)
    {
        $this->handler = $handler;
    }

    public function info(string $message)
    {
        $this->log('info: '.$message);
    }

    public function error(string $message)
    {
        $this->log('error: '.$message);
    }

    public function log(string $message)
    {
        $this->handler->send($message);
    }
}