<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?> 
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page hosts REDCap downloadable content!”>
		<title>Downloadable Content</title>
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
							<a href="#api_scripts">I. API Scripts</a>
						<li>
							<a href="#shared_library">II. Shared Library</a>
						<li>
							<a href="#templates">III. Templates</a>
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
		<h1 class="title_no_pdf">Downloadable Content</h1>
		<!--Content-->
		<div class="body_text">
			<div style="color:black;">
				<a id="#api_scripts">
					<h2 style="color:#b22227;font-weight:normal;">API Scripts</h2>
				</a>
				<hr>
				<a id="#shared_library">
					<h2 style="color:#b22227;font-weight:normal;">Shared Library</h2>
				</a>
				<hr>
				<a href="shared_library.csv"></a>
				<a id="#templates">
					<h2 style="color:#b22227;font-weight:normal;">Templates</h2>
				</a>
				<hr>
			</div>
			<!--Javascript-->
		</div>
		<script src="../script.js"></script>
	</body>
	<footer><?php echo file_get_contents("../footer.html"); ?></footer>
</html>
