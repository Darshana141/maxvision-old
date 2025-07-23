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
$count = 0;
$qry = "SELECT COUNT(DISTINCT next_step)  as count from opportunities where description = '".$rid."' and deleted = 0";
$res = $conn->query($qry);
if ($res->num_rows>0){
$row = $res->fetch_assoc();
$countshopcart = $row["count"];
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
"><?php echo $countshopcart; ?></span>
<p class="newlogodescriptionresize2" style="
font-size: 12px;
margin-left: -35px;
">Cart&nbsp;<?php echo $countshopcart; ?>&nbsp;item</p>
</span>
<!--<span class="indicator__title" style="color: black;">Cart 0 items</span>--></a>
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
<!--  -->

</div>

</div>
</div>

</header>
 
<?php

if (empty($_GET['gno_c'])) {
// echo "empty";
$sqlFilter .= " order by sno_c,part_number  asc ";
$productlistname = "COMPLETE RANGE";
} else {

if (!empty($_GET['sno'])) {

$sqlFilter .= " AND gno_c = '" . $_GET['gno_c'] . "' AND sno_c = '" . $_GET['sno'] . "' order by gno_c, sno_c,part_number  asc ";
$productlistname = $_GET['gname'] . "(" . $_GET['gno_c'] . ") ";
} else {

$sqlFilter .= " AND gno_c = '" . $_GET['gno_c'] . "' order by gno_c, sno_c,part_number  asc"; 
$productlistname = $_GET['gname'] . "(" . $_GET['gno_c'] . ")";
}
}
?>
    <!-- site__header / end -->
    <!-- site__body -->
    <div class="site__body">
    <div class="block-header block-header--has-breadcrumb block-header--has-title">
    <div class="container">
    <div class="block-header__body">
    <nav class="breadcrumb block-header__breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb__list">
    <li class="breadcrumb__spaceship-safe-area" role="presentation"></li>
    <li class="breadcrumb__item breadcrumb__item--parent"><a href="#" style="color: black; position: relative; top: 10px; left:0%; font-size: large;"> 
<?php
   
$qry = "SELECT * FROM aos_product_categories,aos_product_categories_cstm where id=id_c and gno_c='" . $_GET['gno_c'] . "' Order by gno_c, sno_c  asc";
$ans = $conn->query($qry);

$quan = $ans->fetch_assoc();
$range_c = $quan["range_c"];

 ?>
 <select name="filtergroupcatvalue" id="filtergroupcatvalue" onchange="myFunctiongroup()" style="width: 100%;">
 <?php

  $sql1s = "SELECT * FROM aos_product_categories,aos_product_categories_cstm where id=id_c and range_c = '". $range_c ."' ORDER BY ABS(description)";
$result1s = $conn->query($sql1s);

if ($result1s->num_rows > 0) {
// output data of each row
while ($row1s = $result1s->fetch_assoc()) {

?>

<option value="<?php echo $row1s['gno_c']."||".$row1s['name']; ?>"<?php if ($_GET['gno_c'] == $row1s['gno_c']) { echo 'selected="selected"';} ?>>

<?php

echo $row1s['name']; ?> 

[<?php echo $row1s['gno_c'];  echo "]";

?>

</option>
&nbsp;&nbsp;&nbsp;
<?php
}
}
?>

</select>


    </a></li>
    </ol>
    </nav>
    </div>
    </div>
    </div>
    
    
    <!--  -->
    
    <div class="block-split">
    <div class="sidebar sidebar--offcanvas--always">
    <div class="sidebar__backdrop"></div>
    <div class="sidebar__body">
    <div class="sidebar__header">
    <div class="sidebar__title">Filters</div><button class="sidebar__close" type="button"><svg width="12" height="12">
    <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
    c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
    C11.2,9.8,11.2,10.4,10.8,10.8z"></path></svg></button>
    </div>
    <div class="sidebar__content">
    <div class="widget widget-filters widget-filters--offcanvas--always" data-collapse="" data-collapse-opened-class="filter--opened">
    <div class="widget__header widget-filters__header">
    <h4>Filters</h4>
    </div>
    <div class="widget-filters__list">
    <div class="widget-filters__item">
    <div class="filter filter--opened" data-collapse-item=""><button type="button" class="filter__title" data-collapse-trigger="">Categories <span class="filter__arrow"><svg width="12px" height="7px">
    <path d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z"></path></svg></span></button>
    <div class="filter__body" data-collapse-content="">
    <div class="filter__container">
    <div class="filter-categories">
    <ul class="filter-categories__list">
    <li class="filter-categories__item filter-categories__item--parent"><span class="filter-categories__arrow"><svg width="6" height="9">
    <path d="M5.7,8.7L5.7,8.7c-0.4,0.4-0.9,0.4-1.3,0L0,4.5l4.4-4.2c0.4-0.4,0.9-0.3,1.3,0l0,0c0.4,0.4,0.4,1,0,1.3l-3,2.9l3,2.9
    C6.1,7.8,6.1,8.4,5.7,8.7z"></path></svg> </span><a href="#">Construction &amp; Repair</a>
    <div class="filter-categories__counter">254</div>
    </li>
    <li class="filter-categories__item filter-categories__item--parent"><span class="filter-categories__arrow"><svg width="6" height="9">
    <path d="M5.7,8.7L5.7,8.7c-0.4,0.4-0.9,0.4-1.3,0L0,4.5l4.4-4.2c0.4-0.4,0.9-0.3,1.3,0l0,0c0.4,0.4,0.4,1,0,1.3l-3,2.9l3,2.9,C6.1,7.8,6.1,8.4,5.7,8.7z"></path></svg> </span><a href="#">Instruments</a>
    <div class="filter-categories__counter">75</div>
    </li>
    <li class="filter-categories__item filter-categories__item--current"><a href="#">Power Tools</a>
    <div class="filter-categories__counter">21</div>
    </li>
    <li class="filter-categories__item filter-categories__item--child"><a href="#">Drills &amp; Mixers</a>
    <div class="filter-categories__counter">15</div>
    </li>
    <li class="filter-categories__item filter-categories__item--child"><a href="#">Cordless Screwdrivers</a>
    <div class="filter-categories__counter">2</div>
    </li>
    <li class="filter-categories__item filter-categories__item--child"><a href="#">Screwdrivers</a>
    <div class="filter-categories__counter">30</div>
    </li>
    <li class="filter-categories__item filter-categories__item--child"><a href="#">Wrenches</a>
    <div class="filter-categories__counter">7</div>
    </li>
    <li class="filter-categories__item filter-categories__item--child"><a href="#">Grinding Machines</a>
    <div class="filter-categories__counter">5</div>
    </li>
    <li class="filter-categories__item filter-categories__item--child"><a href="#">Milling Cutters</a>
    <div class="filter-categories__counter">2</div>
    </li>
    <li class="filter-categories__item filter-categories__item--child"><a href="#">Electric Spray Guns</a>
    <div class="filter-categories__counter">9</div>
    </li>
    <li class="filter-categories__item filter-categories__item--child"><a href="#">Jigsaws</a>
    <div class="filter-categories__counter">4</div>
    </li>
    <li class="filter-categories__item filter-categories__item--child"><a href="#">Jackhammers</a>
    <div class="filter-categories__counter">0</div>
    </li>
    <li class="filter-categories__item filter-categories__item--child"><a href="#">Planers</a>
    <div class="filter-categories__counter">12</div>
    </li>
    <li class="filter-categories__item filter-categories__item--child"><a href="#">Glue Guns</a>
    <div class="filter-categories__counter">7</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="widget-filters__item">
    <div class="filter filter--opened" data-collapse-item=""><button type="button" class="filter__title" data-collapse-trigger="">Vehicle <span class="filter__arrow"><svg width="12px" height="7px">
    <path d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z"></path></svg></span></button>
    <div class="filter__body" data-collapse-content="">
    <div class="filter__container">
    <div class="filter-vehicle">
    <ul class="filter-vehicle__list">
    <li class="filter-vehicle__item"><label class="filter-vehicle__item-label"><span class="filter-list__input input-radio"><span class="input-radio__body"><input class="input-radio__input" name="filter_vehicle" type="radio"> <span class="input-radio__circle"></span> </span></span><span class="filter-vehicle__item-title">All Parts </span><span class="filter-vehicle__item-counter">57</span></label></li>
    <li class="filter-vehicle__item"><label class="filter-vehicle__item-label"><span class="filter-list__input input-radio"><span class="input-radio__body"><input class="input-radio__input" name="filter_vehicle" type="radio" checked="checked"> <span class="input-radio__circle"></span> </span></span><span class="filter-vehicle__item-title">2011 Ford Focus S </span><span class="filter-vehicle__item-counter">12</span></label></li>
    <li class="filter-vehicle__item"><label class="filter-vehicle__item-label"><span class="filter-list__input input-radio"><span class="input-radio__body"><input class="input-radio__input" name="filter_vehicle" type="radio"> <span class="input-radio__circle"></span> </span></span><span class="filter-vehicle__item-title">2015 Audi A3 </span><span class="filter-vehicle__item-counter">51</span></label></li>
    </ul>
    <div class="filter-vehicle__button"><button type="button" class="btn btn-xs btn-secondary">Add Vehicle</button></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="widget-filters__item">
    <div class="filter filter--opened" data-collapse-item=""><button type="button" class="filter__title" data-collapse-trigger="">Price <span class="filter__arrow"><svg width="12px" height="7px">
    <path d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z"></path></svg></span></button>
    <div class="filter__body" data-collapse-content="">
    <div class="filter__container">
    <div class="filter-price" data-min="500" data-max="1500" data-from="590" data-to="1000">
    <div class="filter-price__slider noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"><div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect" style="transform: translate(9%, 0px) scale(0.41, 1);"></div></div><div class="noUi-origin" style="transform: translate(-910%, 0px); z-index: 5;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="500.0" aria-valuemax="1000.0" aria-valuenow="590.0" aria-valuetext="590.00"><div class="noUi-touch-area"></div></div></div><div class="noUi-origin" style="transform: translate(-500%, 0px); z-index: 6;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="590.0" aria-valuemax="1500.0" aria-valuenow="1000.0" aria-valuetext="1000.00"><div class="noUi-touch-area"></div></div></div></div><div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect" style="transform: translate(9%, 0px) scale(0.41, 1);"></div></div><div class="noUi-origin" style="transform: translate(-910%, 0px); z-index: 5;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="500.0" aria-valuemax="1000.0" aria-valuenow="590.0" aria-valuetext="590.00"><div class="noUi-touch-area"></div></div></div><div class="noUi-origin" style="transform: translate(-500%, 0px); z-index: 6;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="590.0" aria-valuemax="1500.0" aria-valuenow="1000.0" aria-valuetext="1000.00"><div class="noUi-touch-area"></div></div></div></div></div>
    <div class="filter-price__title-button">
    <div class="filter-price__title">$<span class="filter-price__min-value">590.00</span> – $<span class="filter-price__max-value">1000.00</span></div><button type="button" class="btn btn-xs btn-secondary filter-price__button">Filter</button>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="widget-filters__item">
    <div class="filter filter--opened" data-collapse-item=""><button type="button" class="filter__title" data-collapse-trigger="">Brand <span class="filter__arrow"><svg width="12px" height="7px">
    <path d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z"></path></svg></span></button>
    <div class="filter__body" data-collapse-content="">
    <div class="filter__container">
    <div class="filter-list">
    <div class="filter-list__list"><label class="filter-list__item"><span class="input-check filter-list__input"><span class="input-check__body"><input class="input-check__input" type="checkbox"> <span class="input-check__box"></span> <span class="input-check__icon"><svg width="9px" height="7px">
    <path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z"></path></svg> </span></span></span><span class="filter-list__title">Wakita </span><span class="filter-list__counter">7</span></label> <label class="filter-list__item"><span class="input-check filter-list__input"><span class="input-check__body"><input class="input-check__input" type="checkbox" checked="checked"> <span class="input-check__box"></span> <span class="input-check__icon"><svg width="9px" height="7px">
    <path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z"></path></svg> </span></span></span><span class="filter-list__title">Zosch </span><span class="filter-list__counter">42</span></label> <label class="filter-list__item filter-list__item--disabled"><span class="input-check filter-list__input"><span class="input-check__body"><input class="input-check__input" type="checkbox" checked="checked" disabled="disabled"> <span class="input-check__box"></span> <span class="input-check__icon"><svg width="9px" height="7px">
    <path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z"></path></svg> </span></span></span><span class="filter-list__title">WeVALT</span></label> <label class="filter-list__item filter-list__item--disabled"><span class="input-check filter-list__input"><span class="input-check__body"><input class="input-check__input" type="checkbox" disabled="disabled"> <span class="input-check__box"></span> <span class="input-check__icon"><svg width="9px" height="7px">
    <path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z"></path></svg> </span></span></span><span class="filter-list__title">Hammer</span></label> <label class="filter-list__item"><span class="input-check filter-list__input"><span class="input-check__body"><input class="input-check__input" type="checkbox"> <span class="input-check__box"></span> <span class="input-check__icon"><svg width="9px" height="7px">
    <path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z"></path></svg> </span></span></span><span class="filter-list__title">Mitasia </span><span class="filter-list__counter">1</span></label> <label class="filter-list__item"><span class="input-check filter-list__input"><span class="input-check__body"><input class="input-check__input" type="checkbox"> <span class="input-check__box"></span> <span class="input-check__icon"><svg width="9px" height="7px">
    <path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z"></path></svg> </span></span></span><span class="filter-list__title">Metaggo </span><span class="filter-list__counter">25</span></label></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="widget-filters__item">
    <div class="filter filter--opened" data-collapse-item=""><button type="button" class="filter__title" data-collapse-trigger="">Brand <span class="filter__arrow"><svg width="12px" height="7px">
    <path d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z"></path></svg></span></button>
    <div class="filter__body" data-collapse-content="">
    <div class="filter__container">
    <div class="filter-list">
    <div class="filter-list__list"><label class="filter-list__item"><span class="filter-list__input input-radio"><span class="input-radio__body"><input class="input-radio__input" name="filter_radio" type="radio"> <span class="input-radio__circle"></span> </span></span><span class="filter-list__title">Wakita </span><span class="filter-list__counter">7</span></label> <label class="filter-list__item"><span class="filter-list__input input-radio"><span class="input-radio__body"><input class="input-radio__input" name="filter_radio" type="radio"> <span class="input-radio__circle"></span> </span></span><span class="filter-list__title">Zosch </span><span class="filter-list__counter">42</span></label> <label class="filter-list__item filter-list__item--disabled"><span class="filter-list__input input-radio"><span class="input-radio__body"><input class="input-radio__input" name="filter_radio" type="radio" checked="checked" disabled="disabled"> <span class="input-radio__circle"></span> </span></span><span class="filter-list__title">WeVALT</span></label> <label class="filter-list__item filter-list__item--disabled"><span class="filter-list__input input-radio"><span class="input-radio__body"><input class="input-radio__input" name="filter_radio" type="radio" disabled="disabled"> <span class="input-radio__circle"></span> </span></span><span class="filter-list__title">Hammer</span></label> <label class="filter-list__item"><span class="filter-list__input input-radio"><span class="input-radio__body"><input class="input-radio__input" name="filter_radio" type="radio"> <span class="input-radio__circle"></span> </span></span><span class="filter-list__title">Mitasia </span><span class="filter-list__counter">1</span></label> <label class="filter-list__item"><span class="filter-list__input input-radio"><span class="input-radio__body"><input class="input-radio__input" name="filter_radio" type="radio"> <span class="input-radio__circle"></span> </span></span><span class="filter-list__title">Metaggo </span><span class="filter-list__counter">25</span></label></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="widget-filters__item">
    <div class="filter filter--opened" data-collapse-item=""><button type="button" class="filter__title" data-collapse-trigger="">Rating <span class="filter__arrow"><svg width="12px" height="7px">
    <path d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z"></path></svg></span></button>
    <div class="filter__body" data-collapse-content="">
    <div class="filter__container">
    <div class="filter-rating">
    <ul class="filter-rating__list">
    <li class="filter-rating__item"><label class="filter-rating__item-label"><span class="input-check filter-rating__item-input"><span class="input-check__body"><input class="input-check__input" type="checkbox"> <span class="input-check__box"></span> <span class="input-check__icon"><svg width="9px" height="7px">
    <path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z"></path></svg> </span></span></span><span class="filter-rating__item-stars">
    <div class="rating">
    <div class="rating__body">
    <div class="rating__star rating__star--active"></div>
    <div class="rating__star rating__star--active"></div>
    <div class="rating__star rating__star--active"></div>
    <div class="rating__star rating__star--active"></div>
    <div class="rating__star rating__star--active"></div>
    </div>
    </div>
    </span><span class="filter-rating__item-title sr-only">5 stars </span><span class="filter-rating__item-counter">42</span></label></li>
    <li class="filter-rating__item"><label class="filter-rating__item-label"><span class="input-check filter-rating__item-input"><span class="input-check__body"><input class="input-check__input" type="checkbox"> <span class="input-check__box"></span> <span class="input-check__icon"><svg width="9px" height="7px">
    <path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z"></path></svg> </span></span></span><span class="filter-rating__item-stars">
    <div class="rating">
    <div class="rating__body">
    <div class="rating__star rating__star--active"></div>
    <div class="rating__star rating__star--active"></div>
    <div class="rating__star rating__star--active"></div>
    <div class="rating__star rating__star--active"></div>
    <div class="rating__star"></div>
    </div>
    </div>
    </span><span class="filter-rating__item-title sr-only">4 stars </span><span class="filter-rating__item-counter">24</span></label></li>
    <li class="filter-rating__item"><label class="filter-rating__item-label"><span class="input-check filter-rating__item-input"><span class="input-check__body"><input class="input-check__input" type="checkbox"> <span class="input-check__box"></span> <span class="input-check__icon"><svg width="9px" height="7px">
    <path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z"></path></svg> </span></span></span><span class="filter-rating__item-stars">
    <div class="rating">
    <div class="rating__body">
    <div class="rating__star rating__star--active"></div>
    <div class="rating__star rating__star--active"></div>
    <div class="rating__star rating__star--active"></div>
    <div class="rating__star"></div>
    <div class="rating__star"></div>
    </div>
    </div>
    </span><span class="filter-rating__item-title sr-only">3 stars </span><span class="filter-rating__item-counter">19</span></label></li>
    <li class="filter-rating__item"><label class="filter-rating__item-label"><span class="input-check filter-rating__item-input"><span class="input-check__body"><input class="input-check__input" type="checkbox"> <span class="input-check__box"></span> <span class="input-check__icon"><svg width="9px" height="7px">
    <path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z"></path></svg> </span></span></span><span class="filter-rating__item-stars">
    <div class="rating">
    <div class="rating__body">
    <div class="rating__star rating__star--active"></div>
    <div class="rating__star rating__star--active"></div>
    <div class="rating__star"></div>
    <div class="rating__star"></div>
    <div class="rating__star"></div>
    </div>
    </div>
    </span><span class="filter-rating__item-title sr-only">2 stars </span><span class="filter-rating__item-counter">3</span></label></li>
    <li class="filter-rating__item"><label class="filter-rating__item-label"><span class="input-check filter-rating__item-input"><span class="input-check__body"><input class="input-check__input" type="checkbox"> <span class="input-check__box"></span> <span class="input-check__icon"><svg width="9px" height="7px">
    <path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z"></path></svg> </span></span></span><span class="filter-rating__item-stars">
    <div class="rating">
    <div class="rating__body">
    <div class="rating__star rating__star--active"></div>
    <div class="rating__star"></div>
    <div class="rating__star"></div>
    <div class="rating__star"></div>
    <div class="rating__star"></div>
    </div>
    </div>
    </span><span class="filter-rating__item-title sr-only">1 star </span><span class="filter-rating__item-counter">12</span></label></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="widget-filters__item">
    <div class="filter filter--opened" data-collapse-item=""><button type="button" class="filter__title" data-collapse-trigger="">Color <span class="filter__arrow"><svg width="12px" height="7px">
    <path d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z"></path></svg></span></button>
    <div class="filter__body" data-collapse-content="">
    <div class="filter__container">
    <div class="filter-color">
    <div class="filter-color__list"><label class="filter-color__item"><span class="filter-color__check input-check-color input-check-color--white" style="color: #fff;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <span class="input-check-color__icon"><svg width="12px" height="9px">
    <path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z"></path></svg></span><span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color input-check-color--light" style="color: #d9d9d9;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <span class="input-check-color__icon"><svg width="12px" height="9px">
    <path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z"></path></svg></span><span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #b3b3b3;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <span class="input-check-color__icon"><svg width="12px" height="9px">
    <path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z"></path></svg></span><span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #808080;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <span class="input-check-color__icon"><svg width="12px" height="9px">
    <path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z"></path></svg></span><span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #666;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <span class="input-check-color__icon"><svg width="12px" height="9px">
    <path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z"></path></svg></span><span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #4d4d4d;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <span class="input-check-color__icon"><svg width="12px" height="9px">
    <path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z"></path></svg></span><span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #262626;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <span class="input-check-color__icon"><svg width="12px" height="9px">
    <path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z"></path></svg></span><span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #ff4040;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox" checked="checked"> <span class="input-check-color__box"></span> <span class="input-check-color__icon"><svg width="12px" height="9px">
    <path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z"></path></svg></span><span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #ff8126;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <span class="input-check-color__icon"><svg width="12px" height="9px">
    <path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z"></path></svg></span><span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color input-check-color--light" style="color: #ffd440;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <span class="input-check-color__icon"><svg width="12px" height="9px">
    <path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z"></path></svg></span><span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color input-check-color--light" style="color: #becc1f;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <span class="input-check-color__icon"><svg width="12px" height="9px">
    <path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z"></path></svg></span><span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #8fcc14;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox" checked="checked"> <span class="input-check-color__box"></span> <span class="input-check-color__icon"><svg width="12px" height="9px">
    <path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z"></path></svg></span><span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #47cc5e;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <span class="input-check-color__icon"><svg width="12px" height="9px">
    <path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z"></path></svg></span><span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #47cca0;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <span class="input-check-color__icon"><svg width="12px" height="9px">
    <path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z"></path></svg></span><span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #47cccc;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <span class="input-check-color__icon"><svg width="12px" height="9px">
    <path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z"></path></svg></span><span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #40bfff;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox" disabled="disabled"> <span class="input-check-color__box"></span> <span class="input-check-color__icon"><svg width="12px" height="9px">
    <path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z"></path></svg></span><span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #3d6dcc;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox" checked="checked"> <span class="input-check-color__box"></span> <span class="input-check-color__icon"><svg width="12px" height="9px">
    <path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z"></path></svg></span><span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #7766cc;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <span class="input-check-color__icon"><svg width="12px" height="9px">
    <path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z"></path></svg></span><span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #b852cc;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <span class="input-check-color__icon"><svg width="12px" height="9px">
    <path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z"></path></svg></span><span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #e53981;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <span class="input-check-color__icon"><svg width="12px" height="9px">
    <path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z"></path></svg></span><span class="input-check-color__stick"></span></label></span></label></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="widget-filters__actions d-flex"><button class="btn btn-primary btn-sm">Filter</button> <button class="btn btn-secondary btn-sm">Reset</button></div>
    </div>
    </div>
    </div>
    </div>
    <div class="container">
    <div class="block-split__row row no-gutters">
    <div class="block-split__item block-split__item-content col-auto">
    <div class="block">
    <div class="products-view">
    <div class="products-view__options view-options view-options--offcanvas--always" style="position: -webkit-sticky !important;position: sticky !important;top: 0;">
    <div class="view-options__body">
 
    <label for="filtersubcat"> Sub Categories SNO Filter:</label>
    
     
<select name="filtersubcatvalue" id="filtersubcatvalue" onchange="myFunction()" style="width: 100%;">

<?php 

$sno = $_REQUEST["sno"];

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

$sql1s = "SELECT * FROM aos_product_categories,aos_product_categories_cstm where id=id_c and gno_c='" . $_GET['gno_c'] . "' Order by gno_c, sno_c  asc";
$result1s = $conn->query($sql1s);

if ($result1s->num_rows > 0) {
// output data of each row
while ($row1s = $result1s->fetch_assoc()) {

?>

<option value="<?php echo $row1s['sno_c']; ?>"<?php if ($sno == $row1s['sno_c']) { echo 'selected="selected"';} ?>><?php 

if($row1s['sno_c']=="")
{
echo "View All";
} 

else {

echo $row1s['name']; ?> 

[<?php echo $row1s['sno_c'];  echo "]";

}
?>

</option>
&nbsp;&nbsp;&nbsp;
<?php
}
}
?>

</select>

<script>
function myFunction() {

sno = document.getElementById("filtersubcatvalue").value;
gno = '<?php echo $_GET['gno_c']; ?>';
gname = '<?php echo $_GET['gname']; ?>';
window.location = '/shop.php?gno_c=' + gno + '&gname=' + encodeURIComponent(gname) + '&sno=' + sno;

}

function myFunctiongroup()
{

gfullnameno = document.getElementById("filtergroupcatvalue").value;
garry = gfullnameno.split("||");
gno = garry[0];
gname = garry[1];
window.location = '/shop.php?gno_c=' + gno + '&gfullnameno=' + encodeURIComponent(gname);

}

</script>


</div>
 
 Note:- *All Oemcodes, Vehicle And Model Names Are Strictly Meant For Reference And Compatibility Purpose Only.*
 
 </div>

    <!--    <div class="view-options__body view-options__body--filters">-->
    <!--    <div class="view-options__label">Active Filters</div>-->
    <!--</div>-->
    </div>
    
    <div class="products-view__list products-list products-list--grid--6" data-layout="grid" data-with-features="true">
    <div class="products-list__head">
    <div class="products-list__column products-list__column--image">Image</div>
    <div class="products-list__column products-list__column--meta">SKU</div>
    <div class="products-list__column products-list__column--product">Product</div>
    <div class="products-list__column products-list__column--rating">Rating</div>
    <div class="products-list__column products-list__column--price">Price</div>
    </div>
    
    
    <div class="products-list__content">

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

$count = 0;

$sql = "SELECT * FROM aos_products,aos_products_cstm where id=id_c  " . $sqlFilter . " ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while ($row = $result->fetch_assoc()) {

$count = $count+1;
//  $unit = 0;
$qry = "SELECT probability from opportunities where description = '".$rid."' and next_step = '".$row["id"]."' and deleted = 0 ";
$ans = $conn->query($qry);

$quan = $ans->fetch_assoc();
$unit = $quan["probability"];


?>
    <div class="products-list__item">
    <div class="product-card">
    <div class="product-card__image" style="height: 100%">
 
        <img src="http://maxvisionparts.in/admin/upload/<?php echo $row["url"]; ?>" alt="" style="object-fit: cover;"> 
    </div>
    <div class="product-card__info">
    <div class="product-card__meta"><span class="product-card__meta-title"></span></div>
    <div class="product-card__name">
    <div> 
    <!--<a href="product-full.php?id=26b5c704-a7e6-c894-e4b4-5f42450b4968" target="_blank" >-->
    
 
 <div style="font-size: 17.5px;">Our Code: <?php echo $row["part_number"]; ?></div>
  
    </div>
    </div>
    <div class="product-card__features">
        <ul>
<table style="margin:auto;border:1px #ddd; border-color: #000; color: #000;" border="1">
    <tr>
<td colspan="2"  style="font-size: 14px;">
<?php if($type=="CUSTOMER")
{
?>
     <?php  echo $name = $row["name"];?> <?php $len = strlen($name); while ($len<50) { echo "&nbsp; "; $len++;} ?>
<?php
}
else
{
?>
 <?php  echo $name = $row["name"];?> <?php $len = strlen($name); while ($len<50) { echo "&nbsp; "; $len++;} ?>
<?php 
}
?>

</td>
        </tr>

                <tr>
<td colspan="2">&nbsp;OEM Code: <?php echo $oem = $row["description"]; ?><?php $len = strlen($oem); while ($len<5) { echo "&nbsp; "; $len++;} ?></td>

                </tr>
                <tr>
<td colspan="2">&nbsp;Vehicle: <?php echo $row["vehicle_c"]; ?></td>
                </tr>
                <tr>
<td colspan="2">&nbsp;Model: <?php echo $row["model_c"]; ?></td>
                </tr>
                <tr>
<td style="font-size: 70%;color: black;">&nbsp;Pkg.Unit: <?php echo $row["pkgunit_c"]; ?> </td>
<td style="font-size: 75%;color: black;width:40%">&nbsp;PerVhcl: <?php echo $row["per_vehicle_c"]; ?></td>

                </tr>
                <tr>
                    <td>
<div class="cart-table__quantity input-number">
<input id="<?php echo $row["id"]; ?>" class="form-control input-number__input" type="number" min="1" value="<?php echo $unit; ?>" onchange="add(this.id, this.value)">
<div id="<?php echo $row["id"]; ?>" class="input-number__add" ></div>
<div id="<?php echo $row["id"]; ?>" class="input-number__sub" ></div>
</div>
    </td>
<td style="">&nbsp;Unit:<?php echo $row["unit_c"]; ?></td>
                </tr>
            </table>
             
        </ul>
    </div> 
</div>
    <div class="product-card__footer">
    <div style="padding: 1%"><?php if( $unit > 0) echo "Present in Cart!"; ?></div>
    <div class="product-card__prices">
        <div class="product-card__price product-card__price--current">
        <?php if($type=="CUSTOMER")
{
?>
            <a href="product-full.php?id=<?php echo $row["id"]; ?>" target="_blank" ><button class="btn btn-primary" type="button">Show Price</button></a>
<?php 
}
else 
{
?>

<button class="btn btn-primary" type="button">Show Price</button> 

<?php
} 
?>

     </div>
     <span id="addtocart<?php echo $row["id"]; ?>" style="font-size: 14px; display: none;" >Updated your cart</span>
    </div>
    </div>
</div>
</div>
<?php
}
} else {
echo "0 results";
}

$conn->close();

?>
<script>
count = <?php echo $count ?>;
res = "Showing " + count + " results";
$("#count_result").append(res);
</script>
<div class="view-options__body">  
<div class="view-options__legend">Showing <?php echo $count;?> products</div>
    </div>
    </div>
     
    </div>
    
    </div>
    </div>
    </div>
    </div>
    <div class="block-space block-space--layout--before-footer"></div>
    </div>
    </div>
    
    <style>
    #myBtn {
    display: none; /* Hidden by default */
    position: fixed; /* Fixed/sticky position */
    bottom: 20px; /* Place the button at the bottom of the page */
    right: 30px; /* Place the button 30px from the right */
    z-index: 99; /* Make sure it does not overlap */
    border: none; /* Remove borders */
    outline: none; /* Remove outline */
    background-color: #244668; /* Set a background color */
    color: white; /* Text color */
    cursor: pointer; /* Add a mouse pointer on hover */
    padding: 15px; /* Some padding */
    border-radius: 10px; /* Rounded corners */
    font-size: 18px; /* Increase font size */
    }
    #myBtn:hover {
    background-color: #555; /* Add a dark-grey background on hover */
    }
    </style>
    <div>
    <button onclick="topFunction()" id="myBtn" title="Go to top" style="display: block; width: 50px; height: 50px; font: 400 16px Arial;">Top</button>
    </div>
    
    <!--  -->
    <footer class="site__footer">
    <div class="site-footer">
    <div class="site-footer__bottom" style="color: white;">
    <div class="container">
    <div class="site-footer__bottom-row">
    <div class="site-footer__copyright">
 
  Copyright © 2020 <a href="#">maxvisionparts.in</a> All Rights Reserved.
 
    
    </div>
    <div class="site-footer__payments">
    Address:
    Shop No. 16, 17, &amp; 18, Jagmohan Mansion, 20, Avantikabai Gokhale Street, Opera House, Mumbai - 400 004 (India)
    </div>
    </div>
    </div>
    </div>
    </div>
    </footer></div>
    <!-- site__footer / end -->
    <!-- site / end -->
    <!-- mobile-menu --> 
     
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
    <span class="indicator__counter"><?php echo $countshopcart;?>  Item</span>
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
    <li data-mobile-menu-item=""><a href="newarrival.php" class="" data-mobile-menu-trigger="">New Arrival </a>
    
    
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

  function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
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