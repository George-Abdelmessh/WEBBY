<?php
include 'DB-Config.php';


session_start();

$sql="SELECT * FROM `users`  where `E-mail`='".$_SESSION["email"]."' ";



$res=mysqli_query($conn,$sql);
$res1=mysqli_query($conn,$sql);
$res2=mysqli_query($conn,$sql);

$result=mysqli_query($conn,$sql);
$result2=mysqli_query($conn,$sql);
$result3=mysqli_query($conn,$sql);
$result4=mysqli_query($conn,$sql);

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
   
   #live_progress_bar{
   border:1px solid #ccc;
    border-radius:25px;
   }
    </style>
</head>
<body>
 

    <nav class="navbar navbar-expand-sm navbar-dark fixed-top " style="height:10vh;" id="Enav">
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


       

<!-- header -->
<section class="home-banner-area">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height:720px; ">
            <div class="col-lg-5 col-md-8 home-banner-left ">
                <h1 class="text-white">
                PHP Course
                </h1>
                <p class="text-white " >
                PHP for Beginners: learn everything you need to become a <br> professional 
               PHP developer with practical exercises & projects.
                </p>
            </div>
            <div class="offset-lg-2 col-lg-5 col-md-12 home-banner-right">
                <img class="img-fluid" src="img/header_img.png" alt="">
    
            </div>
        </div>
    </div>
</section>

<!-- single course section -->
	<section class="single-course spad pb-0 mt-3">
		<div class="container">
			<div class="course-meta-area">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="course-note">Featured Course</div>
						<h3>PHP Course</h3>
						<div class="course-metas">
							<div class="course-meta">
								<div class="course-author">
									<div class="ca-pic set-bg" data-setbg="img/authors/2.jpg"></div>
									<h6>Teachers</h6>
									<p> Webby <span>Developers</span></p>
                                    
								</div>
							</div>
							<div class="course-meta">
								<div class="cm-info">
									<h6>Category</h6>
									<p>Development</p>
								</div>
							</div>
							<div class="course-meta">
								<div class="cm-info">
									<h6>Students</h6>
									<p><?php

                                        $sql = "SELECT * FROM users";
                                        if ($result=mysqli_query($conn,$sql)) {
                                            $rowcount=mysqli_num_rows($result);
                                            echo $rowcount." "."Registered Students "; 
                                        }
                                        ?> </p>
                                   
								</div>
							</div>
							<div class="course-meta">
								<div class="cm-info">
									<h6>Reviews</h6>
									<p>5 Reviews <span class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star is-fade"></i>
									</span></p>
								</div>
							</div>
						</div>


                                  
<div class="pakainfo container">
  <div class="dsp row">
  
    <div class="pakainfo col-md-12">
		<p> </p>
	    <p> </p>
	
        <div  id="live_progress_bar" class="progress">
    
    </div>
    
  
		<!-- PHP Simple Progress preview_details -->
		<br>
		<div id="preview_details" ></div>
	</div>
  </div>
</div>

<?php



$total=100;



if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $row["E-mail"] . $row["beginner_result"] . $row["intermediate_result"] .$row["advanced_result"];

    if($row["beginner_result"]>3){
    for($i=0;$i<$total;$i++)
    {    
        $total_percentage = intval($i/$total * 25)."%";   
        echo '<script>
        parent.document.getElementById("live_progress_bar").innerHTML="<div style=\"width:'.$total_percentage.';background:linear-gradient(90deg,#7c32ff 0%,#c738d8 100%); ;height:35px; padding:0px;\"> </div>";
       </script>';
    
    }
    echo '<script>parent.document.getElementById("preview_details").innerHTML="<div style=\"text-align:center; font-weight:bold\">25% From This Course</div>"</script>';
    }}}
if($result2->num_rows > 0) {
    while($row = $result2->fetch_assoc()) {
        $row["E-mail"] . $row["beginner_result"] . $row["intermediate_result"] .$row["advanced_result"];
    if($row["beginner_result"]>3 && $row["intermediate_result"]>3 ||["beginner_result"]>3 && $row["advanced_result"]>3){
    for($i=0;$i<$total;$i++)
    {    
        $total_percentage = intval($i/$total * 50)."%";   
        echo '<script>
        parent.document.getElementById("live_progress_bar").innerHTML="<div style=\"width:'.$total_percentage.';background:linear-gradient(90deg,#7c32ff 0%,#c738d8 100%); ;height:35px;\"> </div>";
        p</script>';
    
    }
    echo '<script>parent.document.getElementById("preview_details").innerHTML="<div style=\"text-align:center; font-weight:bold\">50% From This Course</div>"</script>';
    }}}
