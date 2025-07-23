<?php
// $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
// $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
// $palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
// $berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
// $ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");

// if ($iphone || $android || $palmpre || $ipod || $berry == true)
// {
// header('Location: https://maxvisionparts.in/indexmobil.php');
 
// }

session_start();

$user = $_SESSION['name'];
$rid  = $_SESSION['rid'];
$type  = $_SESSION['type'];
$city_name = $_SESSION['city_name'];

if($user=='')
{
$user="";
}

$sessionuser=$_SESSION['sessionuser'];
$salesmanid = $_REQUEST["salesman"];

if (empty($salesmanid)) { 
}
else
{ 
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>

name='<?php echo $_REQUEST["name"];?>';
rid='<?php echo   $_REQUEST["rid"];?>';
type='<?php echo  $_REQUEST["type"];?>';
city_name='<?php echo   $_REQUEST["cityname"];?>';
companyadd1_c='<?php echo   $_REQUEST["companyadd1_c"];?>';
state_c='<?php echo  $_REQUEST["state"];?>';
pin_c='<?php echo   $_REQUEST["pin_c"];?>';
assigned_user_id='<?php echo   $salesmanid;?>';
salesmanid='<?php echo   $salesmanid;?>';

window.localStorage.setItem("name",name);
window.localStorage.setItem("rid",rid);
window.localStorage.setItem("type",type);
window.localStorage.setItem("city_name",city_name);
window.localStorage.setItem("companyadd1_c",companyadd1_c);
window.localStorage.setItem("state_c",state_c);
window.localStorage.setItem("pin_c",pin_c);
window.localStorage.setItem("assigned_user_id",assigned_user_id);
window.localStorage.setItem("salesmanid",assigned_user_id);

$.ajax({
url: 'session.php',
type: "POST",
data: {name:name,rid:rid,type:type,city_name:city_name,companyadd1_c:companyadd1_c,state_c:state_c,pin_c:pin_c,assigned_user_id:assigned_user_id},
success: function (response) { 
 //  alert(response);
window.location.href='index.php';
},  
});


</script>
<?php                


}


$user = $_SESSION['name'];
$rid  = $_SESSION['rid'];
$type  = $_SESSION['type'];
$city_name = $_SESSION['city_name'];

if($user=='')
{
$user="";
}
?>
<html lang="en" dir="ltr">
<head> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="format-detection" content="telephone=no">
<title>Maxvision</title>
<link rel="icon" type="image/png" href="images/favicon.png">
 fonts 
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
 css 
<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="vendor/owl-carousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="vendor/photoswipe/photoswipe.css">
<link rel="stylesheet" href="vendor/photoswipe/default-skin/default-skin.css">
<link rel="stylesheet" href="vendor/select2/css/select2.min.css">
<link rel="stylesheet" href="newstyle.css">
<link rel="stylesheet" href="css/style.header-spaceship-variant-one.css" media="(min-width: 1200px)">
<link rel="stylesheet" href="css/style.mobile-header-variant-one.css" media="(max-width: 1199px)">
 font - fontawesome 
<link rel="stylesheet" href="vendor/fontawesome/css/all.min.css">
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-8">

</script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
idname =  localStorage.getItem('name');
idrid = localStorage.getItem('rid');
idtype =  localStorage.getItem('type');
idcity_name = localStorage.getItem('city_name');
idcompanyadd1_c = localStorage.getItem('companyadd1_c');
idstate_c = localStorage.getItem('state_c');
idpin_c = localStorage.getItem('pin_c');
idassigned_user_id =  localStorage.getItem('assigned_user_id');


$.ajax({
url: 'session.php',
type: "POST",
data: {name:idname,rid:idrid,type:idtype,city_name:idcity_name,companyadd1_c:idcompanyadd1_c,state_c:idstate_c,pin_c:idpin_c,assigned_user_id:idassigned_user_id},
success: function (response) { 
//  alert(response);
},  
});


<?php                
   
$user = $_SESSION['name'];
$rid  = $_SESSION['rid'];
$type  = $_SESSION['type'];
$city_name = $_SESSION['city_name'];
 
?>

 window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag("js", new Date()); gtag("config", "UA-97489509-8");</script>
 site 
<div class="site">
 site__mobile-header 
 <header class="site__mobile-header">
<div class="mobile-header">
<div class="container">
<div class="mobile-header__body"><button class="mobile-header__menu-button" type="button"><svg width="18px" height="14px">
<path d="M-0,8L-0,6L18,6L18,8L-0,8ZM-0,-0L18,-0L18,2L-0,2L-0,-0ZM14,14L-0,14L-0,12L14,12L14,14Z"></path>
</svg></button>
<a class="mobile-header__logo" href="#">
 mobile-logo !-- mobile-logo / end 
