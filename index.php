<?php

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="jquery-3.3.1.min.js"></script>
		<script src="jquery.ripples.js"></script>
		<script src="functions.js"></script>
		<link href="googleFonts.css" rel="stylesheet">
		<link href="mainStyle.css" media="screen" rel="stylesheet">
		<link href="print.css" media="print" rel="stylesheet">
		<!--<link href="print.css" rel="stylesheet">-->
		<link rel="icon" href="Turtle Open.png" type="image/png">
		<title>Interactive CV || aidan greene</title>
	</head>
	<body>
		<div id="body" class="jquery-ripples">
			<div id="semi">
				<div id="howToBG">
					<div id="howTo">
						<h2>Interactive CV</h2>
						<span class="avatar"></span>
						<button id="startGame" onclick="startGame();">Click to Begin</button>
					</div>
				</div>
				<div id="mobileAvatar" class="avatar"></div>
				<div id="printAvatar" class="avatar"></div>
				<div id="mobileTitle">
					<h1>Interactive CV</h1>
					<p>Please visit this site on a computer or rotate your screen for the full experience</p>
				</div>
				<div id="printTitle">
					<h1>Interactive CV<br>(print version)</h1>
					<p>Please visit <a target="_blank" href="https://web.traffickids.co.za/github/interactiveCV">https://web.traffickids.co.za/github/interactiveCV</a> on a computer for the full experience</p>
				</div>
				<div onclick="window.print();">
					<div class="printer"></div>
					<div id="printCaption" style="text-align:center">click to print</div>
				</div>
				<div class="detail" id="basicInfo">
					<span class="returnToSea" onmouseover="hideInfo('basicInfo');">Back to Sea</span>
					<div class="detailContent">
						<h1>My Basic Information</h1>
						<h2>Me... In a nutshell</h2>
						<p>
							I am a self-taught, software developer who is passionate about the development of just about anything that requires scripting.
							I am passionate about maximising profitability by improving productivity through software.
							I enjoy working on both front-end, and backend projects and find joy in achieving goals and solving problems.<br>
							
							I am skilled in the following:
						</p>
						<ul style="list-style-type:none;">
							<li>PHP: <span style="color:yellow;">&starf;&starf;&starf;&starf;&starf;</span></li>
							<li>JavaScript: <span style="color:yellow;">&starf;&starf;&starf;&starf;</span></li>
							<li>JQuery (& ajax): <span style="color:yellow;">&starf;&starf;&starf;&starf;</span></li>
							<li>Delphi / Turbo Pascal: <span style="color:yellow;">&starf;&starf;&starf;&starf;</span></li>
							<li>HTML: <span style="color:yellow;">&starf;&starf;&starf;&starf;&starf;</span></span></li>
							<li>CSS: <span style="color:yellow;">&starf;&starf;&starf;&starf;</span></li>
							<li>ino: <span style="color:yellow;">&starf;&starf;&starf;</span></li>
							<li>Python: <span style="color:yellow;">&starf;&starf;</span></li>
						</ul>
						<p>
							Find out more in my skills Section
						</p>
					</div>
					<div class="detailScroller"></div>
				</div>
				<div class="detail" id="contactInfo">
					<span class="returnToSea" onmouseover="hideInfo('contactInfo');">Back to Sea</span>
					<div class="detailContent">
					</div>
					<div class="detailScroller"></div>
				</div>
				<div class="detail" id="skills">
					<span class="returnToSea" onmouseover="hideInfo('skills');">Back to Sea</span>
					<div class="detailContent">
						<h1>My Skills</h1>
						<h2>How I rank the things I can do</h2>
						<p class="noPrint">
							Hover or click each item to see why I scored it the way I did.
						</p>
						<ul class="colList">
							<li onclick="snackbar($(this)[0].title,10000);" title="I am persistent, I won't give up until I resolve an issue">Problem Solving:<span style="color:yellow;">&starf;</span><span style="color:yellow;">&starf;</span><span style="color:yellow;">&starf;</span><span style="color:yellow;">&starf;</span><span style="color:yellow;">&starf;</span></li>
							<li onclick="snackbar($(this)[0].title,10000);" title="I have used computers since I was four years old, I can do any basic task that is asked of me.">Basic Computer Operation: <span style="color:yellow;">&starf;</span><span style="color:yellow;">&starf;</span><span style="color:yellow;">&starf;</span><span style="color:yellow;">&starf;</span><span style="color:yellow;">&starf;</span></li>
							<li onclick="snackbar($(this)[0].title,10000);" title="I will avoid seeking employment elsewhere at all costs, except where my financial stability is concerned">Loyalty: <span style="color:yellow;">&starf;</span><span style="color:yellow;">&starf;</span><span style="color:yellow;">&starf;</span><span style="color:yellow;">&starf;</span></li>
							<li onclick="snackbar($(this)[0].title,10000);" title="Give me a task, I'll do it your way">Following Instruction: <span style="color:yellow;">&starf;</span><span style="color:yellow;">&starf;</span><span style="color:yellow;">&starf;</span><span style="color:yellow;">&starf;</span></li>
							<li onclick="snackbar($(this)[0].title,10000);" title="Listening to music helps me block out distraction, if I do this, I could work for hours on end.">Focus (with background music): <span style="color:yellow;">&starf;</span><span style="color:yellow;">&starf;</span><span style="color:yellow;">&starf;</span><span style="color:yellow;">&starf;</span></li>
							<li onclick="snackbar($(this)[0].title,10000);" title="Structure. Nothing irks me more than untidy code, but I never have an organised desk">OCD: <span style="color:yellow;">&starf;</span><span style="color:yellow;">&starf;</span><span style="color:yellow;">&starf;</span></li>
							<li onclick="snackbar($(this)[0].title,10000);" title="It's very challenging for me to communicate an idea verbally. Visual communication is my strength">Communication: <span style="color:yellow;">&starf;</span><span style="color:yellow;">&starf;</span><span style="color:yellow;">&starf;</span></li>
							<li onclick="snackbar($(this)[0].title,10000);" title="To a point, I'll perform well under pressure, but after a while I tend to break down. Usually, all I need is a long weekend, and I'm good to go again">Working under pressure: <span style="color:yellow;">&starf;</span><span style="color:yellow;">&starf;</span><span style="color:yellow;">&starf;</span></li>
							<li onclick="snackbar($(this)[0].title,10000);" title="I have done a fair aount if IT administration during my employment at ICG and RVI, and if I run into a challenge, I Google it.">Administrative Computer Operation: <span style="color:yellow;">&starf;</span><span style="color:yellow;">&starf;</span><span style="color:yellow;">&starf;</span></li>
							<li onclick="snackbar($(this)[0].title,10000);" title="ADHD, Need I say more?">Focus (without background music): <span style="color:yellow;">&starf;</span><span style="color:yellow;">&starf;</span></li>
							<li onclick="snackbar($(this)[0].title,10000);" title="I have a fairly short fuse, Especially if I'm doing work I don't enjoy">Self-Control: <span style="color:yellow;">&starf;</span><span style="color:yellow;">&starf;</span></li>
							<li onclick="snackbar($(this)[0].title,10000);" title="I often start a project with no heading, and as I build it, I think of additional features I'd like to use">Planning: <span style="color:yellow;">&starf;</span><span style="color:yellow;">&starf;</span></li>
							<li onclick="snackbar($(this)[0].title,10000);" title="If I have something on my mind, I cannot stop thinking about it, I'll either work late to solve the problem, or I'll spend the whole night dreaming about the solution">Adequate Sleep: <span style="color:yellow;">&starf;</span></li>
						</ul>
						<h2>Systems / Languages I've worked with, and how much I like them</h2>
						<ul class="colList">
							<li>php: <span style="color:yellow;">&starf;&starf;&starf;&starf;&starf;</span></li>
							<li>Delphi / Turbo Pascal: <span style="color:yellow;">&starf;&starf;&starf;&starf;</span></li>
							<li>HTML: <span style="color:yellow;">&starf;&starf;&starf;&starf;&starf;</span></li>
							<li>CSS: <span style="color:yellow;">&starf;&starf;&starf;&starf;&starf;</span></li>
							<li>Apache Web Server: <span style="color:yellow;">&starf;&starf;&starf;&starf;&starf;</span></li>
							<li>Apache CouchDB: <span style="color:yellow;">&starf;&starf;&starf;</span></li>
							<li>Chrome OS: <span style="color:yellow;">&starf;&starf;&starf;&starf;&starf;</span></li>
							<li>Ubuntu (or any linux OS): <span style="color:yellow;">&starf;&starf;&starf;&starf;&starf;</span></li>
							<li>JQuery: <span style="color:yellow;">&starf;&starf;&starf;&starf;&starf;</span></li>
							<li>JavaScript: <span style="color:yellow;">&starf;&starf;&starf;&starf;&starf;</span></li>
							<li>Windows OS: <span style="color:yellow;">&starf;&starf;&starf;</span></li>
							<li>MySQL: <span style="color:yellow;">&starf;&starf;&starf;&starf;&starf;</span></li>
							<li>ino: <span style="color:yellow;">&starf;&starf;&starf;&starf;</span></li>
							<li>Python: <span style="color:yellow;">&starf;&starf;&starf;</span></li>
							<li>Mac OS: <span style="color:yellow;">&starf;</span></li>
						</ul>
						<div class="iframedContent">
							<iframe style="width:100%;height:75vh" src="plum.html"></iframe>
						</div>
						<div class="iframedReplacer">
							<ul>
								<li>Task Management
									<p><strong>Your Task Management is in the top 5% of the workforce.</strong> You have an extraordinary proficiency for setting goals, monitoring progress, and taking initiative to improve your work.
										You have an extraordinary ability to work independently, establish and meet challenging deadlines, persevere even when initially unsuccessful, and not settle for “good enough."
										You have the ability for maintaining accuracy and attention to detail, reporting and recordkeeping, setting goals and creating plans to accomplish the work, as well as monitoring and controlling resources.
										You excel at learning what is important to get the job done right and avoiding costly mistakes. You are also excellent at understanding new procedures and explaining them to others.
									</p>
								</li>

							</ul>
							
						</div>
					</div>
					<div class="detailScroller"></div>
				</div>
				<div class="detail" id="hobbies">
					<span class="returnToSea" onmouseover="hideInfo('hobbies');">Back to Sea</span>
					<div class="detailContent">
						<h1>My Hobbies</h1>
						<h2>The things I do in my spare time</h2>
						<ul class="colList">
							<li>Race Marshalling for <a target="_balnk" href="http://www.kma.org.za/">Kyalami Marshals Association</a></li>
							<li>Assistant Troop Scouter at <a target="_blank" href="https://www.google.co.za/maps/place/Jan+Smuts+Scouts+Hall/@-26.1401338,28.1375546,17z/data=!3m1!4b1!4m5!3m4!1s0x1e95125e9c1016d5:0x1f1434a057227d8f!8m2!3d-26.1401386!4d28.1397433?hl=en">Jan Smuts Scout Group</a></li>
							<li>Tinkering on all sorts of miscellaneous projects</li>
							<li>Motovlogging for <a target="_blank" href="https://www.youtube.com/channel/UCTwuKaN0axk7Ah6cK7aqoPQ">CasualRiders</a></li>
						</ul>
					</div>
					<div class="detailScroller"></div>
				</div>
				<div class="detail" id="workExperience">
					<span class="returnToSea" onmouseover="hideInfo('workExperience');">Back to Sea</span>
					<div class="detailContent" syle="text-align:left">
						<h1>My Work Experience</h1>
						<h2>The jobs I've done, until I found my calling</h2>
						<ol style="text-align:left;">
							<li>
								<strong>October 2019 - Present: IQ Retail</strong><br>
								<strong>Role: Junior Software Developer</strong>
								<p>
									<strong>Responsibilities:</strong>
								</p>
								<ul>
									<li>Fix known issues within the IQ Enterprise software package</li>
									<li>Develop customised reports for clients using the Fast Reports report writer</li>
									<li>Implement new features into the IQ Enterprise software package as required by clients needs</li>
								</ul>
								<p>
									<strong>References:</strong>
								</p>
								<ul>
									<li><strong>Neels Rabe</strong> - Software Development Manager (083 730 5470)</li>
								</ul>
								<p></p>
							</li>
							<li>
								<strong>December 2013 - May 2014: Outdoor Warehouse, Modderfontein</strong><br>
								<strong>Role: Permanent Sales Assistant</strong>
								<p>
									<strong>Responsibilities:</strong>
								</p>
								<ul>
									<li>Conduct departmental stock counts on a daily basis</li>
									<li>Assist customers in store and attempt to up-sell their purchases</li>
									<li>Participate in bi-annual stock takes</li>
								</ul>
							</li>
						</ol>
					</div>
					<div class="detailScroller"></div>
				</div>
				<div class="detail" id="education">
					<span class="returnToSea" onmouseover="hideInfo('education');">Back to Sea</span>
					<div class="detailContent" syle="text-align:left">
						<h1>My Education</h1>
						<h2>They don't teach you this stuff in school</h2>
						<p style="text-align:left">
							<strong>Highest Education Level</strong><br>
							<strong>National Senior Certificate (Matric)</strong><br>
							Results:
						</p>
						<ul class="colList">
							<li>English Home Language: 61%</li>
							<li>Afrikaans First Additional Language: 65%</li>
							<li>Mathematics: 65% </li>
							<li>Life Orientation: 53%</li>
							<li>Computer Applications Technology: 67%</li>
							<li>Life Sciences: 51%</li>
							<li>Physical Sciences: 66%</li>
						</ul>
						<p style="text-align:left">
							<strong>Additional Qualifications</strong><br>
						</p>
						<div>
							<h2><a href="https://alison.com/profile/public/10266557/Matthew%20Mc%20Allister" target="_blank">Alison.com:</a></h2>
							<p>I have completed the following</p>
							<ul class="colList">
								<li>Fundamentals of Network Security</li>
								<li>Digital Communication Networks</li>
								<li>Understanding Cryptography and Its Role in Digital Communications</li>
								<li>Web Page Design Using HTML5 and CSS3</li>
								<li>Computer Networking - Local Area Networks and the OSI Model</li>
								<li>Computer Networking - Wired and Wireless Networks and Protocols</li>
								<li>Wide Area Networks and Networking Services and Security</li>
								<li>Computer Networking - Digital Network Security</li>
							</ul>
							<p>You can view my Alison profile online at <a href="https://alison.com/profile/public/10266557/Matthew%20Mc%20Allister" target="_blank">https://alison.com/profile/public/10266557/Matthew%20Mc%20Allister</a></p>
						</div>
					</div>
					<div class="detailScroller"></div>
				</div>
				<div class="detail" id="projects">
					<span class="returnToSea" onmouseover="hideInfo('projects');">Back to Sea</span>
					<div class="detailContent" syle="text-align:left">
						<h1>My Projects</h1>
						<h2>A collection of things I have done</h2>
						<p style="text-align:left">
							<strong>Projects from My Career</strong><br>
							I cannot provide screenshots or source code of these projects as this will violate company policies, however, here is a list of what I have done.<br>
							<span class="noPrint">(Hover or click each Item for more detail)</span>
							<ol style="text-align:left">
								<li>
									Secure Banking Technologies
									<ol>
										<li onclick="snackbar($(this)[0].title,15000);" title="Software run on a micro-controller to stain cash with ink during an ATM attack">2019: An Ink-Stain Security System with online Reporting (PHP, JS, PYTHON, HTML, CSS, SQL, BOOTSTRAP)</li>
										<li onclick="snackbar($(this)[0].title,15000);" title="A platform designed to keep track of expiry dates of cerrain products">2019: product expiration platform using QR codes (PHP, JS, PYTHON, HTML, CSS, SQL, BOOTSTRAP)</li>
									</ol>
								</li>
								<li>Integrated Core Group
									<ol>
										<li onclick="snackbar($(this)[0].title,15000);" title="A customised report developed for Integrated Core Group that reads data from their Job Management System (simPRO) via an API. This report reads how many calls had been logged in the past week, how many have been completed, and how many have not been actioned. It also displays the total number of jobs in the system that are incomplete, as wll as a 5 day Schedule display, to show what work has been scheduled">2015: Call Centre Dashboard (PHP, JS, HTML, CSS)</li>
										<li onclick="snackbar($(this)[0].title,15000);" title="A customised report developed for Geze South Africa that reads data from their Job Management System (simPRO) via an API. This report is emailed daily to the client and is archived on our servers">2016: Work In Progress Report (CRONTAB, PHP, JS, HTML, CSS)</li>
										<li onclick="snackbar($(this)[0].title,15000);" title="A customised report developed for Integrated Core Group that reads data from their Job Management System (simPRO) via an API. This report is designed to ensure Account Managers are completing work in progress for a specific customer. It is emailed weekly to the Account Manager and is archived on our servers">2016: Key Accounts Report (CRONTAB, PHP, JS, HTML, CSS)</li>
										<li onclick="snackbar($(this)[0].title,15000);" title="A customised report developed for Geze South Africa that reads data from their Job Management System (simPRO) via an API. This report is emailed monthly to the client and is archived on our servers. The report compares data from the technicians in order for the client to determin how productive their field staff are">2017: Technician Hours Report (CRONTAB, PHP, JS, HTML, CSS, Google Charts API)</li>
										<li onclick="snackbar($(this)[0].title,15000);" title="A customised report developed for Integrated Core Group that reads data from their Job Management System (simPRO) via an API. This report is designed to ensure that Resource Co-Ordinaters are achieving a certain invoicing target each month. It is emailed daily to the Resource Co-Ordinaters and is archived on our servers">2017: Daily Job target Report  (CRONTAB, PHP, JS, HTML, CSS, Google Charts API)</li>
										<li onclick="snackbar($(this)[0].title,15000);" title="A customised report developed for Integrated Core Group that reads data from their Job Management System (simPRO) via an API. This report is designed to provide the Operations Manager with information on what work is in progress for a specified date. This report has a form handler and is manually executed">2018: Customised Runsheet (PHP, JS, HTML, CSS)</li>
										<li onclick="snackbar($(this)[0].title,15000);" title="A customised report developed for Integrated Core Group that reads data from their Job Management System (simPRO) via an API. This report is designed to provide the Operations Manager with information on which projects have the highest expected profitibility. Building this report allowed us to find a bug within simPRO that was not calculating estimated costs correctly. This report has a form handler and is manually executed">2018: Job Profitability Report (PHP, JS, HTML, CSS)</li>
										<li onclick="snackbar($(this)[0].title,15000);" title="A customised report developed for Integrated Core Group that test for online devices via ICMP for an IP-based Security Control center">2018: Control Room Dashboard (PHP, JS, HTML, CSS, AJAX)</li>
										<li id="COREmonitor" onclick="snackbar($(this)[0].title,15000);" title="An alarm monitoring system designed as per client specifications in  order to monitor 120+ retail stores nation wide with new features added monthly as per client requirements">
											2018: COREmonitor - an Armed Response Control Room software system(PHP, JS, HTML, CSS, JQUERY, BOOSTRAP, AJAX,SQL)
										</li>
										<li onclick="snackbar($(this)[0].title,15000);" title="Setup and managed a GitLab server for the organization">2018: GitLab Server setup and hosting</li>
									</ol>
								</li>
							</ol>
						<p style="text-align:left">
							<strong>Projects Completed in my capacity</strong>
						</p>
						<ol style="text-align:left">
							<li>
								<a target="_blank" href="https://github.com/aidangreene">Github</a><br>
								Why continuously update dynamic content? ajax & github API is used to update the below repositories<br>
								<span class="noPrint">(hover or click each item for the project description)</span>
								<div id="githubRepos"></div>
								<script>
