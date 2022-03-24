<?php
include("config/constants.php");
$id = $_GET['id'];


$sql= "DELETE FROM tbl_admin where id=$id";
$res =mysqli_query($conn, $sql);


if ($res==TRUE){
    $_SESSION['delete']="<div class='success'>Admin Deleted Succesfully</div>";
    //Redirect to admin page
    header('location:'.SITEURL.'admin/admin.php');
}else{
    echo "Failed to delete admin";
    $_SESSION['delete']="<div class='error'>Failed to Delete admin, Try again</div>";
    header('location:'.SITEURL.'admin/admin.php');
}
?>