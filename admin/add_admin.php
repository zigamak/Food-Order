<?php  
include("partials/menu.php");

?>

<div class="main-content">
    <div class="wrapper"></div>
    <h1>Add Admin </h1>
    <?php
        if(isset($_SESSION['add'])){
            echo($_SESSION['add']);
            unset($_SESSION['add']);
        }
    ?>
    <form action="" method="POST">
        <table class="tbl-30">
            <tr>
                <td>Full Name: </td> 
                <td><input type="text" name="full_name" placeholder="Enter Your Name "></td>
            </tr>
            <tr>
                <td>Username: </td> 
                <td><input type="text" name="username" placeholder="Enter Your Username "></td>
            </tr>
            <tr>
                <td>Password: </td> 
                <td><input type="password" name="password" placeholder="Enter Your Password "></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                </td>
            </tr>
        </table>
    </form>
</div>


<?php  
include("partials/footer.php")
?>
<?php
    // Process The Value Form and Save it in the Database
    //Check whether the button is clicked or not

    if(isset($_POST['submit'])){
        $full_name=$_POST['full_name'];
        $username=$_POST['username'];
        $password=md5($_POST['password']);// Password Encrypted with md5

        //SQL Query to save the data in the database
        $sql = "INSERT into tbl_admin SET
        full_name='$full_name',
        username='$username',
        password= '$password'
        ";

        //Execute Query and Save Data in the Database        
        $res = mysqli_query($conn,$sql ) or die(mysqli_error($conn));

        //Check whether the data is inserted or not and display the message
        if($res==TRUE){
           //check if the data is inserted
           $_SESSION['add']="Admin Added Successfully";
           //redirect Page TO MANAGE ADMIN
           header("location:".SITEURL.'admin/admin.php');
        }
        else{
         //If the data is failed to be inserted
         $_SESSION['add']="Failed to add admin";
         //redirect Page TO MANAGE ADMIN
         header("location:".SITEURL.'admin/add_admin.php');
        }
        
    }
    
?>