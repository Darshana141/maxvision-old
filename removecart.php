<?php 
 
 session_start();
 
      $id = $_REQUEST['id']; 
      $sessionuser = $_REQUEST['sessionuser']; 
      
    //    echo $sessionuser;

   	$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "partsvis_maxvision";
  
  $conn = mysqli_connect($servername, $username, $password ,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

  
$prod="delete from opportunities where description = '".$sessionuser."' and next_step = '".$id."' ";
    //  $prod="DELETE FROM opportunities WHERE description = '".$sessionuser."' and next_step = '".$id."'";
     $ans = $conn->query($prod) or die(mysqli_error($conn));
   
 
       
         if($ans)
         {
                      echo "REMOVED FROM CART";
         }
         else

         {

                       echo "NOT ABLE TO REMOVE FROM CART";
          }


          ?>         
