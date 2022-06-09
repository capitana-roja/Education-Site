<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?> 
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page educates REDCap users on common comparisons”>
		<title>Common Comparisons</title>
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
							<a href="#asvac">I. Autostart vs. Auto-Continue</a>
						<li>
							<a href="#longvri">II. Longitudinal Events vs. Repeated Instruments</a>
						<li>
							<a href="#rdvc">III. Radio/Dropdown Logic vs. Checkbox Logic</a>
					</ul>
				</div>
			</div>
		</div>
		<!--Button back to top-->
		<?php echo file_get_contents("../top_button.html"); ?> 
		<br>
		<br>
		<!--Title-->
		<h1 class="title_no_pdf">Common Comparisons</h1>
		<!--Content-->
		<div class="body_text">
			<p>Here you will find a series of REDCap features that are commonly comparable in function but are sometimes misunderstood by users.</p>
			<a id="asvac">
				<h2>Autostart vs Autocontinue</h2>
			</a>
            <p>These two features are effectively the same, serving the same function of allowing a participant taking a survey to be automatically advanced to the next survey in the instrument battery.</p>
			<table class="comparison">
				<tr>
					<th style="width:50%;color: black;">Features</th>
					<th>Autostart</th>
					<th>Autocontinue</th>
				</tr>
				<tr>
					<td>Location</td>
					<td>
						<i class="fa fa-remove"></i>
                        <p>Set under the Survey Queue menu (from Online Designer page).</p>
					</td>
					<td>
						<i class="fa fa-remove"></i>
                        <p>Set in Survey Settings, per survey-enabled instrument.</p>
					</td>
				</tr>
				<tr>
					<td>Restrictions</td>
					<td>
						<i class="fa fa-check"></i>
                        <p>Follows the settings of the Survey Queue, so only advances the participant if the Survey Queue is satisfied.</p>
					</td>
					<td>
						<i class="fa fa-check"></i>
                        <p>If enabled, will ALWAYS advance the user once the previous survey is completed.</p>
					</td>
				</tr>
				<tr>
					<td>Setting Visibility</td>
					<td>
						<i class="fa fa-check"></i>
                        <p>Must check the Survey Queue.</p>
					</td>
					<td>
						<i class="fa fa-check"></i>
                        <p>Easily seen in the Online Designer instrument table.</p>
					</td>
				</tr>
			</table>
			<br>
			<a id="longvri">
				<h2>Longitudinal Events vs. Repeated Instruments</h2>
			</a>
            <p>Both of these features can of course be used together, and have plenty of attributes that stand on their own, but there are some similarities that are worth noting when each feature is best leveraged.</p>
			<table class="comparison">
				<tr>
					<th style="width:50%;color: black;">Features</th>
					<th>Longitudinal Events</th>
					<th>Repeated Instruments</th>
				</tr>
				<tr>
					<td>Major Determining Factor</td>
					<td>
						<i class="fa fa-check"></i>
                        <p>Use when data recollection time points are known, scheduled, planned, or expected.</p>
					</td>
					<td>
						<i class="fa fa-check"></i>
                        <p>Use when data recollection time points are NOT known, scheduled, planned, or expected.</p>
					</td>
				</tr>
				<tr>
					<td>Adding once in Production</td>
					<td>
						<i class="fa fa-check"></i>
                        <p>Events can be added by users, but Administrators must designate instruments to the newly added Event, effectively incorporating it into your workflow.</p>
					</td>
					<td>
						<i class="fa fa-check"></i>
                        <p>Normal users add repeating instances (for Events or instruments) ad-hoc as needed, without Administrator intervention.</p>
					</td>
				</tr>
				<tr>
					<td>Major Consideration</td>
					<td>
						<i class="fa fa-check"></i>
                        <p>Cannot edit/delete Events that are built after moving into Production.</p>
					</td>
					<td>
						<i class="fa fa-check"></i>
                        <p>Can delete repeated instances if desired (user's data responsibility), but cannot renumber/reorder once created.</p>
					</td>
				</tr>
			</table>
			<br>
			<div style="color:black;">
				<a id="rdvc">
					<h2>Radio/Dropdown Logic vs. Checkbox Logic</h2>
				</a>
                <p>While both of these field types are mutiple choice designs, radio button or dropdowns are single-answer while Checkboxes are multiple-answer. Therefore, the way in which REDCap addresses them in logic is different.</p>
			<table class="comparison">
				<tr>
					<th style="width:50%;color: black;"></th>
					<th>Radio/Dropdown</th>
					<th>Checkbox</th>
				</tr>
				<tr>
					<td>Indicating "when choice 2 is chosen"</td>
					<td>
						<i class="fa fa-check"></i>
						<p>[radio_field] = '2'</p>
					</td>
					<td>
						<i class="fa fa-check"></i>
						<p>[checkbox_field(2)] = '1'</p>
					</td>
				</tr>
				<tr>
					<td>Indicating when field is blank</td>
					<td>
						<i class="fa fa-check"></i>
						<p>[radio_field] = ''</p>
					</td>
					<td>
						<i class="fa fa-check"></i>
						<p>[checkbox_field] = ''</p>
					</td>
				</tr>
				<tr>
					<td>Indicating when field has choices 2 and 5 chosen</td>
					<td>
						<i class="fa fa-check"></i>
						<p>[radio_field] = '2' AND [radio_field] = '5'</p>
					</td>
					<td>
						<i class="fa fa-check"></i>
						<p>[checkbox_field(2)] = '1' AND [checkbox_field(5)] = '1'</p>
					</td>
				</tr>
			</table>
			</div>
		</div>
        <br>
		<!--Javascript-->
		<script src="../script.js"></script>
	</body>
	<footer><center>Site supported by REDCap Administration of Atrium Health Wakeforest Baptist | View our Privacy Policy
<br>REDCap is developed by Vanderbilt University and is hosted, supported, and managed by Atrium Health Wake Forest.</center></footer>
</html>