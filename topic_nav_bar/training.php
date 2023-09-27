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
		<?php echo file_get_contents("../main_navigation_bar.html"); ?> 
		<div class="container-fluid">
			<?php echo file_get_contents("../topic_navigation_bar_sub.html"); ?>
		
			<!--Button back to top-->
			<?php echo file_get_contents("../top_button.html"); ?>
			<div class="row">
				<div class="col-2">
					<nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
					<nav class="nav nav-pills flex-column">
						<a class="nav-link" href="#item-1">Project Demos</a>
						<nav class="nav nav-pills flex-column">
							<a class="nav-link ms-3 my-1" href="#item-1-1">Project 1</a>
							<a class="nav-link ms-3 my-1" href="#item-1-2">Project 2</a>
							<a class="nav-link ms-3 my-1" href="#item-1-2">Project 3</a>
						</nav>
						<a class="nav-link" href="#item-2">Training Courses</a>
						<nav class="nav nav-pills flex-column">
							<a class="nav-link ms-3 my-1" href="#item-2-1">Beginner Training</a>
							<a class="nav-link ms-3 my-1" href="#item-2-2">Proficient Training</a>
							<a class="nav-link ms-3 my-1" href="#item-2-2">Advanced Training</a>
						</nav>
						<a class="nav-link" href="#item-3">Training Wizards</a>
						<nav class="nav nav-pills flex-column">
							<a class="nav-link ms-3 my-1" href="#item-3-1">Survey wizard: The Basics</a>
							<a class="nav-link ms-3 my-1" href="#item-3-2">Survey wizard: Automated Survey Invitations</a>
						</nav>
					</nav>
					</nav>
				</div>

				<div class="col-10">
					<div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
						<div id="item-1">
							<h4>Project Demos</h4>
							<hr>
							<p>These demos provide a walk through of pre-built projects.</p>
						</div>
						<div id="item-1-1">
							<h5>Project 1</h5>
							<h6>Content</h6>
							<p>This project is about this!</p>
						</div>
						<div id="item-1-2">
							<h5>Project 2</h5>
							<h6>Content</h6>
							<p>This project is about this!</p>
						</div>
						<div id="item-1-2">
							<h5>Project 3</h5>
							<h6>Content</h6>
							<p>This project is about this!</p>
						</div>
						<div id="item-2">
							<h4>Training Courses</h4>
							<hr>
						</div>
						<div id="item-2-1">
							<a href="https://redcap.link/AHtraining" target="_blank">
								<h5>Beginner Training</h5>
							</a>
						</div>
						<div id="item-2-2">
							<a href="https://rces.atriumhealth.org/redcap/surveys/?s=FL9LRCA8NFK4DMR3" target="_blank">
								<h5>Proficient Training</h5>
							</a>
						</div>
						<div id="item-2-2">
							<a href="https://rces.atriumhealth.org/redcap/surveys/?s=NYWCWTM7AWNDYNMX" target="_blank">
								<h5>Advanced Training</h5>
							</a>
						</div>
						<div id="item-3">
							<h4>Training Wizards</h4>
							<hr>
						</div>
						<div id="item-3-1">
							<a href="https://redcap.vanderbilt.edu/surveys/?s=43TD4MRF8A" target="_blank">
								<h5>Survey wizard: The Basics</h5>
							</a>
						</div>
						<div id="item-3-2">
							<a href="https://redcap.vanderbilt.edu/surveys/?s=LKM4DPEHL4" target="_blank">
								<h5>Survey wizard: Automated Survey Invitations</h5>
							</a>
						</div>
					</div>
				</div>

			</div>
		</div>
			
			
		<script src="../script.js"></script>
	</body>
	<footer><?php echo file_get_contents("../footer.html"); ?></footer>
	<!-- <body>
		<div>
			<?php echo file_get_contents("../main_navigation_bar_sub.html"); ?> 
			<?php echo file_get_contents("../topic_navigation_bar_sub.html"); ?> 
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
		<?php echo file_get_contents("../top_button.html"); ?> 
		<br>
		<br>
		<br>
		<br>
		<h1 class="title_no_pdf">Training</h1>
		<div class="body_text">
			<div style="color:black;">
				<br>
				
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
						<a href="https://redcap.vanderbilt.edu/surveys/?s=43TD4MRF8A" target="_blank">
						<div class="column1" style="text-align:center;" >
							<h2>Survey wizard:</h2>
							<h3>The Basics</h3>
						</div>
						</a>
						<a href="https://redcap.vanderbilt.edu/surveys/?s=LKM4DPEHL4" target="_blank">
						<div class="column2" style = "text-align:center">
							<h2>Survey wizard:</h2>
							<h3>Automated Survey Invitations</h3>
						</div>
						</a>
					</div>
				</div>
			</div>
			<script src="../script.js"></script>
		</div>
	</body>
	<footer><?php echo file_get_contents("../footer.html"); ?></footer> -->
</html>
