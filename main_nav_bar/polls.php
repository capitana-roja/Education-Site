<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?> 
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page has polls for review by REDCap users”>
		<title>Polls</title>
	</head>
	<body>
		<!--Navigation bars-->
		<?php echo file_get_contents("../main_navigation_bar.html"); ?> 
		<div class="container-fluid">
			<?php echo file_get_contents("../topic_navigation_bar_sub.html"); ?>
		
			<!--Button back to top-->
			<?php echo file_get_contents("../top_button.html"); ?>
			
			<!--Title-->
			<!-- <h1 class="title_no_pdf">Polls</h1> -->
			<!--Content-->
			<!--PDF content-->
			<div id="poll">
				<h3>Do you like REDCap?</h3>
					<form>
						Yes: <input type="radio" name="vote" value="0" onclick="getVote(this.value)"><br>
						No: <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
					</form>
			</div>
			
			<form class="container border border-secondary rounded">
				<legend>Do you like REDCap?</legend>
				<div class="form-check mb-3">
					<input class="form-check-input" type="radio" name="vote" id="gridRadios1" value="0">
					<label class="form-check-label" for="gridRadios1">
					Yes
					</label>
				</div>
				<div class="form-check mb-3">
					<input class="form-check-input" type="radio" name="vote" id="gridRadios2" value="1">
					<label class="form-check-label" for="gridRadios2">
					No
					</label>
				</div>
				<button type="submit" class="btn btn-primary mb-3" onclick="getVote(this.value)">Submit</button>
			</form>

		</div>
		<script src="../script.js"></script>
		<footer><?php echo file_get_contents("../footer.html"); ?></footer>
	</body>
</html>
