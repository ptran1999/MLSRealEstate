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
			<li><a class = "active" href="agent.php">Agents Info</a></li>
			<li><a href="buyer.php">Buyers Info</a></li>
		</ul>
	</div>
<?php

include "db_connect.php";
?>
<?php 
//Display agent
$sql = "SELECT * 
FROM
    agent;";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

		echo "<table><tr>
		<th>AgentId</th>
		<th>Name</th>
		<th>Phone</th>
		<th>FirmId</th>
		<th>Date Started</th>
	</tr>";
    while($row = $result->fetch_assoc()) {
        echo
		"
			<tr>
				<td>". $row["agentId"] . "</td>
				<td>". $row["name"] . "</td>
				<td>". $row["phone"] . "</td>
				<td>". $row["firmId"] . "</td>
				<td>". $row["dateStarted"] . "</td>
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