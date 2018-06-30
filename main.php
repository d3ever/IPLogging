<?php
// Create dayns.html file and set permission to 0777
$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$dateTime = date('Y/m/d G:i:s');
$file = "dayns.html";
$file = fopen($file, "a");
$data = "<pre><b>User IP</b>: $ip <b> Browser</b>: $browser <br>, time: $dateTime <br></pre>";
fwrite($file, $data);
fclose($file);
?>
