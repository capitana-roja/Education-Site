<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?>
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page educates REDCap users on using the API”>
		<title>API</title>
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
		<h1 class="title_pdf">API</h1>
		<!--Content-->
		<div class="topic_pdf">
			<div class="embedded_pdf">
				<!--PDF content-->
				<iframe class="pdf_location" src="https://ws.engr.illinois.edu/sitemanager/getfile.asp?id=3112" width="1000px" height="1200px"></iframe>
			</div>
			<!--Last section of content-->
			<div class="remember">
				<a id="thingstoremember">
					<h2>Setting up and using the API in REDCap</h2>
				</a>
				<hr>
				<p>The REDCap API (Application Programming Interface) is a functionality built into REDCap that allows for data and data triggers to be pushed into or pulled out of REDCap to/from other software platforms. Those other platforms might be statistical packages like R, SAS, SPSS, Stata, etc. or data vizualization applications like PowerBI or Tableau. The API is not unique to REDCap. Most application platforms have an API of some sort and it is common to use the APIs of two or more applications you are trying to connect to actually build a data pathway between them. The API can also (and is commonly) be used to simply bring data in and out of REDCap securely from a .CSV or directory. Read through the sections below to grasp how the API can be used in proactice and be sure to test in your own project when you feel ready. Remember, the API is a very powerful tool, although not overly complicated, and misuse of it can result in protocol breaches, compliance failures, and leaked data. Users are highly encouraged to understand the API thoroughly before using.</p>
				<ol>
					<li>Familiarize: API Playground</li>
					<p>Anytime you want to test out an idea with the REDCap API, you should start with the API Playground.  Expecially when you are starting out, this is the area of REDCap where you will build test examples of your API "requests" or calls on REDCap to see what sort of results you may get. To access the API playground, you will need API privileges granted to you in User Rights to allow you to see the option under your Applications menu (left vertical menu throughout your project). Once you can access the API Playground page, you will be asked to create an API token ("Create API token now" button). Your token is user/project specific so you will need one for each project you attempt to use the API. NEVER share your API token. It grants incredible access to your project and its data, and if used by another user they could do things like delete all of the data in your project and it would look as though you yourself had done so. Once you have your API token, which is granted to you by REDCap Administrators, you will be able to use the API Playground. In the playground, requests are executed with code and this is core to how you will use the API. Knowing a particular programming language is incredibly helpful and will jumpstart your work with the API. Otherwise, you will need to learn how to use a common programming language in order to use the API. Examples are PHP, Python, cURL, Ruby, Java, and R. The playground helps you simplyfy this process though by giving a step-by-step workflow to build sample code and show you what it "returns" when you execute the call.
					
					Starting at the top, you will choose an API Method. Methods are simply types of requests you can make with the API. These are primarily centered on exporting, importing, and deleting various elements of your project (data, records, reports, arms, events, DAGs, user privileges, etc.) You will notice that these correlate with functions you could execute in the application iteself by visiting the correct page and utilizing the UI. This is where the API shines. It allows you to do these things in REDCap, for your project, without having to use REDCap directly. After you select a method and choose the parameters of that method you want to test (which REDCap will auto-update in the Raw Request Parameters window), there is an "Execute" button in the following Response section. This will generate a text window with the output from your request as you've designed prior. The final section shows you the code, in a particular language tab of your choice, where you will be able to copy the code and paste into your own script file, saving for actual use and/or to modify further later and eventually use. This code needs to be copied, saved in a file respetive to the langauge (e.g., PHP, a .php file) and then run in order to execute the code.</p>
					<li>Leverage your Scripts</li>
					<p>Once you have some scripts you have tested and would be ready to use you have to decide on how you want to use them: manually and ad-hoc, or automatically on a schedule. If manual, you will simply store the script on a network location and run it with your specific langauge protocol. If automated use is desired, you will have to set schedules using any variety of options, though a common choice built into Windows is the Windows Task Scheduler. There you can set new tasks, telling the operating system to run your script at specific intervals to help facilitate things like auto-updating your data in your project, or always sending a report output to a specific location, etc. This is the most complicated step as it requires you to have a when functioning script, a well setup scheduled task, and a knowledge of how it should all work so you can monitor and confirm a successful executed request.
					
					Some applications have APIs of their own and when given the correct URL to REDCap's API, they can execute requests to REDCap from that application. You are welcome to use either or both. It is important to remember that as you use the API, it is not usually fast and rapidly setup process for most users, nor are requests universal or easily copied. Each request will be unique and you will almost always have to jump into the code REDCap auto-generates for you and customize it for your needs (when will the file be saved, what sort of file do you want the data stored in, where will other files be read from, what transformations will the data need to undergo, etc.) Give yourself plenty of time to test requests using the API Playground and get comfortable using the language you intend to program your requests in.
					</p>
					<li>Key Items</li>
					<p>You can always find a complete list of all current API Methods here: https://rces.atriumhealth.org/redcap/api/help/ or https://redcap.wakehealth.edu/redcap/api/help/ (You will need to be logged into the respective instance of REDCap to view these pages)</p>
					<p>Postman (https://www.postman.com/) - an application to help you trial and test API calls (download and install on your machine).</p>
				</ol>
			</div>
			<!--Javascript-->
			<script src="../script.js"></script>
		</div>
	</body>
	<footer></footer>
</html>