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
		<?php echo file_get_contents("../main_navigation_bar.html"); ?> 
		<div class="container-fluid">
			<?php echo file_get_contents("../topic_navigation_bar_sub.html"); ?>
		
			<!--Button back to top-->
			<?php echo file_get_contents("../top_button.html"); ?>
			
			<!--Title-->
			<h1 class="title_pdf">Randomization Module</h1>
			<!--Content-->
			<!--PDF content-->
			<div class="container">
				<div class="card embed-responsive embed-responsive-1x1 justify-content-center">
					<iframe class="embed-responsive-item" height='800' src="../resources/advanced/REDCap_Randomization.pdf" allowfullscreen></iframe>
				</div>
			</div>
			<div class="container">
				<h2>Things to Remember</h2>
				<hr>
				<ul class="list-group list-group-numbered list-group-flush">
					<li class="list-group-item">You should always have a statistically-valid allocation table created for your Production allocation table file which you upload to the randomization module. Ask your nearest institutional biostatistician for assistance!</li>
					<li class="list-group-item">While many features in REDCap can be updated or edited after moving to Production, Randomization settings are not included in that group. Make sure you have thoroughly tested your project before going live in Production mode.</li>
					<li class="list-group-item">You only have a finite amount of randomizations that can be made once you are live (however many are in your allocation table). Even if you randomize a record as a test and then delete it, you do not get that randomization allocation back. Keep this in mind when planning your project.</li>
				</ul>
			</div>
		</div>
		<script src="../script.js"></script>
		<footer><?php echo file_get_contents("../footer.html"); ?></footer>
	</body>	
</html>
