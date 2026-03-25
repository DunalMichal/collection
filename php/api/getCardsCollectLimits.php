<?php
function getCardsCollectLimits($collectionID, $cardID)
{
global $servername, $username, $password, $dbname;

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ToCollect
FROM how_many_to_collect_in_collection
WHERE collectionID = ? AND cardID = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("is", $collectionID, $cardID);
$stmt->execute();
$result = $stmt->get_result();

$toCollect = null;
if ($row = $result->fetch_assoc()) {
$toCollect = $row['ToCollect'];
}

$stmt->close();
$conn->close();

return $toCollect;
}
