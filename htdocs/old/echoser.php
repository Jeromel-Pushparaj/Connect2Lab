<?php
// File: echo_server.php

// Create a new Swoole server instance
$server = new Swoole\Server("0.0.0.0", 9501);

// Set up the server configuration
$server->set([
    'worker_num' => 4, // Number of worker processes
    'backlog' => 128,  // The backlog for incoming connections
]);

// Event listener for when the server starts
$server->on("Start", function ($server) {
    echo "Swoole Echo Server started at 0.0.0.0:9501\n";
});

// Event listener for when a client connects
$server->on("Connect", function ($server, $fd) {
    echo "Client connected: {$fd}\n";
});

// Event listener for receiving data
$server->on("Receive", function ($server, $fd, $reactor_id, $data) {
    // Echo the received data back to the client
    $server->send($fd, "Server received: " . $data);
});

// Event listener for when a client disconnects
$server->on("Close", function ($server, $fd) {
    echo "Client disconnected: {$fd}\n";
});

// Start the server
$server->start();
