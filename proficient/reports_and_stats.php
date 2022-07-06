<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?>
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page educates REDCap users on using Reports & Stats”>
		<title>Reports & Stats</title>
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
		<h1 class="title_pdf">Reports & Stats</h1>
		<!--Content-->
		<div class="topic_pdf">
			<div class="embedded_pdf">
				<!--PDF content-->
				<iframe class="pdf_location" src="https://cdn.atriumhealth.org/-/media/wakeforest/ctsi/files/services/data/redcap/data/data-reports.pdf?rev=41c3fdc4bfd0495aa4b8c9f58f9b4d5d&hash=65BDF9B67080BF80B645B53512F409AA" width="1000px" height="1200px"></iframe>
			</div>
		<script src="../script.js"></script>
	</body>
	<footer><?php echo file_get_contents("../footer.html"); ?></footer>
</html>
