<?php

include 'DB-Config.php';
error_reporting(0);   
$sql="SELECT * FROM users";

$result=mysqli_query($conn,$sql);

session_start();
if(empty( $_SESSION["email"])){
    header('location:login.php');
}else{

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $ans1 = $_POST["ans1"];
        $ans2 = $_POST["ans2"];
        $ans3 = $_POST["ans3"];
        $ans4 = $_POST["ans4"];
        $ans5 = $_POST["ans5"];
        
        $correct=0;

        if(!empty($_POST)){
            if($ans1 == 3){
                $correct++;
                
            }else{
            }
            if($ans2 == 2){
                $correct++;
            }else{
               
            }
            if($ans3 == 3){
                $correct++;
            }else{
               
            }
            if($ans4 == 1){
                $correct++;
            }
            else{

            }
            if($ans5 == 2){
                $correct++;
            }else{
                
            }
        
            if(!empty($correct) && $correct>3){
       

                $sql="UPDATE `users` SET `advanced_result`='$correct' WHERE  `E-mail`='".$_SESSION["email"]."'";

                mysqli_query($conn,$sql);

                echo "<script>
                    alert(' your result is $correct');
                    window.location.href='Courses.php';
                    </script>";
                    
            }
            else{
                
                $sql="UPDATE `users` SET `advanced_result`='$correct' WHERE  `E-mail`='".$_SESSION["email"]."'";

                mysqli_query($conn,$sql);
        
                echo "<script>
                alert(' your result is $correct');
                window.location.href='advanced-course.php';
                </script>";
                
            }
        }
        else{
            echo "<p>plase take the quiz.</p>";
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<style>

.carousel{
    background:linear-gradient(16deg, rgba(194,58,187,1) 0%, rgba(136,0,255,1) 100%);
    margin-top: 20px;
    color: aliceblue;
    padding: 20px;
    
}
.container-lg{
    width: 1200px;
}
.carousel-item{
    height: 380px; 
    width: 1100px;
}

.carousel-inner{
    height: 400px;
}
/* From uiverse.io by @alexmaracinaru */



input{
    background: #234567;
    color:white !important;
    margin-top: 20px;
    padding: 0px 20px;
}  

.cta{
 position: relative;
 margin: auto;
 padding: 12px 18px;
 transition: all 0.2s ease;
 border: none;
 background: none;
}

.cta:before {
 content: "";
 position: absolute;
 top: 0;
 left: 0;
 display: block;
 border-radius: 50px;
 background: #b1dae7;
 width: 45px;
 height: 45px;
 transition: all 0.3s ease;
}

.cta span {
 position: relative;
 font-family: "Ubuntu", sans-serif;
 font-size: 18px;
 font-weight: 700;
 letter-spacing: 0.05em;
 color: #234567;
}

.cta svg {
 position: relative;
 top: 0;
 margin-left: 10px;
 fill: none;
 stroke-linecap: round;
 stroke-linejoin: round;
 stroke: #234567;
 stroke-width: 2;
 transform: translateX(-5px);
 transition: all 0.3s ease;
}

.cta:hover:before {
 width: 100%;
 background: #b1dae7;
}

.cta:hover svg {
 transform: translateX(0);
}

.cta:active {
 transform: scale(0.95);
}

.carousel-control-next {
     left:-0vw;
     top:40vh;
 }
</style>
</head>
<body>


<script>
$(document).ready(function(){
	$("#myCarousel").carousel({
		interval : false
	});
});
</script>
 

   
<div class="container-lg  ">
<h1>Quiz For Advanced Course</h1>
    <div id="myCarousel" class="carousel slide">
 
        <div class="carousel-inner">
        <form action="<?php echo $_SERVER["PHP_SELF"] ;?>" method="post">
            <div class="carousel-item active">
                
                <div class="carousel">
                    <p>Which of the following is correct about PHP? </p>
                    <input type="radio" name="ans1" value="1">
                    <label for="html"> PHP performs system functions, i.e. from files on a system it can create, open, read, write, and close them.</label><br>
                    <input type="radio"  name="ans1" value="2">
                    <label for="css">PHP can handle forms, i.e. gather data from files, save data to a file, thru email you can send data, return data to the user.</label><br>
                    <input type="radio"  name="ans1" value="3">
                    <label for="javascript"> All of the above.</label>

                    
                </div>
                <a  class="carousel-control-next  "  href="#myCarousel" data-slide="next" >
                <button class="cta">
                <span>next </span>
                <svg viewBox="0 0 13 10" height="10px" width="15px">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                </svg>
                </button>
                </a>


            </div>
            <div class="carousel-item">
                
                <div class="carousel">
                    <p>Which of the following type of variables are named and indexed collections of other values? </p>
                    <input type="radio" name="ans2" value="1">
                    <label for="html">Strings</label><br>
                    <input type="radio"  name="ans2" value="2">
                    <label for="css">Arrays</label><br>
                    <input type="radio"  name="ans2" value="3">
                    <label for="javascript"> Objects</label>
                </div>
                <a  class="carousel-control-next  "  href="#myCarousel" data-slide="next" >
                <button class="cta">
                <span>next </span>
                <svg viewBox="0 0 13 10" height="10px" width="15px">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                </svg>
                </button>
                </a>

            </div>

            <div class="carousel-item">
                
                <div class="carousel">
                    <p>Which of the following is correct about constants? </p>
                    <input type="radio" name="ans3" value="1">
                    <label for="html">Unlike with variables, you do not need to have a constant with a $.</label><br>
                    <input type="radio"  name="ans3" value="2">
                    <label for="css"> Only scalar data (boolean, integer, float and string) can be contained in constants.</label><br>
                    <input type="radio"  name="ans3" value="3">
                    <label for="javascript">Both of the above.</label>
                </div>
                <a  class="carousel-control-next  "  href="#myCarousel" data-slide="next" >
                <button class="cta">
                <span>next </span>
                <svg viewBox="0 0 13 10" height="10px" width="15px">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                </svg>
                </button>
                </a>

            </div>

            <div class="carousel-item">
                
                <div class="carousel">
                    <p>Which of the following can be used to get information sent via get/post method in PHP?</p>
                    <input type="radio" name="ans4" value="1">
                    <label for="html">$_REQUEST</label><br>
                    <input type="radio"  name="ans4" value="2">
                    <label for="css">$REQUEST</label><br>
                    <input type="radio"  name="ans4" value="3">
                    <label for="javascript">$REQUEST_PAGE</label>
                </div>
                <a  class="carousel-control-next  "  href="#myCarousel" data-slide="next" >
                <button class="cta">
                <span>next </span>
                <svg viewBox="0 0 13 10" height="10px" width="15px">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                </svg>
                </button>
                </a>

            </div>

            <div class="carousel-item">
                
                <div class="carousel">
                    <p>Which of the following function is used to read the content of a file? </p>
                    <input type="radio" name="ans5" value="1">
                    <label for="html"> fopen()</label><br>
                    <input type="radio"  name="ans5" value="2">
                    <label for="css">fread()</label><br>
                    <input type="radio"  name="ans5" value="3">
                    <label for="javascript">filesize()</label>
                </div>
                <input type="submit" value="submit">
                </form>
            </div>
            
        </div>
        
   
    </div>
</div>

<!-- <h1  style="text-align: center; padding-top: 20px; " class="value" name="value" > Score: <?php echo $correct; ?></h1> -->

 
</body>
</html>
