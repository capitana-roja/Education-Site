<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?>	
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page educates REDCap users on using Action Tags”>
		<title>Action Tags</title>		
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
							<a href="#purpose">I. Purpose</a>
						<li>
							<a href="#procedure">II. Procedure</a>
						<li>
							<a href="#examples">III. Examples</a>
						<li>
							<a href="#thingstoremember">IV. Things to Remember</a>
						<li>
							<a href="../Alice_in_Wonderland.pdf" target="_blank">
								<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEMAAABDCAYAAADHyrhzAAAAAXNSR0IArs4c6QAAAu1JREFUeF7tmk1y2kAQhV+PqEp28Q0icBWw5AaJ1yk7cAI7N8AnMDlBuEHICRzgAOAThCX5IREnCN7ZVWg6NWApCgEGWyAJqrUU04P0zXs9P2qCXCEBEhZ/CQiMiBo2hnHtll0HePlUJfnAuOYNvafGJxFnhdE9LlaZ6QMAN+YDTRytT9543wcx+9lZ+FoYMzUo/gLgaEtPkGkga2F0jssXYP64JRBBN5kFshZGu1BuEPgqJoxbAC8W+sgkkJ3DYNB7xdplovOsA0kExtufw0Y3X2xlHUhiMIwqsg4kURhZB5I4jCwDSQVGVoGkBiOLQFKFsQqImY7NDBRzffPo8NRhLANysDAePTwABEaEmsAQGMtNJMoQZYgyrBOM2ERschg2uSRFs1NuZnNqzhdgvAKjTQ41g1dkzRUQqrPf5lcYF2nTW0SyVzYhRSfTKbyc0udTrT6Z7yGdQsljUMvsKcxBMgOs/bt2zfMmwaGOiTv9Mex33HIAB1Dc33sYM1Vo7oFwczb6+tocHpt7cxil/oMaJr6+z5v7jnr2O4RRKPG6LLp3ylBTf+I7qglQ62w0bHXypR4T3SzAABHXTkffPncKpQEpqhtlBOBWHBTv194kGOFgdLuF4hWDGsGIRpSBiBp+kaJ3UZuw4goBYY4J88g+beHNCz7YxHxgCj87LoEx9vV9BXh+5Cg2MOY549BsEuaMJeuDWQJluFrfNU0C7RRK1wCqBwmDgbph8L/EuQWtWqHcHbhgrhNQmcED6qRpsGwGiSbUvUqg1vV0zAYCQ5bjh7Ecj2mE9eGZtMmO6jOsIIOFmrXhlhtsUrljNmSL9RVbfox/urv1NVXSqP/atKbLTJdJABkTcd0s33dJe1XfVhhBoKnvyuViF7mtfEez10m7+G1jGGmMVNL/KTAixAWGwFhuQFGGKEOUYZ2cxCZiE7GJ2MRKQGwiNrGKRGYTsYnYRGxiJSA2EZtYRSKzidhEbCI2sRIQm4hNrCL5A542LWJpkMAhAAAAAElFTkSuQmCC" style="float:left;" />
							</a>
						<li>
							<a href="../alice.jfif" target="_blank">
								<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEMAAABDCAYAAADHyrhzAAAAAXNSR0IArs4c6QAAAhVJREFUeF7tmUFSwjAUht8Liy7lCBUV2MkNxLUDM54AvIk3AU9QhHEtnECXiiIeAffAc8IAFmhJp7TYmfxdJ2ny9X15ySsTnjUBBos/AoDhiwbAAIzgzQGRgchAZBgTJzQxaeK5bl4pp6FI8kachzRQalD7fOsfMkSSfXci48m9qMyUeiaidEGsVyHt+tfwLslFxR1rB8ZjofTCRJW4A8bpxyy3tdGwE6dvkn02YHhu2c0pGSf5gihjschDbTxsRmmbZpsNGL3zclXmohU57sM0qI/eq0Ev1XNS09nk5vvjNe1JZRpG96zcJJEWK74+xkabWRjdQrFFxAt1rIWh03qOHY+Y1tpYCUOn9alSre1sZh0MZr6XuXhB5xu7YBBN9h3ybIOxN2sChv8CZVVqNZymEBmIjJAKlGWa/BDRSZgtdmnCNFieM/Q1fgeKdTD0rXVZWGoT0aU/SqyEoQEs7iY5p0NCVysg1sJYAeidFtvC3LD61urXA/WMrZTyb5Uu1EC3vkS3UNK1xo3dPPXaYxar43rRy/Smf+yEHoKShJOVyvhiow5a2CK9KafJIhVR7Ca5+NVYItxXivrHKPRGnT/+tfovhFGp2dAOkYHICCkV2BD+UdcITaAJNDHaAk2gCTSBJkYC0ASaGIME2QSaQBNoYiQATaCJMUiQTaAJNIEmRgLQBJoYgwTZBJpAE2hiJABNghH9AniMHlPklGDgAAAAAElFTkSuQmCC" style="display: inline-block;" />
							</a>
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
		<h1 class="title_no_pdf">Action Tags</h1>
		<!--Content-->
		<div class="body_text">
			
			</div>
		<!--Title-->
		<!--Content-->
		<div class="topic_pdf">
			<div class="embedded_pdf">
				<!--PDF content-->
				<iframe class="pdf_location" src="https://portal.redcap.yale.edu/sites/default/files/files/FAQs/ActionTags_v1_0.pdf" width="1000px" height="1200px"></iframe>
			</div>
			<div>
				<br>
				<button class="accordion">@APPUSERNAME-APP</button>
				<div class="panel">
					<p>In the REDCap Mobile App, it sets a field's value to the app username of the current mobile app user - i.e., their username in the mobile app, which is not necessarily the same as their REDCap server username that can be captured using @USERNAME. NOTE: For use only in the REDCap Mobile App.</p>
				</div>
				<button class="accordion">@BARCODE-APP</button>
				<div class="panel">
					<p>Allows the REDCap Mobile App to capture the value of a barcode or QR code by scanning it with the device's camera. NOTE: For use only in the REDCap Mobile App.</p>
				</div>
				<button class="accordion">@CALCDATE</button>
				<div class="panel">
					<p>Performs a date calculation by adding or subtracting a specified amount of time from a specified date or datetime field and then provides the result as a date or datetime value - e.g., @CALCDATE([visit_date], 7, 'd'). The first parameter inside the @CALCDATE() function should be a text field with date, datetime, or datetime_seconds validation, in which you may specify (if needed) the event and repeating instance - e.g., @CALCDATE([baseline_event][visit_date], 7, 'd'). The second parameter represents the offset number amount that should be added or subtracted. It can be a decimal number or integer. Tip: To subtract (i.e., go backwards in time), use a negative number. The third parameter represents the units of the offset amount, which will be represented by the following options: 'y' (years, 1 year = 365.2425 days), 'M' (months, 1 month = 30.44 days), 'd' (days), 'h' (hours), 'm' (minutes), 's' (seconds). The unit option must be wrapped in quotes or apostrophes. NOTE: Both the source field and the result field must be a text field with date, datetime, or datetime_seconds validation. It is important to realize that a field with @CALCDATE will not be editable on the survey page or data entry form, and the field will function almost exactly like a normal calculated field, in which its value may get updated via a data import, when running Data Quality rule H, or in real-time during normal data entry on a form or survey. NOTE: It is advised that you do not use @CALCTEXT or @CALCDATE inside the @IF action tag because the @CALC action tags operate in many contexts that @IF does not, thus resulting in unexpected results.</p>					
				</div>
				<button class="accordion">@CALCTEXT</button>
				<div class="panel">
					<p>	Evaluates logic that is provided inside a @CALCTEXT() function for Text Box fields *only* and outputs the result as text, typically performed with an if(x,y,z) function - e.g., @CALCTEXT(if([gender]='1', 'male', 'female')). NOTE: It is important to realize that a field with @CALCTEXT will not be editable on the survey page or data entry form, and the field will function almost exactly like a normal calculated field, in which its value may get updated via a data import, when running Data Quality rule H, or in real-time during normal data entry on a form or survey. If desired, it is possible to return the value as a number - e.g., @CALCTEXT(if([age] >= 18, 'adult', 5*[other_field])). Also, while it is possible to use static text (in quotes), field variables, or Smart Variables as the return values of the IF function - e.g., @CALCTEXT(if([age] >= 18, [dob], [event-label]) - it is NOT possible to pipe field variables or Smart Variables inside quotes for the return values. NOTE: It is advised that you do not use @CALCTEXT or @CALCDATE inside the @IF action tag because the @CALC action tags operate in many contexts that @IF does not, thus resulting in unexpected results.</p>
				</div>
				<button class="accordion">@CHARLIMIT</button>
				<div class="panel">
					<p>Sets the maximum number of characters that can be entered into a Text field or Notes field, and also displays the number of characters remaining. The format must follow the pattern @CHARLIMIT=??, in which ?? is the desired max character count (alternatively, the number value can be inside single or double quotes). NOTE: This action tag cannot be used at the same time as @WORDLIMIT for the same field. NOTE: This action tag does *not* get applied during any data imports (via API or Data Import Tool) but only operates when viewing survey pages and data entry forms.</p>					
				</div>
				<button class="accordion">@DEFAULT</button>
				<div class="panel">
					<p>	Sets a field's initial value. This allows a field to have a specified default value when viewing the field on a survey or data entry form that has not yet had any data saved for it (i.e., when the form status icon is gray or when a survey page has not had any data entered yet). The format must follow the pattern @DEFAULT="????", in which the desired default value should be inside single or double quotes. For checkbox fields, simply separate multiple checkbox values with commas - e.g., @DEFAULT='1,3,6'. For text fields, you may even perform Piping inside the default value to pipe data from another field in the project - e.g., @DEFAULT='Name: [first_name] [last_name], DOB: [dob]'. NOTE: The default value does *not* get applied during any data imports (via API or Data Import Tool) but only operates when viewing survey pages and data entry forms. NOTE: If being used on a date or datetime field, the date value inside the quotes must be in Y-M-D format - e.g., @DEFAULT='2007-12-25' - regardless of the field's set date format. TIP: To pipe the value of one multiple choice field into another multiple choice field, make sure you append ':value' to the variable being piped - e.g., @DEFAULT='[my_dropdown:value]'.</p>
				</div>
				<button class="accordion">@DOWNLOAD-COUNT</button>
				<div class="panel">
					<p>The @DOWNLOAD-COUNT action tag provides a way to automatically count the number of downloads for a File Upload field or a Descriptive field attachment. It can be used on a Text field or Notes field so that its value will be incremented by '1' whenever someone downloads the file for either a File Upload field or a Descriptive field attachment. The variable name of the File Upload field or Descriptive field whose downloads are to be counted should be provided inside the @DOWNLOAD-COUNT() function. For example, the Text field 'my_download_count' might have its action tag defined as @DOWNLOAD-COUNT(my_upload_field), in which 'my_upload_field' is the variable of a File Upload field. Whenever the file is downloaded on a data entry form, survey page, or report, the value of the field with this action tag will be incremented by '1'. If that field has no value or has a non-integer value, its value will be set to '1'. NOTE: The download count field must be in the same context as the File Upload field or a Descriptive field. This means that in a longitudinal project the two fields must be on the same event, and in a repeating instrument context, they must be on the same repeating instrument.</p>					
				</div>
				<button class="accordion">@HIDDEN</button>
				<div class="panel">
					<p>Hides the field on the survey page, the data entry form, and in the REDCap mobile app. Field will stay hidden even if branching logic attempts to make it visible.</p>
				</div>
				<button class="accordion">@HIDDEN-APP</button>
				<div class="panel">
					<p>Hides the field only on the form ONLY on the REDCap Mobile App. Field will stay hidden even if branching logic attempts to make it visible.</p>					
				</div>
				<button class="accordion">@HIDDEN-FORM</button>
				<div class="panel">
					<p>Hides the field only on the data entry form (i.e., not on the survey page). Field will stay hidden even if branching logic attempts to make it visible.</p>
				</div>
				<button class="accordion">@HIDDEN-PDF</button>
				<div class="panel">
					<p>Hides the field only in the downloaded PDF of one or more instruments (including blank PDFs, PDFs with data, and compact PDFs with data). Note: Other @HIDDEN action tags will not hide fields inside PDF exports, so @HIDDEN-PDF must be used specifically to hide fields in PDFs.</p>					
				</div>
				<button class="accordion">@HIDDEN-SURVEY</button>
				<div class="panel">
					<p>Hides the field only on the survey page (i.e., not on the data entry form). Field will stay hidden even if branching logic attempts to make it visible.</p>
				</div>
				<button class="accordion">@HIDEBUTTON</button>
				<div class="panel">
					<p>Hides the 'Now' or 'Today' button that is typically displayed to the right of date, time, and date/time fields.</p>					
				</div>
				<button class="accordion">@HIDECHOICE</button>
				<div class="panel">
					<p>Hides one or more choices of a multiple choice field. This action tag is useful if you wish to retire a particular choice after utilizing it for a while in data collection, thus allowing you to hide the choice from that point afterward without orphaning any of the choice's data, which would happen if you simply deleted the choice. The format must follow the pattern @HIDECHOICE='??', in which the coded values should be inside single or double quotes for the choice(s) you wish to hide. If more than one choice needs to be hidden, then provide all the coded values separated by commas. For example, to hide the choice 'Monday (1)', you would have @HIDECHOICE='1', but if you wanted to additionally hide 'Tuesday (2)', you would have @HIDECHOICE='1,2'. NOTE: If the hidden choice has already been selected for a given record, then the choice will not be hidden on the survey or form for that record/event. NOTE: Hidden choices will still appear in reports and data exports. NOTE: This action tag can only be utilized for the following field types: Checkbox, Radio, Drop-down, Yes-No, and True-False. NOTE: This action tag works only in limited fashion with a matrix of fields, in which it will simply hide the checkbox/radio for a field in the matrix but still display the column for that choice in the matrix.</p>
				</div>
				<button class="accordion">@IF</button>
				<div class="panel">
					<p>	Allows various action tags to be set based on conditional logic provided inside an @IF() function - e.g., @IF(CONDITION, ACTION TAGS if condition is TRUE, ACTION TAGS if condition is FALSE). Simply provide a condition using normal logic syntax (similar to branching logic), and it will implement one set of action tags or another based on whether that condition is true or false. For example, you can have @IF([yes_no] = '1', @HIDDEN, @HIDECHOICE='3' @READ-ONLY), in which it will implement @HIDDEN if the 'yes_no' field's value is '1', otherwise, it will implement the two action tags @HIDECHOICE='3' and @READ-ONLY. If you wish not to output any action tags for a certain condition, set it with a pair of apostrophes/quotes as a placeholder - e.g., @IF([my_radio]='1', @READONLY, ''). You may have multiple instances of @IF for a single field. You may also have multiple nested instances of @IF() inside each other. Both field variables and Smart Variables may be used inside the @IF condition. The @IF action tag is also evaluated for a given field when downloading the PDF of an instrument/survey, in case there are any PDF-specific action tags used inside of @IF(). Note: The conditional logic will be evaluated only when the survey page or data entry form initially loads; thus the action tag conditions will not be evaluated in real time as data is entered on the page.</p>					
				</div>
				<button class="accordion">@INLINE</button>
				<div class="panel">
					<p>Allows a PDF file or image file (JPG, JPEG, GIF, PNG, TIF, BMP) that is uploaded to a File Upload field to be displayed in an inline manner on the survey page or data entry form so that the PDF/image can be viewed by the user or survey participant without having to download it. The PDF/image will be displayed inline on the page immediately above the download link for the field and will be displayed with 100% width by default (i.e., 100% width of the area in which it is contained). Images will be displayed with their native width:height ratio, although PDFs will be displayed with a 300 pixel height by default. If you wish to manually set the width and/or height of the image/PDF, you may put the width/height values inside parentheses after the action tag in the following manner: @INLINE(width) or @INLINE(width,height). The width/height can be a percentage value (e.g., 50%) or a number representing size in pixels (e.g., 400). Thus @INLINE(50%) will display an image at 50% size for the area in which it is contained on the page, and @INLINE(400,100) would display the image always at 400px tall and 100px wide. To make an inline PDF appear taller on the page, you might use @INLINE(100%,600) since 300px is the default height for inline PDFs. Note: The @INLINE action tag also works if the File Upload field is embedded inside another field on the page.</p>
				</div>
				<button class="accordion">@LANGUAGE-CURRENT-FORM (@LANGUAGE-CURRENT-SURVEY)</button>
				<div class="panel">
					<p>Allows you to capture the currently used language in projects where multilingual data is enabled on data entry forms. The @LANGUAGE-CURRENT-FORM action tag can be used on fields of type 'Text Box' (no validation), and 'Drop-down List', or 'Radio Buttons' (these need to have choices whose codes correspond to the IDs of the defined languages - e.g., 'en'). This action tag is only active on data entry forms and will always, when possible, set the field's value to the currently active language.</p>					
				</div>
				<button class="accordion">@LANGUAGE-FORCE (@LANGUAGE-FORCE-FORM)(@LANGUAGE-FORCE-SURVEY)</button>
				<div class="panel">
					<p>When used on a field, the data entry form or survey on which the field is located will be rendered in the specified language (which must have been set up using the Multi-Language Management feature). The format must follow the pattern @LANGUAGE-FORCE="???", in which the ID of the desired language should be inside single or double quotes - e.g., @LANGUAGE-FORCE="de". Piping is supported - e.g., @LANGUAGE-FORCE="[field_name]". When the language is forced successfully (i.e., it exists and is active), the language selector is hidden. Using this together with @LANGUAGE-CURRENT-FORM/SURVEY on the source field for @LANGUAGE-FORCE may be used to 'lock in' a user to their selected language.</p>					
				</div>
				<button class="accordion">@LANGUAGE-SET</button>
				<div class="panel">
					<p>When used on a Drop-down or Radio Button field only, this action tag will allow the field's value to control the currently shown language (in the same way as switching the language via the buttons at the top of the page). Tip: When used in a survey, this field could be prepopulated (and thus auto-selected) by embedding a participant's language ID in the survey URL itself (for details, see the FAQ's "How to pre-fill survey questions" section).</p>
				</div>
				<button class="accordion">@LATITUDE</button>
				<div class="panel">
					<p>Allows a Text Box field to capture the latitude of the user, in which the user will be prompted on the webpage to allow or deny this. Once the value is captured, it will not be changed when visiting the page at a later time. The field will be disabled and will not allow users to edit the value, but it will allow them to remove the value altogether. NOTE: While the GPS value will be very accurate when captured on a mobile device, it will not be nearly as accurate when using a browser on laptops and desktop computers.</p>					
				</div>
				<button class="accordion">@LONGITUDE</button>
				<div class="panel">
					<p>Allows a Text Box field to capture the longitude of the user, in which the user will be prompted on the webpage to allow or deny this. Once the value is captured, it will not be changed when visiting the page at a later time. The field will be disabled and will not allow users to edit the value, but it will allow them to remove the value altogether. NOTE: While the GPS value will be very accurate when captured on a mobile device, it will not be nearly as accurate when using a browser on laptops and desktop computers.</p>					
				</div>
				<button class="accordion">@MAXCHECKED</button>
				<div class="panel">
					<p>Allows a checkbox field to have a maximum number of checkboxes that can be checked. If other checkbox options are clicked after the maximum has been reached, those choices will not be able to be checked. The format must be @MAXCHECKED=#, in which # is a positive integer. For example, @MAXCHECKED=3 will allow a maximum of 3 checkbox choices to be checked. NOTE: This action tag can only be utilized by Checkbox fields, and it does not get enforced during data imports.</p>
				</div>
				<button class="accordion">@MAXCHOICE</button>
				<div class="panel">
					<p>Causes one or more specified choices to be disabled (i.e., displayed but not usable) for a checkbox, radio button, or drop-down field after a specified amount of records have been saved with that choice. For example, @MAXCHOICE(0=50,1=75,2=50) would imply that once 50 records have selected the '0' coded choice, that choice will become disabled for any record viewed afterward that does not have that choice saved, such as when the form/survey is opened for a new record, and thus 75 records for choice '1', 50 for choice '2', etc. The format must be the action tag name followed by the choice designations inside parentheses, in which each will follow the format of ChoiceCode=MaxCount with each choice separated by commas. Note: For longitudinal projects, when counting the number of choices saved for records, it will treat all events as separate, meaning that in the example above, choice '0' can have a max number of 50 selections in EACH event in the project.</p>					
				</div>
				<button class="accordion">@MAXCHOICE-SURVEY-COMPLETE</button>
				<div class="panel">
					<p>Causes one or more specified choices to be disabled (i.e., displayed but not usable) for a checkbox, radio button, or drop-down field after a specified amount of records have been saved with that choice for completed survey responses only. This means that partial survey responses or data entered only via a data entry form (as opposed to on a survey page) would not be counted. For example, @MAXCHOICE-SURVEY-COMPLETE(0=50,1=75,2=50) would imply that once 50 records have selected the '0' coded choice on completed survey responses, that choice will become disabled for any record viewed afterward that does not have that choice saved, such as when the form/survey is opened for a new record, and thus 75 records for choice '1', 50 for choice '2', etc. The format must be the action tag name followed by the choice designations inside parentheses, in which each will follow the format of ChoiceCode=MaxCount with each choice separated by commas. Note: For longitudinal projects, when counting the number of choices saved for records, it will treat all events as separate, meaning that in the example above, choice '0' can have a max number of 50 selections in EACH event in the project.</p>					
				</div>
				<button class="accordion">@NOMISSING</button>
				<div class="panel">
					<p>Disable 'missing data codes' for a field - If custom codes for specifying missing data have been set up in this project (in the Additional Customizations popup on the Project Setup page), this action tag will disable the missing data code functionality for a given field, thus hiding the 'M' icon next to the field.</p>
				</div>
				<button class="accordion">@NONEOFTHEABOVE</button>
				<div class="panel">
					<p>Allows for the designation of a checkbox choice to be a 'none of the above' option, thus ensuring that no other choices are checked if that one choice is selected. This means that if that particular option is selected, it will alert the user that all other checked-off choices will be unchecked. And if the 'none of the above' option is already checked when the user checks off another choice, it will automatically uncheck the 'none of the above' option. This action tag makes it possible to have a 'none of the above' option without the risk of users mistakenly having other choices selected at the same time. The format must follow the pattern @NONEOFTHEABOVE=??, in which ?? is the coded value of the 'none of the above' checkbox choice - e.g., @NONEOFTHEABOVE=98. Alternatively, it is possible to set multiple options as a 'none of the above' option at the same time, in which the coded values must be comma delimited inside single or double quotes - e.g., @NONEOFTHEABOVE='45,99'. This is useful for certain situations, such as if you have a 'none of the above' option and also have a 'refuse to answer' option, thus allowing either of those to be the only option that can be selected at a time. NOTE: This action tag can only be utilized by Checkbox fields.</p>					
				</div>
				<button class="accordion">@NOW</button>
				<div class="panel">
					<p>(e.g., 2017-08-01 12:34:56) Loads the current user's date+time into a blank Text field - similar to the @TODAY tag but additionally includes the time portion. If the field has validation, the value will adjust to match the date format. NOTE: The time used will be the user's local time, which is derived from their device/computer and might be different from the server if in another timezone. Also, do not use this tag on fields with branching logic because it will always prompt the user to erase the value, so look at using @HIDDEN instead if you wish to hide the field.</p>					
				</div>
				<button class="accordion">@NOW-SERVER</button>
				<div class="panel">
					<p>(e.g., 2017-08-01 12:34:56) Loads the REDCap server's date+time into a blank Text field - similar to the @TODAY tag but additionally includes the time portion. If the field has validation, the value will adjust to match the date format. NOTE: The time used will be the REDCap server's local time, which might be different from the user's local time if in another timezone. Also, do not use this tag on fields with branching logic because it will always prompt the user to erase the value, so look at using @HIDDEN instead if you wish to hide the field.</p>
				</div>
				<button class="accordion">@NOW-UTC</button>
				<div class="panel">
					<p>(e.g., 2017-08-01 12:34:56) Loads the current UTC/GMT date+time into a blank Text field - similar to the @TODAY tag but additionally includes the time portion. If the field has validation, the value will adjust to match the date format. NOTE: The time used will be the current UTC/GMT time, which might be different from the user's local time if in another timezone. Also, do not use this tag on fields with branching logic because it will always prompt the user to erase the value, so look at using @HIDDEN instead if you wish to hide the field.</p>					
				</div>
				<button class="accordion">@PASSWORDMASK</button>
				<div class="panel">
					<p>Masks the value of a Text field so that the true value is not visible on the webpage after it has been entered (like password fields on login pages)</p>					
				</div>
				<button class="accordion">@PLACEHOLDER</button>
				<div class="panel">
					<p>Is used to specify a short hint that describes the expected value of a Text field or Notes field (e.g. a sample value or a short description of the expected format). The placeholder is displayed inside the field before a value is entered. The format must follow the pattern @PLACEHOLDER='????', in which the text to be displayed should be inside single or double quotes.</p>
				</div>
				<button class="accordion">@RANDOMORDER</button>
				<div class="panel">
					<p>	Randomizes the order of multiple choice field options as displayed on survey pages and data entry forms, in which their order will always be different each time the page is loaded by any given user. NOTE: This action tag can only be utilized for the following field types: Checkbox, Radio, Drop-down, Yes-No, and True-False. This tag also works for enhanced radios and checkboxes on surveys. However, this tag does *not* work for a matrix of fields.</p>					
				</div>
				<button class="accordion">@READONLY (@READONLY-APP)(@READONLY-FORM)(@READONLY-SURVEY)</button>
				<div class="panel">
					<p>Makes the field read-only (i.e., disabled) on the survey page, the data entry form, and in the REDCap mobile app so that its value cannot be changed.</p>					
				</div>
				<button class="accordion">@RICHTEXT</button>
				<div class="panel">
					<p>Adds the rich text editor toolbar to a Notes field to allow users/participants to control the appearance (via styling and formatting) of the text they are entering into the field.</p>
				</div>
				<button class="accordion">@SETVALUE</button>
				<div class="panel">
					<p>	Sets a field's value to static text or dynamic/piped text whenever a data entry form or survey page is loaded, in which it will always overwrite an existing value of the field. The format must follow the pattern @SETVALUE="????", in which the desired value should be inside single or double quotes. For text fields, you may pipe and concatenate values from other fields in the project - e.g., @SETVALUE='Name: [first_name] [last_name], DOB: [dob]'. For checkbox fields, simply separate multiple checkbox values with commas - e.g., @SETVALUE='1,3,[other_field:value]'. NOTE: The piped value does *not* get applied during any data imports (via API or Data Import Tool) but only operates when viewing survey pages and data entry forms. NOTE: A field with @SETVALUE will have its value updated ONLY when the page loads, which means that its value will not be updated in real-time if you modify other fields on the same page that are piped into the @SETVALUE tag. NOTE: If being used on a date or datetime field, the date value inside the quotes must be in Y-M-D format - e.g., @SETVALUE='2007-12-25' - regardless of the field's set date format. NOTE: The only difference between @SETVALUE and @DEFAULT is that @DEFAULT is only applied when an instrument has no data yet, whereas @SETVALUE will always be applied on an instrument, meaning that @SETVALUE will ALWAYS overwrite the value if a field value already exists. TIP: To pipe the value of one multiple choice field into another multiple choice field, make sure you append ':value' to the variable being piped - e.g., @SETVALUE='[my_dropdown:value]'. (In earlier versions of REDCap, the @SETVALUE action tag went by the name @PREFILL, which still works equivalently to @SETVALUE for backward compatibility purposes.)</p>					
				</div>
				<button class="accordion">@SYNC-APP</button>
				<div class="panel">
					<p>Can be used only for File Upload and Signature fields. If the project is initialized in the REDCap Mobile App, this will cause any image files uploaded to a record to be sent to the app so that they are viewable in the app when editing the record. NOTE: For use only in the REDCap Mobile App.</p>					
				</div>
				<button class="accordion">@TODAY (@TODAY-SERVER)(@TODAY-UTC)</button>
				<div class="panel">
					<p>(e.g., 2017-08-01) Loads the current user's date into a blank Text field - similar to the @NOW tag but without the time portion. If the field has validation, the value will adjust to match the date format. Also, do not use this tag on fields with branching logic because it will always prompt the user to erase the value, so look at using @HIDDEN instead if you wish to hide the field.</p>
				</div>
				<button class="accordion">@USERNAME</button>
				<div class="panel">
					<p>Sets a field's value to the username of the current REDCap user. If this is used on a survey, the value will be '[survey respondent]'. Once the value is captured, it will not be changed when visiting the page at a later time</p>					
				</div>
				<button class="accordion">@WORDLIMIT</button>
				<div class="panel">
					<p>Sets the maximum number of words that can be entered into a Text field or Notes field, and also displays the number of words remaining. The format must follow the pattern @WORDLIMIT=??, in which ?? is the desired max word count (alternatively, the number value can be inside single or double quotes). NOTE: This action tag cannot be used at the same time as @CHARLIMIT for the same field. NOTE: This action tag does *not* get applied during any data imports (via API or Data Import Tool) but only operates when viewing survey pages and data entry forms.</p>					
				</div>
			</div>
			<!--Last section of content-->
			<div class="remember">
				<a id="thingstoremember">
					<h2>Things to Remember</h2>
				</a>
				<hr>
				<ol>
					<li>action tags here
					<li>
					<li>
					<li>
				</ol>
			</div>
			<!--Javascript-->
			<script src="../script.js"></script>
		</div>
	</body>
	<footer></footer>
</html>