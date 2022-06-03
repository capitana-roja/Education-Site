<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?> 
		<meta name="keywords" content="REDCap, training, education">
		<meta name="description" content="This page educates REDCap users on best practices while using the application!">
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
		<h1 class="title_pdf">Best Practices</h1>
		<!--Content-->
		<div class="topic_pdf">
			<div class="embedded_pdf">
				<!--PDF content-->
				<iframe class="pdf_location" src="https://cdn.atriumhealth.org/-/media/wakeforest/ctsi/files/education-and-training/educational-listings/redcap-best-practices.pdf?rev=6a40c8497e514292be4a7d75c26da97d&hash=015326A6699B78E7F93E78818C5E2465" width="1000px" height="1200px"></iframe>
			</div>
			<!--Last section of content-->
			<div class="items">
				<a id="items">
					<h2>Below is a list of Atrium Health Wake Forest Enterprise REDCap Best Practices</h2>
				</a>
				<hr>
				<ol>
					<li>1)	Use Concise, Abbreviated, and Categorical Naming, where at all possible. Using brief naming structures, shortened titles, and systematic prefix- suffix- components throughout REDCap results in both a lower data footprint of your project and a much more navigatable project and data structure. Try to keep your Project Title to a single line is possible (it does not need to be a word-for-word copy of the title of on your IRB protocol, for example). When naming variables, shorten them as much as you can without losing meaning (e.g., “Average Number of Pull-Ups Per Week” = [avg_pull_wk], or “Please describe you experience with you provider:” = [prov_exp]). If you have a series of fields that may be serial in design, simply number them accordingly (e.g., “Dosage #1”, “Dosage #2”, “Dosage #3”,… = [dos1], [dos2], [dos3]). If you have fields that are similar but fall into different categories, proceed similarly (e.g., “High Score”, “High Score Date”, “High Score Location”, “Low Score”, “Low Score Date”, “Low Score Location” = [hs], [hs_dat], [hs_loc], [ls], [ls_dat], [ls_loc]).  Doing so will make any calculations, branching logic, or later analysis much easier and fluid.</li>
					<li>2)	NEVER use the automatic first field, “Record ID” [record_id] to capture/store PHI. This will expose PHI and result in a compliance violation. Do you need to collect MRN or a similar identifying data point and have it visible for all of your records so that you can easily navigate them in your project? No problem, just create that ever-so important field as you second field in your project (right under the Record ID) and use the Custom Record Label option to pipe that field right next to your Record ID. This will be shown throughout your project and allow you to continue using REDCap in a compliant manner.</li>
					<li>3)	Always test your project with 5 or more test records.  This is mentioned on the Project Setup page checklist and for good reason.  Testing your project only takes a small amount of time but saves you a large amount of potential re-work and headache in the future. Testing your project isn’t a formality, it will immediately show you where you might have flaws in your project design, where improvements to a working design can be made, and watching your entire workflow playout (completing forms, filling out surveys, triggering alerts, saving documents, etc.) A large majority of user issues with designs can be avoided by completing a handful of test records in your project before moving to Production (going live).</li>
					<li>4)	Use the same Date or Date/Time format throughout your project. To homogenize your date data, use the same validation option for all of your date and date/time fields (e.g., ymd, mdy, dmy, mdy HH:MM, etc.)  This will ensure that any calculations with date fields will operate immediately and with error, as well as make you date much easier to manage during analysis.</li>
					<li>5)	Use branded logos and color schemes in your surveys. If you are serving a survey to populations using REDCap, the Atrium Health Wake Forest Enterprise requires that they are branded to system standards.  While custom color schemes and logos can be used in special circumstances, the standards are already prebuilt into the Survey Design Options section of your Survey Settings screen.  Use the logo option to upload an official system logo, and choose from one of the official color schemes in the Survey Theme dropdown.  Need a logo?  You can find these by searching for branding on either systems intranet site, or by simply copying and saving the system logo at the top of your REDCap project page.</li>
					<li>6)	Complete the Project Purpose section when requesting/creating a new project. This simple data point is vital for helping everyone outside of you and your team understand what your project is used for. It helps admins, future research project users, and any other vested teammate to know what the project is for, why you created it, and how you are using it.  Generally, only a few brief sentences are needed to get this point across and you can even use a previous write-up or description from an application or document that was completed for your project. As an example, if administrators come across your very important project containing very important data and this field (and others) are left incomplete, we have no way of knowing with any sort of clarity what your project and data are for and who to reach out to with any questions. This may lead to the project being miscategorized, archived, or moved to Completed status.</li>
					<li>7)	Use user Roles in the User Rights section. A huge time-saver in setting up your project and assigning REDCap users to it, Roles allow you to setup a User Rights condition once, and then simply quickly add users to it, instead of setting up user’s rights user-by-user. Even if you only have a few users in your project and two of them share the same need of rights, Roles will save you time (and some sanity).</li>
					<li>8)	Get permission before you use that proprietary or industry-standard data collection instrument / form / tool (and check the Shared Library)! If you have found an excellent tool in the literature or one was brought to your attention by a colleague, 1) check to see if it has already been added to the REDCap Shared Library (accessible by button on the Online Designer page) of which there are 1000+ standardized DCIs (data collection instruments) APPROVED by the DCI creator and REDCap developers, 2) if not in the Shared Library, acquire formal approval to use a digital copy of the DCI by the DCI’s creators/owners. This is a legal requirement and not just a REDCap (or any application) Best Practice. Note that even if you have approval to use a paper version of the tool, in many cases that does not extend to a digital version, which is what you would be building in REDCap. Failing to do so can significantly compromise your research, data collection, and eliminate the possibility of being able to present or publish.</li>
					<li>9)	Check your PHI fields and make sure they are marked as Identifiers. When creating fields, there is an option in the Field Edit window where you can mark the field as an Identifier (falling into a category of one of the 18 HIPAA identifiers). You can even Check for Identifiers on the Project Setup page under the Online Designer section before going into Production.  This makes sure and communicates that you are aware of the PHI you will be collecting and have taken the appropriate measures to safe-guard in in normal reasrech data management operations.</li>
					<li>10)	Field types are your friend. You don’t always have to build fields from scratch, and it is recommended to always use pre-built fields where possible. Yes/No and True/False fields are a perfect example.  Simply choose the field type and REDCap auot-codes the choices (in their standardized and compliant arrangement) for you. As well, if you have already created a multiple choice field somewhere in your project and you need to create another with the same choices or slightly different choices, there is a menu item that allows you to select from previously built choice lists. See the Copy Existing Choices link at the top of the Choices text box when creating the field.</li>
					<li>11)	Use statistically accurate randomization tables when building REDCap projects that utilize randomization. If your project uses the Randomization module, REDCap will provide you with example allocation tables to test your project with.  These are NOT meant for Production and are not statistically valid to be used in a research study where randomization of populations is to occur.  You should request a teammate statistician or biostatistician to generate these for you. </li>
					<li>12)	Reference your project’s Codebook often. Your Codebook is the complete list of fields and their properties across your entire project and will actively grow with it as you build out the design.  It is always correct and always up-to-date, making it an extremely useful resource in your build. Not sure what that variable name was that you want to use in your branching logic? Codebook. Want to easily copy that complication Action Tag code from another field? Codebook. What instrument/form were all of those fields on that you intend to pipe? Codebook.</li>
				</ol>
			</div>
			<!--Javascript-->
			<script src="../script.js"></script>
		</div>
	</body>
</html>