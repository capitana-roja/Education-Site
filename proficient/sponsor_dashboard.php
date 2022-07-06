<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?>	
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page educates REDCap users on using the Sponsor Dashboard”>
		<title>Sponsor Dashboard</title>		
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
		<h1 class="title_pdf">Sponsor Dashboard</h1>
		<!--Content-->
		<div class="topic_pdf">
			<div class="embedded_pdf">
				<!--PDF content-->
				<iframe class="pdf_location" src="proficient_resources/Sponsor_Dashboard_Guide_REDCap.pdf"></iframe>
			</div>
		<script src="../script.js"></script>
	</body>
	<footer><?php echo file_get_contents("../footer.html"); ?></footer>
</html>