if($result3->num_rows > 0) {
    while($row = $result3->fetch_assoc()) {
        $row["E-mail"] . $row["beginner_result"] . $row["intermediate_result"] .$row["advanced_result"];
    if($row["beginner_result"]>3 && $row["intermediate_result"]>3 && $row["advanced_result"]>3){
    for($i=0;$i<$total;$i++)
    {    
        $total_percentage = intval($i/$total * 100)."%";   
        echo '<script>
        parent.document.getElementById("live_progress_bar").innerHTML="<div style=\"width:'.$total_percentage.';background:linear-gradient(90deg,#7c32ff 0%,#c738d8 100%); ;height:35px; padding:0px;\"> </div>";
        </script>';
    
    }
    echo '<script>parent.document.getElementById("preview_details").innerHTML="<div style=\"text-align:center; font-weight:bold\">Completed This Courses</div>"</script>';
    }

}}
if($result4->num_rows > 0) {
    while($row = $result4->fetch_assoc()) {
        $row["E-mail"] . $row["beginner_result"] . $row["intermediate_result"] .$row["advanced_result"];
    if($row["beginner_result"]<3 && $row["intermediate_result"]<3 && $row["advanced_result"]<3){
    for($i=0;$i<$total;$i++)
    {    
        $total_percentage = intval($i/$total * 0)."%";   
        echo '<script>
        parent.document.getElementById("live_progress_bar").innerHTML="<div style=\"width:'.$total_percentage.';background:linear-gradient(to bottom, rgba(125,126,125,1) 0%,rgba(14,14,14,1) 100%); ;height:35px;\"> </div>";
      </script>';
    
    }
    echo '<script>parent.document.getElementById("preview_details").innerHTML="<div style=\"text-align:center; font-weight:bold\">0% From This Course </div>"</script>';
    }

}}
    

?>
                        

                        <h3>PHP For Begginers</h3>

						<a href="beginner-course.php"   style="margin:10px; text-decoration:none;" class="mb-4"> <button class='cssbuttons-io-button'> Get started
  <div class='icon'>
    <svg height='24' width='24' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'><path d='M0 0h24v24H0z' fill='none'></path><path d='M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z' fill='currentColor'></path></svg>
  </div>
