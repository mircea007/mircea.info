<?php
$filename = "mesaje.txt";
$file = fopen(filename, "w");
$past = readfile($filename);

date_default_timezone_set("Romania/Bucharest");

fwrite($file, $past . '<br><br>From: ' . $_GET["name"] . "<br>at time: " . date("h:i") . "<br>at date: " . date("d-m-Y") . "<br>the mesage:<br><br>" . $_GET["mesage"]);

echo "mesajul a fost transmis cu success!";

?>