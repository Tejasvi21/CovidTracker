<?php
	
	include 'connection.php';
	session_start();
	
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$symptonsarr=$_POST['symptons'];
	$diseasearr=$_POST['disease'];
	$activity=$_POST['activity'];
	$age=$_POST['age'];
	$_SESSION['name'] = $name;

	$N = count($symptonsarr);
	$M = count($diseasearr);
	
	$s=implode(",", (array)$symptonsarr);
	$d=implode(",", (array)$diseasearr);
			
	if(isset($_POST['Submit']))
	{
		$date_clicked = date('Y-m-d H:i:s');
	}
	$query= "insert into form (name,gender,symptons,disease,activity,age,date) values ('$name','$gender','$s','$d','$activity','$age','$date_clicked')";
	mysqli_query($con, $query); 
	
	

	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Result</title>
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
	        	<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
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
            <h1 class="mb-2 bread">Result</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Result<i class="ion-ios-arrow-forward"></i></span></p>
          
		  
		  </div>
        </div>
      </div>
    </section>
	
	
<?php	
	
	if(isset($_POST['Submit']))
	{
		
		if(($N>0 & $N<5) && ($M>0 & $M<6) && $activity='none' && ($age=='yes' || $age=='no'))
		{
			//High Risk,or unwell
			?>
			<section class="ftco-section ftco-no-pt ftc-no-pb">
						<div class="container">
							<div class="row no-gutters">
								<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/fight.jpg);">
								</div>
								<div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
						  <div class="heading-section mb-5">
							<div class="pl-md-5 ml-md-5">
								
										<h2 class="ftco-heading-2 logo">Hi <span style="color:orange;"> <?php echo $_SESSION['name']; ?> </span>, It seems that you are at <span style="color:orange;">HIGH RISK or UNWELL!</span></h2>
																	
								</div>
						  </div>
						  <div class="pl-md-5 ml-md-5 mb-5">
										<p>Protecting youself should be your major concern right now. Contact your doctor as soon as possible or you can reach out to governmet authorities by clicking on this<a href=" https://www.mohfw.gov.in/pdf/coronvavirushelplinenumber.pdf"> link</a> .</p>
							<p>Calling in advance allows your healthcare provider to quickly direct you to the right health facility. This protects you, and prevents the spread of viruses and other infections.</p>
							<p>People at increased risk of severe illness from COVID-19, and those who live with them, should consider their level of risk before deciding to go out and ensure they are taking steps to protect themselves. Consider avoiding activities where taking protective measures may be difficult, such as activities where social distancing can’t be maintained. Everyone should take steps to prevent getting and spreading COVID-19 to protect themselves, their communities, and people who are at increased risk of severe illness.

							</p>
							<ul>
								<li>Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap and water. Why? Washing your hands with soap and water or using alcohol-based hand rub kills viruses that may be on your hands.</li>
								<li>Maintain at least 1 metre (3 feet) distance between yourself and others.</li>
								<li>Avoid going to crowded places. Why? Where people come together in crowds, you are more likely to come into close contact with someone that has COVID-19 and it is more difficult to maintain physical distance of 1 metre (3 feet).</li>
								<li>Make sure you, and the people around you, follow good respiratory hygiene. This means covering your mouth and nose with your bent elbow or tissue when you cough or sneeze. Then dispose of the used tissue immediately and wash your hands. Why? Droplets spread virus. By following good respiratory hygiene, you protect the people around you from viruses such as cold, flu and COVID-19.</li>
								<li>Stay home and self-isolate even with minor symptoms such as cough, headache, mild fever, until you recover.</li>
								<li>Keep up to date on the latest information from trusted sources, such as WHO or your local and national health authorities.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
		}
		else if(($N>0 & $N<5) && ($M>0 & $M<6) && ($activity=='traveledinternationally' || $activity=='livedwith' || $activity=='healthworker' ) && ($age=='yes' || $age=='no'))
		{
			//High Risk, unwell or infected
			?>
			<section class="ftco-section ftco-no-pt ftc-no-pb">
						<div class="container">
							<div class="row no-gutters">
								<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/fight.jpg);">
								</div>
								<div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
						  <div class="heading-section mb-5">
							<div class="pl-md-5 ml-md-5">
								
										<h2 class="ftco-heading-2 logo">Hi <span style="color:orange;"> <?php echo $_SESSION['name']; ?> </span>, It seems that there are high possibilities of you getting <span style="color:orange;">INFECTED or UNWELL!</span></h2>
																	
								</div>
						  </div>
						  <div class="pl-md-5 ml-md-5 mb-5">
										<p>Protecting youself should be your major concern right now. Contact your doctor as ssson as possible or you can reach out to governmet authorities by clicking on this<a href=" https://www.mohfw.gov.in/pdf/coronvavirushelplinenumber.pdf"> link</a> .</p>
							<p>Calling in advance allows your healthcare provider to quickly direct you to the right health facility. This protects you, and prevents the spread of viruses and other infections.</p>
							<p>People at increased risk of severe illness from COVID-19, and those who live with them, should consider their level of risk before deciding to go out and ensure they are taking steps to protect themselves. Consider avoiding activities where taking protective measures may be difficult, such as activities where social distancing can’t be maintained. Everyone should take steps to prevent getting and spreading COVID-19 to protect themselves, their communities, and people who are at increased risk of severe illness.

							</p>
							<ul>
								<li>Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap and water. Why? Washing your hands with soap and water or using alcohol-based hand rub kills viruses that may be on your hands.</li>
								<li>Maintain at least 1 metre (3 feet) distance between yourself and others.</li>
								<li>Avoid going to crowded places. Why? Where people come together in crowds, you are more likely to come into close contact with someone that has COVID-19 and it is more difficult to maintain physical distance of 1 metre (3 feet).</li>
								<li>Make sure you, and the people around you, follow good respiratory hygiene. This means covering your mouth and nose with your bent elbow or tissue when you cough or sneeze. Then dispose of the used tissue immediately and wash your hands. Why? Droplets spread virus. By following good respiratory hygiene, you protect the people around you from viruses such as cold, flu and COVID-19.</li>
								<li>Stay home and self-isolate even with minor symptoms such as cough, headache, mild fever, until you recover.</li>
								<li>Keep up to date on the latest information from trusted sources, such as WHO or your local and national health authorities.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php		
		}
		else if($N==0 && ($M>0 & $M<6) && $activity=='none' && ($age=='yes' || $age=='no'))
		{
			//Safe but take care
			?>
			<section class="ftco-section ftco-no-pt ftc-no-pb">
						<div class="container">
							<div class="row no-gutters">
								<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/fight.jpg);">
								</div>
								<div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
						  <div class="heading-section mb-5">
							<div class="pl-md-5 ml-md-5">
								
										<h2 class="ftco-heading-2 logo">Hi <span style="color:orange;"> <?php echo $_SESSION['name']; ?> </span>, It seems that you are <span style="color:orange;">SAFE!</span></h2>
																	
								</div>
						  </div>
						  <div class="pl-md-5 ml-md-5 mb-5">
										<p>You appear to be safe but due to your medical conditions, you might get infected easily, no matter what your age is.</p>
										<p>Follow all the guidelines provided by <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public?gclid=Cj0KCQjw-O35BRDVARIsAJU5mQUvOgKSN9DDjQMIGUV1PEbRm7cPRr3-qi0i3Cwu8kbJtDLW1HNDBUgaArjqEALw_wcB">World Health Organization.</a></p>
							<ul>
								<li>Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap and water. Why? Washing your hands with soap and water or using alcohol-based hand rub kills viruses that may be on your hands.</li>
								<li>Maintain at least 1 metre (3 feet) distance between yourself and others.</li>
								<li>Avoid going to crowded places. Why? Where people come together in crowds, you are more likely to come into close contact with someone that has COVID-19 and it is more difficult to maintain physical distance of 1 metre (3 feet).</li>
								<li>Make sure you, and the people around you, follow good respiratory hygiene. This means covering your mouth and nose with your bent elbow or tissue when you cough or sneeze. Then dispose of the used tissue immediately and wash your hands. Why? Droplets spread virus. By following good respiratory hygiene, you protect the people around you from viruses such as cold, flu and COVID-19.</li>
								<li>Stay home and self-isolate even with minor symptoms such as cough, headache, mild fever, until you recover.</li>
								<li>Keep up to date on the latest information from trusted sources, such as WHO or your local and national health authorities.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
		}
		else if( $N==0 && ($M>0 & $M<6) && ($activity=='traveledinternationally' || $activity=='livedwith' || $activity=='healthworker' ) && ($age=='yes' || $age=='no'))
		{
			//Risk 
			?>
			<section class="ftco-section ftco-no-pt ftc-no-pb">
						<div class="container">
							<div class="row no-gutters">
								<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/fight.jpg);">
								</div>
								<div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
						  <div class="heading-section mb-5">
							<div class="pl-md-5 ml-md-5">
								
										<h2 class="ftco-heading-2 logo">Hi <span style="color:orange;"> <?php echo $_SESSION['name']; ?> </span>, It seems that you are at <span style="color:orange;">RISK!</span></h2>
																	
								</div>
						  </div>
						  <div class="pl-md-5 ml-md-5 mb-5">
										<p>Since you have been exposed to the outside environement and you have certain medical conditions, protecting youself should be your major concern right now. Contact your doctor as ssson as possible or you can reach out to governmet authorities by clicking on this<a href=" https://www.mohfw.gov.in/pdf/coronvavirushelplinenumber.pdf"> link</a> .</p>
							<p>Calling in advance allows your healthcare provider to quickly direct you to the right health facility. This protects you, and prevents the spread of viruses and other infections.</p>
							<ul>
								<li>Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap and water. Why? Washing your hands with soap and water or using alcohol-based hand rub kills viruses that may be on your hands.</li>
								<li>Maintain at least 1 metre (3 feet) distance between yourself and others.</li>
								<li>Avoid going to crowded places. Why? Where people come together in crowds, you are more likely to come into close contact with someone that has COVID-19 and it is more difficult to maintain physical distance of 1 metre (3 feet).</li>
								<li>Make sure you, and the people around you, follow good respiratory hygiene. This means covering your mouth and nose with your bent elbow or tissue when you cough or sneeze. Then dispose of the used tissue immediately and wash your hands. Why? Droplets spread virus. By following good respiratory hygiene, you protect the people around you from viruses such as cold, flu and COVID-19.</li>
								<li>Stay home and self-isolate even with minor symptoms such as cough, headache, mild fever, until you recover.</li>
								<li>Keep up to date on the latest information from trusted sources, such as WHO or your local and national health authorities.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
		}
		else if( $N==0 && $M==0 && ($activity=='traveledinternationally' || $activity=='livedwith' || $activity=='healthworker' ) && ($age=='yes' || $age=='no'))
		{
			//Safe but might get infected
			?>
			<section class="ftco-section ftco-no-pt ftc-no-pb">
						<div class="container">
							<div class="row no-gutters">
								<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/fight.jpg);">
								</div>
								<div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
						  <div class="heading-section mb-5">
							<div class="pl-md-5 ml-md-5">
								
										<h2 class="ftco-heading-2 logo">Hi  <span style="color:orange;"> <?php echo $_SESSION['name']; ?> </span>, It seems that you are <span style="color:orange;">SAFE!</span></h2>
																	
								</div>
						  </div>
						  <div class="pl-md-5 ml-md-5 mb-5">
										<p>Since you have been exposed to the outside environement, chances are that you might have encountered the virus. Follow all the necessary guidelines provided by <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public?gclid=Cj0KCQjw-O35BRDVARIsAJU5mQUvOgKSN9DDjQMIGUV1PEbRm7cPRr3-qi0i3Cwu8kbJtDLW1HNDBUgaArjqEALw_wcB">World Health Organization</a>and protect yourself.</p>
								<ul>
								<li>Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap and water. Why? Washing your hands with soap and water or using alcohol-based hand rub kills viruses that may be on your hands.</li>
								<li>Maintain at least 1 metre (3 feet) distance between yourself and others.</li>
								<li>Avoid going to crowded places. Why? Where people come together in crowds, you are more likely to come into close contact with someone that has COVID-19 and it is more difficult to maintain physical distance of 1 metre (3 feet).</li>
								<li>Make sure you, and the people around you, follow good respiratory hygiene. This means covering your mouth and nose with your bent elbow or tissue when you cough or sneeze. Then dispose of the used tissue immediately and wash your hands. Why? Droplets spread virus. By following good respiratory hygiene, you protect the people around you from viruses such as cold, flu and COVID-19.</li>
								<li>Stay home and self-isolate even with minor symptoms such as cough, headache, mild fever, until you recover.</li>
								<li>Keep up to date on the latest information from trusted sources, such as WHO or your local and national health authorities.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
		}
		else if(($N>0 & $N<5) && $M==0 && $activity='none' && ($age=='yes' || $age=='no'))
		{
			//Risk,or unwell
			?>
			<section class="ftco-section ftco-no-pt ftc-no-pb">
						<div class="container">
							<div class="row no-gutters">
								<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/fight.jpg);">
								</div>
								<div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
						  <div class="heading-section mb-5">
							<div class="pl-md-5 ml-md-5">
								
										<h2 class="ftco-heading-2 logo">Hi <span style="color:orange;"> <?php echo $_SESSION['name']; ?> </span>, It seems that you are at <span style="color:orange;">RISK or UNWELL!</span></h2>
																	
								</div>
						  </div>
						  <div class="pl-md-5 ml-md-5 mb-5">
										<p>Protecting youself should be your major concern right now. Contact your doctor as ssson as possible or you can reach out to governmet authorities by clicking on this<a href=" https://www.mohfw.gov.in/pdf/coronvavirushelplinenumber.pdf"> link</a> .</p>
							<p>Calling in advance allows your healthcare provider to quickly direct you to the right health facility. This protects you, and prevents the spread of viruses and other infections.</p>
							<ul>
								<li>Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap and water. Why? Washing your hands with soap and water or using alcohol-based hand rub kills viruses that may be on your hands.</li>
								<li>Maintain at least 1 metre (3 feet) distance between yourself and others.</li>
								<li>Avoid going to crowded places. Why? Where people come together in crowds, you are more likely to come into close contact with someone that has COVID-19 and it is more difficult to maintain physical distance of 1 metre (3 feet).</li>
								<li>Make sure you, and the people around you, follow good respiratory hygiene. This means covering your mouth and nose with your bent elbow or tissue when you cough or sneeze. Then dispose of the used tissue immediately and wash your hands. Why? Droplets spread virus. By following good respiratory hygiene, you protect the people around you from viruses such as cold, flu and COVID-19.</li>
								<li>Stay home and self-isolate even with minor symptoms such as cough, headache, mild fever, until you recover.</li>
								<li>Keep up to date on the latest information from trusted sources, such as WHO or your local and national health authorities.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
		}
		else if(($N>0 & $N<5) && $M==0 && ($activity=='traveledinternationally' || $activity=='livedwith' || $activity=='healthworker' ) && ($age=='yes' || $age=='no'))
		{
			//High Risk, unwell or infected
			?>
			<section class="ftco-section ftco-no-pt ftc-no-pb">
						<div class="container">
							<div class="row no-gutters">
								<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/fight.jpg);">
								</div>
								<div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
						  <div class="heading-section mb-5">
							<div class="pl-md-5 ml-md-5">
								
										<h2 class="ftco-heading-2 logo">Hi <span style="color:orange;"> <?php echo $_SESSION['name']; ?> </span>, It seems that there are high probability of you getting <span style="color:orange;">INFECTED or UNWELL!</span></h2>
																	
								</div>
						  </div>
						  <div class="pl-md-5 ml-md-5 mb-5">
										<p>Protecting youself should be your major concern right now. Contact your doctor as ssson as possible or you can reach out to governmet authorities by clicking on this<a href=" https://www.mohfw.gov.in/pdf/coronvavirushelplinenumber.pdf"> link</a> .</p>
							<p>Calling in advance allows your healthcare provider to quickly direct you to the right health facility. This protects you, and prevents the spread of viruses and other infections.</p>
							<ul>
								<li>Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap and water. Why? Washing your hands with soap and water or using alcohol-based hand rub kills viruses that may be on your hands.</li>
								<li>Maintain at least 1 metre (3 feet) distance between yourself and others.</li>
								<li>Avoid going to crowded places. Why? Where people come together in crowds, you are more likely to come into close contact with someone that has COVID-19 and it is more difficult to maintain physical distance of 1 metre (3 feet).</li>
								<li>Make sure you, and the people around you, follow good respiratory hygiene. This means covering your mouth and nose with your bent elbow or tissue when you cough or sneeze. Then dispose of the used tissue immediately and wash your hands. Why? Droplets spread virus. By following good respiratory hygiene, you protect the people around you from viruses such as cold, flu and COVID-19.</li>
								<li>Stay home and self-isolate even with minor symptoms such as cough, headache, mild fever, until you recover.</li>
								<li>Keep up to date on the latest information from trusted sources, such as WHO or your local and national health authorities.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
		}
		else if($N==0 && $M==0 && $activity=='none' && $age=='yes')
		{
			//Safe but might get infected
			?>
			<section class="ftco-section ftco-no-pt ftc-no-pb">
						<div class="container">
							<div class="row no-gutters">
								<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/fight.jpg);">
								</div>
								<div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
						  <div class="heading-section mb-5">
							<div class="pl-md-5 ml-md-5">
								
										<h2 class="ftco-heading-2 logo">Hi <span style="color:orange;"> <?php echo $_SESSION['name']; ?> </span>, It seems that you are <span style="color:orange;">SAFE!</span></h2>
																	
								</div>
						  </div>
						  <div class="pl-md-5 ml-md-5 mb-5">
							<p>Follow all the guidelines provided by <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public?gclid=Cj0KCQjw-O35BRDVARIsAJU5mQUvOgKSN9DDjQMIGUV1PEbRm7cPRr3-qi0i3Cwu8kbJtDLW1HNDBUgaArjqEALw_wcB">World Health Organization.</a></p>
										
							<ul>
								<li>Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap and water. Why? Washing your hands with soap and water or using alcohol-based hand rub kills viruses that may be on your hands.</li>
								<li>Maintain at least 1 metre (3 feet) distance between yourself and others.</li>
								<li>Avoid going to crowded places. Why? Where people come together in crowds, you are more likely to come into close contact with someone that has COVID-19 and it is more difficult to maintain physical distance of 1 metre (3 feet).</li>
								<li>Make sure you, and the people around you, follow good respiratory hygiene. This means covering your mouth and nose with your bent elbow or tissue when you cough or sneeze. Then dispose of the used tissue immediately and wash your hands. Why? Droplets spread virus. By following good respiratory hygiene, you protect the people around you from viruses such as cold, flu and COVID-19.</li>
								<li>Stay home and self-isolate even with minor symptoms such as cough, headache, mild fever, until you recover.</li>
								<li>Keep up to date on the latest information from trusted sources, such as WHO or your local and national health authorities.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
		}
		else if($N==0 && $M==0 && $activity=='none' && $age=='no')
		{
			//Safe
			?>
			<section class="ftco-section ftco-no-pt ftc-no-pb">
						<div class="container">
							<div class="row no-gutters">
								<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/fight.jpg);">
								</div>
								<div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
						  <div class="heading-section mb-5">
							<div class="pl-md-5 ml-md-5">
								
										<h2 class="ftco-heading-2 logo">Hi <span style="color:orange;"> <?php echo $_SESSION['name']; ?> </span>, It seems that you are <span style="color:orange;">SAFE!</span></h2>
																	
								</div>
						  </div>
						  <div class="pl-md-5 ml-md-5 mb-5">
							<p>Follow all the guidelines provided by <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public?gclid=Cj0KCQjw-O35BRDVARIsAJU5mQUvOgKSN9DDjQMIGUV1PEbRm7cPRr3-qi0i3Cwu8kbJtDLW1HNDBUgaArjqEALw_wcB">World Health Organization.</a></p>
							<p>Stay aware of the latest information on the COVID-19 outbreak, available on the WHO website and through your national and local public health authority.</p>			
							<ul>
								<li>Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap and water. Why? Washing your hands with soap and water or using alcohol-based hand rub kills viruses that may be on your hands.</li>
								<li>Maintain at least 1 metre (3 feet) distance between yourself and others.</li>
								<li>Avoid going to crowded places. Why? Where people come together in crowds, you are more likely to come into close contact with someone that has COVID-19 and it is more difficult to maintain physical distance of 1 metre (3 feet).</li>
								<li>Make sure you, and the people around you, follow good respiratory hygiene. This means covering your mouth and nose with your bent elbow or tissue when you cough or sneeze. Then dispose of the used tissue immediately and wash your hands. Why? Droplets spread virus. By following good respiratory hygiene, you protect the people around you from viruses such as cold, flu and COVID-19.</li>
								<li>Stay home and self-isolate even with minor symptoms such as cough, headache, mild fever, until you recover.</li>
								<li>Keep up to date on the latest information from trusted sources, such as WHO or your local and national health authorities.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
		}
		else
		{
			//safe
			?>
			<section class="ftco-section ftco-no-pt ftc-no-pb">
						<div class="container">
							<div class="row no-gutters">
								<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/fight.jpg);">
								</div>
								<div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
						  <div class="heading-section mb-5">
							<div class="pl-md-5 ml-md-5">
								
										<h2 class="ftco-heading-2 logo">Hi <span style="color:orange;"> <?php echo $_SESSION['name']; ?> </span>, It seems that you are <span style="color:orange;">SAFE!</span></h2>
																	
								</div>
						  </div>
						  <div class="pl-md-5 ml-md-5 mb-5">
							<p>Follow all the guidelines provided by <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public?gclid=Cj0KCQjw-O35BRDVARIsAJU5mQUvOgKSN9DDjQMIGUV1PEbRm7cPRr3-qi0i3Cwu8kbJtDLW1HNDBUgaArjqEALw_wcB">World Health Organization.</a></p>
							<p>Stay aware of the latest information on the COVID-19 outbreak, available on the WHO website and through your national and local public health authority.</p>			
							<ul>
								<li>Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap and water. Why? Washing your hands with soap and water or using alcohol-based hand rub kills viruses that may be on your hands.</li>
								<li>Maintain at least 1 metre (3 feet) distance between yourself and others.</li>
								<li>Avoid going to crowded places. Why? Where people come together in crowds, you are more likely to come into close contact with someone that has COVID-19 and it is more difficult to maintain physical distance of 1 metre (3 feet).</li>
								<li>Make sure you, and the people around you, follow good respiratory hygiene. This means covering your mouth and nose with your bent elbow or tissue when you cough or sneeze. Then dispose of the used tissue immediately and wash your hands. Why? Droplets spread virus. By following good respiratory hygiene, you protect the people around you from viruses such as cold, flu and COVID-19.</li>
								<li>Stay home and self-isolate even with minor symptoms such as cough, headache, mild fever, until you recover.</li>
								<li>Keep up to date on the latest information from trusted sources, such as WHO or your local and national health authorities.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php

		}
	}
	$query2="delete from form where date < now() - interval 30 DAY";
	mysqli_query($con,$query2);

	
?>
		
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
