<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?>		
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page educates REDCap users on using Multi-language Management”>
		<title>Multi-language Management</title>
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
		<h1 class="title_pdf">Multi-language Management</h1>
		<!--Content-->
		<div class="topic_pdf">
			<div class="embedded_pdf">
				<!--PDF content-->
				<iframe class="pdf_location" src="resources/advanced/REDCap_MLM.pdf" width="1000px" height="1200px"></iframe>
			</div>
			<!--Last section of content-->
			<div class="remember">
				<a id="thingstoremember">
					<h2>Things to Remember</h2>
				</a>
				<hr>
				<ol>
					<li>If you are using MLM to add foreign language support to your project, you will need to add an English item to the MLM list and mark it as default if you wish to always have the default English presentation of your project. If you only add a single foreign langauge to the MLM, REDCap will use that as a default.
					<li>You can customize REDCap's standard langauge in Enlgish as you see fit. If you want a page or button to present with a different word or message, create an English-Alt (en-alt) langauge option, set it as Default, and customize as much as you'd like.
					<li>Not all elements of REDCap can be translated, but more are added with each upgrade so be sure to check upgrade notes for more details.
				</ol>
			</div>
			<!--Javascript-->
			<script src="../script.js"></script>
		</div>
	</body>
	<footer></footer>
</html>
