<?php

session_start();
session_destroy();
//header('Location: index.php');


?>
<script>
    localStorage.clear();
    window.location.href = 'account-login.php';
</script>