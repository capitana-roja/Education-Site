<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?>	
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page educates REDCap users on using the REDCap Mobile app”>
		<title>REDCap Mobile</title>
	</head>
	<body>
		<!--Navigation bars-->
		<?php echo file_get_contents("../main_navigation_bar.html"); ?> 
		<div class="container-fluid">
			<?php echo file_get_contents("../topic_navigation_bar_sub.html"); ?>
		
			<!--Button back to top-->
			<?php echo file_get_contents("../top_button.html"); ?>
			
			<!--Title-->
			<h1 class="title_pdf">REDcap Mobile</h1>
			<!--Content-->
			<!--PDF content-->
			<div class="container">
				<div class="card embed-responsive embed-responsive-1x1 justify-content-center">
					<iframe class="embed-responsive-item" height='800' src="../resources/advanced/REDCap_MobileApp.pdf" allowfullscreen></iframe>
				</div>
			</div>
			<div class="container">
				<h2>Things to Remember</h2>
				<hr>
				<ul class="list-group list-group-numbered list-group-flush">
					<li class="list-group-item">You must use the REDCap Mobile App on IAS/ITS approved devices (phones, iPads, tablets, etc.) When you use the Mobile App, you are storing your collected data on that device itself to later upload to your REDCap project when you have an internet connection available.</li>
					<li class="list-group-item">In most cases, you will not need the Mobile App, but instead can load REDCap in a web browser on the device you intend to use.</li>
					<li class="list-group-item">Using the Mobile App requires API access in your project for any user that intends to use it. Be sure to check your User Rights page to make sure your team is setup with the rights they require.</li>
				</ul>
			</div>
		</div>
		<script src="../script.js"></script>
	</body>
	<footer><?php echo file_get_contents("../footer.html"); ?></footer>
</html>