<img src="newlogo.png" width="130" height="40" alt="">
</a>
<?php  
if($user=="")
{
echo "";
} 
else{  
?>
<div class="mobile-header__search mobile-search">
<form class="mobile-search__body"><input type="text" id="search-input-mobile" class="mobile-search__input" placeholder="Enter keyword or part number" style="
    background: white;"> <button type="submit" class="mobile-search__button mobile-search__button--search"><svg width="20" height="20">
<path d="M19.2,17.8c0,0-0.2,0.5-0.5,0.8c-0.4,0.4-0.9,0.6-0.9,0.6s-0.9,0.7-2.8-1.6c-1.1-1.4-2.2-2.8-3.1-3.9C10.9,14.5,9.5,15,8,15
c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7c0,1.5-0.5,2.9-1.3,4c1.1,0.8,2.5,2,4,3.1C20,16.8,19.2,17.8,19.2,17.8z M8,3C5.2,3,3,5.2,3,8
c0,2.8,2.2,5,5,5c2.8,0,5-2.2,5-5C13,5.2,10.8,3,8,3z"></path></svg></button>

 <button type="button" class="mobile-search__button mobile-search__button--close" style="background-color: white;" onclick="myFunction()">
    <svg width="20" height="20">

<path d="M16.7,16.7L16.7,16.7c-0.4,0.4-1,0.4-1.4,0L10,11.4l-5.3,5.3c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L8.6,10L3.3,4.7
c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L10,8.6l5.3-5.3c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L11.4,10l5.3,5.3
C17.1,15.7,17.1,16.3,16.7,16.7z"></path></svg></button>

 <div class="mobile-search__field" id="search-result-mobi"></div> 

</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script> 
    function myFunction()
    {
     var resultDropdown = $('#search-result-mobi');
     var searchinput = $('#search-input-mobile');
       searchinput.empty(); 
       resultDropdown.empty(); 
    }

$('#search-input-mobile').on("keyup input", function(){
//alert("hijack");
var inputVal = $(this).val();
//console.log(inputVal);
var resultDropdown = $('#search-result-mobi');
if(inputVal.length>4){
var protocol = location.protocol;
$.ajax({
dataType: "json",
url: protocol+"//maxvisionparts.in/backend-search.php", 
data : {term: inputVal},
success:function(data){
// Display the returned data in browser
//alert("2");
//var obj = $.parseJSON(data);

resultDropdown.empty();
var suser = "<?php echo $sessionuser ?>";
$.each(data, function(index, item) {
//   alert("1.5");
if (item.status){
//resultDropdown.html(item.name);
var result = '<a class="suggestions__item suggestions__product" href="product-full.php?id='+item.id+'" target="_blank" ><div class="suggestions__product-info" style="width: inherit" ><div class="suggestions__product-name" style="font-size: 120%; width: 50%"><b>'+item.part_number+'</b><span class="suggestions__product-rating-label" style="width:50%">&nbsp;&nbsp;OEM Code:'+item.oemcode+'</span></div><div class="suggestions__product-name">'+item.name+'</div><div class="suggestions__product-rating">'+
'<div class="suggestions__product-rating-stars"><div class="rating" style="float:right"><div class="rating__body">'+'Vehicle: '+item.vehicle+'   Model: '+item.model+
'</div></div></div></div></div>'+'</a> <br><hr>';
resultDropdown.append(result);
}
else {
resultDropdown.html("No Match Found");
}
});
}
});
} else{
resultDropdown.empty();
}
});


</script>
</div>
<?php 
}

$servername = "localhost";
$username = "partsvis_crm";
$password = ";iv(@7XApONV";
$dbname = "partsvis_maxvision";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$qry = "SELECT COUNT(DISTINCT next_step)  as count from opportunities where description = '".$rid."' and deleted = 0";
$res = $conn->query($qry);
if ($res->num_rows>0){
$row = $res->fetch_assoc();
$count = $row["count"];
}

?>
<div class="mobile-header__indicators">
<div class="mobile-indicator mobile-indicator--search d-md-none">
    <button type="button" class="mobile-indicator__button"><span class="mobile-indicator__icon"><svg width="20" height="20">
<path d="M19.2,17.8c0,0-0.2,0.5-0.5,0.8c-0.4,0.4-0.9,0.6-0.9,0.6s-0.9,0.7-2.8-1.6c-1.1-1.4-2.2-2.8-3.1-3.9C10.9,14.5,9.5,15,8,15
c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7c0,1.5-0.5,2.9-1.3,4c1.1,0.8,2.5,2,4,3.1C20,16.8,19.2,17.8,19.2,17.8z M8,3C5.2,3,3,5.2,3,8
c0,2.8,2.2,5,5,5c2.8,0,5-2.2,5-5C13,5.2,10.8,3,8,3z"></path></svg></span></button></div>
</div>
</div>
</div>
</div>
</header>

 site__mobile-header / end 
 site__header 
 
<header class="site__header">

  <span class="select2-results" id="search-result-mobi"> </span>
 -->
<div class="" id="search-result-mobi">

<img src="newtopbar.png" width="100%" height="40px">
<div class="header">
<div class="header__megamenu-area megamenu-area"></div>
<div class="header__topbar-start-bg"></div>
<div class="header__topbar-start">
<div>
<div class="topbar__item-text d-none d-xxl-flex"></div>
 <div class="topbar__item-text"><a class="topbar__link" href="about-us.php">About Us</a></div>
<div class="topbar__item-text"><a class="topbar__link" href="contact-us.php">Contacts</a>
</div>
<div class="topbar__item-text"><a class="topbar__link" href="#">Track Order</a>
</div> -->
</div>
</div>
<div class="header__topbar-end-bg"></div>

<div class="header__navbar">
<div class="newmenulefticon">
<div class="header__navbar-departments">
<div class="departments">
<div class="main-menu__link" <?php if($user==""){ echo "onclick='funclick()'"; } ?> >
<button class="departments__button" type="button">
<span class="departments__button-icon">
<span class="products-name">Products</span>
<img src="headermenu.png" width="80px" height="20px"></span>
<span class="departments__button-arrow">
<svg width="9px" height="6px">
<path d="M0.2,0.4c0.4-0.4,1-0.5,1.4-0.1l2.9,3l2.9-3c0.4-0.4,1.1-0.4,1.4,0.1c0.3,0.4,0.3,0.9-0.1,1.3L4.5,6L0.3,1.6C-0.1,1.3-0.1,0.7,0.2,0.4z"></path>
</svg>
</span>
</button>
<script>
function  funclick()
{
alert("Login to access all the product or Register with us");
location.href = 'account-login.php';

}
</script>  
</div>
<div class="departments__menu" style="margin-top: 30%;"><a href="shop.php" class="main-menu__link">
<div class="departments__arrow"></div>
</a><div class="departments__body"><a href="shop.php" class="main-menu__link">
</a><ul class="departments__list"><a href="shop.php" class="main-menu__link">
</a><li class="departments__item departments__item--submenu--megamenu departments__item--has-submenu"><a href="shop.php" class="main-menu__link">
</a><a href="#" class="departments__item-link">
Complete Range
<span class="departments__item-arrow">
<svg width="7" height="11">
<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
C-0.1,9.8-0.1,10.4,0.3,10.7z"></path>
</svg>
</span>
</a>
<div class="departments__item-menu">
<div class="megamenu departments__megamenu departments__megamenu--size--xl">
<div class="megamenu__image"><img src="images/departments/departments-2.jpg" alt=""></div>
<div class="row">
<div class="col-1of5">
<ul class="megamenu__links megamenu-links megamenu-links--root">
<li class="megamenu-links__item megamenu-links__item--has-submenu">
<span class="megamenu-links__item-link">Vehicle Wise</span>
<ul class="megamenu-links">
<?php

