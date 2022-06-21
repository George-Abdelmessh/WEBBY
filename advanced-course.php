<?php
include 'DB-Config.php';


session_start();

$sql="SELECT * FROM `users`  where `E-mail`='".$_SESSION["email"]."' ";

$result=mysqli_query($conn,$sql);
$res=mysqli_query($conn,$sql);

if(empty( $_SESSION["email"])){
    header('location:login.php');
}else{
      
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    <!-- File Css -->
    <!-- <link rel="stylesheet" href="Main.css"> -->
    <link rel="stylesheet" href="Courses.css">

    <!--cdn Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!--cdn font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/A.linearicons.css+font-awesome.min.css+bootstrap.css+magnific-popup.css+owl.carousel.css+nice-select.css+hexagons.min.css,Mcc.e_F6Y5yBxP.css.pagespeed.cf.PRcmjKbtqw.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css" />
    <link rel="stylesheet" href="css/A.main.css.pagespeed.cf.DQLcLWq5zQ.css" />
    <!-- icon -->
    <link rel="icon" href="src/icon/icon-title.png">
    <!-- font awesome -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    </head>
    <!-- cdn googel fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto:400,400i,500,700" rel="stylesheet"/>
    <style>
        .cssbuttons-io-button {
    background: #A370F0;
    color: white;
    font-family: inherit;
    padding: 0.35em;
    padding-left: 1.2em;
    font-size: 17px;
    font-weight: 500;
    border-radius: 0.9em;
    border: none;
    letter-spacing: 0.05em;
    display: flex;
    align-items: center;
    box-shadow: inset 0 0 1.6em -0.6em #714da6;
    overflow: hidden;
    position: relative;
    height: 2.8em;
    padding-right: 3.3em;
   }
   
   .cssbuttons-io-button .icon {
    background: white;
    margin-left: 1em;
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 2.2em;
    width: 2.2em;
    border-radius: 0.7em;
    box-shadow: 0.1em 0.1em 0.6em 0.2em #7b52b9;
    right: 0.3em;
    transition: all 0.3s;
   }
   
   .cssbuttons-io-button:hover .icon {
    width: calc(100% - 0.6em);
   }
   
   .cssbuttons-io-button .icon svg {
    width: 1.1em;
    transition: transform 0.3s;
    color: #7b52b9;
   }
   
   .cssbuttons-io-button:hover .icon svg {
    transform: translateX(0.1em);
   }
   
   .cssbuttons-io-button:active .icon {
    transform: scale(0.95);
   }
   
    </style>
</head>
<body>
 
<!-- nav bar -->
    <nav class="navbar navbar-expand-sm navbar-dark " style="height:10vh; background-color: #7c32ff; " id="Enav">
        <div class="container">
            <a class="navbar-brand" href="#"><span style="
      font-weight: 900; font-size: 4vh;
      font-family: 'Abril Fatface', cursive;
        ">WEBBY</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBar1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div style="margin-left:1000px; color:white; text-transform: uppercase;">
               <?php
            $name = $res -> fetch_assoc();
            echo ($name["Name"]);    
            
            ?> 
            </div>
            <a href="Logout.php"  style="margin:10px; "> <button type="button" class="btn"  style="background: linear-gradient(16deg, rgba(194,58,187,1) 0%, rgba(136,0,255,1) 100%); color:white;">Logout</button></a>
        </div>
    </nav>
    





<div class="accordion container " id="accordionExample" style="margin-top:8rem; margin-bottom:2rem;" >
<h1>Advanced Course</h1>
  <div class="accordion-item">
        <h1 class="text-center">Course content</h1>
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      Lesson 1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <iframe width="100%" height="315" src="https://www.youtube.com/embed/-u9_T_CLZHY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      Lesson 2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <iframe width="100%" height="315" src="https://www.youtube.com/embed/yTpRuWSBncw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Lesson 3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <iframe width="100%" height="315" src="https://www.youtube.com/embed/6rAA3FDYh6I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
        Lesson 4
      </button>
    </h2>
    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <iframe width="100%" height="315" src="https://www.youtube.com/embed/NjRXHRPD6u4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapseThree">
      Lesson 5
      </button>
    </h2>
    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <iframe width="100%" height="315" src="https://www.youtube.com/embed/EOvgsmS5QwA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
    </div>
  </div>
  <div class="mt-5">
  
  <?php 
                  
              if($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                  $row["E-mail"]  . $row["beginner_result"] . $row["intermediate_result"] .$row["advanced_result"];
              
              if($row["advanced_result"]>3)
              {
                 echo  "<p style='color:black; font-size:20px;'>Completed this course<p>";
              }
              else{
                echo  "<a href='Quiz-advanced.php'  style='margin:10px; text-decoration:none;'><button class='cssbuttons-io-button'>Quiz To Complete this Course
                <div class='icon'>
                  <svg height='24' width='24' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'><path d='M0 0h24v24H0z' fill='none'></path><path d='M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z' fill='currentColor'></path></svg>
                </div>
             </button></a>";
         
              }
            }
          }
        
              else {
              echo "0 results";
              }
             
          
          $conn->close();
                  
                  ?>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>