<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?> 
		<meta name="keywords" content="REDCap, training, education">
		<meta name="description" content="This page shares handy tips and tricks for REDCap users to implement in their project!">
		<title>Best Practices</title>
	</head>
	<body>
		<!--Navigation bars-->
		<div>
			<?php echo file_get_contents("../main_navigation_bar_sub.html"); ?> 
			<?php echo file_get_contents("../topic_navigation_bar_sub.html"); ?> 
		</div>
		<!--Button back to top-->
		<?php echo file_get_contents("../top_button.html"); ?> 
		<br>
		<br>
		<br>
		<br>
		<!--Title-->
		<h1 class="title_pdf">Tips & Tricks</h1>
		<!--Content-->
		<div class="topic_pdf">
			<div class="embedded_pdf">
				<!--PDF content-->
				<iframe class="pdf_location" src="https://cdn.atriumhealth.org/-/media/wakeforest/ctsi/files/education-and-training/educational-listings/redcap-best-practices.pdf?rev=6a40c8497e514292be4a7d75c26da97d&hash=015326A6699B78E7F93E78818C5E2465" width="1000px" height="1200px"></iframe>
			</div>
			<!--Last section of content-->
			<div class="items">
				<a id="item">
					<h2>Hide a field from specific users</h2>
				</a>
				<hr>
				<p><b>@IF([user-role-label]!="Administrator",@HIDDEN,'')</b><br><br>This little bit of code can be dropped into the Action Tag section of any field in order to make that field hidden to any user in your project that is not in the "Administrator" User Role (set in the User Rights page). You can use any Role you have in your proejct, and you can swap out the @HIDDEN tag with @READONLY or another Action Tag to change the behavior of the field.</p>
			</div>
			<div class="items">
				<a id="item">
					<h2>Limit the # of Repeated Instances for an Instrument</h2>
				</a>
				<hr>
				<p><b>[last-instance] <= "n"</b><br><br>Use this code in your Form Display Logic for the instrument you wish to limit. It must be an instrument that is enabled as a repeating instrument and the number you specify should be -1 your target max number. This will make the instrument inaccessible for any record that have n+1 repeated instances saved , and hence new instances cannot be added.</p>
			</div>
			<div class="items">
				<a id="item">
					<h2>Live value confirmation (email address, phone number, any field!)</h2>
				</a>
				<hr>
				<p>When you need to double-check that a user has entered key data points correctly, you may want to ask them to enter it twice to be sure it is accurate. To do so, follow these steps:
				<ol>
				<li>1) Create the two identical fields, say [email1] and [email2], labeling them accordingly (call the second one a "Confirmation ..."). Make them both required.</li>
				<li>2) Create a basic calculation field, and add the calculation <b>if([email1]=[email2],1,'')</b>. Make it required and add <b>@HIDDEN-SURVEY</b> to the Action Tag section.</li>
				<li>3) Create 2 descriptive text fields and add the text <b>"Values do not match!"</b> and <b>"Values Match."</b> in red and green, respectively.</li>
				<li>4) In the branching logic for the not-matching descriptive text field, use <b>[email1] != [email2]</b> and in the branching logic for the matching descriptive text field, use <b>[email1] = [email2]</b>.</li>
				</ol>
				This prevents a participant from submiting a survey unless the two fields match exactly. The calculation field acts as a submission block because it will only carry a value if the two fields match, and being required, must carry a value to submit the instrument.</p>
			</div>
			<!--Javascript-->
			<script src="../script.js"></script>
		</div>
	</body>
</html>