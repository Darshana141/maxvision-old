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

if($rid == '')
{
    header("Refresh:0");
}
  
if ($user == '') {
$user = "My Account";
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="format-detection" content="telephone=no">
<title>Shopping Cart — Maxvision</title>
<link rel="icon" type="image/png" href="images/favicon.png"><!-- fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i"><!-- css -->
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
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-8"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
dataLayer.push(arguments);
}
gtag("js", new Date());
gtag("config", "UA-97489509-8");
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
salesmanid =  localStorage.getItem('salesmanid');

$.ajax({
url: 'session.php',
type: "POST",
data: {name:idname,rid:idrid,type:idtype,city_name:idcity_name,companyadd1_c:idcompanyadd1_c,state_c:idstate_c,pin_c:idpin_c,assigned_user_id:idassigned_user_id,salesmanid:salesmanid},
success: function (response) { 
//  alert(response);
},  
});

<?php                
   
$user = $_SESSION['name'];
$rid  = $_SESSION['rid'];
$type  = $_SESSION['type'];
$city_name = $_SESSION['city_name'];
if($rid == '')
{
    header("Refresh:0");
}
if($user=='')
{
    $user="";
}

?>

window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag("js", new Date()); gtag("config", "UA-97489509-8");</script>
</head>

<body>
<!-- site -->
<div class="site">
<!-- site__mobile-header -->
<header class="site__mobile-header">
<div class="mobile-header">
<div class="container">
<div class="mobile-header__body"><button class="mobile-header__menu-button" type="button"><svg
width="18px" height="14px">
<path
d="M-0,8L-0,6L18,6L18,8L-0,8ZM-0,-0L18,-0L18,2L-0,2L-0,-0ZM14,14L-0,14L-0,12L14,12L14,14Z" />
</svg></button> <a class="mobile-header__logo" href="index.php">
<!-- mobile-logo !-- mobile-logo / end --> 
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
resultDropdown.empty();
var suser = "<?php echo $sessionuser ?>";
$.each(data, function(index, item) {
//   alert("1.5");
if (item.status){
//resultDropdown.html(item.name);
var result = '<a class="suggestions__item suggestions__product"  style="width: inherit;color: black;" href="product-full.php?id='+item.id+'" target="_blank" ><div class="suggestions__product-info" style="width: inherit" ><div class="suggestions__product-name" style="font-size: 100%; width: 50%"><b>&nbsp;'+item.part_number+'</b><span class="suggestions__product-rating-label" style="width:50%;font-size: 12px;">&nbsp;&nbsp;OEM Code:'+item.oemcode+'</span></div><div class="suggestions__product-name">&nbsp;'+item.name+',&nbsp;'+item.vehicle+'-'+item.model+
'</div></div>'+'</a><hr>';
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
$username = "root";
$password = "";
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
<a href="shop.php" class="main-menu__link">
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
</a><div class="departments__menu" style="margin-top: 30%;"><a href="shop.php" class="main-menu__link">
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
$username = "root";
$password = "";
$dbname = "partsvis_maxvision";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM aos_product_categories,aos_product_categories_cstm where id=id_c and range_c='VEHICLEWISE' ORDER BY ABS(description)";
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
$username = "root";
$password = "";
$dbname = "partsvis_maxvision";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM aos_product_categories,aos_product_categories_cstm where id=id_c and range_c='PRODUCTWISE' ORDER BY ABS(description)";
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
$username = "root";
$password = "";
$dbname = "partsvis_maxvision";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM aos_product_categories,aos_product_categories_cstm where id=id_c and range_c='PREMIUMRANGE' ORDER BY ABS(description)";
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
$username = "root";
$password = "";
$dbname = "partsvis_maxvision";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM aos_product_categories,aos_product_categories_cstm where id=id_c and range_c='PRODUCTWISE' ORDER BY ABS(description)";
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
$username = "root";
$password = "";
$dbname = "partsvis_maxvision";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM aos_product_categories,aos_product_categories_cstm where id=id_c and range_c='PREMIUMRANGE' ORDER BY ABS(description)";
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
$username = "root";
$password = "";
$dbname = "partsvis_maxvision";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM aos_product_categories,aos_product_categories_cstm where id=id_c and range_c='VEHICLEWISE' ORDER BY ABS(description)";
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
<a href="recommended.php" class="topbar__button">
<span class="topbar__button-label"></span>
<span class="topbar__button-title"><span class="newmenubg">
Recommended</span></span>
</a>
</div>
<div class="topbar__item-button">
<a href="bestseller.php" class="topbar__button">
<span class="topbar__button-label"></span>
<span class="topbar__button-title"><span class="newmenubg">
Best Seller</span></span>
</a>
</div>

<div class="topbar__item-button topbar__menu">
<a href="newarrival.php"><button class="topbar__button topbar__button--has-arrow topbar__menu-button" type="button">
<span class="topbar__button-label"></span> <span class="topbar__button-title"><span class="newmenubg">
New Arrival</span></span> 
<span class="topbar__button-arrow">

</span>
</button></a>

</div>
<div class="topbar__item-button topbar__menu">
<a href="bestoffer.php"><button class="topbar__button topbar__button--has-arrow topbar__menu-button" type="button">
<span class="topbar__button-label"></span> <span class="topbar__button-title"><span class="newmenubg">
Best Offer</span></span> 
<span class="topbar__button-arrow">
<!--   <svg width="7px" height="5px">
<path d="M0.280,0.282 C0.645,-0.084 1.238,-0.077 1.596,0.297 L3.504,2.310 L5.413,0.297 C5.770,-0.077 6.363,-0.084 6.728,0.282 C7.080,0.634 7.088,1.203 6.746,1.565 L3.504,5.007 L0.262,1.565 C-0.080,1.203 -0.072,0.634 0.280,0.282 Z"/>
</svg> -->
</span>
</button>
<!-- <div class="topbar__menu-body"><a class="topbar__menu-item" href="#"><img src="assets/images/languages/language-1.png" alt=""><span>English</span> </a>
<a class="topbar__menu-item" href="#"><img src="assets/images/languages/language-2.png" alt=""><span>French</span> </a>
<a class="topbar__menu-item" href="#"><img src="assets/images/languages/language-3.png" alt=""><span>German</span> </a>
<a class="topbar__menu-item" href="#"><img src="assets/images/languages/language-4.png" alt=""><span>Russian</span> </a>
<a class="topbar__menu-item" href="#"><img src="assets/images/languages/language-5.png" alt=""><span>Italian</span></a>
</div> -->
</a></div><a href="bestoffer.php">
</a></div><a href="bestoffer.php">
</a></div><a href="bestoffer.php">
</a></div><a href="bestoffer.php">
</a></div><a href="bestoffer.php">



<!--
<div class="header__topbar-end-bg"></div>
<div class="newmenuleft">
<div class="header__topbar-end">
<div class="topbar topbar--spaceship-end">
<div class="topbar topbar--spaceship-end">
<div class="topbar__item-button">
<a href="recommended.php" class="topbar__button">
<span class="topbar__button-label"></span>
<span class="topbar__button-title">
<span class="newmenubg">
Recommended</span></span></a></div>

<div class="topbar__item-button">
<a href="bestseller.php" class="topbar__button">
<span class="topbar__button-label"></span>
<span class="topbar__button-title">
<span class="newmenubg">
Best Seller</span></span></a></div>

<div class="topbar__item-button topbar__menu">
<a href="newarrival.php" >
<button class="topbar__button topbar__button--has-arrow topbar__menu-button" type="button">
<span class="topbar__button-label"></span>
<span class="topbar__button-title">
<span class="newmenubg">    
New&nbspArrival</span></span>
<span class="topbar__button-arrow"></span></button></a>

</div>
<div class="topbar__item-button topbar__menu">
<a href="bestoffer.php" ><button class="topbar__button topbar__button--has-arrow topbar__menu-button" type="button">
<span class="topbar__button-label"></span>
<span class="topbar__button-title">
<span class="newmenubg">
Best&nbspOffer</span></span> 
<span class="topbar__button-arrow">
<svg width="7px" height="5px">
<path d="M0.280,0.282 C0.645,-0.084 1.238,-0.077 1.596,0.297 L3.504,2.310 L5.413,0.297 C5.770,-0.077 6.363,-0.084 6.728,0.282 C7.080,0.634 7.088,1.203 6.746,1.565 L3.504,5.007 L0.262,1.565 C-0.080,1.203 -0.072,0.634 0.280,0.282 Z"/>
</svg> -->
<!--</span>
</button>-->
<!-- <div class="topbar__menu-body"><a class="topbar__menu-item" href="#"><img src="assets/images/languages/language-1.png" alt=""><span>English</span> </a><a class="topbar__menu-item" href="#"><img src="assets/images/languages/language-2.png" alt=""><span>French</span> </a><a class="topbar__menu-item" href="#"><img src="assets/images/languages/language-3.png" alt=""><span>German</span> </a><a class="topbar__menu-item" href="#"><img src="assets/images/languages/language-4.png" alt=""><span>Russian</span> </a><a class="topbar__menu-item" href="#"><img src="assets/images/languages/language-5.png" alt=""><span>Italian</span></a></div> -->
<!--</div>
</div>  
</div>
</div>
</div>-->

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
<a href="cart.php">
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

 
</div>


<div class="header__search">
<div style="position: relative;left: -56px;bottom: 20px;"><?php echo $user; if($city_name!="") echo "(".$city_name.")"; ?>
</div>
<div class="search">
<div class="newsearch" style="background: white; margin-left: -85; width: 100%">
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
var result = '<a class="suggestions__item suggestions__product" href="product-full.php?id='+item.id+'" target="_self" ><div class="suggestions__product-info" style="width: inherit" ><div class="suggestions__product-name" style="font-size: 120%; width: 50%">'+item.part_number+'<span class="suggestions__product-rating-label" style="width:50%">&nbsp;&nbsp;OEM Code:'+item.oemcode+'</span></div><div class="suggestions__product-name">'+item.name+'</div><div class="suggestions__product-rating">'+
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
</div>

</div>
</div>

</header>

<!-- site__header / end -->             <!-- site__body -->
<div class="site__body">
<div class="block-header block-header--has-breadcrumb block-header--has-title">
<div class="container">
    <div class="block-header__body">
        <nav class="breadcrumb block-header__breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb__list">
                <li class="breadcrumb__spaceship-safe-area" role="presentation"></li>
                <!--<li class="breadcrumb__item breadcrumb__item--parent breadcrumb__item--first"><a href="index.php" class="breadcrumb__item-link">Home</a></li>-->
                <!--<li class="breadcrumb__item breadcrumb__item--parent"><a href="#" class="breadcrumb__item-link">Breadcrumb</a></li>-->
                <!--<li class="breadcrumb__item breadcrumb__item--current breadcrumb__item--last" aria-current="page"><span class="breadcrumb__item-link">Shopping Cart</span></li>-->
                <li class="breadcrumb__title-safe-area" role="presentation"></li>
            </ol>
        </nav>
        <h1 class="block-header__title" style="margin-right: 58%; font-size: 170%;">Shopping Cart</h1>
    </div>
</div>
</div>

<?php 
if($type == 'VENDOR')
{
?>
<div class="block">
<div class="container">
    <div class="cart">
        <div class="cart__table cart-table" style="box-shadow: 10px 10px 10px rgb(185, 184, 184);">
            <table class="">
                <thead class="cart-table__head">
                    <tr class="cart-table__row" style="font-size: 15px;">
                        <!--<th class="cart-table__column cart-table__column--image">Image</th>-->
                        <th class="cart-table__column cart-table__column--product"><center>Product </center></th>
                         <th class="cart-table__column cart-table__column--quantity">Quantity</th>
                         <th class="cart-table__column cart-table__column--remove"></th>
                    </tr>
                </thead>
                

<?php 

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
$shipping = 0;
$total = 0;
 $qry = "SELECT  DISTINCT next_step,probability  from opportunities where description = '".$rid."' and deleted = 0";
                $ans = $conn->query($qry);
                if ($ans->num_rows>0){
                    while ($cart_prod = $ans->fetch_assoc()){

                    	echo $cart_prod["next_step"];

                        $sql = "SELECT DISTINCT * FROM aos_products,aos_products_cstm where id=id_c and id = '".$cart_prod["next_step"]."'";
                        $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
?>

 
<tbody class="cart-table__body">
<tr class="cart-table__row"> 
<td class="cart-table__column cart-table__column--product"><b><a href="product-full.php?id=<?php echo $row["id"]; ?>" class="cart-table__product-name" target="_blank">Our Code: <?php echo $row["part_number"]; ?></a></b>,
<a href="product-full.php?id=<?php echo $row["id"]; ?>" class="cart-table__product-name" target="_blank"><?php echo $row["name"]; ?></a>
, <?php echo $row["vehicle_c"]; ?> - <?php echo $row["model_c"]; ?> 
<ul class="cart-table__options">
</ul>
</td>
 <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
<div class="cart-table__quantity input-number"><input id="<?php echo $row["id"]; ?>" class="form-control input-number__input" type="number" min="1" value="<?php echo $cart_prod["probability"]; ?>" onchange="add(this.id, this.value)">
<div class="input-number__add"></div>
<div class="input-number__sub"></div>
</div>
<span id="addtocart<?php echo $row["id"]; ?>" style="font-size: 14px; display: none;" >Updated your cart</span>

</td>
 <td class="cart-table__column cart-table__column--remove">
    <button type="button" id="<?php echo $row["id"]; ?>" class="cart-table__remove btn btn-sm btn-icon btn-muted" onclick="remove(this.id)"> 
        <img src="deleteicon.jpeg" width="30px">
    </button>
</td>
</tr>


</tbody>



<?php 
$total = $total + $row["price"]*$cart_prod["probability"];      
  
        }        
    } 
 }

?>
 
</table>
</div>
<div class="cart__totals">
<div class="card">
<div class="card-body card-body--padding--2">
<!-- <h3 class="card-title">Cart Totals</h3> -->
<table class="cart__totals-table">
<!--    <thead>
        <tr>
            <th>Subtotal</th>
            <td>₹145.00</td>
        </tr>
    </thead> -->
    <tbody>
        <!-- <tr>
            <th>Shipping</th>
            <td>₹0.00<div><a href="#">Calculate shipping</a></div>
            </td>
        </tr> -->
        
    </tbody>
    <tfoot>
        <tr>
             <input type="hidden" name="grandttotal" id="grandttotal" value="<?php echo number_format((float)$total+$shipping, 0, '', ''); ?>">
        </tr>
    </tfoot>
</table>
 <a class="btn btn-primary btn-xl btn-block" id="checkout" href="#">Finalise The Cart</a>
</div>

</div>
<style>
ul.counter-increment li {
counter-increment: section;
display: table-row;
}

ul.counter-increment li::before {
content: "(" counter(section) ") ";
display: table-cell;
padding-right: 5px;
text-align: left;
}

</style>
 </div>
</div>
</div>
</div>
<?php
}
else
{
    ?>
    <div class="block">
<div class="container">
    <div class="cart">
        <div class="cart__table cart-table" style="box-shadow: 10px 10px 10px rgb(185, 184, 184);">
            <table class="">
                <thead class="cart-table__head">
                    <tr class="cart-table__row" style="font-size: 15px;">
                        <!--<th class="cart-table__column cart-table__column--image">Image</th>-->
                        <th class="cart-table__column cart-table__column--product"><center>Product </center></th>
                        <th class="cart-table__column cart-table__column--price">Price</th>
                        <th class="cart-table__column cart-table__column--quantity">Quantity</th>
                        <th class="cart-table__column cart-table__column--total">Total</th>
                        <th class="cart-table__column cart-table__column--remove"></th>
                    </tr>
                </thead>
                

<?php 

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
$shipping = 0;
$total = 0;
 $qry = "SELECT  DISTINCT next_step,probability  from opportunities where description = '".$rid."' and deleted = 0";
                $ans = $conn->query($qry);
                if ($ans->num_rows>0){

                    while ($cart_prod = $ans->fetch_assoc()){

                        $sql = "SELECT DISTINCT * FROM aos_products,aos_products_cstm where id=id_c and id = '".$cart_prod["next_step"]."'";
                        $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
?>

 
<tbody class="cart-table__body">
<tr class="cart-table__row"> 
<td class="cart-table__column cart-table__column--product"><b><a href="product-full.php?id=<?php echo $row["id"]; ?>" class="cart-table__product-name" target="_blank">Our Code: <?php echo $row["part_number"]; ?></a></b>,
<a href="product-full.php?id=<?php echo $row["id"]; ?>" class="cart-table__product-name" target="_blank"><?php echo $row["name"]; ?></a>
, <?php echo $row["vehicle_c"]; ?> - <?php echo $row["model_c"]; ?> 
<ul class="cart-table__options">
</ul>
</td>
<td class="cart-table__column cart-table__column--price" data-title="Price">
₹<?php echo number_format((float)$row['price'], 0, '', '');    ?></td>
<td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
<div class="cart-table__quantity input-number"><input id="<?php echo $row["id"]; ?>" class="form-control input-number__input" type="number" min="1" value="<?php echo $cart_prod["probability"]; ?>" onchange="add(this.id, this.value)">
<div class="input-number__add"></div>
<div class="input-number__sub"></div>
</div>
<span id="addtocart<?php echo $row["id"]; ?>" style="font-size: 14px; display: none;" >Updated your cart</span>

</td>
<td class="cart-table__column cart-table__column--total" data-title="Total">
₹<?php echo number_format((float)$row['price']*$cart_prod["probability"], 0, '', '');    ?></td>
<td class="cart-table__column cart-table__column--remove">
    <button type="button" id="<?php echo $row["id"]; ?>" class="cart-table__remove btn btn-sm btn-icon btn-muted" onclick="remove(this.id)"> 
        <img src="deleteicon.jpeg" width="30px">
    </button>
</td>
</tr>


</tbody>



<?php 
$total = $total + $row["price"]*$cart_prod["probability"];      
  
        }        
    } 
 }

?>
 
</table>
</div>

<div class="cart__totals">
<div class="card">
<div class="card-body card-body--padding--2">
<!-- <h3 class="card-title">Cart Totals</h3> -->
<table class="cart__totals-table">
<!--    <thead>
        <tr>
            <th>Subtotal</th>
            <td>₹145.00</td>
        </tr>
    </thead> -->
    <tbody>
        <!-- <tr>
            <th>Shipping</th>
            <td>₹0.00<div><a href="#">Calculate shipping</a></div>
            </td>
        </tr> -->
        
    </tbody>
    <tfoot>
        <tr>
            <th>Approximate Value</th>
            <td>₹<?php echo number_format((float)$total+$shipping, 0, '', ''); ?></td>
            <input type="hidden" name="grandttotal" id="grandttotal" value="<?php echo number_format((float)$total+$shipping, 0, '', ''); ?>">
        </tr>
    </tfoot>
</table>
<div style="font-size: 3; padding-bottom: 3%" >
<b>(-)</b> Usual Discount Will Be Offered <br>
<b>(+)</b> Packing, Forwarding & Postage Will &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; Be Charged On Actuals<br>
<b>(+)</b> Applicable GST Will Be Charged </div>
<a class="btn btn-primary btn-xl btn-block" id="checkout" href="#">Finalise The Cart To Send Your Valued Order</a>

</div>

</div>
<style>
ul.counter-increment li {
counter-increment: section;
display: table-row;
}

ul.counter-increment li::before {
content: "(" counter(section) ") ";
display: table-cell;
padding-right: 5px;
text-align: left;
}

</style>
<div style="font-size: 3; padding: 3%" > Notes: <ul class="counter-increment">
<li> All Oemcodes, Vehicle And Model Names Are Strictly Meant For Reference And Compatibility Purpose Only.</li>
<li> The Rates Mentioned Are Subject To Change Without Prior Notice And Rates Applicable At The Time Of Supply Will Be Charged</li>
<li>The Supply Of Order Is Subject To Availability Of Stock</li>
</ul></div>
</div>
</div>
</div>
</div>
    <?php
}
?>
 
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<script>
$(document).ready(function(){


$('#checkout').on("click",function(){

grandtotal = $('#grandttotal').val();

<?php

if ($iphone || $android || $palmpre || $ipod || $berry == true)
{
    echo "myPopup ('https://maxvisionparts.in/conform.php?grandtotal='+grandtotal, 'myWindow', 420, 220)";
}
else
{
    echo "myPopup ('https://maxvisionparts.in/conformdestop.php?grandtotal='+grandtotal, 'myWindow', 420, 220)";
}

?> 

function myPopup(myURL, title, myWidth, myHeight) {
var left = (screen.width - myWidth) / 2;
var top = (screen.height - myHeight) / 4;
var myWindow = window.open(myURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + myWidth + ', height=' + myHeight + ', top=' + top + ', left=' + left);
}

});
});
</script>

<div class="block-space block-space--layout--before-footer"></div>
</div><!-- site__body / end -->
<!-- site__footer -->
<footer class="site__footer">
<div class="site-footer">
<div class="site-footer__bottom">
<div class="container">
<div class="site-footer__bottom-row" style="color: white;">
<div class="site-footer__copyright">
<!-- copyright -->
<!-- copyright / end -->
Copyright © 2020 <a href="#">maxvisionparts.in </a> All Rights Reserved.

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
     <span class="indicator__counter">

<?php  
if($user=="")
{
echo "Log-In";
} 
else
{  
echo "Log-out";
}
?>

</span>
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
$username = "root";
$password = "";
$dbname = "partsvis_maxvision";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM aos_product_categories,aos_product_categories_cstm where id=id_c and range_c='PRODUCTWISE' ORDER BY ABS(description)";
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
$username = "root";
$password = "";
$dbname = "partsvis_maxvision";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM aos_product_categories,aos_product_categories_cstm where id=id_c and range_c='PREMIUMRANGE' ORDER BY ABS(description)";
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
$username = "root";
$password = "";
$dbname = "partsvis_maxvision";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM aos_product_categories,aos_product_categories_cstm where id=id_c and range_c='VEHICLEWISE' ORDER BY ABS(description)";
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
function add(id, value){
sessionuser = "<?php echo $rid ?>";

if (sessionuser == '') {

alert('Login or create new account for place an order');
window.location.href = "login.php";
} else {

cartshow = '#addtocart'+id;
$.ajax({
url: 'addtocart.php',
type: "POST",
data: {
id: id,
sessionuser: sessionuser,
type: value
},
success: function(response) {
$(cartshow).css('display', 'block');
setTimeout(function(){ window.location.reload(); }, 1500);
setTimeout(function(){ $(cartshow).css('display', 'none');; }, 5000);
},
});

}
}
if(performance.navigation.type == 2){
location.reload(true);
} 
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
mybutton.style.display = "block";
} else {
mybutton.style.display = "none";
}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
document.body.scrollTop = 0; // For Safari
document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
function add(id, value){
        sessionuser = "<?php echo $rid ?>";
        
        if (sessionuser == '') {

        alert('Login or create new account for place an order');
window.location.href = "login.php";
} else {


    cartshow = '#addtocart'+id;
$.ajax({
    url: 'addtocart.php',
    type: "POST",
    data: {
        id: id,
        sessionuser: sessionuser,
        type: value
    },
    success: function(response) {
        $(cartshow).css('display', 'block');
         setTimeout(function(){ window.location.reload(); }, 1500);
        setTimeout(function(){ $(cartshow).css('display', 'none');; }, 5000);
    },
});

    }
    }

    function remove(id){
        sessionuser = "<?php echo $rid ?>";
        
        if (sessionuser == '') {

        alert('Login or create new account for place an order');
        window.location.href = "login.php";
    } 

else {
 
 
 <?php

if ($iphone || $android || $palmpre || $ipod || $berry == true)
{
    echo "myPopup ('https://maxvisionparts.in/conformdelete.php?id='+ id +'&sessionuser='+sessionuser, 'myWindow', 420, 220)";
}
else
{
    echo "myPopup ('https://maxvisionparts.in/conformdeletedestop.php?id='+ id +'&sessionuser='+sessionuser, 'myWindow', 420, 220)";
    
}
?> 

 
function myPopup(myURL, title, myWidth, myHeight) {
var left = (screen.width - myWidth) / 2;
var top = (screen.height - myHeight) / 4;
var myWindow = window.open(myURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + myWidth + ', height=' + myHeight + ', top=' + top + ', left=' + left);
}
 
    cartshow = '#addtocart'+id;
  
     }
    }
</script>

  <script> 
       $(document).ready(function(){
   $(document).bind("contextmenu",function(e){
      return false;
   });
});
  
 </script>
 
   
</body></html>