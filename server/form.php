<html>
<head>

</head>
<body onload="document.myform.cmd.focus();">
<h3>Enter command for client station</h3>
        <form action="httpsh.php" method="post" name="myform">
                Command: <input type="text" name="cmd" ><br><br>
                <input type="submit" name="submit" value="Enter command">
                <input type="submit" name="submit" value="Clear output window">
                <input type="submit" name="submit" value="Clear history">
        </form>
<hr>
</body>
</html>
