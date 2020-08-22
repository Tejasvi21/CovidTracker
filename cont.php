<?php
	include 'connection.php';
	session_start();
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	
					
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Thankyou</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	<style>
		.center {
		  text-align: center;
		  border: 3px solid orange;
		}
	</style>

  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-primary" id="ftco-navbar">
	    <a class="navbar-brand" href="index.php"><h1 class="ftco-heading-3 logo" style="font-weight:900; color:blue;">Covid<span style="color:orange;">Tracker</span></h1></a>
	
	    <div class="container d-flex align-items-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <p class="button-custom order-lg-last mb-0"><a href="access.php" class="btn btn-secondary py-2 px-3">Access Yourself</a></p>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item"><a href="index.php" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	        	<li class="nav-item active"><a href="updates.php" class="nav-link">Updates</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  
       
	
	<?php if(isset($_POST['submit']))
	{
		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			//header("Location: contact.php");
			//echo "Invalid emailformat"; 
			?>
			<section class="hero" style="background-color: orange;" data-stellar-background-ratio="0.5">
			  <div class="overlay"></div>
			  <div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-center">
				  <div class="col-md-9 ftco-animate text-center">
					<h1 class="mb-2 bread">Error</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Try Again<i class="ion-ios-arrow-forward"></i></span></p>
				  
				  
				  </div>
				</div>
			  </div>
			</section>
			
			<section>
			<div class="center" style="height:200px;" >
				<br>
				<form action="contact.php">
					<h5>Invalid Email Format</h5>
					<input type="submit"  name="submit" class="btn btn-success py-3 px-5" value="Go back and edit" />
				</form>
			</div>
			
			</section>
		<?php
		}
		else
		{
			//echo "Thankyou";
			$query1="insert into feedback (name,email,subject,message) values ('$name','$email','$subject','$message')";
			mysqli_query($con, $query1);
			?>
			<section class="hero" style="background-color: orange;" data-stellar-background-ratio="0.5">
			  <div class="overlay"></div>
			  <div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-center">
				  <div class="col-md-9 ftco-animate text-center">
					<h1 class="mb-2 bread">	Thankyou</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Thankyou<i class="ion-ios-arrow-forward"></i></span></p>
				  
				  
				  </div>
				</div>
			  </div>
			</section>
			
			<section>
			<div class="center" style="height:200px; ">
				<h5>Thankyou for your feedback. We will reach back to you shortly.</h5>
				<form action="index.php">
					<input type="submit"  name="submit" class="btn btn-primary py-3 px-5" value="Back to Home" />
					
				</form>
				<br>
				<form action="contact.php">
					<input type="submit"  name="submit" class="btn btn-success py-3 px-5" value="Write another message." />
				</form>
			</div>
			</section>
			<?php
	
		}
    }?>
		
				
				
		
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2 logo">Covid<span>Tracker</span></h2>
              <p>The world is together in this by maintaining a 6 feet distance. #StaySafe</p>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Have Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">179, Purshottam Nagar, Khuldabad, Allahabad</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 7348513950</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">tejasvisrivastava21@gmail.com</span></a></li>
	              </ul>
	            </div>

	            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="www.oogle.com"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="www.faceboo.com"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="www.instagram.com"><span class="icon-instagram"></span></a></li>
				
				
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="index.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="about.php"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
				<li><a href="updates.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Updates</a></li>

                <li><a href="contact.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">More Updates</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/question-and-answers-hub/q-a-detail/q-a-coronaviruses">Open the link to know what WHO has to say about COVID-19.</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 25, 2020</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="https://www.thehindu.com/opinion/op-ed/do-doctors-have-an-uncircumscribed-duty-to-serve/article31671938.ece">If doctors have a duty to provide care then what about the value of reciprocity: does society not have a duty to support those who assume the burden to buttress the public good?</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 25, 2020</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  </div>
        
      </div>
    </footer>
    
  

  
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
