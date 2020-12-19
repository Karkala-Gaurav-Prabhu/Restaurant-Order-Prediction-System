<html>
	<body>
		<?php
		$conn = mysql_connect("localhost","guest","guest123");
		mysql_select_db("class",$conn);

		$name = $_POST["name"];
		$addr1 = $_POST["addr1"];
		$addr2 = $_POST["addr2"];
		$email = $_POST["email"];

$query = "INSERT INTO employee (ID, name, addr1, addr2, email) VALUES (NULL,'$name','$addr1','$addr2','$email')";
mysql_query($query,$conn) or die(mysql_error($conn));
		?>

<form action = "PHPdisp1.php" method = "POST">
<label>Enter name to search for : <input type = "text" name = "search" />
</label>
<br />
<input type = "submit" />
</form>
	</body>
</html>