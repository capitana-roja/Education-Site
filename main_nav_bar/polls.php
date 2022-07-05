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
		<h1 class="title_no_pdf">Polls</h1>
		<!--Content-->
		<div class="body_text">
			<div id="poll">
				<h3>Do you like REDCap?</h3>
					<form>
						Yes: <input type="radio" name="vote" value="0" onclick="getVote(this.value)"><br>
						No: <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
					</form>
			</div>
		</div>
		<script src="../script.js"></script>
	</body>
	<footer><?php echo file_get_contents("../footer.html"); ?></footer>
</html>
