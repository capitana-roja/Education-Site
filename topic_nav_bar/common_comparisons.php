<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?> 
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page educates REDCap users on common comparisons”>
		<title>Common Comparisons</title>
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
		<!--Title-->
		<h1 class="title_pdf">Common Comparisons</h1>
		<!--Content-->
		<div class="topic_pdf">
			<div class="embedded_pdf">
				<!--PDF content-->
				<iframe class="pdf_location" src="../resources/topic_nav_bar/REDCap_CommonComps.pdf" width="1000px" height="1200px"></iframe>
			</div>
		</div>
        <br>
		<!--Javascript-->
		<script src="../script.js"></script>
	</body>
	<footer><center>Site supported by REDCap Administration of Atrium Health Wakeforest Baptist | View our Privacy Policy
<br>REDCap is developed by Vanderbilt University and is hosted, supported, and managed by Atrium Health Wake Forest.</center></footer>
</html>
