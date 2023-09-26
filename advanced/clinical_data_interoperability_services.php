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
		<?php echo file_get_contents("../main_navigation_bar.html"); ?> 
		<div class="container-fluid">
			<?php echo file_get_contents("../topic_navigation_bar_sub.html"); ?>
		
			<!--Button back to top-->
			<?php echo file_get_contents("../top_button.html"); ?>
			
			<!--Title-->
			<h1 class="title_pdf">Clinical Data Interoperability Services</h1>
			<!--Content-->
			<!--PDF content-->
			<div class="container">
				<div class="card embed-responsive embed-responsive-1x1 justify-content-center">
					<iframe class="embed-responsive-item" height='800' src="../resources/advanced/REDCap_CDIS.pdf" allowfullscreen></iframe>
				</div>
			</div>
			<div class="container">
				<h2>Things to Remember</h2>
				<hr>
				<ul class="list-group list-group-numbered list-group-flush">
					<li class="list-group-item">You should ALWAYS ONLY pull data from the EMR that is required for your project/study/protocol. Institutional regulations apply to your use of Epic through REDCap just the same as if you were to access Epic directly.</li>
					<li class="list-group-item">Currently, data can only move from Epic to REDCap and not the other direction.</li>
					<li class="list-group-item">New fields and data sources are likely to be added to the CDIS set with every REDCap upgrade so be sure to check upgrade notes for CDIS, SMART on FHIR, CDP, CDM, nad LOINC information.</li>
				</ul>
			</div>
		</div>
		<script src="../script.js"></script>
	</body>
	<footer><?php echo file_get_contents("../footer.html"); ?></footer>
</html>
