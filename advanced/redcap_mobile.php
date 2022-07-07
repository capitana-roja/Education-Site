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
		<div>
			<?php echo file_get_contents("../main_navigation_bar_sub.html"); ?> 
			<?php echo file_get_contents("../topic_navigation_bar_sub.html"); ?>
		</div>
		<!--Button back to top-->
		<?php echo file_get_contents("../top_button.html"); ?>
		<br>
		<br>
		<br>
		<br>
		<!--Title-->
		<h1 class="title_pdf">REDCap Mobile App</h1>
		<!--Content-->
		<div class="topic_pdf">
			<div class="embedded_pdf">
				<!--PDF content-->
				<iframe class="pdf_location" src="../resources/advanced/REDCap_MobileApp" width="1000px" height="1200px"></iframe>
			</div>
			<!--Last section of content-->
			<div class="remember">
				<a id="thingstoremember">
					<h2>Things to Remember</h2>
				</a>
				<hr>
				<ol>
					<li>You must use the REDCap Mobile App on IAS/ITS approved devices (phones, iPads, tablets, etc.) When you use the Mobile App, you are storing your collected data on that device itself to later upload to your REDCap project when you have an internet connection available.
					<li>In most cases, you will not need the Mobile App, but instead can load REDCap in a web browser on the device you intend to use.
					<li>Using the Mobile App requires API access in your project for any user that intends to use it. Be sure to check your User Rights page to make sure your team is setup with the rights they require.
				</ol>
			</div>
			<!--Javascript-->
			<script src="../script.js"></script>
		</div>
	</body>
	<footer></footer>
</html>
