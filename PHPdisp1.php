<html>
	<body>
		<?php
		$conn = mysql_connect("localhost","guest","guest123");
		mysql_select_db("class",$conn);

		$search = $_POST["search"];

	$query = "SELECT * FROM `employee` WHERE `name` = '$search'";
	

		$result = mysql_query($query, $conn);
		if(mysql_num_rows($result) == 0)
			echo "Not found<br />";
		else
			echo "Found<br />";

		$row = mysql_fetch_array($result);
		echo "Name : ".$row["name"];
		echo "<br />Address 1 : ".$row["addr1"];
		echo "<br />Address 2 : ".$row["addr2"];
		echo "<br />Email ID : ".$row["email"];
		?>
	</body>
</html>
