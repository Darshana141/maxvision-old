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
    </table>

<table cellpadding="0" cellspacing="0" border="0" width="100%" class="edit view">
<tbody><tr>
<td> 
<center></center><table width="100%" cellpadding="0" cellspacing="0" border="0">
<tbody><tr><td>

 
 <div class="row">

<?php
if ($iphone || $android || $palmpre || $ipod || $berry == true)
{ 
    echo '<center style="font-size: 100px;padding-top: 24px;">
      Re-Confirm To Delete Product 
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
    echo '    <center style="font-size: 166%;padding-top: 24px;">
      Re-Confirm To Delete Product 
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

 
<script>
 

     function createeMe()
{ 
    id= "<?php echo $id = $_REQUEST['id'];?>";
    sessionuser= "<?php echo $id = $_REQUEST['sessionuser'];?>";
     
$.ajax({
    url: 'removecart.php',
    type: "POST",
    data: {
        id: id,
        sessionuser: sessionuser
    },
    success: function(response) {
          window.close();
         window.location.href = "https://maxvisionparts.in/cart.php";
         window.opener.location.reload(true);
    },
}); 
 
}
 

     function closeMe()
  {
     window.location.href = "https://maxvisionparts.in/cart.php"; 
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