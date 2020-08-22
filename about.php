<?php
 	include 'connection.php';
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>About COVID-19</title>
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
	        	<li class="nav-item active"><a href="about.php" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="updates.php" class="nav-link">Updates</a></li>
	        	<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    
    
      <section class="hero" style="background-color: orange;" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">About COVID-19</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About <i class="ion-ios-arrow-forward"></i></span></p>
          
		  
		  </div>
        </div>
      </div>
    </section>
		
			<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/abt.jpg);">
					</div>
					<div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
	          <div class="heading-section mb-5">
	          	<div class="pl-md-5 ml-md-5">
		          	
		            <h2 class="mb-4" style="font-size: 28px;">About COVID-19</h2>
	            </div>
	          </div>
	          <div class="pl-md-5 ml-md-5 mb-5">
							<p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV). A novel coronavirus (nCoV) is a new strain that has not been previously identified in humans.Coronaviruses are zoonotic, meaning they are transmitted between animals and people. Detailed investigations found that SARS-CoV was transmitted from civet cats to humans and MERS-CoV from dromedary camels to humans. Several known coronaviruses are circulating in animals that have not yet infected humans.Common signs of infection include respiratory symptoms, fever, cough, shortness of breath and breathing difficulties. In more severe cases, infection can cause pneumonia, severe acute respiratory syndrome, kidney failure and even death. Standard recommendations to prevent infection spread include regular hand washing, covering mouth and nose when coughing and sneezing, thoroughly cooking meat and eggs. Avoid close contact with anyone showing symptoms of respiratory illness such as coughing and sneezing.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="col-md-12 py-5 pr-md-12" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 py-5 pr-md-5">
						<h4 style="color:black;">Pandemic is not a word to use lightly or carelessly. It is a word that, if misused, can cause unreasonable fear, or unjustified acceptance that the fight is over, leading to unnecessary suffering and death.</h4>						
					</div>
					
				</div>
			</div>
		</section>

   	
    <section class="hero" style="background-color: orange;" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Track Symptons</h1>
                      
		  
		  </div>
        </div>
      </div>
    </section>
				<section>		
				<div class="container">
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
	
			
	          	            
	                        <strong><h1 style="color:black; font-weight:750">Access Yourself</h1></strong>
							
	                        <h4 style="color:orange; font-weight:600">Safety is not expensive, it is priceless!</h4>
							<p style="color:black;">During the assessment, you can refresh the page if you need to start again.</p>
	           
	                    
	           
			            <form action="track.php" method="post" id="myForm" autocomplete="off" >
	    				
							<div class="d-md-flex">
								<div class="form-group">
								
									
									<input type="text" class="form-control" name="name" placeholder="Enter your Name" required>
								</div>
								
							</div>
							
							<div class="d-md-flex">
									<div class="form-group">
										<div class="form-field">
										
											
										
										<h6 style="color:black;">Select your gender</h6><br>
											<div type="radio">
											  <label><input  type="radio" name="gender" id="male" value="male">Male</label>
											</div>
											<div type="radio">
											  <label><input  type="radio" name="gender" id="female" value="female">Female</label>
											</div>
											<div type="radio">
											  <label><input  type="radio" name="gender" id="others" value="others" >Others</label>
											</div>
											<div type="radio">
											  <label><input  type="radio" name="gender" id="dont" value="dont" >Don't want to mention</label>
											</div>
											
											
										</div>
									</div>
							</div>

							
							<div class="d-md-flex">
								<div class="form-group">
									<div class="form-field">
									<h6 style="color:black;" >Are you experiencing any of the following symptons?</h6><br>
									<p>(Incase your answer is none of these, please leave this answer blank.)</p>
										
												<div class="checkbox">
													<label><input type="checkbox" name="symptons[]" value="fever" >Fever</label>
												</div>
												<div class="checkbox">
												  <label><input type="checkbox" name="symptons[]"  value="cough" >Cough</label>
												</div>
												<div class="checkbox">
												  <label><input type="checkbox" name="symptons[]" value="breathingd" >Breathing Difficulty</label>
												</div>
												<div class="checkbox">
												  <label><input type="checkbox" name="symptons[]" value="loss">Loss of taste and smell</label>
												</div>
												
									</div>
								</div>
							</div>
							<div class="d-md-flex">
								<div class="form-group">
									<div class="form-field">
									<h6 style="color:black;" >Have you ever had any of the following?</h6><br>
									<p>(Incase your answer is none of these, please leave this answer blank.)</p>
									
										<div class="checkbox">
										  <label><input type="checkbox" name="disease[]" value="diabetes">Diabetes</label>
										</div>
										<div class="checkbox">
										  <label><input type="checkbox" name="disease[]" value="hypertension">Hypertension</label>
										</div>
										<div class="checkbox disabled">
										  <label><input type="checkbox" name="disease[]" value="lungd" >Lung Disease</label>
										</div>
										<div class="checkbox">
										  <label><input type="checkbox" name="disease[]" value="heartd">Heart Disease</label>
										</div>
										<div class="checkbox">
										  <label><input type="checkbox" name="disease[]" value="kidneyd">Kidney Disorder</label>
										</div>
										
								</div>
								</div>
							</div>
							
							
							<div class="d-md-flex">
									<div class="form-group">
										<div class="form-field">
										
											
										
										<h6 style="color:black;">Which of the following apply to you?</h6><br>
											<div type="radio">
											  <label><input  type="radio" name="activity" id="traveledinternationally" value="traveledinternationally">Traveled internationally in the last 14 to 28 days</label>
											</div>
											<div type="radio">
											  <label><input  type="radio" name="activity" id="livedwith" value="livedwith">Recently interacted or lived with someone who has been tested positive for COVID-19</label>
											</div>
											<div type="radio">
											  <label><input  type="radio" name="activity" id="healthworker" value="healthworker" >Am a health worker</label>
											</div>
											<div type="radio">
											  <label><input  type="radio" name="activity" id="none" value="none">None of the above</label>
											</div>
											
										</div>
									</div>
							</div>

								
							<div class="d-md-flex">
								<div class="form-group">
									<div class="form-field">
										<div class="select-wrap">
											
												<select name="age" iclass="form-control" required>
													<option style="color:black;" selected disabled hidden>Are you above 65 or below 8 years ?</option>
													<option  value="yes" style="color:black;">Yes</option>
													<option  value="no" style="color:black;">No</option>
												</select>
											</div>
										</div>

									</div>
								</div>
								<input type="checkbox" required name="terms"> I confirm that all the given information given by me is true.

								<input type="submit" name="Submit" value="Submit" class="btn btn-block btn-secondary">
								
							</div>
							  
						

							
					</form>
					<div class="col-md-6 d-flex align-items-stretch">
						
						<div class="col-md-12 p-md-12 img img-2 mt-5 mt-md-0" style="background-image: url(images/access.jpg);">
						</div>
					</div>
					
				</div>
    			</div>
    			
            </div>
    	</div>
   </section> 

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
	<script>
	var form = document.getElementById("myForm");
      form.onsubmit = function(){
        form.reset();
    </script>
 
	
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