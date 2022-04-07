<?php
include ("partials/menu.php")
?>



<div class="main-content">
    <div class="wrapper">
        <h1>Category</h1>
        <br>
        <?php
        if (isset($_SESSION['add'])){
            echo ($_SESSION['add']);
            unset ($_SESSION['add']);
        }
        
        ?><br><br><br>
        <!-- Button to add Admin -->
        <a href="<?php echo SITEURL;?>admin/add_category.php" class="btn-primary">Add Category</a>
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
            
    </div>
</div>

<?php  include("partials/footer.php") ?>