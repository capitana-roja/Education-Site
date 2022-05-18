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
			<!--Right sidebar-->
			<div class="topic_page_sidebar">
				<div id="toc_container">
					<p class="toc_title">Content</p>
					<ul class="toc_list">
						<li>
							<a href="#purpose">I. Purpose</a>
						<li>
							<a href="#procedure">II. Procedure</a>
						<li>
							<a href="#available">III. Available</a>
						<li>
							<a href="#thingstoremember">IV. Things to Remember</a>
						<li>
							<a href="../Alice_in_Wonderland.pdf" target="_blank">
								<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEMAAABDCAYAAADHyrhzAAAAAXNSR0IArs4c6QAAAu1JREFUeF7tmk1y2kAQhV+PqEp28Q0icBWw5AaJ1yk7cAI7N8AnMDlBuEHICRzgAOAThCX5IREnCN7ZVWg6NWApCgEGWyAJqrUU04P0zXs9P2qCXCEBEhZ/CQiMiBo2hnHtll0HePlUJfnAuOYNvafGJxFnhdE9LlaZ6QMAN+YDTRytT9543wcx+9lZ+FoYMzUo/gLgaEtPkGkga2F0jssXYP64JRBBN5kFshZGu1BuEPgqJoxbAC8W+sgkkJ3DYNB7xdplovOsA0kExtufw0Y3X2xlHUhiMIwqsg4kURhZB5I4jCwDSQVGVoGkBiOLQFKFsQqImY7NDBRzffPo8NRhLANysDAePTwABEaEmsAQGMtNJMoQZYgyrBOM2ERschg2uSRFs1NuZnNqzhdgvAKjTQ41g1dkzRUQqrPf5lcYF2nTW0SyVzYhRSfTKbyc0udTrT6Z7yGdQsljUMvsKcxBMgOs/bt2zfMmwaGOiTv9Mex33HIAB1Dc33sYM1Vo7oFwczb6+tocHpt7cxil/oMaJr6+z5v7jnr2O4RRKPG6LLp3ylBTf+I7qglQ62w0bHXypR4T3SzAABHXTkffPncKpQEpqhtlBOBWHBTv194kGOFgdLuF4hWDGsGIRpSBiBp+kaJ3UZuw4goBYY4J88g+beHNCz7YxHxgCj87LoEx9vV9BXh+5Cg2MOY549BsEuaMJeuDWQJluFrfNU0C7RRK1wCqBwmDgbph8L/EuQWtWqHcHbhgrhNQmcED6qRpsGwGiSbUvUqg1vV0zAYCQ5bjh7Ecj2mE9eGZtMmO6jOsIIOFmrXhlhtsUrljNmSL9RVbfox/urv1NVXSqP/atKbLTJdJABkTcd0s33dJe1XfVhhBoKnvyuViF7mtfEez10m7+G1jGGmMVNL/KTAixAWGwFhuQFGGKEOUYZ2cxCZiE7GJ2MRKQGwiNrGKRGYTsYnYRGxiJSA2EZtYRSKzidhEbCI2sRIQm4hNrCL5A542LWJpkMAhAAAAAElFTkSuQmCC" style="float:left;" />
							</a>
						<li>
							<a href="../alice.jfif" target="_blank">
								<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEMAAABDCAYAAADHyrhzAAAAAXNSR0IArs4c6QAAAhVJREFUeF7tmUFSwjAUht8Liy7lCBUV2MkNxLUDM54AvIk3AU9QhHEtnECXiiIeAffAc8IAFmhJp7TYmfxdJ2ny9X15ySsTnjUBBos/AoDhiwbAAIzgzQGRgchAZBgTJzQxaeK5bl4pp6FI8kachzRQalD7fOsfMkSSfXci48m9qMyUeiaidEGsVyHt+tfwLslFxR1rB8ZjofTCRJW4A8bpxyy3tdGwE6dvkn02YHhu2c0pGSf5gihjschDbTxsRmmbZpsNGL3zclXmohU57sM0qI/eq0Ev1XNS09nk5vvjNe1JZRpG96zcJJEWK74+xkabWRjdQrFFxAt1rIWh03qOHY+Y1tpYCUOn9alSre1sZh0MZr6XuXhB5xu7YBBN9h3ybIOxN2sChv8CZVVqNZymEBmIjJAKlGWa/BDRSZgtdmnCNFieM/Q1fgeKdTD0rXVZWGoT0aU/SqyEoQEs7iY5p0NCVysg1sJYAeidFtvC3LD61urXA/WMrZTyb5Uu1EC3vkS3UNK1xo3dPPXaYxar43rRy/Smf+yEHoKShJOVyvhiow5a2CK9KafJIhVR7Ca5+NVYItxXivrHKPRGnT/+tfovhFGp2dAOkYHICCkV2BD+UdcITaAJNDHaAk2gCTSBJkYC0ASaGIME2QSaQBNoYiQATaCJMUiQTaAJNIEmRgLQBJoYgwTZBJpAE2hiJABNghH9AniMHlPklGDgAAAAAElFTkSuQmCC" style="display: inline-block;" />
							</a>
					</ul>
				</div>
			</div>
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
			<a id="purpose">
				<div class="purpose">
					<p> are used in REDCap to</p>
				</div>
			</a>
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
			<div style="color:black;">
				<a id="thingstoremember">
					<h2 style="color:#b22227;font-weight:normal;">Things to Remember</h2>
				</a>
				<hr>
				<ol style="padding-left: 20px;">
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