<html>
<head>
<h1>MLS Real Estate Website</h1>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div>	
		<ul id="navigation-bar">
			<li><a href="index.php">Home</a></li>
			<li><a href="house.php">House Info</a></li>
			<li><a class = "active" href="business.php">Business Property Info</a></li>
			<li><a href="agent.php">Agents Info</a></li>
			<li><a href="buyer.php">Buyers Info</a></li>
		</ul>
	</div>
<?php

include "db_connect.php";
?>
<form action="search_business.php" method="post">
<fieldset>
<legend><h2> Search Business Property</h2><br></legend>
Min Price: <input type="text" name="inputMinPrice"><br>
Max Price: <input type="text" name="inputMaxPrice"><br>
Min Size: <input type="text" name="inputMinSize"><br>
Max Size: <input type="text" name="inputMaxSize"><br>
<input type="submit">
</fieldset>
</form>
<h2>Business Property Information</h2>
<?php 
//Display business properties
$sql = "SELECT * 
FROM
    businessproperty;";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
		echo "<table><tr>
		<th>Address</th>
		<th>Type</th>
		<th>Size</th>
	</tr>";
    while($row = $result->fetch_assoc()) {
        echo
		"
			<tr>
				<td>". $row["address"] . "</td>
				<td>". $row["type"] . "</td>
				<td>". $row["size"] . "</td>
			</tr>
		";
    }
	echo "</table>";
} else {
    echo "0 results";
}
?>
</body>
</html>