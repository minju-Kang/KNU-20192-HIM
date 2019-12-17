<!DOCTYPE html>
<?php 
  session_start();
  require_once 'connect_him.php';
  $ID = $_SESSION['userid'];
?>

<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Health Information Management</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
	<link href="css/jcarousel.css" rel="stylesheet" />
	<link href="css/flexslider.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />

	<!-- Theme skin -->
	<link href="skins/default.css" rel="stylesheet" />

</head>

<body>
	<div id="wrapper">
		<!-- start header -->
		<header>
			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        						<span class="icon-bar"></span>
                        						<span class="icon-bar"></span>
              					          	<span class="icon-bar"></span>
                    					</button>
						<a class="navbar-brand" href="P_login.html"><span>H</span>IM</a>
					</div>
					<div class="navbar-collapse collapse ">
						<ul class="nav navbar-nav">
							<li class="active"><a href="P_login.html">HOME</a></li>
							<li><a href="P_chat.html">Consulting</a></li>
							<li><a href="P_schedule.html">Schedule</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">My Info<b class=" icon-angle-down"></b></a>
								<ul class="dropdown-menu">
									<li><a href="record.html">Record</a></li>
									<li><a href="sharing.html">Sharing</a></li>
								</ul>
							</li>
							<li><a href="index.html">Logout</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- end header -->
		<section id="inner-headline" style="background: #f8fdff;">
			<div class="container" style="background: #f8fdff;">
				<div class="row" style="background: #f8fdff;">
					<div class="col-lg-12" style="background: #f8fdff;">
						<ul class="breadcrumb">
							<li><a href="P_login.html"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
							<li class="active">My info</li>
							<li class="active"><a href="record.html">Record</a></li>
						</ul>
						
					</div>
				</div>
			</div>
		</section>
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<h3>Profile</h3>
						<img src="img/dummies/dummy-1.jpg" alt="" class="align-left">
						<span class="pullquote-left">
						<dl class="dl-horizontal">
							<?php
								$sql = "select * from PATIENT_INFO where Id = '$ID';"; 
								$result = mysqli_query($link, $sql);
								if($result)
                						  $data = mysqli_fetch_assoc($result);
							?>
							<dt>NAME</dt>
							<dd><?php echo $data['Name']; ?></dd>
							<dt>ID</dt>
							<dd><?php echo $data['ID']; ?></dd>
							<dt>GENDER</dt>
							<dd><?php echo $data['Gender']; ?></dd>
							<dt>BIRTHDAY</dt>
 							<dd><?php echo $data['Bdate']; echo "<br>";?></dd>
							<dt>TEL.</dt>
							<dd><?php echo $data['Tel']; ?></dd>
							<dt>ADDRESS</dt>
							<dd><?php echo $data['Address']; ?></dd>
							<dt>FAMILY DOCTOR ID</dt>
							<dd><?php echo $data['Code']; ?></dd>

						</dl>
						</span>
					</div>
					<!-- Horizontal Description -->
					<div class="col-lg-4">
						<aside class="right-sidebar">
						<h3>Basic <a href="#"><i class="fa fa-plus" aria-hidden="true" style="float:right;"></i></a></h3>
						<dl class="dl-horizontal">
							<?php
								$sql = "select * from PROFILE where Id = '$ID';"; 
								$result = mysqli_query($link, $sql);
								if($result)
                						  $data = mysqli_fetch_assoc($result);
							?>
							<dt>Weight</dt>
							<dd><?php echo $data['Weight']; ?> kg</dd>
							<dt>food</dt>
							<dd><?php echo $data['Food']; echo "<br>";?></dd> 
							<dt>Steps</dt>
							<dd><?php echo $data['Steps']; ?> steps</dd> 
							<dt>Blood Pressure</dt>
							<dd><?php echo $data['Blood_Pressure']; ?> mmHg</dd>
							<dt>Cholesterol</dt>
							<dd><?php echo $data['Cholesterol']; ?> mmol/L</dd>
							<dt>Blood Sugar</dt>
							<dd><?php echo $data['Blood_Sugar']; ?> mmol/L</dd>
							<dt>Menstruation</dt>
							<dd>Cycle: <?php echo $data['Menstruation']; ?> days</dd>
						</dl>
						<h3>Emergency <a href="#"><i class="fa fa-plus" aria-hidden="true" style="float:right;"></i></a></h3>
						<dl class="dl-horizontal">
							<?php
								$sql = "select * from EMERGENCY where Id = '$ID';"; 
								$result = mysqli_query($link, $sql);
								if($result)
                						  $data = mysqli_fetch_assoc($result);
							?>
							<dt>Insurance</dt>
							<dd><?php echo $data['Insurance']; ?></dd>
							<dt>Parental Control</dt>
							<dd><?php echo $data['Parental_Control']; ?></dd>
						</dl>
						</aside>
					</div>
					<div class="col-lg-4">
						<aside class="right-sidebar">
						<h3>Current Health Info. <a href="#"><i class="fa fa-plus" aria-hidden="true" style="float:right;"></i></a></h3>
						<dl class="dl-horizontal">
							<?php
								$sql = "select * from CURRHEALTH where Id = '$ID';"; 
								$result = mysqli_query($link, $sql);
								if($result)
                						  $data = mysqli_fetch_assoc($result);
							?>
							<dt>Drug in Use</dt>
							<dd><?php echo $data['Drugs_in_use']; ?></dd>
							<dt>Vaccination</dt>
							<dd><?php echo $data['Vaccination']; ?></dd>
							<dt>Medical Device</dt>
							<dd><?php echo $data['Medical_Device']; ?></dd>
							<dt>Allergies</dt>
							<dd><?php echo $data['Allergies']; ?></dd>
							<dt>Diseases</dt>
							<dd><?php echo $data['Diseases']; ?></dd>
						</dl>
						</aside>
					</div>
				<!-- divider -->
				<div class="row">
					<div class="col-lg-12">
						<div class="solidline">
						</div>
					</div>
				</div>
				<!-- end divider -->
			</div>
		</div>
				
		</section>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="widget">
							<h5 class="widgetheading">Get in touch with us</h5>
							<address>
					<strong>HIM company Inc</strong><br>
					 Kyungpook National University</address>
							<p>
								<i class="icon-phone"></i> (053) 950-5114 - (010) 5665-4553 <br>
								<i class="icon-envelope-alt"></i> rhddo0802@knu.ac.kr
							</p>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="widget">
							<h5 class="widgetheading">Pages</h5>
							<ul class="link-list">
								<li><a href="#">Press release</a></li>
								<li><a href="#">Terms and conditions</a></li>
								<li><a href="#">Privacy policy</a></li>
								<li><a href="#">Career center</a></li>
								<li><a href="#">Contact us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="widget">
							<h5 class="widgetheading">TEAM MEMBER</h5>
							<ul class="link-list">
								<li><a href="#">2018114511 MINJU KANG.</a></li>
								<li><a href="#">2018116170 AERI KONG.</a></li>
								<li><a href="#">2018114043 MIJOO KIM.</a></li>
								<li><a href="#">2018133692 JIWON BAEK.</a></li>
								<li><a href="#">2018115036 SUJIN LEE.</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="widget">
							<h5 class="widgetheading">SD Project TEAM 1: HIM</h5>
							<div class="flickr_badge">
								<script type="text/javascript" src="https://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
							</div>
							<div class="clear">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="sub-footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="copyright">
								<p>&copy; Moderna Theme. All right reserved.</p>
								
							</div>
						</div>
						<div class="col-lg-6">
							<ul class="social-network">
								<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
	<!-- javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.fancybox-media.js"></script>
	<script src="js/google-code-prettify/prettify.js"></script>
	<script src="js/portfolio/jquery.quicksand.js"></script>
	<script src="js/portfolio/setting.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>

</body>

</html>
