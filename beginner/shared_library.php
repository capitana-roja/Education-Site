<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?>		
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page educates REDCap users on the shared library”>
		<title>Shared Library</title>
	</head>
	<body>
		<!--Navigation bars-->
		<?php echo file_get_contents("../main_navigation_bar.html"); ?> 
		<div class="container-fluid">
			<?php echo file_get_contents("../topic_navigation_bar_sub.html"); ?>
		
			<!--Button back to top-->
			<?php echo file_get_contents("../top_button.html"); ?>
			
			<!--Title-->
			<h1 class="title_pdf">Shared Library</h1>
			<!--Content-->
			<!--PDF content-->
			<div class="container">
				<div class="card embed-responsive embed-responsive-1x1 justify-content-center">
					<iframe class="embed-responsive-item" height='800'  src="../resources/beginner/shared_library.pdf" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<script src="../script.js"></script>
		<footer><?php echo file_get_contents("../footer.html"); ?></footer>
	</body>
</html>
