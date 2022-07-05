<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?>
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page educates REDCap users on using the Project Setup Page”>
		<title>Project Setup Page</title>
	</head>
	<body>
		<!--Navigation bars-->
		<div>
			<?php echo file_get_contents("../main_navigation_bar.html"); ?> 
			<?php echo file_get_contents("../topic_navigation_bar.html"); ?>
		</div>
		<!--Button back to top-->
		<?php echo file_get_contents("../top_button.html"); ?>
		<br>
		<br>
		<br>
		<br>
		<!--Title-->
		<h1 class="title_pdf">Project Setup Page</h1>
		<!--Content-->
		<div class="topic_pdf">
			<div class="embedded_pdf">
				<!--PDF content-->
				<iframe class="pdf_location" src="beginner_resources/project_setup_page.pdf"></iframe>
			</div>
		</div>
		<!--JavaScript-->
		<script src="../script.js"></script>
	</body>
	<footer></footer>
</html>