$servername = "localhost";
$username = "partsvis_crm";
$password = ";iv(@7XApONV";
$dbname = "partsvis_maxvision";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM aos_product_categories,aos_product_categories_cstm where id=id_c and range_c='VEHICLEWISE'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) { 

?>
<li class="megamenu-links__item"><a class="megamenu-links__item-link" href="shop.php?gno_c=<?php echo $row['gno_c']; ?>&gname=<?php echo urlencode($row['name']); ?>"><?php echo $row["name"]; ?>[<?php echo $row['gno_c']; ?>]</a></li>
<?php }}?>
</ul>
</li>

</ul>
</div>
<div class="col-1of5">
<ul class="megamenu__links megamenu-links megamenu-links--root">
<li class="megamenu-links__item megamenu-links__item--has-submenu">
<span class="megamenu-links__item-link">Product Wise</span>
<ul class="megamenu-links">
<?php

$servername = "localhost";
$username = "partsvis_crm";
$password = ";iv(@7XApONV";
$dbname = "partsvis_maxvision";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM aos_product_categories,aos_product_categories_cstm where id=id_c and range_c='PRODUCTWISE'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) { 

?>
<li class="megamenu-links__item"><a class="megamenu-links__item-link" href="shop.php?gno_c=<?php echo $row['gno_c']; ?>&gname=<?php echo urlencode($row['name']); ?>"><?php echo $row["name"]; ?>[<?php echo $row['gno_c']; ?>]</a></li>
<?php }}?>
</ul>
</li>
</ul>
</div>


<div class="col-1of5">
<ul class="megamenu__links megamenu-links megamenu-links--root">
<li class="megamenu-links__item megamenu-links__item--has-submenu">
<span class="megamenu-links__item-link">Premium Range</span>
<ul class="megamenu-links">
<?php

$servername = "localhost";
$username = "partsvis_crm";
$password = ";iv(@7XApONV";
$dbname = "partsvis_maxvision";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM aos_product_categories,aos_product_categories_cstm where id=id_c and range_c='PREMIUMRANGE'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) { 

?>
<li class="megamenu-links__item"><a class="megamenu-links__item-link" href="shop.php?gno_c=<?php echo $row['gno_c']; ?>&gname=<?php echo urlencode($row['name']); ?>"><?php echo $row["name"]; ?>[<?php echo $row['gno_c']; ?>]</a></li>
<?php }}?>
</ul>
</li>
</ul> 
</div>

</div>
</div>
</div>
</li>
<li class="departments__item departments__item--submenu--megamenu departments__item--has-submenu">
<a href="#" class="departments__item-link">
PRODUCT-WISE
<span class="departments__item-arrow">
<svg width="7" height="11">
<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
C-0.1,9.8-0.1,10.4,0.3,10.7z"></path>
</svg>
</span>
</a>
<div class="departments__item-menu">
<div class="megamenu departments__megamenu departments__megamenu--size--sm" style="   width: 500px;">
<div class="row">
<div class="col-12">
<ul class="megamenu__links megamenu-links megamenu-links--root">
<?php

$servername = "localhost";
$username = "partsvis_crm";
$password = ";iv(@7XApONV";
$dbname = "partsvis_maxvision";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM aos_product_categories,aos_product_categories_cstm where id=id_c and range_c='PRODUCTWISE'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) { 

?>
<li class="megamenu-links__item megamenu-links__item--has-submenu">
<a class="megamenu-links__item-link" href="shop.php?gno_c=<?php echo $row['gno_c']; ?>&gname=<?php echo urlencode($row['name']); ?>"><?php echo $row['name']; ?> [<?php echo $row['gno_c']; ?>]</a>
</li>                   
<?php
}
}
?>

</ul>
</div>
</div>
</div>
</div>
</li>

 2 

<li class="departments__item departments__item--submenu--megamenu departments__item--has-submenu">
<a href="#" class="departments__item-link">
PREMIUM-RANGE
<span class="departments__item-arrow">
<svg width="7" height="11">
<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
C-0.1,9.8-0.1,10.4,0.3,10.7z"></path>
</svg>
</span>
</a>
<div class="departments__item-menu">
<div class="megamenu departments__megamenu departments__megamenu--size--sm" style="   width: 500px;">
<div class="row">
<div class="col-12">
<ul class="megamenu__links megamenu-links megamenu-links--root">
<?php

$servername = "localhost";
$username = "partsvis_crm";
$password = ";iv(@7XApONV";
$dbname = "partsvis_maxvision";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM aos_product_categories,aos_product_categories_cstm where id=id_c and range_c='PREMIUMRANGE'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) { 

?>
<li class="megamenu-links__item megamenu-links__item--has-submenu">
<a class="megamenu-links__item-link" href="shop.php?gno_c=<?php echo $row['gno_c']; ?>&gname=<?php echo urlencode($row['name']); ?>"><?php echo $row['name']; ?> [<?php echo $row['gno_c']; ?>]</a>
</li>                   
<?php
}
}
?> 
</ul>
</div>
</div>
</div>
</div>
</li>

  3  

<li class="departments__item departments__item--submenu--megamenu departments__item--has-submenu">
<a href="#" class="departments__item-link">
VEHICLE-WISE
<span class="departments__item-arrow">
<svg width="7" height="11">
<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
C-0.1,9.8-0.1,10.4,0.3,10.7z"></path>
</svg>
</span>
</a>
<div class="departments__item-menu">
<div class="megamenu departments__megamenu departments__megamenu--size--sm" style="   width: 500px;">
<div class="row">
<div class="col-12">
<ul class="megamenu__links megamenu-links megamenu-links--root">
<?php

