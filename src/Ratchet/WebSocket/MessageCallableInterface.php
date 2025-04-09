<?php
namespace Ratchet\WebSocket;
use Ratchet\ConnectionInterface;
use mfmdevsystem\RFC6455\Messaging\MessageInterface;

interface MessageCallableInterface {
    public function onMessage(ConnectionInterface $conn, MessageInterface $msg);
}
