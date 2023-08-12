<?php

$my_file = fopen("location.txt","w");
$information = "lat:" . $_GET["lat"] . "long:" . $GET["long"];
fwrite($my_file,$information);
fclose($my_file);

?>