</button></a>
                        
                        <h3 class="mt-5">PHP For Intermediate</h3>
                        <?php 


              

              if($res1->num_rows > 0) {
              while($row = $res1->fetch_assoc()) {
                  $row["E-mail"] . $row["beginner_result"] . $row["intermediate_result"] .$row["advanced_result"];
              if($row["beginner_result"]>3){
                  echo  "<a href='intermediate-course.php'  style='margin:10px; text-decoration:none;'> <button class='cssbuttons-io-button'> Get started
                  <div class='icon'>
                    <svg height='24' width='24' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'><path d='M0 0h24v24H0z' fill='none'></path><path d='M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z' fill='currentColor'></path></svg>
                  </div>
                </button></a>";
              }else{
                echo  "<a href='Quiz_beginner.php'  style='margin:10px; text-decoration:none;'><button class='cssbuttons-io-button'> Intermediate Quiz 
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
                  
                  <h3 class="mt-5">PHP For Advanced</h3>
                  <div>
                  <?php 
              
              
              if($res2->num_rows > 0) {
              while($row = $res2->fetch_assoc()) {
                  $row["E-mail"] . $row["beginner_result"] . $row["intermediate_result"] .$row["advanced_result"];
            
              if($row["advanced_result"]>3){
                echo  "<a href='advanced-course.php'   style='margin:10px; text-decoration:none;'><button class='cssbuttons-io-button'> Get started<div class='icon'><svg height='24' width='24' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'><path d='M0 0h24v24H0z' fill='none'></path><path d='M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z' fill='currentColor'></path></svg></div></button></a>";
            }else{
              echo  "<a href='Quiz-intermediate.php'  style='margin:10px; text-decoration:none;'><button class='cssbuttons-io-button'>Advanced Quiz 
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
             
          
          
                  
                  ?>
                  </div>



					</div>
				</div>
			</div>


			<img src="img/courses/single.jpg" alt="" class="course-preview"> 
			<div class="row">
				<div class="col-lg-10 offset-lg-1 course-list">
					<div class="cl-item">
						<h4>Course Description</h4>
						<p>Lorem ipsum dolor sit amet, consectetur. Phasellus sollicitudin et nunc eu efficitur. Sed ligula nulla, molestie quis ligula in, eleifend rhoncus ipsum. Donec ultrices, sem vel efficitur molestie, massa nisl posuere ipsum, ut vulputate mauris ligula a metus. Aenean vel congue diam, sed bibendum ipsum. Nunc vulputate aliquet tristique. Integer et pellentesque urna. Lorem ipsum dolor sit amet, consectetur. Phasellus sollicitudin et nunc eu efficitur. Sed ligula nulla, molestie quis ligula in, eleifend rhoncus ipsum. </p>
					</div>
					<div class="cl-item">
						<h4>Certification</h4>
						<p>Phasellus sollicitudin et nunc eu efficitur. Sed ligula nulla, molestie quis ligula in, eleifend rhoncus ipsum. Donec ultrices, sem vel efficitur molestie, massa nisl posuere ipsum, ut vulputate mauris ligula a metus. Aenean vel congue diam, sed bibendum ipsum. Nunc vulputate aliquet tristique. Integer et pellentesque urna. Lorem ipsum dolor sit amet, consectetur. Phasellus sollicitudin et nunc eu efficitur. Sed ligula nulla, molestie quis ligula in, eleifend rhoncus ipsum. Donec ultrices, sem vel efficitur molestie, massa nisl posuere ipsum.</p>
					</div>
					<div class="cl-item">
						<h4>The Instructor</h4>
						<p>Sed ligula nulla, molestie quis ligula in, eleifend rhoncus ipsum. Donec ultrices, sem vel efficitur molestie, massa nisl posuere ipsum, ut vulputate mauris ligula a metus. Aenean vel congue diam, sed bibendum ipsum. Nunc vulputate aliquet tristique. Integer et pellentesque urna. Lorem ipsum dolor sit amet, consectetur. Phasellus sollicitudin et nunc eu efficitur. Sed ligula nulla, molestie quis ligula in, eleifend rhoncus ipsum. Donec ultrices, sem vel efficitur molestie, massa nisl posuere ipsum, ut vulputate mauris ligula a metus. </p>
					</div>
				</div>
			</div>
		</div>
        </section>	




      <!-- footer -->
<footer class="footer-area section-gap">
    <div class="container">
      <div class="row "  >
            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4 >Top Products</h4>
            
                <li><a href="#">Managed Website</a></li>
                <li><a href="#">Manage Reputation</a></li>
                <li><a href="#">Power Tools</a></li>
                <li><a href="#">Marketing Service</a></li>     
            
            </div>
            <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4 >Quick Links</h4>
            
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Brand Assets</a></li>
            <li><a href="#">Investor Relations</a></li>
            <li><a href="#">Terms of Service</a></li>
            
            </div>
            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4>Features</h4>
        
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Brand Assets</a></li>
                <li><a href="#">Investor Relations</a></li>
                <li><a href="#">Terms of Service</a></li>
                
            </div>
            <div class="col-lg-2 col-md-6 single-footer-widget" >
                <h4>Resources</h4>
        
                <li><a href="#">Guides</a></li>
                <li><a href="#">Research</a></li>
                <li><a href="#">Experts</a></li>
                <li ><a href="#">Agencies</a></li>
        
            </div>

            <div class="col-lg-4 col-md-6 single-footer-widget ">
                <h4 >Newsletter</h4>
                <p>You can trust us. we only send promo offers,</p>
                <div class="form-wrap" id="mc_embed_signup">
                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" class="form-inline">
                    <input class="form-control" name="EMAIL" placeholder="Your Email Address" required type="email">
                    <button class="click-btn btn btn-default text-uppercase">subscribe</button>
                    <div style="position: absolute; left: -5000px;">
                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                    </div>
                    <div class="info"></div>
                    </form>
                </div>
            </div>
        
            <div class="footer-bottom row align-items-center " style="position: relative; top: 4vmax;" >
                <p class="footer-text col-lg-8 col-md-12  ">
        
                Copyright &copy; All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by Webby
                </p>
                <div class="col-lg-4 col-md-12 footer-social ">
                    <a href="#"><i class="fa-brands  fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands  fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands  fa-dribbble"></i></a>
                    <a href="#"><i class="fa-brands  fa-behance"></i></a>
                </div>
            </div>  
        </div>
    </div>
</footer>
 <script src="js/js.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>