<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?>		
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page educates REDCap users on using the API”>
		<title>Biomedical Ontology</title>
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
		<h1 class="title_pdf">Biomedical Ontology</h1>
		<!--Content-->
		<div class="topic_pdf">
			<div class="embedded_pdf">
				<!--PDF content-->
				<iframe class="pdf_location" src="https://cdn.atriumhealth.org/-/media/wakeforest/ctsi/files/services/data/redcap/advanced/biomedical-ontology-field.pdf?rev=61e99826983e4da497fab951d1864858&hash=64837C123D9622C088B1FCED06B23404" width="1000px" height="1200px"></iframe>
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
		<script src="../script.js"></script>
	</body>
	<footer></footer>
</html>
