<?php
session_start();
$id = $_REQUEST['sessionuser'];
if ($id == ''){
    echo false;
}
$prod_id = $_REQUEST['id'];
if ($prod_id == ''){
    echo false;
}

	$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "partsvis_maxvision";

$db = mysqli_connect($servername, $username, $password ,$dbname);
if (!$db) {
   echo false;
}

$sql1 = "SELECT  * from cases,cases_cstm where deleted=0 and id=id_c and id='".$prod_id."'";
$res1 = $db->query($sql1);
    while ($row = $res1->fetch_assoc()){
        $sql3c="SELECT UUID()";
        $result1c=$db->query($sql3c);
        $row1c=$result1c->fetch_assoc();
        $prodidc=$row1c['UUID()'];
        $sql3 = "SELECT FROM aos_products where deleted = 0 and url='".$row['id']."' and part_number='".$id."'";
        $res3 = $db->query($sql3);
        if ($res3->num_rows > 0){
            echo "Product already in cart";
        } else {
        $sql2 = "INSERT INTO aos_products(id, name, url, deleted, part_number) VALUES ('".$prodidc."', '".$row['name']."', '".$row['id']."', 0, '".$id."')";
        $res2 = $db->query($sql2);
        if ($res2){
            echo "Added to cart successfully!";
        } else {
            echo "Couldn't add product to cart!";
            //echo mysqli_error($db);
        }
    }
    }

?>