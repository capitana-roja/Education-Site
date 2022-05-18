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
		<h1 class="title_pdf">Survey Queue</h1>
		<!--Content-->
		<div class="topic_pdf">
			<div class="embedded_pdf">
				<!--PDF content-->
				<iframe class="pdf_location" src="https://cdn.atriumhealth.org/-/media/wakeforest/ctsi/files/services/data/redcap/survey-functionality/survey-queue.pdf?rev=55d5dbcf958e46e0a9d5c25ab4818a38&hash=83F721A21C5473A215D6B0A07708CB72" width="1000px" height="1200px"></iframe>
			</div>
			<!--Last section of content-->
			<div class="remember">
				<a id="thingstoremember">
					<h2>Things to Remember</h2>
				</a>
				<hr>
				<ol>
					<li>
					<li>
					<li>
					<li>
				</ol>
			</div>
		</div>
		<script src="../script.js"></script>
	</body>
	<footer></footer>
</html>