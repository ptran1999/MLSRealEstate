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
//Search for businessproperty based on price range and size range
include "db_connect.php";

$inputMinPrice = $_POST["inputMinPrice"];
$inputMaxPrice = $_POST["inputMaxPrice"];
$inputMinSize = $_POST["inputMinSize"];
$inputMaxSize = $_POST["inputMaxSize"];

$sql = "SELECT * 
FROM
    businessproperty
JOIN
    Property ON businessproperty.address = Property.address
WHERE
	price >= $inputMinPrice AND
	price <= $inputMaxPrice AND
	size >= $inputMinSize AND
	size <= $inputMaxSize;
	";
	
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