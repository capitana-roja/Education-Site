<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?>	
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page educates REDCap users on using the Data Dictionary”>
		<title>Data Dictionary</title>	
	</head>
	<body>
		<!--Navigation bars-->
		<?php echo file_get_contents("../main_navigation_bar.html"); ?> 
		<div class="container-fluid">
			<?php echo file_get_contents("../topic_navigation_bar_sub.html"); ?>
		
			<!--Button back to top-->
			<?php echo file_get_contents("../top_button.html"); ?>
			
			<!--Title-->
			<h1 class="title_pdf">Data Dictionary</h1>
			<!--Content-->
			<!--PDF content-->
			<div class="container">
				<div class="card embed-responsive embed-responsive-1x1 justify-content-center">
					<iframe class="embed-responsive-item" height='800'  src="https://cdn.atriumhealth.org/-/media/wakeforest/ctsi/files/services/data/redcap/basic-project-actions/download-the-data-dictionary.pdf?rev=bb584e3b10cf4195a324697543fb1800&hash=DF9B25E275381CE4100450596253C887" allowfullscreen></iframe>
					<iframe class="embed-responsive-item" height='800'  src="https://ws.engr.illinois.edu/sitemanager/getfile.asp?id=1365" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<script src="../script.js"></script>
		<footer><?php echo file_get_contents("../footer.html"); ?></footer>
	</body>
</html>
