<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?>
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page educates REDCap users on using the Survey Queue”>
		<title>Survey Queue</title>
	</head>
	<body>
		<!--Navigation bars-->
		<?php echo file_get_contents("../main_navigation_bar.html"); ?> 
		<div class="container-fluid">
			<?php echo file_get_contents("../topic_navigation_bar_sub.html"); ?>
		
			<!--Button back to top-->
			<?php echo file_get_contents("../top_button.html"); ?>
			
			<!--Title-->
			<h1 class="title_pdf">Survey Queue</h1>
			<!--Content-->
			<!--PDF content-->
			<div class="container">
				<div class="card embed-responsive embed-responsive-1x1 justify-content-center">
					<iframe class="embed-responsive-item" height='800' src="https://cdn.atriumhealth.org/-/media/wakeforest/ctsi/files/services/data/redcap/survey-functionality/survey-queue.pdf?rev=55d5dbcf958e46e0a9d5c25ab4818a38&hash=83F721A21C5473A215D6B0A07708CB72" allowfullscreen></iframe></div>
			</div>
		</div>
		<script src="../script.js"></script>
		<footer><?php echo file_get_contents("../footer.html"); ?></footer>
	</body>
</html>
