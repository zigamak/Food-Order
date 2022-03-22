
<?php include("partials/menu.php") ?>

    <!--Menu Section Ends-->

    <!--Main Content Section Starts-->
    <div class="main-content">
        <div class="wrapper">
            <h1>Admin</h1>
            <br> <br> <br>
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

               <tr>
                   <td>1.</td>
                   <td>ZIGA MAS</td>
                   <td>Ziga</td>
                   <td>
                       <a href="#" class="btn-secondary"> Update Admin</a> 
                       <a href="#" class="btn-danger"> Delete Admin</a> 
                   </td>
               </tr>

           </table>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--Menu Content Section Ends-->

<?php include("partials/footer.php")  ?>