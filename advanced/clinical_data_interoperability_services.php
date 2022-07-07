<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?>		
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page educates REDCap users on using the Clinical Data Interoperability Services”>
		<title>Clinical Data Interoperability Services</title>
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
		<h1 class="title_pdf">Clinical Data Interoperability Services</h1>
		<!--Content-->
		<div class="topic_pdf">
			<div class="embedded_pdf">
				<!--PDF content-->
				<iframe class="pdf_location" src="REDCap_CDIS.pdf" width="1000px" height="1200px"></iframe>
			</div>
			<!--Last section of content-->
			<div class="remember">
				<a id="thingstoremember">
					<h2>Things to Remember</h2>
				</a>
				<hr>
				<ol>
					<li>You should ALWAYS ONLY pull data from the EMR that is required for your project/study/protocol. Institutional regulations apply to your use of Epic through REDCap just the same as if you were to access Epic directly.
					<li>Currently, data can only move from Epic to REDCap and not the other direction.
					<li>New fields and data sources are likely to be added to the CDIS set with every REDCap upgrade so be sure to check upgrade notes for CDIS, SMART on FHIR, CDP, CDM, nad LOINC information.
				</ol>
			</div>
			<!--Javascript-->
			<script src="../script.js"></script>
		</div>
	</body>
	<footer></footer>
</html>