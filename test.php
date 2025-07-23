<!--define('sugarEntry', TRUE); -->
<!--include_once('admin/include/entryPoint.php');-->
<!-- if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');-->


  //global $app_list_strings;
<!--  print_r($GLOBALS);-->
<!--print_r($GLOBALS["app_list_strings"]["jobtype_list"]);-->
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

</body>
</html>