<html>
<head>
	<meta http-equiv="refresh" content="5">
</head>
<body>
<table width=100%>
	<tr>
		<td><b>Command output</b></td>
		<td><b>Command history</b></td>
	</tr>

	<tr>
		<td>

			<table border=0 cellspacing=0 cellpadding=0 style="background-color:000000; color:white;">
		        <tr>
			<td margin-right:20px>
			<div style="overflow:auto; width: 700px; height:500px; padding-right:15px; padding-left:10px; padding-top:10px; ">



			<?php
        	            $myout = "postdata.txt";
		            echo nl2br(file_get_contents($myout));
			?>
			</div>
			</td>
			</tr>
			</table>
		</td>

		<td valign=top>
		<?php
                    $myhist = "history.txt";
                    echo nl2br(file_get_contents($myhist));
		?>
		</td>
	</tr>
</table>


</body>
</html>

