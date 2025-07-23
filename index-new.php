<?php
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");


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

window.localStorage.setItem("name",name);
window.localStorage.setItem("rid",rid);
window.localStorage.setItem("type",type);
window.localStorage.setItem("city_name",city_name);
window.localStorage.setItem("companyadd1_c",companyadd1_c);
window.localStorage.setItem("state_c",state_c);
window.localStorage.setItem("pin_c",pin_c);
window.localStorage.setItem("assigned_user_id",assigned_user_id);

$.ajax({
url: 'session.php',
type: "POST",
data: {name:name,rid:rid,type:type,city_name:city_name,companyadd1_c:companyadd1_c,state_c:state_c,pin_c:pin_c,assigned_user_id:assigned_user_id},
success: function (response) { 
//   alert(response);
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
<!-- fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
<!-- css -->
<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="vendor/owl-carousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="vendor/photoswipe/photoswipe.css">
<link rel="stylesheet" href="vendor/photoswipe/default-skin/default-skin.css">
<link rel="stylesheet" href="vendor/select2/css/select2.min.css">
<link rel="stylesheet" href="newstyle.css">
<link rel="stylesheet" href="css/style.header-spaceship-variant-one.css" media="(min-width: 1200px)">
<link rel="stylesheet" href="css/style.mobile-header-variant-one.css" media="(max-width: 1199px)">
<!-- font - fontawesome -->
<link rel="stylesheet" href="vendor/fontawesome/css/all.min.css">
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-8"></script> 
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
<!-- site -->
<div class="site">
<!-- site__mobile-header -->
<header class="site__mobile-header">
<div class="mobile-header">
<div class="container">
<div class="mobile-header__body"><button class="mobile-header__menu-button" type="button"><svg width="18px" height="14px">
<path d="M-0,8L-0,6L18,6L18,8L-0,8ZM-0,-0L18,-0L18,2L-0,2L-0,-0ZM14,14L-0,14L-0,12L14,12L14,14Z"></path>
</svg></button>
<a class="mobile-header__logo" href="index.php"> 
    
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

<!-- <div class="mobile-search__field" id="search-result-mobi"></div> -->

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

<!-- site__mobile-header / end -->
<!-- site__header -->
<!-- -->
<header class="site__header">

<!--  <span class="select2-results" id="search-result-mobi"> </span>
 -->
<div class="" id="search-result-mobi">
 
 <?php
if ($iphone || $android || $palmpre || $ipod || $berry == true)
{ 
    echo '';
} 
else
{ 
    echo '<img src="newtopbar.png" width="100%" height="40px">';
} 
?>

<div class="header">
<div class="header__megamenu-area megamenu-area"></div>
<!--<div class="header__topbar-start-bg"></div>-->
<div class="header__topbar-start">
<div>
<div class="topbar__item-text d-none d-xxl-flex"></div>
<!-- <div class="topbar__item-text"><a class="topbar__link" href="about-us.php">About Us</a></div>
<div class="topbar__item-text"><a class="topbar__link" href="contact-us.php">Contacts</a>
</div>
<div class="topbar__item-text"><a class="topbar__link" href="#">Track Order</a>
</div> -->
</div>
</div>
<!--<div class="header__topbar-end-bg"></div>-->

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

<!-- 2 -->

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

<!--  3  -->

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
    <a href="index.php">
<img class="logo__part-primary" src="newlogo.png" width="180" height="70" srcset="newlogo.png" style="
margin-top: 35px;
width: -66px;
height: 80px;
width: 225px;
margin-right: -20px;
margin-left: -18px;
">
</a>
<!-- logo -->
<!-- logo / end -->
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
<!--<a href="#"
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
$count = 0;
$qry = "SELECT count(id) as count from opportunities where description = '".$rid."' and deleted = 0";
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
<!--<span class="indicator__title" style="color: black;">Cart 0 items</span>--></a>
</div>


<div class="newlogodescription">
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
 <span class="indicator__icon"><img src="newaccouticon.png" style="
width: 50px;
height: 44px;
margin-left: -120px;
margin-top: -13px;
">
<p class="newlogodescriptionresize3" style="
font-size: 12px;
margin-left: -125px;
">My&nbsp;Account</p>
</span></a>

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
else
{
?>
<div class="search">
<div class="newsearch" style="background: white;">
<form action="#" class="search__body"> 
<input id="search-input" class="search__input" type="text" placeholder="Enter Keyword or Part Number" autocomplete="off">
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
 
        <!-- site__header / end -->
        <!-- site__body -->
        <div class="site__body">
            <div class="block-space block-space--layout--after-header"></div>
            <div class="block">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-4 d-flex">
                            <div class="card flex-grow-1 mb-md-0 mr-0 mr-lg-3 ml-0 ml-lg-4">
                                <div class="card-body card-body--padding--2">
                                    <h3 class="card-title">Login</h3>
                                    <form method="POST">
                                        <div class="form-group"><label for="signin-email">Username or Accode</label> <input
                                                id="signin-email" type="text" class="form-control" name="accode"
                                                placeholder="Username or Accode"></div>
                                        <div class="form-group"><label for="signin-password">Password or Naccode</label> <input
                                                id="signin-password" type="password" class="form-control" name="naccode"
                                                placeholder="Password or Naccode"> </div>
                                        <div class="form-group">
                                            <!--<div class="form-check"><span class="input-check form-check-input"><span-->
                                            <!--            class="input-check__body"><input class="input-check__input"-->
                                            <!--                type="checkbox" id="signin-remember"> <span-->
                                            <!--                class="input-check__box"></span> <span-->
                                            <!--                class="input-check__icon"><svg width="9px" height="7px">-->
                                            <!--                    <path-->
                                            <!--                        d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />-->
                                            <!--                    </svg> </span></span></span><label-->
                                            <!--        class="form-check-label" for="signin-remember">Remember Me</label>-->
                                            <!--</div>-->
                                        </div>
                                        <div class="form-group mb-0"><button type="submit"
                                                class="btn btn-primary mt-3">Login</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 d-flex mt-4 mt-md-0">
                            <div class="card flex-grow-1 mb-0 ml-0 ml-lg-3 mr-0 mr-lg-4">
                                <div class="card-body card-body--padding--2">
                                    <h3 class="card-title">Register</h3>
                                    <form action="/admin/Leadapi.php" method="POST">
                                        
                                        <div class="col-md-14 ">
                                            <div class="row">
                                            <div class="form-group"><label for="signup-name">Name:</label><span class="required">*</span> <input 
                                                id="signup-name" type="text" name="company_name" class="form-control"
                                                placeholder="Company Name" style="width: 90%" required></div>
                                        
                                        <div class="form-group"><label for="signup-phone1">Phone:</label> <span class="required">*</span><input 
                                                id="signup-phone1" type="text" class="form-control" name="company_phone"
                                                placeholder="Phone Number" style="width: 90%" required></div>
                                            
                                        
                                            <div class="form-group"><label for="signup-phone2">Alt Phone:</label> <input 
                                                id="signup-phone2" type="text" class="form-control" name="company_phone2"
                                                placeholder="Alt Phone Number"></div>
                                                </div>
                                        </div>
                        
                                        
                                        <div class="col-md-14">
                                            <div class="row">
                                            <div class="form-group"><label for="signup-email">Email:</label> <input style="width: 90%"
                                                id="signup-email" type="email" class="form-control" name="email"
                                                placeholder="Company@example.com"></div>
                                            
                                                <div class="form-group"><label for="signup-gst">GSTin:</label> <input style="width: 90%"
                                                id="signup-gst" type="text" class="form-control" name="gstin"
                                                placeholder="GSTin"></div>

                                                <!-- <div class="form-group"><label for="dropdown">Type:</label><select name="type" id="dropdown" style="width: 180%"><option value="Vendor" aria-placeholder="Vendor">Vendor</option><option value="Reseller" aria-placeholder="Reseller"> Reseller</option></select></div> -->
                                            </div>
                                        
                                        </div>


                                        <div class="col-md-14 ">
                                            <div class="row">
                                        <div class="form-group"><label for="signup-address1">Address Line 1:</label> <input style="width: 300%"
                                                id="signup-address1" type="text" class="form-control" name="address1"
                                                placeholder="Address Line 1"></div>
                                            </div>

                                        </div>

                                        <div class="col-md-14 ">
                                            <div class="row">
                                        <div class="form-group"><label for="signup-address2">Address Line 2:</label> <input style="width: 300%"
                                                id="signup-address2" type="text" class="form-control" name="address2"
                                                placeholder="Address Line 2"></div>
                                            </div>

                                        </div>

                                        <div class="col-md-14 ">
                                            <div class="row">
                                            <div class="form-group"><label for="signup-city">City:</label><span class="required">*</span> <input style="width: 90%"
                                                id="signup-city" type="text" class="form-control" name="city"
                                                placeholder="City" required></div>
                                        
                                                <div class="form-group"><label for="signup-state">State:</label> <input style="width: 90%"
                                                    id="signup-state" type="text" class="form-control" name="state"
                                                    placeholder="State"></div>
                                            
                                                    <div class="form-group"><label for="signup-pin">Postal Code:</label> <input 
                                                id="signup-pin" type="text" class="form-control" name="pincode"
                                                placeholder="PIN Code"></div>
                                        </div>
                                        </div>


                                        <div class="col-md-14">
                                            <div class="row">
                                        <div class="form-group"><label for="signup-pin">Person Name:</label><span class="required">*</span> <input style="width: 90%"
                                                id="signup-pin" type="text" class="form-control" name="person_name"
                                                placeholder="Person  Name"></div>
                            
                                        <div class="form-group"><label for="signup-gst">Person Mobile No :</label><span class="required">*</span> <input style="width: 90%"
                                                id="signup-gst" type="text" class="form-control" name="person_mobile"
                                                placeholder="Mobile Number" required></div>
                                            <!--    <div class="form-group"><label for="signup-gst">Person 1 Email:</label> <input 
                                                id="signup-gst" type="email" class="form-control"
                                                placeholder="Person 1 Email"></div> -->
                                            </div>
                                        
                                        </div>


                                        <div class="col-md-14">
                                            <div class="row">
                                            <div class="form-group mb-0"><button type="submit"
                                                class="btn btn-primary mt-3">Register</button></div>
                                            </div>
                                        
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-space block-space--layout--before-footer"></div>
        </div><!-- site__body / end -->
        <!-- site__footer -->
        <footer class="site__footer">
            <div class="site-footer">
                <div class="site-footer__bottom">
                    <div class="container">
                        <div class="site-footer__bottom-row" style="color: white;">
                            <div class="site-footer__copyright" >
                                <!-- copyright --> 
                                <!-- copyright / end --> 
                                    Copyright © 2020 <a href="#" >maxvisionparts.in </a> All Rights Reserved.
                                    
                            </div>
                            <div class="site-footer__payments">
                                    Address:
                                    Shop No. 16, 17, & 18, Jagmohan Mansion, 20, Avantikabai Gokhale Street, Opera House, Mumbai - 400 004 (India)
                            </div>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
             
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
    $count = 0;
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


    <li data-mobile-menu-item=""><a href="index.php" class="" data-mobile-menu-trigger="">Home</a>
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
                <!-- <li data-mobile-menu-item><a href="#" class=""
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
                <!-- <li data-mobile-menu-item><a href="#" class=""
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
    <a href="recommended.php" class="" data-mobile-menu-trigger="">Recommended</a>
    
    
    </li>
    <li data-mobile-menu-item=""><a href="bestseller.php" class="" data-mobile-menu-trigger="">Best Seller </a>
    
    
    </li>
    <li data-mobile-menu-item=""><a href="newarrival.php" class="" data-mobile-menu-trigger="">New Arrival  </a>
    
    
    </li>
    <li data-mobile-menu-item=""><a href="bestoffer.php" class="" data-mobile-menu-trigger="">Best Offer </a>
    
    </li>

    <?php
}
?>
    <li data-mobile-menu-item=""><a href="about-us.php" class="" data-mobile-menu-trigger="">About Us </a>
    </li>
    
    <li data-mobile-menu-item=""><a href="contact-us.php" class="" data-mobile-menu-trigger="">Contact Us </a>
    </li>
    

    </ul>
     </div>
    </div>
    </div> 
<!-- photoswipe / end -->
<!-- scripts -->
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
<!-- Mirrored from red-parts.html.themeforest.scompiler.ru/themes/red-ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 May 2020 20:25:48 GMT -->

</body></html>
<?php

if(isset($_POST['accode']))
  
  {


?>

<div class="brk-loader">
        <div class="brk-loader__loader"></div>
    </div>
        <?php 
 
      $url = $configs['url']='http://maxvisionparts.in/admin/';
    
     $uname = $_POST['accode'];
     $pwd   = $_POST['naccode']; 

    //shaf *******************************************************************************************
              $url1=$url.'service/v4_1/rest.php?';
          
              // Open a curl session for making the call
              $curl = curl_init($url1);
              
              // Tell curl to use HTTP POST
              
              curl_setopt($curl, CURLOPT_POST, true);
              
              // Tell curl not to return headers, but do return the response
              
              curl_setopt($curl, CURLOPT_HEADER, false);
              
              curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
          
              
          
              $parameters = array(
                          'user_auth' => array(
                                      'user_name' => 'admin',
                                      'password' => md5('admin123'),
                                    ),
                        );
          
              $json = json_encode($parameters);
              $postArgs = array(
                  'method' => 'login',
                  'input_type' => 'JSON',
                  'response_type' => 'JSON',
                  'rest_data' => $json,
                  );
              curl_setopt($curl, CURLOPT_POSTFIELDS, $postArgs);
              
              // Make the REST call, returning the result
              $response = curl_exec($curl);
              // Convert the result from JSON format to a PHP array
              $result = json_decode($response);
              if ( !is_object($result) ) {
                // echo "<script> alert(); </script>";
                  die("Error handling result.\n");
              }
              if ( !isset($result->id) ) {
                echo "<script> alert('Given Credentials are not able to login'); </script>";
                  die("Error: {$result->name} - {$result->description}\n.");
              }
              
              // Echo out the session id
              //echo $result->id."<br />";
              
              $session = $result->id;
              if($session!='')
              {
                 $field_array = array('id','first_name','last_name','naccode_c','type_c','accode_c','city_name_c','companyadd1_c','state_c','pin_c','assigned_user_id',);   
                $Qry="contacts_cstm.accode_c = '".$uname."' and contacts_cstm.naccode_c= '".$pwd."'   ";
                $pmtr = array(
                                     'session' => $session,                    //Session ID
                                      'module_name' => 'Contacts',                    //Module name
                                      'query' => $Qry,     //Where condition without "where" keyword
                                      'order_by' => "date_entered ASC",                     //$order_by
                                      'offset'  => 0,                                 //offset
                                      'select_fields' => $field_array,               //select_fields
                                      'link_name_to_fields_array' => array(array()), //optional
                                      'max_results' => 5000,                             //max results                 
                                      'deleted' => 0,                           //deleted
                              );   
                              $jsn = json_encode($pmtr);
          
                              $pstArg = array(
                                      'method' => 'get_entry_list',
                                      'input_type' => 'JSON',
                                      'response_type' => 'JSON',
                                      'rest_data' => $jsn,
                              );
          
                              curl_setopt($curl, CURLOPT_POSTFIELDS, $pstArg);
          
                              $rpns = curl_exec($curl);
          
                              // Convert the result from JSON format to a PHP array
                              $output = json_decode($rpns);

                              // echo "<pre>";print_r($output);exit;
                             
              if($output->total_count > 0)
                             {
 
              $name = $output->entry_list[0]->name_value_list->first_name->value.' '.$output->entry_list[0]->name_value_list->last_name->value ;
 
              $rid = $output->entry_list[0]->name_value_list->id->value;

              $type = $output->entry_list[0]->name_value_list->type_c->value;
              
              $city_name = $output->entry_list[0]->name_value_list->city_name_c->value;
                       
              $companyadd1_c = $output->entry_list[0]->name_value_list->companyadd1_c->value;
 
             $state_c = $output->entry_list[0]->name_value_list->state_c->value;
 
             $pin_c = $output->entry_list[0]->name_value_list->pin_c->value;
 
             $assigned_user_id = $output->entry_list[0]->name_value_list->assigned_user_id->value;
 
    
  ?>
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script>
 
    name='<?php echo  $name;?>';
    rid='<?php echo   $rid;?>';
    type='<?php echo  $type;?>';
    city_name='<?php echo   $city_name;?>';
    companyadd1_c='<?php echo   $companyadd1_c;?>';
    state_c='<?php echo   $state_c;?>';
    pin_c='<?php echo   $pin_c;?>';
    assigned_user_id='<?php echo   $assigned_user_id;?>';
   
   window.localStorage.setItem("name",name);
   window.localStorage.setItem("rid",rid);
   window.localStorage.setItem("type",type);
   window.localStorage.setItem("city_name",city_name);
   window.localStorage.setItem("companyadd1_c",companyadd1_c);
   window.localStorage.setItem("state_c",state_c);
   window.localStorage.setItem("pin_c",pin_c);
   window.localStorage.setItem("assigned_user_id",assigned_user_id);
  
        $.ajax({
             url: 'session.php',
             type: "POST",
             data: {name:name,rid:rid,type:type,city_name:city_name,companyadd1_c:companyadd1_c,state_c:state_c,pin_c:pin_c,assigned_user_id:assigned_user_id},
             success: function (response) { 
         //   alert(response);
         window.location.href='index.php';
               },  
             });
             
             
   </script>
  <?php                
                             } //end if


                             else
                             {

                                ?>
                                <script type="text/javascript">
                                    
                                    alert('Invalid Username or Password!');
                                    window.location.href='index.php';
                                </script>
<?php
                             }




            }

}
