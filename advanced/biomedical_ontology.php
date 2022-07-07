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
				<iframe class="pdf_location" src="resources/advanced/REDCap_BioOnt.pdf" width="1000px" height="1200px"></iframe>
			</div>
			<!--Last section of content-->
			<div class="remember">
				<a id="thingstoremember">
					<h2>Things to Remember</h2>
				</a>
				<hr>
				<ol>
					<li>BioOntology fields will not work in: SMS or IVR scenarios, the Mobile App (offline), most Action Tag setups.
					<li>The field setting connects you to a database managed by Standford University. If the field lookup functionality seems non-responsive or unavailable, the service may be temporarily down. Try again at a slightly later time and if still not responding, contact an Administrator.
					<li>If your project uses a large amount of BioOntology fields (20+), you may experience slower responsiveness from REDCap.
				</ol>
			</div>
		<script src="../script.js"></script>
	</body>
	<footer></footer>
</html>
