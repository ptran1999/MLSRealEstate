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
			<li><a href="business.php">Business Property Info</a></li>
			<li><a href="agent.php">Agents Info</a></li>
			<li><a class = "active" href="buyer.php">Buyers Info</a></li>
		</ul>
	</div>
<?php

include "db_connect.php";
?>
<?php 
//Display buyer
$sql = "SELECT * 
FROM
    buyer;";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
		echo "<table><tr>
		<th>Id</th>
		<th>Name</th>
		<th>Phone</th>
		<th>Property Type</th>
		<th>#Bedroom preferred</th>
		<th>#Bathroom preferred</th>
		<th>Business Property Type</th>
		<th>Min Price</th>
		<th>Max Price</th>
	</tr>";
    while($row = $result->fetch_assoc()) {
        echo
		"
			<tr>
				<td>". $row["id"] . "</td>
				<td>". $row["name"] . "</td>
				<td>". $row["phone"] . "</td>
				<td>". $row["propertyType"] . "</td>
				<td>". $row["bedrooms"] . "</td>
				<td>". $row["bathrooms"] . "</td>
				<td>". $row["businessPropertyType"] . "</td>
				<td>". $row["minimumPreferredPrice"] . "</td>
				<td>". $row["maximumPreferredPrice"] . "</td>
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