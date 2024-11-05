<?php
// Log the current time when the request is received
$logFile = 'request_log.txt';
$currentTime = date('Y-m-d H:i:s.u') . "\n"; // Microseconds precision

// Append the current time to the log file
file_put_contents($logFile, $currentTime, FILE_APPEND);

// Output response (optional)
echo "Request received at: $currentTime";
