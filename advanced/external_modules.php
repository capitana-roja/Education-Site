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
		<h1 class="title_no_pdf">External Modules</h1>
		<!--Content-->
		<div class="body_text">
			<div style="color:black;">
				<br>
				<a id="procedure">
					<h2 style="color:#b22227;font-weight:normal;">Procedure</h2>
				</a>
				<hr>
				<p>We may not want to show the available modules because not all of them are the same across instances (although that's the goal) If we do keep them, we can color code based on instance</p>
			</div>
			<br>
			<div style="color:black;">
				<a id="available">
					<h2 style="color:#b22227;font-weight:normal;">Currently Available</h2>
				</a>
				<hr>
				<div style="list-style-type: upper-roman;">
				<div style="list-style-type: upper-roman;">
					<p><b>Cross-Project Piping - v1.4.7</b>
					<br> 
					Cross-Project Piping pipes from one field in one project into another field in another project. The projects have to be MATCHED on a third field in both projects. Enable this module in the DESTINATION project and select appropriate fields in the configure panel.
					</p>
					<br>
					<p><b>Image Map - v1.9.0</b>
					<br>
					This module replaces an input, radio, or checkbox field with an interactive image where users can click on image regions to select one or more field options. Find the complete documentation and an example instrument at https://github.com/ctsit/imagemap.
					</p>
					<br>
					<p><b>Inline Descriptive Pop-ups - v1.4.2</b>
					<br>
					Allows users to specify words or phrases on a form/survey to appear as a highlighted link that will display a popup of instructive text when the cursor moves over the word/phrase. The configuration allows multiple words/phrases to be utilized.
					</p>
					<br>
					<p><b>Instance Table - v1.3.0</b>
					<br>
					Use the action tag @INSTANCETABLE=form_name in a descriptive text field to include a table showing data from repeat instances of that form. If project is longitudinal, use @INSTANCETABLE=event_name:form_name to specify the event and form (can be a repeating form or a form in a repeating event).
					</p>
					<br>
					<p><b>Shazam - v1.3.10 Discoverable</b>
					<br>
					A module for applying REDCap inputs into tabular or other custom layouts for surveys and data entry forms
					</p>
					<br>
					<p><b>Survey UI Tweaks - v1.1.6</b>
					<br>
					Various survey ui tweaks - such as hiding survey queue button in top right and the queue at the end of the survey. by Andy Martin (Stanford University), YongJae Lee (Stanford University), Ryan Valentine (Stanford University), Irvin Szeto (Stanford University), Ihab Zeedia (Stanford University)
					</p>					
				</div>
			</div>
			<br>
		</div>
		<script src="../script.js"></script>
	</body>
	<footer></footer>
</html>
