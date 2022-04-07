<?php

if (!isset($_SESSION['user']))
{
    $_SESSION['no-login-message']="<div class='error'>Please Log in</div>";
    header('location:'.SITEURL.'admin/admin.php');
}
?>