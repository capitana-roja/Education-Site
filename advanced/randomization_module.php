<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?>		
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page educates REDCap users on using the Randomization Module”>
		<title>Randomization Module</title>
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
		<h1 class="title_pdf">Randomization Module</h1>
		<!--Content-->
		<div class="topic_pdf">
			<div class="embedded_pdf">
				<!--PDF content-->
				<iframe class="pdf_location" src="https://cri.uchicago.edu/wp-content/uploads/2020/02/REDCap-Randomization-Module.pdf" width="1000px" height="1200px"></iframe>
			</div>
			<!--Last section of content-->
			<div class="remember">
				<a id="thingstoremember">
					<h2>Things to Remember</h2>
				</a>
				<hr>
				<ol>
					<li>You should always have a statistically-valid allocation table created for your Production allocation table file which you upload to the randomization module. Ask your nearest institutional biostatistician for assistance!
					<li>While many features in REDCap can be updated or edited after moving to Production, Randomization settings are not included in that group. Make sure you have thoroughly tested your project before going live in Production mode.
					<li>You only have a finite amount of randomizations that can be made once you are live (however many are in your allocation table). Even if you randomize a record as a test and then delete it, you do not get that randomization allocation back. Keep this in mind when planning your project.
				</ol>
			</div>
			<!--Javascript-->
			<script src="../script.js"></script>
		</div>
	</body>
	<footer></footer>
</html>