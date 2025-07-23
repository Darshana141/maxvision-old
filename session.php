<?php
 
   
   session_start();
   
         $rid = $_REQUEST['rid']; 
         $name = $_REQUEST['name']; 
         $type = $_REQUEST['type']; 
         $city_name = $_REQUEST['city_name']; 
         $companyadd1_c = $_REQUEST['companyadd1_c'];  
         $state_c = $_REQUEST['state_c']; 
         $pin_c = $_REQUEST['pin_c']; 
         $assigned_user_id = $_REQUEST['assigned_user_id']; 
         $salesmanid = $_REQUEST['salesmanid']; 
     
                 $_SESSION['name']=$name;
             echo     $_SESSION['rid']=$rid;
                 $_SESSION['type']=$type;
                 $_SESSION['city_name']=$city_name;
                 $_SESSION['companyadd1_c']=$companyadd1_c;
                 $_SESSION['state_c']=$state_c;
                 $_SESSION['pin_c']=$pin_c;
                 $_SESSION['assigned_user_id']=$assigned_user_id;
                 $_SESSION['salesmanid']=$salesmanid;
                 
?>