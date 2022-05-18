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
							<a href="#project_demos">I. Project Demos</a>
						<li>
							<a href="#training_courses">II. Training Courses</a>
						<li>
							<a href="#training_wizards">III. Training Wizards</a>
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
				<a id="#">
					<h2 style="color:#b22227;font-weight:normal;">API Scripts</h2>
				</a>
				<hr>
				<a id="#">
					<h2 style="color:#b22227;font-weight:normal;">Shared Library</h2>
				</a>
				<hr>
				<a href="shared_library.csv"></a>
				<a id="#">
					<h2 style="color:#b22227;font-weight:normal;">Templates</h2>
				</a>
				<hr>
			</div>
			<!--Javascript-->
		</div>
		<script src="../script.js"></script>
	</body>
	<footer></footer>
</html>
