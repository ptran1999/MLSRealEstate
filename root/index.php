<html>
<head>
	<h1>MLS Real Estate Website</h1>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<div>	
		<ul id="navigation-bar">
			<li><a class = "active" href="index.php">Home</a></li>
			<li><a href="house.php">House Info</a></li>
			<li><a href="business.php">Business Property Info</a></li>
			<li><a href="agent.php">Agents Info</a></li>
			<li><a href="buyer.php">Buyers Info</a></li>
		</ul>
	</div>
<?php

include "db_connect.php";

echo "<h2>House Listing</h2><br>";
include "house_listing.php";

echo "<h2>Business Property Listing</h2><br>";
include "businessproperty_listing.php";

mysqli_close($link);
?>

</body>
</html>
		