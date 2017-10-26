<?php

declare(strict_types=1);

namespace Handler;

use PHPUnit\Framework\TestCase;

class StreamHandlerTest extends TestCase
{
    /** @var StreamHandler */
    private $streamHandler;

    /** @var resource */
    private $stream;

    public function setUp()
    {
        $this->stream = fopen('php://memory', 'w+');
        $this->streamHandler = new StreamHandler($this->stream);
    }

    public function testConstructor()
    {
        $this->assertInstanceOf(StreamHandler::class, $this->streamHandler);
    }

    public function testSend()
    {
        $this->streamHandler->send('chalut les gars');

        $this->assertEquals('chalut les gars', stream_get_contents($this->stream, -1, 0));
    }
}