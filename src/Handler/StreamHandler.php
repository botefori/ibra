<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 26/10/17
 * Time: 18:45
 */

namespace Handler;


class StreamHandler implements HandlerInterface
{
    private $stream;

    public function __construct($stream)
    {
        $this->stream = $stream;
    }

    public function send(string $message, array $context = [])
    {
        fwrite($this->stream, $message, strlen($message));
    }
}