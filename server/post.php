//ak tento script vola klient, zapis parameter "postdata" do suboru. Predtym este sformatuj.

<?php 

$fh = fopen("postdata.txt", "a");
$savestring = $_POST["postdata"];
//zamenim <DIR> za DIR, lebo to zle odsadzalo text pri zobrazovani commandu "dir" 
$formatted = str_replace("<DIR>", "DIR", $savestring);
fwrite($fh, $formatted);
fclose($fh);

?>
