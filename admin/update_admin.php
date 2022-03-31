<?php include("partials/menu.php"); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Admin</h1>
        <?php
            $id=$_GET['id'];// Get the iD from the selected admin
            $sql="SELECT * FROM tbl_admin WHERE id=$id";// Create SQL Query to get the details
            $res=mysqli_query($conn, $sql);//Execute the query
            if($res==true){
                $count=mysqli_num_rows($res);// checking whether the data is available
                if ($count==1){
                    //Get the detalis
                    $row=mysqli_fetch_assoc($res);
                    $full_name=$row['full_name'];
                    $username=$row['username'];
                }
                else{
                    header('location:'.SITEURL."admin/admin.php");
                }
            }

        ?>
        <form action="" method="POST" >
            <table class="tbl-30">
                <tr>
                    <td>Full Name</td>
                    <td><input type="text" name="full_name" value="<?php echo $full_name; ?>"></td>
                </tr>

                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" value="<?php echo $username; ?>"></td>
                </tr>

                <tr>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <td colspan="2"><input type="submit" name="submit" value="Update Admin" class="btn-secondary"></td>
                </tr>
                
            </table>
        </form>
    </div>
</div>



<?php
if(isset($_POST["submit"])){
    $id=$_POST['id'];
    $full_name=$_POST['full_name'];
    $username=$_POST['username'];

    $sql="UPDATE tbl_admin SET
    full_name='$full_name',
    username='$username'
    WHERE id=$id

    ";

    $res=mysqli_query($conn, $sql);
    if($res==true){
        $_SESSION['update']="<div class= 'success'> Admin Updated Successfully.</div>";
        header('location:'.SITEURL.'admin/admin.php');
    }
    else{
        $_SESSION['update']="<div class= 'error'> Failed to Delete Admin.</div>";
        header('location:'.SITEURL.'admin/admin.php');
    }
}
?>
<?php include("partials/footer.php"); ?>