$servername = "localhost";
$username = "partsvis_crm";
$password = ";iv(@7XApONV";
$dbname = "partsvis_maxvision";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM aos_product_categories,aos_product_categories_cstm where id=id_c and range_c='VEHICLEWISE'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) { 

?>
<li class="megamenu-links__item megamenu-links__item--has-submenu">
<a class="megamenu-links__item-link" href="shop.php?gno_c=<?php echo $row['gno_c']; ?>&gname=<?php echo urlencode($row['name']); ?>"><?php echo $row['name']; ?> [<?php echo $row['gno_c']; ?>]</a>
</li>                   
<?php
}
}
?>

</ul>
</div>
</div>
</div>
</div>
</li>

<li class="departments__list-padding" role="presentation"></li>
</ul>
<div class="departments__menu-container"></div>
</div>
</div>

</div>
</div>

</div>

<div class="header__topbar-end-bg"></div>
<div class="header__topbar-end">
<div class="newmenuleft">
<div class="topbar topbar--spaceship-end">
<div class="topbar topbar--spaceship-end">

<div class="topbar__item-button">
<?php  
if($user=="")
{
echo "";
} 
else{ 
echo '<a href="recommended.php" class="topbar__button">
<span class="topbar__button-label"></span>
<span class="topbar__button-title"><span class="newmenubg">
Recommended</span></span>
</a>';
} 
?> 
</div>
<div class="topbar__item-button">
<?php  
if($user=="")
{
echo "<a href='#bestseller' class='topbar__button'>
<span class='topbar__button-label'></span>
<span class='topbar__button-title'><span class='newmenubg'>
Best Seller</span></span></a>";
} 
else{ 
    echo "<a href='bestseller.php' class='topbar__button'>
<span class='topbar__button-label'></span>
<span class='topbar__button-title'><span class='newmenubg'>
Best Seller</span></span></a>";
}
?> 
</div>

<div class="topbar__item-button topbar__menu">
    <?php  
if($user=="")
{
echo "<a href='#newarrival'><button class='topbar__button topbar__button--has-arrow topbar__menu-button' type='button'>
<span class='topbar__button-label'></span> <span class='topbar__button-title'><span class='newmenubg'>New Arrival</span></span><span class='topbar__button-arrow'>
</span>
</button></a>";
} 
else{ 
    echo "
<a href='newarrival.php'><button class='topbar__button topbar__button--has-arrow topbar__menu-button' type='button'>
<span class='topbar__button-label'></span> <span class='topbar__button-title'><span class='newmenubg'>New Arrival</span></span><span class='topbar__button-arrow'>
</span>
</button></a>";
}
?>
</div>
<div class="topbar__item-button topbar__menu">
     <?php  
if($user=="")
{
      echo "<a href='#bestoffer'><button class='topbar__button topbar__button--has-arrow topbar__menu-button' type='button'>
    <span class='topbar__button-label'></span> <span class='topbar__button-title'><span class='newmenubg'>
    Best Offer</span></span> 
    <span class='topbar__button-arrow'>
    </span>
    </button> 
    </a>";
} 
else{ 
        echo "<a href='bestoffer.php'><button class='topbar__button topbar__button--has-arrow topbar__menu-button' type='button'>
    <span class='topbar__button-label'></span> <span class='topbar__button-title'><span class='newmenubg'>
    Best Offer</span></span> 
    <span class='topbar__button-arrow'>
    </span>
    </button> 
    </a>";
    }
?>
</div><a href="bestoffer.php">
</a></div><a href="bestoffer.php">
</a></div><a href="bestoffer.php">
</a></div><a href="bestoffer.php">
</a></div><a href="bestoffer.php"> 
</a></div><a href="bestoffer.php">
</a><div class="header__logo"><a href="bestoffer.php">
</a><a href="index.php" class="logo">
<div class="newlogoposition">
<div class="logo__image">
<img class="logo__part-primary" src="newlogo.png" width="180" height="70" srcset="newlogo.png" style="
margin-top: 35px;
width: -66px;
height: 80px;
width: 225px;
margin-right: -20px;
margin-left: -18px;
">
 logo 
 logo / end 
</div>
</div>
</a>
</div>
<div class="header__indicators">
<div class="indicator__content">
<div class="account-menu">
<form class="account-menu__form" method="POST">
<div class="account-menu__form-title">Log In to Your Account</div>
<div class="form-group"><label for="header-signin-email" class="sr-only">
Username or accode
</label> <input id="accode" name="accode" type="text" class="form-control form-control-sm" placeholder="Username or accode"></div>
<div class="form-group"><label for="header-signin-password" class="sr-only">Password or naccode</label>
<div class="account-menu__form-forgot"><input type="password" id="naccode" name="naccode" class="form-control form-control-sm" placeholder="Password or naccode">
<a href="#"
class="account-menu__form-forgot-link">Forgot?</a>--></div>
</div>
<div class="form-group account-menu__form-button"><button type="submit" class="btn btn-primary btn-sm">Login</button></div>
<div class="account-menu__form-link"><a href="account-login.php">Create An
Account</a></div>
</form>
</div>
</div>

<div class="newmenuright">
<div class="header__navbar-menu" style="
margin-right: 125px;
">
<div class="main-menu">
<ul class="main-menu__list">
<li class="main-menu__item main-menu__item--submenu--menu main-menu__item--has-submenu">
<a href="index.php" class="main-menu__link"><span class="newmenubg">Home</span></a>

</li>
<li class="main-menu__item main-menu__item--submenu--menu main-menu__item--has-submenu">
<a href="contact-us.php" class="main-menu__link"><span class="newmenubg">Contact Us
</span></a>

</li>

<li class="main-menu__item main-menu__item--submenu--menu main-menu__item--has-submenu">
<a href="about-us.php" class="main-menu__link"><span class="newmenubg">About Us</span></a>

</li>

