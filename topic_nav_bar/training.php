<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?> 
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page hosts REDCap training, demos, and wizards!”>
		<title>Training</title>
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
		<h1 class="title_no_pdf">Training</h1>
		<!--Content-->
		<div class="body_text">
			<div style="color:black;">
				<br>
				<!--PROJECT DEMOS-->
				<div>
					<a id="project_demos">
						<h2 style="color:#b22227;font-weight:normal;">Project Demos</h2>
					</a>
					<hr>
					<p>These demos provide a walk through of pre-built projects.</p>
					<br>
					<div>
						<div class="flip-card">
							<div class="flip-card-inner">
								<div class="flip-card-front"> Project 1 </div>
								<div class="flip-card-back">
									<h1>Content</h1>
									<p>This project is about this!</p>
								</div>
							</div>
						</div>
						<div class="flip-card">
							<div class="flip-card-inner">
								<div class="flip-card-front"> Project 2 </div>
								<div class="flip-card-back">
									<h1>Content</h1>
									<p>This project is about this!</p>
								</div>
							</div>
						</div>
						<div class="flip-card">
							<div class="flip-card-inner">
								<div class="flip-card-front"> Project 3 </div>
								<div class="flip-card-back">
									<h1>Content</h1>
									<p>This project is about this!</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div style="color:black;">
				<a id="training_courses">
					<h2 style="color:#b22227;font-weight:normal;">Training Courses</h2>
				</a>
				<hr>
				<div>
					<div class="row">
						<a href="https://redcap.link/AHtraining" target="_blank">
							<div class="column1" style="text-align:center;">
								<div class="myDIV">
									<h2>Beginner Training</h2>
								</div>
							</div>
						</a>
					</div>
					<div class="row">
						<a href="https://rces.atriumhealth.org/redcap/surveys/?s=FL9LRCA8NFK4DMR3" target="_blank">
							<div class="column2" style="text-align:center">
								<h2>Proficient Training</h2>
							</div>
						</a>
					</div>
					<div class="row">
						<a href="https://rces.atriumhealth.org/redcap/surveys/?s=NYWCWTM7AWNDYNMX" target="_blank">
							<div class="column1" style="text-align:center">
								<h2>Advanced Training</h2>
							</div>
						</a>
					</div>
				</div>
			</div>
			<br>
			<div style="color:black;">
				<a id="training_wizards">
					<h2 style="color:#b22227;font-weight:normal;">Training Wizards</h2>
				</a>
				<hr>
				<div>
					<div class="row">
						<a href="https://redcap.vanderbilt.edu/surveys/?s=43TD4MRF8A">
						<div class="column1" style="text-align:center;" >
							<h2>Survey wizard:</h2>
							<h3>The Basics</h3>
						</div>
						</a>
						<a href="https://redcap.vanderbilt.edu/surveys/?s=LKM4DPEHL4">
						<div class="column2" style = "text-align:center">
							<h2>Survey wizard:</h2>
							<h3>Automated Survey Invitations</h3>
						</div>
						</a>
					</div>
				</div>
			</div>
			<!--Javascript-->
			<script src="../script.js"></script>
		</div>
	</body>
	<footer></footer>
</html>