<?php

declare(strict_types=1);

namespace Handler;


interface HandlerInterface
{
    public function send(string $message, array $context = []);
}