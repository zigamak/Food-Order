<?php
include("partials/menu.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ziga Foods -Home Page</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    
<!--Main Content Section Starts-->
<div class="main-content">
        <div class="wrapper">
            <h1>Dashboard</h1>
            
    <?php
        if(isset($_SESSION['login'])){
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }
    ?>
            <div class="col-4 text-center">
                <h1>5</h1>
                <br>
                Categories
            </div>
            <div class="col-4 text-center">
                <h1>5</h1>
                <br>
                Categories
            </div>
            <div class="col-4 text-center">
                <h1>5</h1>
                <br>
                Categories
            </div>
            <div class="col-4 text-center">
                <h1>5</h1>
                <br>
                Categories
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--Menu Content Section Ends-->

    

<?php
include("partials/footer.php")
?>
</body>
</html>