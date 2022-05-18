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
		<h1 class="title_pdf">Data Dictionary</h1>
		<!--Content-->
		<div class="topic_pdf">
			<div class="embedded_pdf">
				<!--PDF content-->
				<iframe class="pdf_location" src="https://cdn.atriumhealth.org/-/media/wakeforest/ctsi/files/services/data/redcap/basic-project-actions/download-the-data-dictionary.pdf?rev=bb584e3b10cf4195a324697543fb1800&hash=DF9B25E275381CE4100450596253C887" width="1000px" height="1200px"></iframe>
				<iframe class="pdf_location" src="https://ws.engr.illinois.edu/sitemanager/getfile.asp?id=1365" width="1000px" height="1200px"></iframe>			
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