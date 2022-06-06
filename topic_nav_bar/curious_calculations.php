<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?> 
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page educates REDCap users on advanced calculations”>
		<title>Curious Calculations</title>
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
							<a href="#purpose">Purpose</a>
						<li>
							<a href="#procedure">Calc 1: Day of the Week</a>
						<li>
							<a href="#examples">Calc 2: </a>
						<li>
							<a href="#thingstoremember">Calc 3: </a>
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
		<h1 class="title_no_pdf">Curious Calculations</h1>
		<!--Content-->
		<div class="body_text">
			<a id="purpose">
				<div class="purpose">
					<p>Below you will find a series of interesting and unique calculations that can be used in various areas of your REDCap projects. Alongside of the calculation itself will be a brief explanation of its use and purpose. As these are exmaples, the variable names used in the calculations will be placeholders with simple names like [field1] or [date2]. You will need to replace those placeholder variables with fields/variables from your actual project. All calculations will have been tested on a previous version of REDCap (12.0.19+) but may not have been tested on our current REDCap version. Always test before implementation!</p>
				</div>
			</a>
			<div style="color:black;">
				<br>
				<a id="calc1">
					<h2 style="color:#b22227;font-weight:normal;">Calc 1: Day of the Week</h2>
				</a>
				<hr>
				<p>Allows the day of the week to be displayed after reading a single [date] field. Note: this is a CALCTEXT calculation so it must be added as an Action Tag to a Text Box field type. As well, be sure your [date] field is validated in the YMD format.
				
				@CALCTEXT(
if(round(7*((datediff("1899-12-31", [date], 'd')/7)-rounddown((datediff("1899-12-31", [date], 'd')/7))))=0,"Sunday",
if(round(7*((datediff("1899-12-31", [date], 'd')/7)-rounddown((datediff("1899-12-31", [date], 'd')/7))))=1,"Monday",
if(round(7*((datediff("1899-12-31", [date], 'd')/7)-rounddown((datediff("1899-12-31", [date], 'd')/7))))=2,"Tuesday",
if(round(7*((datediff("1899-12-31", [date], 'd')/7)-rounddown((datediff("1899-12-31", [date], 'd')/7))))=3,"Wednesday",
if(round(7*((datediff("1899-12-31", [date], 'd')/7)-rounddown((datediff("1899-12-31", [date], 'd')/7))))=4,"Thursday",
if(round(7*((datediff("1899-12-31", [date], 'd')/7)-rounddown((datediff("1899-12-31", [date], 'd')/7))))=5,"Friday",
if(round(7*((datediff("1899-12-31", [date], 'd')/7)-rounddown((datediff("1899-12-31", [date], 'd')/7))))=6,"Saturday",
"Unknown"))))))))</p>
			</div>
			<br>
			<div style="color:black;">
				<a id="calc2">
					<h2 style="color:#b22227;font-weight:normal;">Calc 2: </h2>
				</a>
				<hr>
				<p>Calculate the difference in time in the output format of HH:MM between two Time or Date/Time fields. Note: the second field must have a value after the first.
				@CALCTEXT(concat(round(datediff([dtime1],[dtime2],"h","mdy",true),0),":",round(((round(datediff([dtime1],[dtime2],"h","mdy",true),2)-rounddown(datediff([dtime],[dtime2],"h",true),0))*60),0)))</p>
			</div>
			<br>
			<div style="color:black;">
				<a id="calc3">
					<h2 style="color:#b22227;font-weight:normal;">Cacl 3: </h2>
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