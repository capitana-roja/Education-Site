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
		<?php echo file_get_contents("../main_navigation_bar.html"); ?> 
		<div class="container-fluid">
			<?php echo file_get_contents("../topic_navigation_bar_sub.html"); ?>
		
			<!--Button back to top-->
			<?php echo file_get_contents("../top_button.html"); ?>
			
			<!--Title-->
			<h1 class="title_pdf">Multi-language Management</h1>
			<!--Content-->
			<!--PDF content-->
			<div class="container">
				<div class="card embed-responsive embed-responsive-1x1 justify-content-center">
					<iframe class="embed-responsive-item" height='800' src="../resources/advanced/REDCap_MLM.pdf" allowfullscreen></iframe>
				</div>
			</div>
			<div class="container">
				<h2>Things to Remember</h2>
				<hr>
				<ul class="list-group list-group-numbered list-group-flush">
					<li class="list-group-item">If you are using MLM to add foreign language support to your project, you will need to add an English item to the MLM list and mark it as default if you wish to always have the default English presentation of your project. If you only add a single foreign langauge to the MLM, REDCap will use that as a default. </li>
					<li class="list-group-item">You can customize REDCap's standard langauge in Enlgish as you see fit. If you want a page or button to present with a different word or message, create an English-Alt (en-alt) langauge option, set it as Default, and customize as much as you'd like. </li>
					<li class="list-group-item">Not all elements of REDCap can be translated, but more are added with each upgrade so be sure to check upgrade notes for more details. </li>
				</ul>
			</div>
		</div>
		<script src="../script.js"></script>
	</body>
	<footer><?php echo file_get_contents("../footer.html"); ?></footer>
</html>
