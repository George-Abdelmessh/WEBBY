<?php
include 'DB-Config.php';

$sql="SELECT * FROM users";
$result=mysqli_query($conn,$sql);

if($_SERVER["REQUEST_METHOD"] == "POST"){

    // ----------------------name validation------------------
    if(empty($_POST['name'])){
        $nameErr='Please enter Name';
    }elseif(!preg_match("/^[a-zA-Z-' ]*$/",$_POST['name'])){

        $nameErr="please enter latters only";
    }elseif(strlen($_POST['name'])>10){
        $nameErr="max lenght is 10";
    }else{
        $name=$_POST['name'];
    }

    // ----------------------name validation------------------

    // ----------------------email validation------------------
    if(empty($_POST['email'])){
        $emailerror="enter email";
    }elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $emailerror="enter vaild email";
    }else{
        $email=$_POST['email'];
    }

    // ----------------------email validation------------------

    // ----------------------password validation------------------
    if(empty($_POST['password'])){
        $passerror="enter password";
    }elseif(strlen($_POST['password'])<5){
        $passerror="should be more than 5";
    }else{
        $password=$_POST['password'];
    }

    // ----------------------password validation------------------


    // --------------------confirm password validation---------------------
    if($_POST['password']!==$_POST['confirmpassword']){
        $confirmerror="password not matched";
    }else{

    }
    // --------------------confirm password validation---------------------

    // -------------------insert data in Database-----------------
    if(!empty($name) && !empty($email) && !empty($password) && empty($confirmerror)){
    $sql="INSERT INTO `users`(`Name`, `E-mail`, `Password`) VALUES ('$name','$email','$password')";
    mysqli_query($conn,$sql);
    header('location:login.php');
}
    // -------------------insert data in Database-----------------
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="Registration.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
</head>
<body>

<section class="SignUp-container">
	<div class="SignUp-inputs">
	<h1 >Sign Up</h1>
	<form action="<?php echo $_SERVER["PHP_SELF"] ;?>" method="Post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="name"><br>
        <span style="color:red"><?php if(isset($nameErr)){echo $nameErr;} ?></span><br>
        <input type="text" name="email" placeholder="E-mail"><br>
        <span style="color:red"><?php if(isset($emailerror)){echo $emailerror;} ?></span><br>
        <input type="password" name="password" placeholder="*******"><br>
        <span style="color:red"><?php if(isset($passerror)){echo $passerror;} ?></span><br>
        <input type="password" name="confirmpassword" placeholder="*******"><br>
        <span style="color:red"><?php if(isset($confirmerror)){echo $confirmerror;} ?></span><br>
        <input class="button" type="submit">
	</form>

	
	</div>
	
	</section>

</body>
</html>