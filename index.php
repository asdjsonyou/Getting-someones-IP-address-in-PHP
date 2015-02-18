<?php

  $ip = $_SERVER['REMOTE_ADDR']; // Grabbing the IP
  $time = date("l F dS h:i A Y"); // Logging the time and date
  $hostaddress = gethostbyaddr($ip); // Host name
  $browser = $_SERVER['HTTP_USER_AGENT']; // needs work
  $referred = $_SERVER['HTTP_REFERER']; // referrer

           //Writing the time and date to a file

  $myFile = "users.txt";
  $fh = fopen($myFile, 'a') or die("can't open file");
  $stringData = "$time\n  ";
  fwrite($fh, $stringData);
  fclose($fh);

          // writing Ip address to the same file

  $myFile = "users.txt"; // value 1
  $fh = fopen($myFile, 'a') or die("can't open file");
  $stringData = "$ip\n  ";
  fwrite($fh, $stringData);
  fclose($fh);

          // also writing hostname to the same file

  $myFile = "users.txt"; // value 2
  $fh = fopen($myFile, 'a') or die("can't open file");
  $stringData = "$hostaddress\n  ";
  fwrite($fh, $stringData);
  fclose($fh);
  print "<strong> </strong><br/>\n";

           if ($referred == "")
              {
                print "";
               
              }else{

	             print "$referred";
              }
   ?>

<!-- Redirectng to a different page (this is optional just delete this javascript if u dont want to redirect) -->

<script type="text/javascript">
   window.location = "http://jaysonzabate.com/"
</script>
  
