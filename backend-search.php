<?php

                     	$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "partsvis_maxvision";
 
// Create connection
$conn = mysqli_connect($servername, $username, $password ,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$term = $_REQUEST["term"];
//echo $term;
    // Prepare a select statement
    $sql23 = "SELECT DISTINCT * from aos_products,aos_products_cstm WHERE DELETED=0 and id=id_c and name LIKE '%$term%' UNION 
    SELECT DISTINCT * from aos_products,aos_products_cstm WHERE DELETED=0 and id=id_c and part_number LIKE '%$term%' UNION 
    SELECT DISTINCT * from aos_products,aos_products_cstm WHERE DELETED=0 and id=id_c and description LIKE '%$term%' UNION 
    SELECT DISTINCT * from aos_products,aos_products_cstm WHERE DELETED=0 and id=id_c and vehicle_c LIKE '%$term%' UNION 
    SELECT DISTINCT * from aos_products,aos_products_cstm WHERE DELETED=0 and id=id_c and model_c LIKE '%$term%'  order by part_number asc";
    $result23 = $conn->query($sql23);
    if (!$result23) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if ($result23->num_rows > 0) {
        $result = array();
    while($row23 = $result23->fetch_assoc()) {
        //echo $row23;
        $response = array(
            'id' => $row23["id"],
            'name' => $row23["name"],
            'url' => $row23["url"],
            'part_number' => $row23["part_number"],
            'oemcode' => $row23["description"],
            'vehicle' => $row23["vehicle_c"],
            'model' => $row23["model_c"],
            //'video' => $row23["video2_c"],
            'status' => true
        );
        array_push($result, $response);
    }
        echo json_encode($result);
            } else{
                $response = array(
                'id' => "na",
                'name' => "na",
                'status' => false
            );
            echo json_encode($response);
            }
     
    // Close statement
    
?>