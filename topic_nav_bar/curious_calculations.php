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
		<div>
			<?php echo file_get_contents("../main_navigation_bar_sub.html"); ?> 
			<?php echo file_get_contents("../topic_navigation_bar_sub.html"); ?> 
			<!--Right sidebar-->
			<div class="topic_page_sidebar">
				<div id="toc_container">
					<p class="toc_title">Content</p>
				</div>
			</div>
		</div>
		<!--Button back to top-->
		<?php echo file_get_contents("../top_button.html"); ?> 
		<br>
		<br>
		<br>
		<br>
		<!--Title-->
		<h1 class="title_no_pdf">Curious Calculations</h1>
		<!--Content-->
		<div class="topic_pdf">
			<div class="embedded_pdf">
				<!--PDF content-->
				<iframe class="pdf_location" src="../resources/topic_nav_bar/REDCap_CuriousCalcs.pdf" width="1000px" height="1200px"></iframe>
			</div>
		</div>
		<script src="../script.js"></script>
	</body>
	<footer></footer>
</html>