var result = "";
$.ajax({
	url:"https://api.github.com/users/aidangreene/repos",
	async: false,
	success:function(data) {
		handleRepos(data); 
	}
 });

function handleRepos(data)
{
	result = "<ol>";
	for(i=0;i<data.length;i++)
	{
		result = result + "<li onclick=\"snackbar($(this)[0].title,15000);\" title=\"" + data[i]['description'] +"\"><a href=\"" + data[i]['html_url'] + "\" target=\"_blank\">" + data[i]['name'] + "</a><br><strong>Languages:</strong>";
		$.ajax({
			async: false,
			url: data[i]['languages_url'],
			success: function(msg){
				result = result + "<ul>";
				var total = 0;
				var language;
				for(language in msg)
				{
					amount = msg[language];
					total += msg[language];
				}
				for(language in msg)
				{
					percent = ((msg[language]/total) * 100).toFixed(2);
					result = result + "<li>" + language + ": " + percent + "%</li>";
				}
				result = result + "</ul>";
			}
		});
		result = result + "</li>"
	}
	result = result + "</ol>"
	document.getElementById('githubRepos').innerHTML = result;
}
								</script>
							</li>
							<li>
								Other Projects
								<ol>
									<li>
										Web design consultation for <a target="_blank" href="http://blacklight.co.za">Blacklight</a><br>
										Projects Include:
										<ul>
											<li>Design and Development of <a target="_blank" href="http://greentrust.org.za">greentrust.org.za</a></li>
											<li>Design and Development of <a target="_blank" href="http://act.org.za">act.org.za</a></li>
											<li>Design and development of <a target="_blank" href="http://chezlmdwsacc.com">chezlmdwsacc.com</a> (membership only)</li>
											<li>Various feature hacks for <a href="http://brother.co.za" target="_blank">brother.co.za</a></li>
											<li>Design and creation of <a target="_blank" href="http://gtsec.africa">gtsec.africa</a></li>
											<li>Development of <a target="_blank" href="http://qd.co.za">qd.co.za</a></li>
										</ul>
									</li>
									<li>
										Software Development for Emergency and Medical Equipment<br>
										Projects Include:
										<ul>
											<li>An Ink-Stain Security System for <a href="http://bankingtech.co.za">Secure Banking Technologies</a></li>
											<li>A product tracking and maintenance platform for <a href="http://bankingtech.co.za">Secure Banking Technologies</a></li>
										</ul>
									</li>
								</ol>
							</li>
						</ol>
					</div>
					<div class="detailScroller"></div>
				</div>
				<div id="assets">
					<div id="snackbarContainer" style="display: none;">
						<div id="snackbar"></div>
					</div>
					<div id="playerMover">
					<div id="playerRotator">
						<div id="player" class="playerOpen"></div>
					</div>
				</div>
					<div id="sharkMover">
						<div id="sharkRotator">
							<div id="shark"  onmouseover="lunch();" class="sharkOpen"></div>
						</div>
					</div>
					<div id="lifesaverContainer">
						<div class="lifesaver" onmouseover="displayInfo('basicInfo');" id="ring_basicInfo">
							<div>Basic<br>Info</div>
						</div>
						<div class="lifesaver" onmouseover="displayInfo('skills');" id="ring_skills">
							<div>Skills</div>
						</div>
						<div class="lifesaver" onmouseover="displayInfo('hobbies');" id="ring_hobbies">
							<div>Hobbies</div>
						</div>
						<div class="lifesaver" onmouseover="displayInfo('workExperience');" id="ring_workExperience">
							<div style="font-size:0.7em;">Work<br>Experience</div>
						</div>
						<div class="lifesaver" onmouseover="displayInfo('education');" id="ring_education">
							<div>Education</div>
						</div>
						<div class="lifesaver" onmouseover="displayInfo('projects');" id="ring_projects">
							<div>Projects</div>
						</div>
						<div class="lifesaver" onmouseover="displayInfo('contactInfo');" id="ring_contactInfo">
							<div>Contact<br>Info</div>
						</div>
					</div>
					<!--BUBBLES--><div>
						<div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div>
						<div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div>
						<div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div>
						<div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div>
						<div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div>
						<div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div>
						<div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div>
						<div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div>
						<div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div>
						<div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div><div class="bubbles"></div>
					</div>
					<!--FISH--><div>
						<div class="mover"><div class="rotator"><div class="jellyfish"></div></div></div><div class="mover"><div class="rotator"><div class="jellyfish"></div></div></div><div class="mover"><div class="rotator"><div class="jellyfish"></div></div></div><div class="mover"><div class="rotator"><div class="jellyfish"></div></div></div><div class="mover"><div class="rotator"><div class="jellyfish"></div></div></div>
						<div class="mover"><div class="rotator"><div class="jellyfish"></div></div></div><div class="mover"><div class="rotator"><div class="jellyfish"></div></div></div><div class="mover"><div class="rotator"><div class="jellyfish"></div></div></div><div class="mover"><div class="rotator"><div class="jellyfish"></div></div></div><div class="mover"><div class="rotator"><div class="jellyfish"></div></div></div>
					</div>
				</div>
			</div>
		</div>
	<script>
moveBubbles();
moveJellyfish();
setInterval(function(){
if($(window).innerWidth() >= 600)
{
	var player = document.getElementById('player');
	if(player.className == 'playerOpen')
	{
		player.className = 'playerClosed';
	}
	else
	{
		player.className = 'playerOpen';
	}
	var shark = document.getElementById('shark');
	if(shark.className == 'sharkOpen')
	{
		shark.className = 'sharkClosed';
	}
	else
	{
		shark.className = 'sharkOpen';
	}
}
},250);
setInterval(function(){moveBubbles();},4000);
setInterval(function(){moveJellyfish();flashReturnToSea();},2000);

	</script>
	</body>
</html>
