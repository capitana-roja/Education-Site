<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?> 
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page educates REDCap users on advanced calculations”>
		<title>Curious Calculations</title>
	</head>
	<body>
		<!--Navigation bars-->
		<?php echo file_get_contents("../main_navigation_bar.html"); ?> 
		<div class="container-fluid">
			<?php echo file_get_contents("../topic_navigation_bar_sub.html"); ?>
		
			<!--Button back to top-->
			<?php echo file_get_contents("../top_button.html"); ?>
			
			<!--Title-->
			<h1 class="title_pdf">Curious Calculations</h1>
			<!--Content-->
			<!--PDF content-->
			<div class="container">
				<div class="card embed-responsive embed-responsive-1x1 justify-content-center">
					<iframe class="embed-responsive-item pdf_location" height='800' src="../resources/topic_nav_bar/REDCap_CuriousCalcs.pdf" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<script src="../script.js"></script>
		<footer><?php echo file_get_contents("../footer.html"); ?></footer>
	</body>
</html>
