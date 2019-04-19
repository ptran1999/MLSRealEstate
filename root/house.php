<html>
<head>
<h1>MLS Real Estate Website</h1>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div>	
		<ul id="navigation-bar">
			<li><a href="index.php">Home</a></li>
			<li><a class = "active" href="house.php">House Info</a></li>
			<li><a href="business.php">Business Property Info</a></li>
			<li><a href="agent.php">Agents Info</a></li>
			<li><a href="buyer.php">Buyers Info</a></li>
		</ul>
	</div>
<?php

include "db_connect.php";
?>
<form action="search_house.php" method="post">
<fieldset>
<legend><h2> Search House</h2><br></legend>
Min Price: <input type="text" name="inputMinPrice"><br>
Max Price: <input type="text" name="inputMaxPrice"><br>
Number of bedrooms preferred: <input type="text" name="inputBedrooms"><br>
Number of bathrooms preferred: <input type="text" name="inputBathrooms"><br>
<input type="submit">
</fieldset>
</form>
<h2>House Information</h2>
<?php 
//Display house
$sql = "SELECT * 
FROM
    House;";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "<table><tr>
		<th>Address</th>
		<th>Bedrooms</th>
		<th>Bathrooms</th>
		<th>Size</th>
	</tr>";
    while($row = $result->fetch_assoc()) {
        echo
		"
			<tr>
				<td>". $row["address"] . "</td>
				<td>". $row["bedrooms"] . "</td>
				<td>". $row["bathrooms"] . "</td>
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