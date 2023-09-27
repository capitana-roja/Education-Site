<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?> 
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page educates REDCap users on how to cite REDCap use”>
		<title>Citation</title>
	</head>
	<body>
		<!--Navigation bars-->
		<?php echo file_get_contents("../main_navigation_bar.html"); ?> 
		<div class="container-fluid">
			<?php echo file_get_contents("../topic_navigation_bar_sub.html"); ?>
		
			<!--Button back to top-->
			<?php echo file_get_contents("../top_button.html"); ?>
			
			<!--Title-->
			<div class="row">
				<div class="col">
					<h1 class="title_no_pdf">Citation</h1>
					<p style="font-style: italic;">From Project REDCap:</p>
				</div>
			</div>
			
			<!--Content-->
			<div class="row">
				<div class="col">
					<br>
					<p><b>Please cite the publications below in study manuscripts using REDCap for data collection and management. We recommend the following boilerplate language:</b></p>
					<br>
					<p>Study data were collected and managed using REDCap electronic data capture tools hosted at [YOUR INSTITUTION].1,2 REDCap (Research Electronic Data Capture) is a secure, web-based software platform designed to support data capture for research studies, providing 1) an intuitive interface for validated data capture; 2) audit trails for tracking data manipulation and export procedures; 3) automated export procedures for seamless data downloads to common statistical packages; and 4) procedures for data integration and interoperability with external sources.
					<br>
					<br>
					<p><sup>1</sup>PA Harris, R Taylor, R Thielke, J Payne, N Gonzalez, JG. Conde, Research electronic data capture (REDCap) – A metadata-driven methodology and workflow process for providing translational research informatics support, J Biomed Inform. 2009 Apr;42(2):377-81.</p>
					<p><sup>2</sup>PA Harris, R Taylor, BL Minor, V Elliott, M Fernandez, L O’Neal, L McLeod, G Delacqua, F Delacqua, J Kirby, SN Duda, REDCap Consortium, The REDCap consortium: Building an international community of software partners, J Biomed Inform. 2019 May 9 [doi: 10.1016/j.jbi.2019.103208]</p>
					<br>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<p><strong>Link to articles: </strong></p>
					<p><a href="http://www.sciencedirect.com/science/article/pii/S1532046408001226">http://www.sciencedirect.com/science/article/pii/S1532046408001226</a></p>
					<p><a href="https://www.sciencedirect.com/science/article/pii/S1532046419301261">https://www.sciencedirect.com/science/article/pii/S1532046419301261</a></p>
				</div>
			</div>
		</div>
		
		<script src="../script.js"></script>
	</body>
	<footer><?php echo file_get_contents("../footer.html"); ?></footer>
</html>
