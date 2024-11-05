<?php
// // File: request_report.php
// $logFile = 'request_log.txt';

// if (!file_exists($logFile)) {
//     die("Log file does not exist.");
// }

// // Read the file content
// $logContent = file($logFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// // Total number of requests
// $totalRequests = count($logContent);

// // Initialize time grouping (for example, group by seconds)
// $requestCountBySecond = [];

// // Loop through each log entry
// foreach ($logContent as $entry) {
//     // Parse the date and time from each entry
//     $dateTime = DateTime::createFromFormat('Y-m-d H:i:s.u', trim($entry));
    
//     if ($dateTime) {
//         // Group by second (you can change this to group by minute or hour)
//         $secondKey = $dateTime->format('Y-m-d H:i:s');
//         if (isset($requestCountBySecond[$secondKey])) {
//             $requestCountBySecond[$secondKey]++;
//         } else {
//             $requestCountBySecond[$secondKey] = 1;
//         }
//     }
// }

// // Display the total requests
// echo "Total requests handled: $totalRequests\n";

// // Display the number of requests per second (or other grouping)
// echo "\nRequests per second:\n";
// foreach ($requestCountBySecond as $time => $count) {
//     echo "$time: $count requests\n";
// }


// File: high_traffic_test.php

// Respond as fast as possible without doing anything
http_response_code(200);
echo "Request received";

// End script to minimize execution time
exit();
