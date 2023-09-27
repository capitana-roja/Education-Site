<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?> 
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page hosts REDCap downloadable content!”>
		<title>Downloadable Content</title>
	</head>
	<body>
		<!--Navigation bars-->
		<?php echo file_get_contents("../main_navigation_bar.html"); ?> 
		<div class="container-fluid">
			<?php echo file_get_contents("../topic_navigation_bar_sub.html"); ?>
		
			<!--Button back to top-->
			<?php echo file_get_contents("../top_button.html"); ?>
		
			<!--Content-->
			<!--PDF content-->
			<div class="row">
				<div class="col">
					<h1 class="title_no_pdf">Downloadable Content</h1>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<h2 style="color:#b22227;font-weight:normal;">API Scripts</h2>
				<hr>
				<h2 style="color:#b22227;font-weight:normal;">Instrument Library</h2>
				<hr>
				<h2 style="color:#b22227;font-weight:normal;">Project Templates</h2>
				<hr>
				</div>
			</div>
		</div>
		<script src="../script.js"></script>
	</body>
	<footer><?php echo file_get_contents("../footer.html"); ?></footer>
	
</html>
