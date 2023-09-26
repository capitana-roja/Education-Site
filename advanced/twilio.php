<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?>		
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page educates REDCap users on using Twilio”>
		<title>Twilio</title>
	</head>
	<body>
		<!--Navigation bars-->
		<?php echo file_get_contents("../main_navigation_bar.html"); ?> 
		<div class="container-fluid">
			<?php echo file_get_contents("../topic_navigation_bar_sub.html"); ?>
		
			<!--Button back to top-->
			<?php echo file_get_contents("../top_button.html"); ?>
			
			<!--Title-->
			<h1 class="title_pdf">Twilio</h1>
			<!--Content-->
			<!--PDF content-->
			<div class="container">
				<div class="card embed-responsive embed-responsive-1x1 justify-content-center">
					<iframe class="embed-responsive-item" height='800' src="../resources/advanced/REDCap_Twilio.pdf" allowfullscreen></iframe>
				</div>
			</div>
			<div class="container">
				<h2>Things to Remember</h2>
				<hr>
				<ul class="list-group list-group-numbered list-group-flush">
					<li class="list-group-item">You will receive your Twilio account from DCOMM once your use-case is approved. You can begin your request in <a href="https://redcap.link/suppreq">LiftCap</a>.</li>
					<li class="list-group-item">While support is always improving, Twilio SMS or IVR services will not always support all elements of your survey design. Always test before going into Production!</li>
					<li class="list-group-item">You can only use a Twilio number in one REDCap project at a time. If you need to use Twilio in simultaneous projects you will need to secure multiple Twilio numbers from DCOMM.</li>
				</ul>
			</div>
		</div>
		<script src="../script.js"></script>
	</body>
	<footer><?php echo file_get_contents("../footer.html"); ?></footer>
</html>
