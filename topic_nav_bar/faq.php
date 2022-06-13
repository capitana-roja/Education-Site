<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?> 
		<meta name="keywords" content="REDCap, training, education">
		<meta name="description" content="This page educates REDCap users on approriate use of the application!">
		<title>REDCap Frequently Asked Questions</title>
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
		<h1 class="title_pdf">Frequently Asked Questions (FAQ)</h1>
		<!--Content-->
			<div class="faq">
				<a id="comp">
					<h2>Compliance</h2>
				</a>
				<p>Is REDCap HIPAA-compliant?</p>
					<p>REDCap is definitely capable of compliance with just about any standard – for example, HIPAA, 21CRFPart11, and FISMA standards (low, moderate, or high). Each of those standards has been used across various consortium sites, as well as other standards (including similar international regulations, like GDPR).

					REDCap is server software. Be mindful that no software alone is truly compliant with any standard. It is the environment into which software is installed that can be called compliant.

					The ‘environment’ includes the policies and procedures of the individual institutions, management teams, and REDCap project study team(s), touching on all aspects of how and where the data is stored. So ‘compliance’ involves how the software is installed, maintained, and supported – such things as what server settings are used by your institution, how servers are tested and maintained, how often data is backed up, how passwords are controlled, how the REDCap proejct teams manages the actual study, etc. Those decisions 1) do not singularly involve (nor get singularly defined by) REDCap itself, and 2) are entirely up to every REDCap partner institution to determine.

					NOTE: If a system has the survey feature enabled, the default way survey webpages are displayed does comply with ADA Section 508. Project design may affect, or entirely negate, that default compliance though.</p>
				<p>Is REDCap 21CFR Part11 Compliant?</p>
					<p>The appropriate version of this question is, can a REDCap project at Atrium-Wake be Part11 compliant? Within the Atrium-Wake Enterprise, REDCap has the potential to be 21CFR Part11 compliant. To maintain a project in REDCap under this compliance standard, users must follow a more strict and detailed data setup guideline, data management policy, and forego using some of REDCap's features that may be highly useful, but do not allow a project to maintain Part11 compliance (e.g., non-standardized data elements, editing project fields post-Development beyond changes required through protocol amendments, PHI piping, public Project Dashboards, etc.)
					
					If your project requires 21CFR Part11 compliance, be sure to reach out to a REDCap Administrator for assistance from the initial design phase of your new project.</p>
				<a id="users">
					<h2>User Accounts</h2>
				</a>
				<p>How do I start my REDCap user account?</p>
					<p>This depends on whether or not you are an employee of Atrium-Wake, and which REDCap instance you are trying to access.
					REDCap accounts are not universal across all instances. If you are an Atrium Health or Wake Health employee, your system credentials are your REDCap credentials, so you'll simply use them to log into your legacy institution's REDCap instance for the first time to activate your account:
					
					Atrium Health Main: https://redcap.atriumhealth.org/redcap/ | https://rces.atriumhealth.org/redcap/
					Wake Health Main: 	https://redcap.wakehealth.edu/redcap/
					Wake Health CCC: 	https://redcap.wakehealth.edu/redcapccc/
					Atrium Health BCC:	https://rc2.atriumhealth.org/redcap/ | https://rc2e.atriumhealth.org/redcap/
					
					If you are not an Atrium Health or Wake Health employee, then you will need to complete the respective External User Access Request Form:
					
					External user needing access to an Atrium instances?: https://redcap.link/AHExtU | External user needing access to an Atrium instances?: https://redcap.link/WHExtU
					
					<table>
						<tbody>
						<tr>
						<td>User / Instance</td>
						<td><b>Access AH</b></td>
						<td><b>Access WH</b></td>
						</tr>
						<tr>
						<td><b>Internal AH</b></td>
						<td>Log in to REDCap Homepage with system credentials</td>
						<td>Complete WH External User Request Form</td>
						</tr>
						<tr>
						<td><b>Internal WH</b></td>
						<td>Complete AH External User Request Form</td>
						<td>Log in to REDCap Homepage with system credentials</td>
						</tr>
						<tr>
						<td><b>External Both</b></td>
						<td>Complete AH External User Request Form</td>
						<td>Complete WH External User Request Form</td>
						</tr>
						</tbody>
					</table>
					</p>
				<p>How do I log into REDCap?</p>
					<p>REDCap is definitely capable of compliance with just about any standard – for example, HIPAA, 21CRFPart11, and FISMA standards (low, moderate, or high). Each of those standards has been used across various consortium sites, as well as other standards (including similar international regulations, like GDPR).

					REDCap is server software. Be mindful that no software alone is truly compliant with any standard. It is the environment into which software is installed that can be called compliant.

					The ‘environment’ includes the policies and procedures of the individual institutions, management teams, and REDCap project study team(s), touching on all aspects of how and where the data is stored. So ‘compliance’ involves how the software is installed, maintained, and supported – such things as what server settings are used by your institution, how servers are tested and maintained, how often data is backed up, how passwords are controlled, how the REDCap proejct teams manages the actual study, etc. Those decisions 1) do not singularly involve (nor get singularly defined by) REDCap itself, and 2) are entirely up to every REDCap partner institution to determine.

					NOTE: If a system has the survey feature enabled, the default way survey webpages are displayed does comply with ADA Section 508. Project design may affect, or entirely negate, that default compliance though.</p>
			</div>
			<!--Javascript-->
			<script src="../script.js"></script>
		</div>
	</body>
</html>