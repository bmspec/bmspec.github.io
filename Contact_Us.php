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
		table {
			min-width: 60%;
			margin: 0 auto;
		}
		
		th, td {
			width: 50%;
		}
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

	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<img src="Images/phone2.png" />
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<h2 class="thin">Contact Us</h2>
		<p>
		For the latest information on our products and developments, always check out our social media pages:
		</p>
		<br><br>
		<table>
			<tbody>
				<tr>
					<td><a href="https://www.facebook.com/bmspec1"><img src="Images/likeusonfb.png"></a></td>
					<td><a href="https://www.instagram.com/bmspec/"><img src="Images/followusonig.png"></a></td>
				</tr>
			</tbody>
		</table>
		<br><br>
		<p>
		For any product inquiries, ordering information, or other questions, we'd be glad to answer. Please use the contact
		form below:
		</p>
	</div>
	<!-- /Intro-->
		
	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">			
			<h3 class="text-center thin">Please enter your information below:</h3>		
			<div class="row">			
				<div id="center">
				<br />
				<form action="Email_Confirmation.php" method="post">
					<input name="fname" placeholder="First Name" type="text" />
					<br />
					<br />
					<input name="lname" placeholder="Last Name" type="text" />
					<br />
					<br />
					<input name="email" placeholder="Email Address" type="text" />
					<br />
					<br />
					<input name="subject" placeholder="Subject" type="text" />
					<br />
					<br />
					<textarea placeholder="Comments" name="comments" cols="40" rows="5"></textarea>
					<br />
					<br />
					<input type="submit" value="Send" id="button" />
				</form>
				</div>			
			</div> <!-- /row  -->		
		</div>
	</div>
	
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
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="scripts/headroom.min.js"></script>
	<script src="scripts/jQuery.headroom.min.js"></script>
	<script src="scripts/template.js"></script>
	<script src="scripts/Slideshow.js"></script>

</body>
</html>