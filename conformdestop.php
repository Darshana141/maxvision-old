<?php
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");

?> 
<!DOCTYPE html>
 <html>
 <head>
   <title>Conform Checkout</title>
 </head>
 <body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  function clearAll() {
   for(i=0; i < document.popup_query_form.length; i++) {
       if(/select/i.test(document.popup_query_form.elements[i].type)) {
          for(x=0; x < document.popup_query_form.elements[i].options.length; x++) {
             document.popup_query_form.elements[i].options[x].removeAttribute('selected');
          }
       }
   }
}

</script>
<center>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="formHeader h3Row">
      <!-- <center><h3><span>VIP!!</span></h3>  </center> -->
    </table>

<table cellpadding="0" cellspacing="0" border="0" width="100%" class="edit view">
<tbody><tr>
<td> 
<center></center><table width="100%" cellpadding="0" cellspacing="0" border="0">
<tbody><tr><td>

 
 <div class="row">
   <div class="conformcart" id="conformcart">
   
<?php
if ($iphone || $android || $palmpre || $ipod || $berry == true)
{ 
    echo ' <center style="font-size: 430%;padding-top: 24px;">
      Re-Confirm To Finalise Your Cart 
        <br><br>
 

<input type="button" class="button" style="font-weight: bold;display: inline;font-size: 100%;"
                       value="Yes"
                       onclick="createeMe()">


<input type="button" class="button" style="font-weight: bold;display: inline;font-size: 100%;"
                       value="No"
                       onclick="closeMe()">
 </center>';
}
else
{
    echo ' <center style="font-size: 166%;padding-top: 24px;">
      Re-Confirm To Finalise Your Cart 
        <br><br>
 

<input type="button" class="button" style="font-weight: bold;display: inline;"
                       value="Yes"
                       onclick="createeMe()">


<input type="button" class="button" style="font-weight: bold;display: inline;"
                       value="No"
                       onclick="closeMe()">
 </center>';
}

?>

 
</div>

<div class="loadingimg" id="loadingimg">

<?php
if ($iphone || $android || $palmpre || $ipod || $berry == true)
{ 
    echo '<center style="font-size: 430%;padding-top: 24px;">
      Your Cart Is being Finalised ...
    <img src="200.gif">
      </center>';
}
else
{
    echo '<center style="font-size: 166%;padding-top: 24px;">
      Your Cart Is being Finalised ...
    <img src="200.gif">
      </center>';
}

?>
 
</div>

<div class="loadcomplete" id="loadcomplete">
     
<?php
if ($iphone || $android || $palmpre || $ipod || $berry == true)
{ 
    echo '  <center style="font-size: 330%;padding-top: 24px;">
      Your Cart Has Been Successfully Finalised And Sent.  
      <br>
        You Can Now View Your Finalised Cart In The "Sent Cart History" Section by Pressing "My Account" Button
        <br>
        <input type="button" class="button" style="font-weight: bold;display: inline;font-size: 100%;"
                       value="Close"
                       onclick="closeMe()">
        </center>';
}
else
{
    echo '  <center style="font-size: 140%;padding-top: 24px;">
      Your Cart Has Been Successfully Finalised And Sent.  
      <br>
        You Can Now View Your Finalised Cart In The "Sent Cart History" Section by Pressing "My Account" Button
        <br>
        <input type="button" class="button" style="font-weight: bold;display: inline;"
                       value="Close"
                       onclick="closeMe()">
        </center>';
}

?>

 </div>

</center>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
     $('#conformcart').show();
     $('#loadingimg').hide();
     $('#loadcomplete').hide();
       
     function createeMe()
{ 
     grandtotal= "<?php echo $id = $_REQUEST['grandtotal'];?>";
  
     $('#conformcart').hide();
     $('#loadingimg').show();
     $('#loadcomplete').hide();
   
 $.ajax({
   url:"invoice.php",   
   method:"POST",
   data:{grandtotal:grandtotal},
   success:function(data){
   
     $('#conformcart').hide();
     $('#loadingimg').hide();
     $('#loadcomplete').show();
   
     }
  });
 
}
    
        function closeMe()
{ 
    window.close();
    window.opener.location.reload(true); 
} 
 
  </script>

</div>

 
</td></tr>
 
</tbody></table>
 </td>
</tr>
</tbody></table>
<script type="text/javascript" src="cache/jsLanguage/en_us.js?v=RAXldKf_3MiPIl4haOhaXw"></script>

 </center>
 
 </body>
 </html>