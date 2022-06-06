<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?>		
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page educates REDCap users on adding and editing records”>
		<title>Add/Edit Records</title>
	</head>
	<body>
		<!--Navigation bars-->
		<div>
			<?php echo file_get_contents("../main_navigation_bar_sub.html"); ?> 
			<?php echo file_get_contents("../topic_navigation_bar_sub.html"); ?>
			
			
			<!--Right sidebar-->
			<!--<div class="topic_page_sidebar">
				<div id="toc_container">
					<p class="toc_title">Content</p>
					<ul class="toc_list">
						<li>
							<a href="#purpose">I. Purpose</a>
						<li>
							<a href="#procedure">II. Procedure</a>
						<li>
							<a href="#examples">III. Examples</a>
						<li>
							<a href="#thingstoremember">IV. Things to Remember</a>
						<li>
							<a href="../Alice_in_Wonderland.pdf" target="_blank">
								<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEMAAABDCAYAAADHyrhzAAAAAXNSR0IArs4c6QAAAu1JREFUeF7tmk1y2kAQhV+PqEp28Q0icBWw5AaJ1yk7cAI7N8AnMDlBuEHICRzgAOAThCX5IREnCN7ZVWg6NWApCgEGWyAJqrUU04P0zXs9P2qCXCEBEhZ/CQiMiBo2hnHtll0HePlUJfnAuOYNvafGJxFnhdE9LlaZ6QMAN+YDTRytT9543wcx+9lZ+FoYMzUo/gLgaEtPkGkga2F0jssXYP64JRBBN5kFshZGu1BuEPgqJoxbAC8W+sgkkJ3DYNB7xdplovOsA0kExtufw0Y3X2xlHUhiMIwqsg4kURhZB5I4jCwDSQVGVoGkBiOLQFKFsQqImY7NDBRzffPo8NRhLANysDAePTwABEaEmsAQGMtNJMoQZYgyrBOM2ERschg2uSRFs1NuZnNqzhdgvAKjTQ41g1dkzRUQqrPf5lcYF2nTW0SyVzYhRSfTKbyc0udTrT6Z7yGdQsljUMvsKcxBMgOs/bt2zfMmwaGOiTv9Mex33HIAB1Dc33sYM1Vo7oFwczb6+tocHpt7cxil/oMaJr6+z5v7jnr2O4RRKPG6LLp3ylBTf+I7qglQ62w0bHXypR4T3SzAABHXTkffPncKpQEpqhtlBOBWHBTv194kGOFgdLuF4hWDGsGIRpSBiBp+kaJ3UZuw4goBYY4J88g+beHNCz7YxHxgCj87LoEx9vV9BXh+5Cg2MOY549BsEuaMJeuDWQJluFrfNU0C7RRK1wCqBwmDgbph8L/EuQWtWqHcHbhgrhNQmcED6qRpsGwGiSbUvUqg1vV0zAYCQ5bjh7Ecj2mE9eGZtMmO6jOsIIOFmrXhlhtsUrljNmSL9RVbfox/urv1NVXSqP/atKbLTJdJABkTcd0s33dJe1XfVhhBoKnvyuViF7mtfEez10m7+G1jGGmMVNL/KTAixAWGwFhuQFGGKEOUYZ2cxCZiE7GJ2MRKQGwiNrGKRGYTsYnYRGxiJSA2EZtYRSKzidhEbCI2sRIQm4hNrCL5A542LWJpkMAhAAAAAElFTkSuQmCC" style="float:left;" />
							</a>
						<li>
							<a href="../alice.jfif" target="_blank">
								<img  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEMAAABDCAYAAADHyrhzAAAAAXNSR0IArs4c6QAAAhVJREFUeF7tmUFSwjAUht8Liy7lCBUV2MkNxLUDM54AvIk3AU9QhHEtnECXiiIeAffAc8IAFmhJp7TYmfxdJ2ny9X15ySsTnjUBBos/AoDhiwbAAIzgzQGRgchAZBgTJzQxaeK5bl4pp6FI8kachzRQalD7fOsfMkSSfXci48m9qMyUeiaidEGsVyHt+tfwLslFxR1rB8ZjofTCRJW4A8bpxyy3tdGwE6dvkn02YHhu2c0pGSf5gihjschDbTxsRmmbZpsNGL3zclXmohU57sM0qI/eq0Ev1XNS09nk5vvjNe1JZRpG96zcJJEWK74+xkabWRjdQrFFxAt1rIWh03qOHY+Y1tpYCUOn9alSre1sZh0MZr6XuXhB5xu7YBBN9h3ybIOxN2sChv8CZVVqNZymEBmIjJAKlGWa/BDRSZgtdmnCNFieM/Q1fgeKdTD0rXVZWGoT0aU/SqyEoQEs7iY5p0NCVysg1sJYAeidFtvC3LD61urXA/WMrZTyb5Uu1EC3vkS3UNK1xo3dPPXaYxar43rRy/Smf+yEHoKShJOVyvhiow5a2CK9KafJIhVR7Ca5+NVYItxXivrHKPRGnT/+tfovhFGp2dAOkYHICCkV2BD+UdcITaAJNDHaAk2gCTSBJkYC0ASaGIME2QSaQBNoYiQATaCJMUiQTaAJNIEmRgLQBJoYgwTZBJpAE2hiJABNghH9AniMHlPklGDgAAAAAElFTkSuQmCC" style="display: inline-block;" />
							</a>
					</ul>
				</div>
			</div>-->
		</div>
		<!--Button back to top-->
		<?php echo file_get_contents("../top_button.html"); ?>
		<br>
		<br>
		<br>
		<br>
		<!--Title-->
		<h1 class="title_pdf">Add/Edit Records</h1>
		<!--Content-->
		<div class="topic_pdf">
			<div class="embedded_pdf">
				<!--PDF content-->
				<iframe class="pdf_location" src="beginner_resources/Add_Edit_Records_Guide_REDCap.pdf"></iframe>
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

		<!--<div class="body_text">
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
				<p></p>
			</div>
			<br>
			<div style="color:black;">
				<a id="examples">
					<h2 style="color:#b22227;font-weight:normal;">Examples</h2>
				</a>
				<hr>
				<p></p>
				<ul style="list-style-type: upper-roman; padding-left: 25px;">
					<li>
					<li>
					<li>
					<li>
				</ul>
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
</html>-->