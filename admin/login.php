<?php
include('config/constants.php');
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Zimato</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body class="body__login">
    <?php
        if(isset($_SESSION['login'])){
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }

        if(isset($_SESSION['no-login-message'])){
            echo $_SESSION['no-login-message'];
            unset($_SESSION['no-login-message']);
        }
    ?>
    
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login" method="POST"><h1>Login</h1>
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" name="username" class="login__input" placeholder="Username" >
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" name="password" class="login__input" placeholder="Password" >
                    </div>
                    <button class="button login__submit" name="submit">
                        <span class="button__text">Log In Now</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>				
                </form>
                
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>		
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>		
            <p class="text-center">Created by <a href="www.zigamak.github.io">Ziga</a> </p>  
        </div>
        
       
    </div>
    
</body>
</html>

<?php
if (isset($_POST['submit'])){
    $username= $_POST['username'];
    $password=md5($_POST['password']);

    $sql="SELECT * FROM tbl_admin WHERE username='$username' AND password= '$password'";

    $res=mysqli_query($conn, $sql);
    $count=mysqli_num_rows($res);
    if ($count==1){
        $_SESSION['login']="<div class='success'>Login Succesful.</div>";
        $_SESSION['user']=$username;
        header('location:'.SITEURL.'admin/');
    }else{
        $_SESSION['login']="<div class='error'>Username or Password not Correct</div>";
        header('location:'.SITEURL.'admin/login.php');
    }
}
?>