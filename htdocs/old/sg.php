<?php

session_start();
setcookie("testcookie", "testvalue", time() + (86400 * 30), "/");
include '_libs/load.php';

print_r($_SESSION);//with session we can persist data across request.


// if(Session::isset('a')) {
//     printf("A already exists.. value: $a\n");

// } else {
//     Session::set('a', time());
//     print("Assigning new value....\n");
// }

// if(isset($_GET['destroy'])) {
//     printf("destroying....");
//     Session::destroy();
// }
