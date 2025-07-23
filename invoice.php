<?php 

$grandtotal = $_POST['grandtotal'];
session_start();
$sessionuser = $_SESSION['sessionuser'];

$user = $_SESSION['name'];
$rid  = $_SESSION['rid'];
$type = $_SESSION['type'];
$city_name = $_SESSION['city_name'];
$companyadd1_c = $_SESSION['companyadd1_c'];
$state_c = $_SESSION['state_c'];
$pin_c = $_SESSION['pin_c'];
$assigned_user_id = $_SESSION['assigned_user_id'];
$salesmanid = $_SESSION['salesmanid'];
date_default_timezone_set('Asia/Kolkata');
$todaydate =  date('d-m-Y H:i:s');

if($salesmanid == "")
{
    $salesid = 'dcf2e20d-301c-69df-38ad-5f80b94d28b3'; 
}
else
{
    $salesid = $salesmanid;
}

if ($rid == "") {
    echo "";
}else{


        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "partsvis_maxvision";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 

	                  $sql11="SELECT UUID()";
	                  $result11=$conn->query($sql11);
	                  $row11=$result11->fetch_assoc();
	                  $pid=$row11['UUID()'];

                       $numbercount="select MAX(number) from aos_invoices";
                       $res_numbercount = $conn->query($numbercount);
                       $row = $res_numbercount->fetch_assoc(); 
                       $addnumbercount = $row['MAX(number)']+1;
 
	       $opportunities="INSERT INTO `aos_invoices`(`id`, `name`, `number`, `assigned_user_id`,`deleted`, `total_amt`,`subtotal_amount`,`subtotal_amount_usdollar`,`total_amount`, `billing_contact_id`, `status`, `billing_address_street`, `billing_address_city`, `billing_address_state`, `billing_address_postalcode`, `billing_address_country`, `shipping_address_street`, `shipping_address_city`, `shipping_address_state`, `shipping_address_postalcode`, `shipping_address_country`,`description`,`created_by`) VALUES ('".$pid."','".$user."','".$addnumbercount."','".$assigned_user_id."',0,'".$grandtotal."','".$grandtotal."','".$grandtotal."','".$grandtotal."','".$rid."','New','".$companyadd1_c."','".$city_name."','".$state_c."','".$pin_c."','India','".$companyadd1_c."','".$city_name."','".$state_c."','".$pin_c."','India','".$todaydate."','".$salesid."')";
                    
            $res_prodd = $conn->query($opportunities); 

                   
                    $sql2="SELECT UUID()";
                    $result1=$conn->query($sql2);
                    $row1=$result1->fetch_assoc();
                    $gid=$row1['UUID()'];

                    echo "<br>"; 
            
 
           echo  $li="INSERT INTO `aos_line_item_groups`(`id`, `name`,`deleted`,`parent_type`, `parent_id`) VALUES('".$gid."','Cart Products',0,'AOS_Invoices','".$pid."')";
                    $conn->query($li);
            

$qry = "SELECT DISTINCT next_step,probability from opportunities where description = '".$rid."' and deleted = 0 "; //customer cart products
$ans = $conn->query($qry);
if ($ans->num_rows>0){
while ($cart_prod = $ans->fetch_assoc()){
 
                   $productiqty = $cart_prod['probability'];

                      $sql3="SELECT UUID()";
                      $result1=$conn->query($sql3);
                      $row1=$result1->fetch_assoc();
                      $prodid=$row1['UUID()'];

                      $opp_prod="SELECT * FROM aos_products,aos_products_cstm where id=id_c and id = '".$cart_prod["next_step"]."'";
                      $resultp=$conn->query($opp_prod);
                      $rowp=$resultp->fetch_assoc();
                      $opp_name = $rowp['name'];  
                      $opp_prodid = $rowp['id']; 
                      $opp_part_number = $rowp['part_number'];
                      $opp_price = $rowp['price'];
                      $tot_price = $opp_price*$productiqty;
            
                      $product_id = $rowp["part_number"]; 
                      $prod="INSERT INTO `aos_products_quotes` (`id`, `name`,`deleted`,`product_qty`,`product_list_price`, `product_unit_price`, `product_unit_price_usdollar`,`product_total_price`,`part_number`, `parent_type`, `parent_id`, `product_id`, `group_id`,`vat`,`discount`) VALUES ('".$prodid."','".$product_id."',0,'".$productiqty."','".$opp_price."', '".$opp_price."', '".$opp_price."', '".$tot_price."', '".$opp_part_number."','AOS_Invoices', '".$pid."','".$opp_prodid."', '".$gid."', '0.0', '0.0')";
                 $conn->query($prod);echo "<br>";

echo '<br>';
                          

 }
}
 

$qry1 = "SELECT * from opportunities where description = '".$rid."' and deleted = 0 "; //customer cart products
$ans1 = $conn->query($qry1);
if ($ans1->num_rows>0){
while ($cart_prod1 = $ans1->fetch_assoc()){
 
$cart_prod1id = $cart_prod1['id'];

    $prod=" UPDATE opportunities set deleted = 1 where id = '".$cart_prod1id."' ";
     $ans = $conn->query($prod) or die(mysqli_error($conn));
  
  }
}


} 
 
?>