<li class="main-menu__item main-menu__item--submenu--menu main-menu__item--has-submenu">
<?php  
if($user=="")
{
echo "<a href='account-login.php'>";
}
else
{
echo "<a href='orderlist.php'>";    
}   
?>
 <span class="indicator__icon"><img src="newaccouticon.png" style="width: 50px;height: 44px;margin-left: 25px;">
<p style="font-size: 12px;margin-left: 20px;color: black;">My&nbsp;Account</p>
</span>
</a>

</li>

</ul>
</div>
</div>
</div>
<div class="indicator indicator--trigger--click">


<div class="newlogodescription">
<a href="logout.php" id="removesession"><span class="indicator__icon"><img src="newlogout.png" style="
width: 55px;
height: 45px;
margin-left: 40px;
margin-top: -15px;
">
<p class="newlogodescriptionresize1" style="
font-size: 12px;
margin-left: 50px;
">Logout</p>
</span></a>
</div>
<?php 

$qry = "SELECT COUNT(DISTINCT next_step)  as count from opportunities where description = '".$rid."' and deleted = 0";
$res = $conn->query($qry);
if ($res->num_rows>0){
$row = $res->fetch_assoc();
$count = $row["count"];
}

?>

<div class="newlogodescription">
<?php  
if($user=="")
{
echo '<a href="#">';
} 
else
{
echo '<a href="cart.php">';
}  
?>
<span class="indicator__icon"><img src="newcart.png" style="
width: 50px;
height: 44px;
margin-left: -35px;
margin-top: -13px;
"><span class="indicator__counter" style="
margin-left: 30px;
margin-top: -11px;
margin-right: 29px;
width: 20px;
height: 15px;
"><?php echo $count; ?></span>
<p class="newlogodescriptionresize2" style="
font-size: 12px;
margin-left: -35px;
">Cart&nbsp;<?php echo $count; ?>&nbsp;item</p>
</span>
<span class="indicator__title" style="color: black;">Cart 0 items</span>--></a>
</div>

 
</div>



<div class="header__search">
<div style="position: relative;left: -56px;bottom: 20px;"><?php echo $user; if($city_name!="") echo "(".$city_name.")"; ?>
</div>
 
<?php  
if($user=="")
{
echo "";
} 
else{  
?>
<div class="search">
<div class="newsearch" style="background: white; margin-left: -85; width: 120%">
<form action="#" class="search__body"> 
<input id="search-input" class="search__input" type="text" placeholder="Enter Keyword or Part Number" autocomplete="off" >
<button class="search__button search__button--end" type="submit">
<span class="search__button-icon"><svg width="20" height="20">
<path d="M19.2,17.8c0,0-0.2,0.5-0.5,0.8c-0.4,0.4-0.9,0.6-0.9,0.6s-0.9,0.7-2.8-1.6c-1.1-1.4-2.2-2.8-3.1-3.9C10.9,14.5,9.5,15,8,15
c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7c0,1.5-0.5,2.9-1.3,4c1.1,0.8,2.5,2,4,3.1C20,16.8,19.2,17.8,19.2,17.8z M8,3C5.2,3,3,5.2,3,8
c0,2.8,2.2,5,5,5c2.8,0,5-2.2,5-5C13,5.2,10.8,3,8,3z"></path></svg></span></button>
<div class="search__dropdown search__dropdown--suggestions suggestions">
<div class="suggestions__group">
<div class="" id="search-result" style="overflow-y: scroll; height: 10%; max-height: 400px ">

</div>
</div>

</div>

</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

$('#search-input').on("keyup input", function(){
//alert("hijack");
var inputVal = $(this).val();
//console.log(inputVal);
var resultDropdown = $('#search-result');
if(inputVal.length>4){
var protocol = location.protocol;
$.ajax({
dataType: "json",
url: protocol+"//maxvisionparts.in/backend-search.php", 
data : {term: inputVal},
success:function(data){
// Display the returned data in browser
//alert("2");
//var obj = $.parseJSON(data);


resultDropdown.empty();
var suser = "<?php echo $sessionuser ?>";
$.each(data, function(index, item) {
//   alert("1.5");
if (item.status){
//resultDropdown.html(item.name);
var result = '<a class="suggestions__item suggestions__product" href="product-full.php?id='+item.id+'" target="_blank" ><div class="suggestions__product-info" style="width: inherit" ><div class="suggestions__product-name" style="font-size: 120%; width: 50%">'+item.part_number+'<span class="suggestions__product-rating-label" style="width:50%">&nbsp;&nbsp;OEM Code:'+item.oemcode+'</span></div><div class="suggestions__product-name">'+item.name+'</div><div class="suggestions__product-rating">'+
'<div class="suggestions__product-rating-stars"><div class="rating" style="float:right"><div class="rating__body">'+'Vehicle: '+item.vehicle+'   Model: '+item.model+
'</div></div></div></div></div>'+'</a>';
// var link1 = "shop/joomla/benchmark/index.php?id="+item.id;
// var thelink = $('<a>',{
//   text: item.name,
//   title: item.name,
//   href: link1,
//   }).appendTo(resultDropdown);
//   resultDropdown.append("<br>");
// }
resultDropdown.append(result);
//$(result).insertAfter(resultDropdown);
// resultDropdown.append("<a href=\"shop/joomla/benchmark/index.php?id="+data.id+">"+data.name+"</a>");
}
else {
resultDropdown.html("No Match Found");
}
});
}
});
} else{
resultDropdown.empty();
}
});


</script>


</div>
</div>
<?php
}
?>
  

</div>

</div>
</div>

</header> 
 site__header / end 
 site__body 
<div class="site__body">
 
<div class="block block-products-carousel" data-layout="grid-5" style="padding-top: 4%;">
<div class="container">
        <img style="width: inherit; padding-bottom: 1%; padding-top: 1%;" src="carousel.jpeg">
<div class="section-header">
<div class="section-header__body">
<h2 class="section-header__title" id="bestseller">Best Sellers</h2>
<div class="section-header__spring"></div>

<div class="section-header__arrows">

