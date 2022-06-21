<?php
session_start();
include 'DB-Config.php';
if(isset($_POST['email'])){
    $sql="SELECT * FROM users WHERE `E-mail`='".$_POST['email']."'";
    $res=mysqli_query($conn,$sql);

    $sqll="SELECT * FROM `admin` WHERE `email`='".$_POST['email']."'";
    $result=mysqli_query($conn,$sqll);

    if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_assoc($result);
    
        if($_POST['email']==$row['email'] && $_POST['password']==$row['password']){
            
            header('location:dashboard.php');
    
        }else{
        $loginerror="somthing went wrong";
    }
    }
if(mysqli_num_rows($res)==1){
    $row=mysqli_fetch_assoc($res);

    if($_POST['email']==$row['E-mail'] && $_POST['password']==$row['Password']){
        $_SESSION["email"] = $_POST['email'];
        
        header('location:Courses.php');

    }else{
    $loginerror="somthing went wrong";
}
}
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="Login.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<section class="login-container">
	<div class="login-inputs">
        <form action="<?php echo $_SERVER["PHP_SELF"] ;?>" method="Post">
            <input type="text" name="email" placeholder="E-mail"><br>
            <input type="text" name="password" placeholder="Password"><br>
            <span>
				<input class="button" type="submit" value="Login">
            	<button class="button"> <a   href="Registration.php">Sign Up</a></button>
			</span>
        </form>
    </div>
</section>
</body>
</html>