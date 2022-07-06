<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?>
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page educates REDCap users on Data Queries”>
		<title>Data Queries</title>
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
		<h1 class="title_pdf">Data Queries</h1>
		<!--Content-->
		<div class="topic_pdf">
			<div class="embedded_pdf">
				<!--PDF content-->
				<iframe src="https://cri.uchicago.edu/wp-content/uploads/2015/12/REDCap-Data-Resolution-Workflow.pdf" height="700" width="900"></iframe>
			</div>
		<script src="../script.js"></script>
	</body>
	<footer><?php echo file_get_contents("../footer.html"); ?></footer>
</html>
