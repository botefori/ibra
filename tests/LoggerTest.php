<?php

namespace Tests;

use Handler\HandlerInterface;
use PHPUnit\Framework\TestCase;

class LoggerTest extends TestCase
{
    /** @var \Logger */
    private $logger;
    /** @var HandlerInterface|\PHPUnit_Framework_MockObject_MockObject */
    private $handler;

    public function setUp()
    {
        $this->handler = $this->createMock(HandlerInterface::class);
        $this->logger = new \Logger($this->handler);
    }

    public function testError()
    {
        $this->handler
            ->expects($this->once())
            ->method('send')
            ->with('error: chalut');

        $this->logger->error('chalut');
    }

    public function testInfo()
    {
        $this->handler
            ->expects($this->once())
            ->method('send')
            ->with('info: chalut');

        $this->logger->info('chalut');
    }
}