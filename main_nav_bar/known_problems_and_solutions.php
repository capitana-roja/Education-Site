<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?> 
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page is for REDCap users to review Known Problems & Solutions”>
		<title>Known Problems & Solutions</title>
	</head>
	<body>
		<!--Navigation bars-->
		<div>
			<?php echo file_get_contents("../main_navigation_bar_sub.html"); ?> 
			<?php echo file_get_contents("../topic_navigation_bar_sub.html"); ?>
		</div>
		<!--Button back to top-->
		<button onclick="topFunction()" id="Top" title="Go to top">Top</button>
		<br>
		<br>
		<br>
		<br>
		<!--Title-->
		<h1 class="title_no_pdf">Known Problems & Solutions</h1>
		<!--Content-->
		<div class="body_text">
				<div>
					<br>
					<button class="accordion">Section 1</button>
					<div class="panel">
						<p>example</p>
					</div>
					<button class="accordion">Section 2</button>
					<div class="panel">
						<p></p>
					</div>
					<button class="accordion">Section 3</button>
					<div class="panel">
						<p></p>					
					</div>
				</div>
				<br>
				<p><a href="https://rces.atriumhealth.org/redcap/surveys/?s=NTLPE3AN9EMDHEW4" target="_blank">Submit your known problems (and solutions)!</a></p>
		</div>
		<script src="../script.js"></script>
	</body>
	<footer></footer>
</html>