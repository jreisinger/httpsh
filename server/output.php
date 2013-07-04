<?php 

echo $_GET["out"];
$fh = fopen("output.txt", "a");
$savestring = $_GET["out"];
fwrite($fh, $savestring);
fclose($fh);


 ?>
