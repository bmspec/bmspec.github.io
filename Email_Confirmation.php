<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8">
	<title>BMSPEC</title>
	<!-- Browser Top Tab Logo --><link rel="shortcut icon" src="Images/Logo.gif">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="css/main.css">
	<style type="text/css">
	</style>
</head>
<body>
<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="Home.html"><img src="Images/Logo.gif" alt="Home"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="Home.html">Home</a></li>
					<li><a href="Products.html">Products</a></li>
					<li><a href="Advantage.html">Advantage</a></li>
					<!-- <li><a href="CHeart.html">Circuit Heart</a></li> -->
					<!-- <li><a href="Team.html">Team</a></li> -->
					<li class="active"><a href="Contact_Us.html">Contact Us</a></li>					
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<!-- Intro -->
	<div class="container text-center">
		<div class="row">
			<div id="email_confirm">
				<?php 
				if(isset($_POST['submit'])){
					$to = "rcherold@gmail.com"; // this is your Email address
					$from = $_POST['email']; // this is the sender's Email address
					$first_name = $_POST['fname'];
					$last_name = $_POST['lname'];
					$subject = $_POST['subject'];
					$message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['comments'];
					$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['comments'];

					$headers = "From:" . $from;
					$headers2 = "From:" . $to;
					mail($to,$subject,$message,$headers);
					mail($from,$subject,$message2,$headers2); // sends a copy of the message to the sender
					echo $first_name . "<p id='echo'>, thank you for contacting BMSPEC. Your message has been sent. We will get back to you as soon as possible.</p>";
					// You can also use header('Location: thank_you.php'); to redirect to another page.
					}
				?>
				<input type="button" id="button" onclick="location.href='Contact_Us.php';" Value="Ok" />
			</div>
		</div>
	</div>
	<!-- /Intro-->
	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->


	<footer id="footer" class="footer">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>
							BMSPEC <br />bmspec@gmail.com
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow us</h3>
						<div class="widget-body">
							<p class="follow-me-icons clearfix">
								<a href="https://www.facebook.com/bmspec1/?fref=ts"><i class="fa fa-facebook fa-2"></i></a>
								<a href="https://www.instagram.com/bmspec/"><i class="fa fa-instagram fa-2"></i></a>						
							</p>	
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="Home.html">Home</a> | 
								<a href="Products.html">Products</a> |
								<a href="Advantage.html">Advantage</a> |
								<!-- <a href="CHeart.html">Circuit Heart</a> | -->
								<!-- <a href="Team.html">Team</a> | -->
								<b><a href="Contact_Us.html">Contact Us</a></b>
								
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2016, Ryan Herold & Brian Matsuda.
							</p>
							<p class="text-right">
								Last changed:
								<script type="text/javascript">
								document.write(document.lastModified);
								</script>
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
</body>
</html>