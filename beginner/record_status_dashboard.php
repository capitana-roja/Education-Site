<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?>
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page educates REDCap users on using the Record Status Dashboard”>
		<title>Record Status Dashboard</title>
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
		<h1 class="title_pdf">Record Status Dashboard</h1>
		<!--Content-->
		<div class="topic_pdf">
			<div class="embedded_pdf">
				<!--PDF content-->
				<iframe class="pdf_location" src="https://www.ctsi.ufl.edu/files/2017/06/REDCap%E2%80%99s-Custom-Record-Status-Dashboard-Plugin-%E2%80%93-Users-Guide.pdf"></iframe>
			</div>
		</div>
	</body>
	<footer><?php echo file_get_contents("../footer.html"); ?></footer>
</html>