<div
class="arrow section-header__arrow section-header__arrow--prev arrow--prev">
<button class="arrow__button" type="button"><svg width="7"
height="11">
<path
    d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
</svg></button></div>
<div
class="arrow section-header__arrow section-header__arrow--next arrow--next">
<button class="arrow__button" type="button"><svg width="7"
height="11">
<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></button></div>
</div>
<div class="section-header__divider"></div>
</div>
</div>
<div class="block-products-carousel__carousel">
<div class="block-products-carousel__carousel-loader"></div>
<div class="owl-carousel">
<?php

$servername = "localhost";
$username = "partsvis_crm";
$password = ";iv(@7XApONV";
$dbname = "partsvis_maxvision";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT * FROM aos_products,aos_products_cstm where id=id_c and bestseller_c='Y' order by part_number asc ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) { 


?>


<div class="block-products-carousel__column">
<div class="block-products-carousel__cell">
<div class="product-card product-card--layout--grid">
<div class="product-card__actions-list"></div>
<div class="product-card__image">

<?php  
    if($user=="")
    {
     ?>
       <img
        src="admin/upload/<?php echo $row["url"]; ?>"
        alt="">
     <?php
    }
    else
    {
    ?>
      <a href="product-full.php?id=<?php echo $row["id"]; ?>" target="_blank"><img
        src="admin/upload/<?php echo $row["url"]; ?>"
        alt=""></a>
    <?php
    }   
    ?>
     
</div>
<div class="product-card__info">

<div class="product-card__name">
    <div>
        <div class="product-card__badges"> 
        </div>

<?php  
    if($user=="")
    {
     ?>
    <a href="#" style="font-size: 120%;" >Our Ref Code: <?php echo $row['part_number']; ?></a>
     <?php
    }
    else
    {
    ?>
    <a href="product-full.php?id="<?php echo $row["id"]; ?>" style="font-size: 120%;" target="_blank">Our Ref Code: <?php echo $row['part_number']; ?></a>
    <?php
    }   
    ?>

    </div>
    <div>
        <?php  echo $name = $row["name"];?> <?php $len = strlen($name); while ($len<50) { echo "&nbsp; "; $len++;} ?> 
        
    </div>

    <div><span style="font-size: 90%;">Vehicle: <?php echo $row["vehicle_c"]; ?></div>
    <div><span style="font-size: 90%;">Model: <?php echo $row["model_c"]; ?></div>
</div> 
</div>
<div class="product-card__footer">
</div>
</div>
</div>
</div>
<?php
}
} 

else {
echo "0 results";
}

$conn->close();

?>

</div>
</div>
</div>
</div>
</div>


<br>
<div class="block block-products-carousel" data-layout="grid-5">
<div class="container">
<div class="section-header">
<div class="section-header__body">
<h2 class="section-header__title" id="newarrival">New Arrivals</h2>
<div class="section-header__spring"></div>

<div class="section-header__arrows">

<div
class="arrow section-header__arrow section-header__arrow--prev arrow--prev">
<button class="arrow__button" type="button"><svg width="7"
height="11">
<path
    d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
</svg></button></div>
<div
class="arrow section-header__arrow section-header__arrow--next arrow--next">
<button class="arrow__button" type="button"><svg width="7"
height="11">
<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></button></div>
</div>
<div class="section-header__divider"></div>
</div>
</div>
<div class="block-products-carousel__carousel">
<div class="block-products-carousel__carousel-loader"></div>
<div class="owl-carousel">
<?php

$servername = "localhost";
$username = "partsvis_crm";
$password = ";iv(@7XApONV";
$dbname = "partsvis_maxvision";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
 
$sql = "SELECT * FROM aos_products,aos_products_cstm where id=id_c and newarrivals_c='Y' order by part_number asc ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) { 


?>

<div class="block-products-carousel__column">
<div class="block-products-carousel__cell">
<div class="product-card product-card--layout--grid">
<div class="product-card__actions-list"></div>
<div class="product-card__image">

<?php  
    if($user=="")
    {
     ?>
    <img src="admin/upload/<?php echo $row["url"]; ?>" alt="">
     <?php
    }
    else
    {
    ?>
     <a
    href="product-full.php?id=<?php echo $row["id"]; ?>" target="_blank"><img
        src="admin/upload/<?php echo $row["url"]; ?>"
        alt=""></a>
   <?php
    }   
    ?>

</div>
<div class="product-card__info">

<div class="product-card__name">
    <div>
        <div class="product-card__badges"> 
        </div>

<?php  
    if($user=="")
    {
     ?>
   <a href="#" style="font-size: 120%;" >Our Ref Code: <?php echo $row['part_number']; ?></a>
     <?php
    }
    else
    {
    ?>
    <a href="product-full.php?id="<?php echo $row["id"]; ?>" style="font-size: 120%;" target="_blank">Our Ref Code: <?php echo $row['part_number']; ?></a>
   <?php
    }   
    ?>
 
    </div>
    <div>
     <?php  echo $name = $row["name"];?> <?php $len = strlen($name); while ($len<50) { echo "&nbsp; "; $len++;} ?>
    </div>
    

    <div><span style="font-size: 90%;">Vehicle: <?php echo $row["vehicle_c"]; ?></div>
    <div><span style="font-size: 90%;">Model: <?php echo $row["model_c"]; ?></div>
    
</div> 
</div>
<div class="product-card__footer">
 
</div>
</div>
</div>
</div>

<?php
}
} 

else {
echo "0 results";
}

$conn->close();

?>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
<br>
<div class="block block-products-carousel" data-layout="grid-5">
<div class="container">
<div class="section-header">
<div class="section-header__body">
<h2 class="section-header__title" id="bestoffer">Special Offers</h2>
<div class="section-header__spring"></div>

<div class="section-header__arrows">

<div
class="arrow section-header__arrow section-header__arrow--prev arrow--prev">
<button class="arrow__button" type="button"><svg width="7"
height="11">
<path
    d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
