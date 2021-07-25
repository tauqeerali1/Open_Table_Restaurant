<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DAA Project | Resturant</title>
	<link rel="stylesheet" type="text/css" href="contact.css">
	 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<header>
		<img src="logo.png" alt="" class="logo" style="width: 165px; height: 105px;">
		<nav>
			<ul class="nav-area">
				<li><a href="index.html">Home</a></li>
				<li><a href="menu.html">Menu</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="#">Blogs</a></li>
				<li><a href="#" style="border: 1px solid #000; border-radius: 5px; padding: 10px 35px;">Log In</a></li>
			</ul>
		</nav>
	</header>
<body>
	<?php include 'email_form.php'; ?>
    <?php echo $alert; ?>

    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>SRM IST, Chennai, Tamil Nadu</div>
        <div><i class="fas fa-envelope"></i>tauqeer.ali.9934@gmail.com</div>
        <div><i class="fas fa-phone"></i>+91 9636 463 361</div>
        <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
      </div>
      <div class="contact-form">
        <h2>Contact Us</h2>
        <form class="contact" action="" method="post">
        	<div class="same" style="display: flex;">
			<input name="name" type="text" class="text-box" placeholder="Enter Name" required>
			<input name="email" type="text" class="text-box" placeholder="Enter Email" required></div>
			<textarea name="message" rows="5" placeholder="Type Message"></textarea>
			<br><br>
			<button type="submit" name="submit" class="send-btn" value="Send">Submit</button>
		</form>
      </div>
    </div>
    <!--contact section end-->

    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
</body>
	<footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>company</h4>
  	 			<ul>
  	 				<li><a href="#">about us</a></li>
  	 				<li><a href="#">our services</a></li>
  	 				<li><a href="#">privacy policy</a></li>
  	 				<li><a href="#">affiliate program</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>get help</h4>
  	 			<ul>
  	 				<li><a href="#">FAQ</a></li>
  	 				<li><a href="#">shipping</a></li>
  	 				<li><a href="#">returns</a></li>
  	 				<li><a href="#">order status</a></li>
  	 				<li><a href="#">payment options</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>online shop</h4>
  	 			<ul>
  	 				<li><a href="#">Icecream</a></li>
  	 				<li><a href="#">Toffee</a></li>
  	 				<li><a href="#">Biryani</a></li>
  	 				<li><a href="#">Vegiteble</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="https://medium.com/@tauqeerali01"><i class="fab fa-medium"></i></a>
  	 				<a href="https://twitter.com/tauqeerali01"><i class="fab fa-twitter"></i></a>
  	 				<a href="https://github.com/tauqeerali1"><i class="fab fa-github"></i></a>
  	 				<a href="https://www.linkedin.com/in/tauqeerali/"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>
</html>