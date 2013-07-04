<html>
<body>

<h3>Enter command for client station</h3>
	<form action="process.php" method="post">
		Command: <input type="text" name="cmd"><br><br>
		<input type="submit" name="submit" value="Enter command">
		<input type="submit" name="submit" value="Clear output window">
		<input type="submit" name="submit" value="Clear history">
	</form>
<hr>

<table width=100%>
	<tr>
		<td width=70%><b>Command output</b></td>
		<td width=30%><b>Command history</b></td>
	</tr>

	<tr>
		<td>

		<?php
                    $myout = "output.txt";
               echo nl2br(file_get_contents($myout));
//		include ("output.txt");
		?>
		</td>

		<td>
		<?php
                    $myhist = "history.txt";
                    echo nl2br(file_get_contents($myhist));
		?>
		</td>
	</tr>
</table>


<?php

?>
</body>
</html>

