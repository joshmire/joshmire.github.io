<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script src="https://kit.fontawesome.com/91e547386c.js" crossorigin= "anonymous"></script>
	
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/dark-mode.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/email-me.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/footer-contact.css">
	
	<title>Joshua Mire // Applied Scientist</title>

</head>
<body>

	<header>
		<div class="topnav">
			<ul>
				<li><a href="index.html">Home</a></li>
				<!--
				<li><a href="#">About</a></li>
				-->
				<li><a href="https://github.com/joshmire/" target="_blank" rel="noopener noreferrer">Projects</a></li>
				<li><a href="#" class="active">Contact</a></li>
			</ul>
		</div>
		
		<div class="dropnav" id="myDropNav">
			<a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
			<div class="options">
				<a href="index.html">Home</a>
				<!--
				<a href="#">About</a>
				-->
				<a href="https://github.com/joshmire/" target="_blank" rel="noopener noreferrer">Projects</a>
				<a href="#" class="active">Contact</a>
			</div>
		</div>
		
		<div class="dark-mode-switch">
			<a><i id="dark-mode-btn" class="toggler far fa-moon"></i></a>
		</div>
	</header>	
	
	<div class="main">
		
		<h1>Message Me</h1>
		
		<br>
		
		<div class="email-form">

			<form id="email-form" class="form-body" method="post" action="php/contact.php">
				
				<div class="input-group">
					<label for="name" class="email-label">Name</label>
					<input type="text" id="name" name="name" class="email-input" placeholder="Full name" required>
				</div>

				<div class="input-group">
					<label for="email" class="email-label">Email Address</label>
					<input type="email" id="email" name="email" class="email-input" placeholder="Email address" required>
				</div>

				<div class="input-group">
					<label for="subject" class="email-label">Subject</label>
					<input type="text" id="subject" name="subject" class="email-input" placeholder="Subject" required></input>
				</div>
				
				<div class="input-group">
					<label for="message" class="email-label">Message</label>
					<textarea id="message" name="message" class="email-input" rows="4" maxlength="3000" placeholder="Your message..." required></textarea>
				</div>
				<div class="input-group">					
					<button type="submit" name="submit" id="email-button" class="email-button">Send Message</button>
				</div>
				
				
			</form>
		</div>
	</div>
	
	<div class="footer">
	
		<i><p>Created by Joshua Mire</p>
		<p>Last Updated: Nov. 14, 2021</p></i>
		
	</div>
	
	<script type="text/javascript" src="scripts/dark-mode.js"></script>
	<script type="text/javascript" src="scripts/dropnav.js"></script>
	
</body>
</html>