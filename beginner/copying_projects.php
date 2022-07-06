<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?>
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page educates REDCap users on Copying Projects and Instruments”>
		<title>Copying Projects and Instruments</title>
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
		<h1 class="title_pdf">Copying Projects and Instruments</h1>
		<!--Content-->
		<div class="topic_pdf">
			<div class="embedded_pdf">
				<!--PDF content-->
				<iframe class="pdf_location" src="https://clinicalresearch.mdhs.unimelb.edu.au/__data/assets/pdf_file/0008/2890853/Copying-an-existing-REDCap-project-to-create-a-new-REDCap-project_HowToGuide.pdf"></iframe>
				<iframe class="pdf_location" src="https://redcap.smhs.gwu.edu/sites/g/files/zaskib651/files/2021-07/Copy%20an%20Instrument%20from%20One%20Project%20to%20Another.pdf"></iframe>
			</div>
			<!--Javascript-->
			<script src="../script.js"></script>
		</div>
	</body>
	<footer><?php echo file_get_contents("../footer.html"); ?></footer>
</html>
