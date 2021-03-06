
<?php include("partials/menu.php") ?>

    <!--Menu Section Ends-->

    <!--Main Content Section Starts-->
    <div class="main-content">
        <div class="wrapper">
            <h1>Admin</h1>
            <br> <br> <br>

            <?php if(isset($_SESSION['add'])){
                echo $_SESSION['add'];//Displaying session Message
                unset($_SESSION['add']);//Remove Session Message
            }
            if (isset($_SESSION['delete'])){
                echo $_SESSION['delete'];
                unset ($_SESSION['delete']);
            }

            if (isset($_SESSION['update'])){
                echo $_SESSION['update'];
                unset ($_SESSION['update']);
            }

            if (isset($_SESSION['user_not_found'])){
                echo $_SESSION['user_not_found'];
                unset ($_SESSION['user_not_found']);
            }
            
            if (isset($_SESSION['password_not_matched'])){
                echo $_SESSION['password_not_matched'];
                unset ($_SESSION['password_not_matched']);
            }
            
            if (isset($_SESSION['change_password'])){
                echo $_SESSION['change_password'];
                unset ($_SESSION['change_password']);
            }
            ?> <br> <br>

            <!-- Button to add Admin -->
            <a href="add_admin.php" class="btn-primary">Add Admin</a>
            <br> <br> <br>
           <table class="tbl-full">
               <tr>
                   <th>S.N</th>
                   <th>FUll Name</th>
                   <th>Username</th>
                   <th>Actions</th>
               </tr>
                    <?php
                    //Query to get all admin
                        $sql= "SELECT * from tbl_admin";
                        $res= mysqli_query($conn, $sql);
                        if ($res==TRUE){
                            $count =mysqli_num_rows($res);
                            $sn=1;// create a variable and 
                            if ($count>0){
                                while($rows=mysqli_fetch_assoc($res)){
                                    $id= $rows['id'];
                                    $full_name= $rows['full_name'];
                                    $username= $rows['username'];

                                    ?>
                                     <tr>
                                    <td><?php echo $sn++ ?></td>
                                    <td><?php echo $full_name; ?></td>
                                    <td><?php echo $username ?></td>
                                    <td>
                                    <a href="<?php  echo SITEURL; ?>admin/password_admin.php? id=<?php echo $id;   ?>" class="btn-primary   "> Change Password</a> 
                                        <a href="<?php  echo SITEURL; ?>admin/update_admin.php? id=<?php echo $id;   ?>" class="btn-secondary   "> Update Admin</a> 
                                        <a href="<?php  echo SITEURL; ?>admin/delete_admin.php? id=<?php echo $id;   ?>" class="btn-danger"> Delete Admin</a> 
                                    </td>
                                </tr>

                                    <?php 

                                }
                            }else{
                                
                            }
                        }
                        
                    ?>
              
           </table>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--Menu Content Section Ends-->

<?php include("partials/footer.php")  ?>