<!DOCTYPE html>
<html>

<head>
	<title>Webite Fitness & Gym</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <?php
session_start();
   
         if(!isset($_SESSION['USERNAME'])){
             header('Location:index.html');
         }
$conn=mysqli_connect("localhost","root","","gym_database");

if($conn === false)
{
    die("ERROR: Could not connect. " 
        . mysqli_connect_error());
}
mysqli_close($conn);
?>
		
</head>

<body>

	<header id="home">
		<nav>
			<div class="logo">
				<span id="blue">Akatsuki</span>Sparda
			</div>
			<div class="menu">
				<a href="#home">Home</a>
				<a href="#about">About</a>
				<a href="#services">My Plans</a>
				<a href="#contact">Contact</a>
				<a href="logOut.php">LogOut</a>
			</div>

		</nav>


		<div class="container">
			<div class="left">
				<img src="images/banner.png">
			</div>
			<div class="right">
				<h1>HELLO <?php echo $_SESSION['USERNAME']; ?> </h1>
				<p>We at Akatsuki Sparda pledge to help you get your dream physique</p>
			</div>
		</div>
	</header>
	<section id="about">
		<div class="about-row">
			<div class="about-left-col">
				<h1> About <span id="blue">us</span></h1>
				<p id="p-title">We are a chain of gyms.</p>
				<p>
					<b>Akatsuki Sparda</b>, is an Indian chain of national co-ed fitness centers
					originally started by Madhvendra Dixit in Jaipur, Rajasthan . Each gym offers a variety of cardio and
					strength training equipment as well as group exercise programs. Its headquarters have since
					relocated to Mumbai.
				</p>
				<p>
					From Rajasthan,doing gym is good for healthy life.
				</p>
			</div>
			<div class="about-right-col">
				<img src="images/img1.jpg">
			</div>
		</div>
	</section>
	
	<section id="services">
		<div class="services-info">
			<h1>Gym <span id="blue">Plans</span></h1>
			<p>What we Provide</p>
		</div>
		<div class="services-row">
			<div class="services-box">
				<i class="fa fa-suitcase" aria-hidden="true"></i>
				<h2>User Name</h2>
				<p><?php echo $_SESSION['USERNAME']; ?></p>
			</div>

			<div class="services-box">
				<i class="fa fa-suitcase" aria-hidden="true"></i>
				<h2>About PlanID</h2>
				<p>If your Plan ID is <b>1</b> that means your plan duration is one month.
                   if it is <b>2</b> then your plan duration is 3 month.
                   For PlanID <b>3</b> then it is 6 months.
                  And if it is <b>4</b> that means you have taken our super value saver plan of 12 months duration.</p>
			</div>

			<div class="services-box">
				<i class="fa fa-suitcase" aria-hidden="true"></i>
				<h2>User PlanID</h2>
				<p> <?php echo $_SESSION['MY_PLAN']; ?></p>
			</div>

		</div>
	</section>


	<section id="work">
		<div class="services-info">
			<h1>Our <span id="blue">Works</span></h1>
			<p>What we Provide</p>
		</div>
		<div class="services-row">
			<div class="work-box">
				<img src="images/ex1.jpg">
			</div>
			<div class="work-box">
				<img src="images/ex2.jpg">
			</div>
			<div class="work-box">
				<img src="images/ex3.jpg">
			</div>
			<div class="work-box">
				<img src="images/ex4.jpg">
			</div>
			<div class="work-box">
				<img src="images/ex5.jpg">
			</div>
			<div class="work-box">
				<img src="images/ex6.jpg">
			</div>
		</div>
	</section>

	<section id="contact">
		<div class="services-info">
			<h1>Get in<span id="blue">Touch</span></h1>
			<p> We are Available</p>
		</div>

		<div class="contact-row">
				
			<div class="contact-center">
				<h1><i class="fa fa-envelope-o" aria-hidden="true"></i> E-mail</h1>
				<p>akatsukisparda@gmail.com</p><br>
				<h1><i class="fa fa-phone" aria-hidden="true"></i> Mobile</h1>
				<p>9517103862, 7970401008</p>
				<br>
				<h1><i class="fa fa-location-arrow" aria-hidden="true"></i> Address</h1>
				<p> Near Shyam Mandir<br>
					Ward no.5, Laxmangarh (Sikar), Rajasthan
				</p>
			</div>
		</div>


	</section>


	<section id="footer">
		<h1>Akatsuki<span id="blue">Sparda</span></h1>

		<p>&copy; 2020 Akatsuki Sparda, Rajasthan, India </p>
		<img src="images/icon.png">

	</section>
</body>

</html>