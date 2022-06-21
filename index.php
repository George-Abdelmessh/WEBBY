<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">

    <link rel="stylesheet" href="team.css">

    <!-- File Css -->
    <link rel="stylesheet" href="Main.css">

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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    </head>
    <!-- cdn googel fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto:400,400i,500,700" rel="stylesheet"/>

</head>
<body>
 
<!-- nav bar -->
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top " style="height:10vh;" id="Enav">
        <div class="container">
            <a class="navbar-brand" href="#"><span style="
      font-weight: 900; font-size: 4vh;
      font-family: 'Abril Fatface', cursive;
        ">WEBBY</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBar1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navBar1">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacts</a>
                    </li>
                    <li class="nav-item" style="margin-left:2rem; " >

                    <a  href="Login.php" target="_blank" class="btn">Get Started</a>                   
                 </li>
            </div>
        </div>
    </nav>
    

<!-- header -->
<section class="home-banner-area">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height:720px; ">
            <div class="col-lg-5 col-md-8 home-banner-left mb-5">
                <h1 class="text-white">
                Take the first step <br>
                to learn with us
                </h1>
                <p class="text-white " >
                In the history of modern astronomy, there is probably no one
                greater leap forward than the building and launch of the space
                telescope known as the Hubble.
                </p>
            </div>
            <div class="offset-lg-2 col-lg-5 col-md-12 home-banner-right">
                <img class="img-fluid" src="img/img1.png" alt="">
            </div>
        </div>
    </div>
</section>


<section class="feature-area" >
    <div class="container-fluid" >
        <div class="feature-inner row"  >
            <div class="col-lg-2 col-md-6" >
                <div class="feature-item d-flex" >
                    <i class="ti-book"></i>
                    <div class="ml-20">
                        <h4>New Classes</h4>
                        <p>
                        In the history of modern astronomy, there is probably no one greater leap forward.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="feature-item d-flex">
                    <i class="ti-cup"></i>
                    <div class="ml-20">
                        <h4>Top Courses</h4>
                        <p>
                        In the history of modern astronomy, there is probably no one greater leap forward.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="feature-item d-flex border-right-0">
                    <i class="ti-desktop"></i>
                    <div class="ml-20">
                        <h4>Full E-Books</h4>
                        <p>
                        In the history of modern astronomy, there is probably no one greater leap forward.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end om -->

<section class="container sec-course">

    <div class="row py-5 g-3">
        <div class="col-12">
            <h1>Popular Courses</h1>
            <h1>Available Right Now </h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua.</p>
        </div>
    </div>
    <div class="row py-5 g-3 cols-3">
       
           <div class="col">
           <a href="Courses.php" style="text-decoration: none; color: black;">
            <div class="card">
                <img src="img/php.png" class="card-img-top" alt="..." style="height:300px;">
                <div class="card-body">
                    <span><b>PROGRAMMING LANGUAGE</b></span>
                    <h6>Learn PHP Course for Legendary Persons</h6>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span style="margin-left: 5px;"> 25 REVIEWES</span>
                </div>
            </div>
        </a>
        </div> 
        
        
        <div class="col">
            <div class="card">
                <img src="img/download.jpg" class="card-img-top" alt="..." style="height:300px;">
                <div class="card-body">
                    <span><b>PROGRAMMING LANGUAGE</b></span>
                    <h6>Learn Python Course for Legendary Persons</h6>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span style="margin-left: 5px;"> 25 REVIEWES</span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="img/download.jpg" class="card-img-top" alt="..." style="height:300px;">
                <div class="card-body">
                    <span><b>PROGRAMMING LANGUAGE</b></span>
                    <h6>Learn C++ Course for Legendary Persons</h6>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span style="margin-left: 5px;"> 25 REVIEWES</span>
                </div>
            </div>
        </div>
    </div>
</section>











  <section class="asec">

  

    <div class="left">
      <h1>
        Keeping up with our website's visitors
      </h1>
      <p style="color:black;">
        We not only offering the learning material but we also trying
        to keep up with the student to determine their improvement
      </p>
    </div>

    <div class="right">
      <div class="image"><img src="img/vimg.jpg"></div>
      <h4>We are always here for our future developers</h4>
      <p style="color:black;">Tests and tasks are also provided for a continous follow up and to determine the level and the needs of each
        student </p>
    </div>
  </section>


<section id="team">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
					<div class="sec-heading text-center">
						<h6>Team Members</h6>
					</div>
				</div>
			</div>
		</div>
		<div class="testimonial-box">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="team-slider owl-carousel">
							<div class="single-box text-center">
								<div class="img-area"><img  style="height:300px;" alt="" class="img-fluid move-animation" src="img/omar.JPG"></div>
								<div class="info-area">
									<h4>Omar Aly</h4>
									<p>I'm a level 6 IT student in Sinai university, Kantra campus. I studied a lot of courses in different tracks, Now I'm Flutter Developer.</p><a href="https://my-portfolio-om.netlify.app" target="_blank" class="btn ">Portfolio</a>
								</div>
							</div>
							<div class="single-box text-center">
								<div class="img-area" ><img alt="" style="height:300px;"class="img-fluid move-animation" src="img/george.JPEG"></div>
								<div class="info-area">
									<h4>George</h4>
									<p>I'm a level 6 IT student in Sinai university, Kantra campus. I studied a lot of courses in different tracks, Now I'm Flutter Developer.</p><a href="https://george960.netlify.app/" target="_blank" class="btn ">Portfolio</a>
								</div>
							</div>
							<div class="single-box text-center">
								<div class="img-area" ><img style="height:300px;"alt="" class="img-fluid move-animation" src="img/ahmed.jpg"></div>
								<div class="info-area">
									<h4>Ahmed saad</h4>
									<p>I'm a level 6 IT student in Sinai university, Kantra campus. I studied a lot of courses in different tracks, Now I'm Flutter Developer.</p><a href="https://george960.netlify.app/" target="_blank" class="btn ">Portfolio</a>
								</div>
							</div>
							<div class="single-box text-center">
								<div class="img-area" ><img style="height:300px;" alt="" class="img-fluid move-animation" src="img/aya.jpeg"></div>
								<div class="info-area">
									<h4>Aya</h4>
									<p>I'm a level 6 IT student in Sinai university, Kantra campus. I studied a lot of courses in different tracks, Now I'm Flutter Developer.</p><a href="https://george960.netlify.app/" target="_blank" class="btn ">Portfolio</a>
								</div>
							</div>
							<div class="single-box text-center">
								<div class="img-area" ><img style="height:300px;" alt="" class="img-fluid move-animation" src="img/bola.jpg"></div>
								<div class="info-area">
									<h4>Bola Youssef</h4>
									<p>I'm a level 6 IT student in Sinai university, Kantra campus. I studied a lot of courses in different tracks, Now I'm Flutter Developer.</p><a href="https://george960.netlify.app/"  class="btn ">Portfolio</a>
								</div>
							</div>
						</div>
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
<!--  -->
<!-- end bola -->
<!-- Swiper JS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script> 
    
	<script>
	       $('.team-slider').owlCarousel({
	           loop: true,            
	           nav: false,
	           autoplay: true,
	           autoplayTimeout: 5000,
	           smartSpeed: 450,
	           margin: 20,
	           responsive: {
	               0: {
	                   items: 1
	               },
	               768: {
	                   items: 2
	               },
	               991: {
	                   items: 3
	               },
	               1200: {
	                   items: 3
	               },
	               1920: {
	                   items: 3
	               }
	           }
	       });
	</script>
<script src="js/js.js"></script>
        
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="js/fontawesome.min.js"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>