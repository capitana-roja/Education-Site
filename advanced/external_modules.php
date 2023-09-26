<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?>		
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page educates REDCap users on using the External Modules”>
		<title>External Modules</title>
	</head>
	<body>
		<!--Navigation bars-->
		<?php echo file_get_contents("../main_navigation_bar.html"); ?> 
		<div class="container-fluid">
			<?php echo file_get_contents("../topic_navigation_bar_sub.html"); ?>
		
			<!--Button back to top-->
			<?php echo file_get_contents("../top_button.html"); ?>
			
			<!--Title-->
			<h1 class="title_pdf">Using External Modules</h1>
			<!--Content-->
			<!--PDF content-->
			<div class="container">
				<div class="card embed-responsive embed-responsive-1x1 justify-content-center">
					<iframe class="embed-responsive-item" height='800' src="../resources/advanced/REDCap_EMs.pdf" allowfullscreen></iframe>
				</div>
			</div>
			<div class="container">
				<h2>Things to Remember</h2>
				<hr>
				<ul class="list-group list-group-numbered list-group-flush">
					<li class="list-group-item">External modules are third-party contributed add-ons so finding a solution to your design in standard REDCap is always recommended.</li>
					<li class="list-group-item">Access to some modules may be handled in the User Rights section, so if you cannot use/see a module once enabled, check your User Rights and contact an administrator to help you enable access.</li>
					<li class="list-group-item">Use <a href="https://redcap.link/suppreq">LiftCap</a> to request a new module be reviewed by REDCap Administrators.</li>
				</ul>
			</div>
		</div>
		<script src="../script.js"></script>
	</body>
	<footer><?php echo file_get_contents("../footer.html"); ?></footer>
</html>
