<?php
namespace Ratchet\WebSocket;
use mfmdevsystem\RFC6455\Messaging\MessageBuffer;

class ConnContext {
    /**
     * @var \Ratchet\WebSocket\WsConnection
     */
    public $connection;

    /**
     * @var \mfmdevsystem\RFC6455\Messaging\MessageBuffer;
     */
    public $buffer;

    public function __construct(WsConnection $conn, MessageBuffer $buffer) {
        $this->connection = $conn;
        $this->buffer = $buffer;
    }
}
