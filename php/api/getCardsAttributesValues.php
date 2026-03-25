<?php


function getCardsAttributesValues($attributeID)
{
    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        echo("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT attributes_values.ID, attributes_values.Value FROM attributes_values
    WHERE AttributeID = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $attributeID);
    $stmt->execute();
    $result = $stmt->get_result();

    $data = [];
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    $conn->close();

    return $data;

}