</svg></button></div>
<div
class="arrow section-header__arrow section-header__arrow--next arrow--next">
<button class="arrow__button" type="button"><svg width="7"
height="11">
<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></button></div>
</div>
<div class="section-header__divider"></div>
</div>
</div>
<div class="block-products-carousel__carousel">
<div class="block-products-carousel__carousel-loader"></div>
<div class="owl-carousel">
<?php

$servername = "localhost";
$username = "partsvis_crm";
$password = ";iv(@7XApONV";
$dbname = "partsvis_maxvision";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT * FROM aos_products,aos_products_cstm where id=id_c and bestoffers_c='Y' order by part_number asc ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) { 


?>


<div class="block-products-carousel__column">
<div class="block-products-carousel__cell">
<div class="product-card product-card--layout--grid">
<div class="product-card__actions-list"></div>
<div class="product-card__image">

<?php  
    if($user=="")
    {
     ?>
    <img src="admin/upload/<?php echo $row["url"]; ?>" alt=""> 
     <?php
    }
    else
    {
    ?>
    <a href="product-full.php?id=<?php echo $row["id"]; ?>" target="_blank"><img
        src="admin/upload/<?php echo $row["url"]; ?>"
        alt=""></a>
    <?php
    }   
    ?>
 

</div>
<div class="product-card__info">

<div class="product-card__name">
    <div>
        <div class="product-card__badges"> 
        </div>
        <a href="#" style="font-size: 120%;" target="_blank">Our Ref Code: <?php echo $row['part_number']; ?></a>
    </div>
    <div>
    
    <?php  echo $name = $row["name"];?> <?php $len = strlen($name); while ($len<50) { echo "&nbsp; "; $len++;} ?>
    </div>
    

    <div><span style="font-size: 90%;">Vehicle: <?php echo $row["vehicle_c"]; ?></div>
    <div><span style="font-size: 90%;">Model: <?php echo $row["model_c"]; ?></div>
    
</div> 
</div>                                                      <div class="product-card__footer">
 
</div>
</div>
</div>
</div>

<?php
}
} 

else {
//   echo "0 results";
}

$conn->close();

?>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

 

<div class="block-space block-space--layout--before-footer"></div>
 site__body / end 
  
<footer class="site__footer" background="bottom-patch.png">
<div class="site-footer">
<div class="site-footer__bottom">
<div class="container" style="
font-size: 110%;
">
<div class="site-footer__bottom-row">
<div class="site-footer__copyright" style="
color: white;
">
 copyright 
 copyright / end 
Copyright © 2020 <a href="#">maxvisionparts.in</a> All Rights Reserved.

</div>
<div class="site-footer__payments" style="
font-style: initial;
color: white;
">
Address:
Shop No. 16, 17, &amp; 18, Jagmohan Mansion, 20, Avantikabai Gokhale Street, Opera House, Mumbai - 400 004 (India)
</div>
</div>
</div>
</div>
</div>
</footer>
 site__footer / end --><!-- site__footer / end 
 site / end 
 mobile-menu 
   
    <div class="mobile-menu">
    <div class="mobile-menu__backdrop"></div>
    <div class="mobile-menu__body"><button class="mobile-menu__close" type="button"><svg width="12" height="12">
    <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
    c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
    C11.2,9.8,11.2,10.4,10.8,10.8z"></path></svg></button>
    <div class="mobile-menu__panel">
    <div class="mobile-menu__panel-header">
    <div class="mobile-menu__panel-title"> <?php echo $user; if($city_name!="") echo "(".$city_name.")"; ?> </div>
    </div>
    <div class="mobile-menu__panel-body">
    <div class="mobile-menu__settings-list">
    
    </div>
    <div class="mobile-menu__divider"></div>
    <div class="mobile-menu__indicators"> 
        <?php  
    if($user=="")
    {
    echo "<a  class='mobile-menu__indicator' href='account-login.php'>";
    }
    else
    {
    echo "<a  class='mobile-menu__indicator' href='orderlist.php'>";    
    }   
    ?>
     <span class="indicator__icon"><img src="newaccouticon.png" style="
        height: 50px;
    ">
    </span>
     <span class="indicator__counter">Account</span>
    </a>
<?php  
if($user=="")
{
echo  '<a class="mobile-menu__indicator" href="#">';
} 
else
{ 
  echo  '<a class="mobile-menu__indicator" href="cart.php">';
}
     $qry = "SELECT COUNT(DISTINCT next_step)  as count from opportunities where description = '".$rid."' and deleted = 0";
    $res = $conn->query($qry);
    if ($res->num_rows>0){
    $row = $res->fetch_assoc();
    $count = $row["count"];             
    }
    ?>
    <span class="indicator__icon"><img src="newcart.png" style="
    height: 50px;
    ">
    </span>
    <span class="indicator__counter"><?php echo $count;?>  Item</span>
    </a>
    <a href="logout.php" id="removesession" class="mobile-menu__indicator">
    <span class="indicator__icon"><img src="newlogout.png" style="
    height: 50px;
    ">
    </span>
     <span class="indicator__counter">Log-out</span>
    </a>
    </div>
    <div class="mobile-menu__divider"></div>
    <ul class="mobile-menu__links">


    <li data-mobile-menu-item=""><a href="index.php" class="" data-mobile-menu-trigger="">Home<svg width="7" height="11">
    <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
    C-0.1,9.8-0.1,10.4,0.3,10.7z"></path></svg></a>
    </li>

