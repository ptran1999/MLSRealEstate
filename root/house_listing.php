<?php 
//Display house listing
$sql = "SELECT * 
FROM
    Listing,
    House
WHERE
    Listing.address = House.address;";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "<table><tr>
		<th>Address</th>
		<th>MLS Number</th>
		<th>Agent Id</th>
		<th>Date Listed</th>
	</tr>";
    while($row = $result->fetch_assoc()) {
        echo
		"
			<tr>
				<td>". $row["address"] . "</td>
				<td>". $row["mlsNumber"] . "</td>
				<td>". $row["agentId"] . "</td>
				<td>". $row["dateListed"] . "</td>
			</tr>
		";
    }
	echo "</table>";
} else {
    echo "0 results";
}
?>