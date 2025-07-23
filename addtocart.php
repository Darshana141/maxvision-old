<?php 
 
 session_start();
 
      $id = $_REQUEST['id']; 
      $sessionuser = $_REQUEST['sessionuser']; 
      $type = $_REQUEST["type"];
      $city_name = $_SESSION['city_name'];
      $state_c = $_SESSION['state_c']; 
      $pin_c = $_SESSION['pin_c'];
      $customerid_c = "https://maxvisionparts.in/admin/index.php?action=DetailView&module=Contacts&record=".$sessionuser;
      date_default_timezone_set('Asia/Kolkata');
      $customername = $_SESSION['name'];
      $todaydate =  date('d-m-Y H:i:s');

    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "partsvis_maxvision";
	
    $conn = mysqli_connect($servername, $username, $password ,$dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $qrycustomer = "SELECT * from contacts_cstm where id_c = '".$sessionuser."'";
    $anscs = $conn->query($qrycustomer);
    $quancs = $anscs->fetch_assoc();
    $accode_c = $quancs["accode_c"];
    $naccode_c = $quancs["naccode_c"];
        
    $sqlm = "SELECT  * from aos_products,aos_products_cstm where deleted=0 and id=id_c and id='".$id."'";
    $resm = $conn->query($sqlm);
    $rowm = $resm->fetch_assoc(); 
    $name = $rowm['name']; 
    $amount_c = $rowm['amount_c']; 
    $dropstatus = $rowm['amount_c']; 

      $sql3c="SELECT UUID()";
      $result1c=$conn->query($sql3c);
      $row1c=$result1c->fetch_assoc();
      $prodidc=$row1c['UUID()'];

 
     $prod="select * from opportunities where description = '".$sessionuser."' and next_step = '".$id."' and deleted=0 ";
     $count = $conn->query($prod) or die(mysqli_error($conn));
     if ($count->num_rows>0){
        //  echo $type;
         $qry = " UPDATE opportunities set probability = '".$type."' where description = '".$sessionuser."' and next_step = '".$id."' ";
        //  echo "It is going here";
        $qry2 = " UPDATE opportunities set deleted = 0 where description = '".$sessionuser."' and next_step = '".$id."' ";
        $co = $conn->query($qry2);

     } 
      else {
          $name = mysqli_escape_string($conn, $name); 
     $qry = "INSERT INTO `opportunities` (`id`, date_entered, deleted, name,description, next_step, probability) VALUES ('".$prodidc."',NOW(),0,'".$name."','".$sessionuser."','".$id."','".$type."')";
     
     $qrycstm = "INSERT INTO `opportunities_cstm` (`id_c`,`city_c`, `naccode_c`, `accode_c`, `customerid_c`, `datecreated_c`, `customername_c`) VALUES ('".$prodidc."','".$city_name."','".$naccode_c."', '".$accode_c."', '".$customerid_c."', '".$todaydate."', '".$customername."');";
     
      }
    
     $ans = $conn->query($qry) or die(mysqli_error($conn)); 
     
     $anscstm = $conn->query($qrycstm) or die(mysqli_error($conn)); 

 
     // echo   $sql="update contacts set assistant='".$fourdigitrandom."'  where id='".$id."'";
                
     //    $tem=$conn->query($sql);
       
         if($ans)
         {
                      echo "UPDATED YOUR CART";
         }
         else

         {

                       echo "NOT ABLE TO UPDATE CART";
          }


          ?>         