<?php  
if($user=="")
{
echo "";
} 
else{  
?>

    <li data-mobile-menu-item=""><a href="index.php" class="" data-mobile-menu-trigger="">Product Wise<svg width="7" height="11">
    <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
    C-0.1,9.8-0.1,10.4,0.3,10.7z"></path></svg></a>
    <div class="mobile-menu__links-panel" data-mobile-menu-panel="">
    <div class="mobile-menu__panel mobile-menu__panel--hidden">
    <div class="mobile-menu__panel-header"><button class="mobile-menu__panel-back" type="button"><svg width="7" height="11">
    <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z"></path>
    </svg></button>
    <div class="mobile-menu__panel-title">Product Wise</div>
    </div>
    <div class="mobile-menu__panel-body">
     <ul class="mobile-menu__links">
            <?php

$servername = "localhost";
$username = "partsvis_crm";
$password = ";iv(@7XApONV";
$dbname = "partsvis_maxvision";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM aos_product_categories,aos_product_categories_cstm where id=id_c and range_c='PRODUCTWISE'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) { 

?>
                <li data-mobile-menu-item><a href="shop.php?gno_c=<?php echo $row['gno_c']; ?>&gname=<?php echo urlencode($row['name']); ?>"><?php echo $row["name"]; ?>[<?php echo $row['gno_c']; ?>]</a></li>
<?php } } ?>
                 <li data-mobile-menu-item><a href="#" class=""
                        data-mobile-menu-trigger>Track Order</a></li> -->
            </ul>
    </div>
    
    </div>
    </div>
    </li>
    <li data-mobile-menu-item=""><a href="index.php" class="" data-mobile-menu-trigger="">Premium Range <svg width="7" height="11">
    <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
    C-0.1,9.8-0.1,10.4,0.3,10.7z"></path></svg></a>
    <div class="mobile-menu__links-panel" data-mobile-menu-panel="">
    <div class="mobile-menu__panel mobile-menu__panel--hidden">
    <div class="mobile-menu__panel-header"><button class="mobile-menu__panel-back" type="button"><svg width="7" height="11">
    <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z"></path>
    </svg></button>
    <div class="mobile-menu__panel-title">Premium Range</div>
    </div>
    <div class="mobile-menu__panel-body">
     <ul class="mobile-menu__links">
            <?php
$servername = "localhost";
$username = "partsvis_crm";
$password = ";iv(@7XApONV";
$dbname = "partsvis_maxvision";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM aos_product_categories,aos_product_categories_cstm where id=id_c and range_c='PREMIUMRANGE'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) { 

?>
                <li data-mobile-menu-item><a href="shop.php?gno_c=<?php echo $row['gno_c']; ?>&gname=<?php echo urlencode($row['name']); ?>"><?php echo $row["name"]; ?>[<?php echo $row['gno_c']; ?>]</a></li>
<?php } } ?>
                 <li data-mobile-menu-item><a href="#" class=""
                        data-mobile-menu-trigger>Track Order</a></li> -->
            </ul>
    </div>
    
    </div>
    </div>
    </li>
    <li data-mobile-menu-item=""><a href="index.php" class="" data-mobile-menu-trigger="">Vehicle Wise <svg width="7" height="11">
    <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
    C-0.1,9.8-0.1,10.4,0.3,10.7z"></path></svg></a>
    <div class="mobile-menu__links-panel" data-mobile-menu-panel="">
    <div class="mobile-menu__panel mobile-menu__panel--hidden">
    <div class="mobile-menu__panel-header"><button class="mobile-menu__panel-back" type="button"><svg width="7" height="11">
    <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z"></path>
    </svg></button>
    <div class="mobile-menu__panel-title">Vehicle Wise</div>
    </div>
    <div class="mobile-menu__panel-body">
     <ul class="mobile-menu__links">
            <?php

$servername = "localhost";
$username = "partsvis_crm";
$password = ";iv(@7XApONV";
$dbname = "partsvis_maxvision";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM aos_product_categories,aos_product_categories_cstm where id=id_c and range_c='VEHICLEWISE'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) { 

?>
                <li data-mobile-menu-item><a href="shop.php?gno_c=<?php echo $row['gno_c']; ?>&gname=<?php echo urlencode($row['name']); ?>"><?php echo $row["name"]; ?>[<?php echo $row['gno_c']; ?>]</a></li>
<?php } } ?>
            </ul>
    </div>
    
    </div>
    </div>
    </li>  

    <li data-mobile-menu-item="">
    <a href="recommended.php" class="" data-mobile-menu-trigger="">Recommended<svg width="7" height="11">
    <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
    C-0.1,9.8-0.1,10.4,0.3,10.7z"></path></svg></a>
    
    
    </li>
    <li data-mobile-menu-item=""><a href="bestseller.php" class="" data-mobile-menu-trigger="">Best Seller <svg width="7" height="11">
    <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
    C-0.1,9.8-0.1,10.4,0.3,10.7z"></path></svg></a>
    
    
    </li>
    <li data-mobile-menu-item=""><a href="newarrival.php" class="" data-mobile-menu-trigger="">New Arrival  <svg width="7" height="11">
    <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
    C-0.1,9.8-0.1,10.4,0.3,10.7z"></path></svg></a>
    
    
    </li>
    <li data-mobile-menu-item=""><a href="bestoffer.php" class="" data-mobile-menu-trigger="">Best Offer <svg width="7" height="11">
    <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
    C-0.1,9.8-0.1,10.4,0.3,10.7z"></path></svg></a>
    
    </li>

    <?php
}
?>
    <li data-mobile-menu-item=""><a href="about-us.php" class="" data-mobile-menu-trigger="">About Us <svg width="7" height="11">
    <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
    C-0.1,9.8-0.1,10.4,0.3,10.7z"></path></svg></a>
    </li>
    
    <li data-mobile-menu-item=""><a href="contact-us.php" class="" data-mobile-menu-trigger="">Contact Us <svg width="7" height="11">
    <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
    C-0.1,9.8-0.1,10.4,0.3,10.7z"></path></svg></a>
    </li>
    

    </ul>
     </div>
    </div>
    </div> 
    
 photoswipe / end 
 scripts 
<script src="vendor/jquery/jquery.min.js">
</script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/owl-carousel/owl.carousel.min.js"></script>
<script src="vendor/nouislider/nouislider.min.js"></script>
<script src="vendor/photoswipe/photoswipe.min.js"></script>
<script src="vendor/photoswipe/photoswipe-ui-default.min.js"></script>
<script src="vendor/select2/js/select2.min.js"></script>
<script src="js/number.js"></script>
<script src="js/main.js"></script>
  <script> 
       $(document).ready(function(){
   $(document).bind("contextmenu",function(e){
      return false;
   });
});
  
 </script>
</body></html>