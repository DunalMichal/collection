<?php
function findSubCategory(&$parentCategory, $insertedCategory){
    if($parentCategory["ID"] == $insertedCategory["ParentCategory"]) {
        $parentCategory["SubCategories"][] = array("ID" => $insertedCategory["ID"],"CategoryName" => $insertedCategory["CategoryName"], "Description" => $insertedCategory["Description"], "SubCategories" => array());
    }else{
        foreach($parentCategory["SubCategories"] as &$subCollection) {
           findSubCategory($subCollection, $insertedCategory);
        }
    }
}
function getCategories() {
    global $servername, $username, $password, $dbname;

    $collections = array();

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        echo("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM categories";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

            if($row["ParentCategory"] == 0) {
                $collections[] = array("ID" => $row["ID"],"CategoryName" => $row["CategoryName"], "Description" => $row["Description"], "SubCategories" => array());
            }
            else{
                foreach($collections as &$collection) {
                    findSubCategory($collection, $row);
                }
            }

        }

    }

    $conn->close();

    return $collections;
}
