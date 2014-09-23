<?php
	class mainView {
		public function render($args = '') {
?>
			<ul id="landingheader">
				<li><a href="index.php/becomeatutor">Become A Tutor</a></li>
				<li><a href="index.php/findatutor">Find A Tutor</a></li>
				<li id="signin"><a href="index.php/login">Sign In</a></li>
			</ul>
			<div id="search" class="centered">
				<form action="index.php/search" method="get">
					<h1 class="wordstripe centered"><span class="one">unflunk</span><span class="two">me</span></h1>
					<input id="query" size="60" name="q"/>
					<input name="type" type="hidden" value="instant"/>
					<div id="dosearch" class="button" onclick="document.getElementsByName('type')[0].value = 'search'; this.parentElement.submit()">Search</div>
					<div id="instanthelp" class="button" onclick="document.getElementsByName('type')[0].value = 'instant'; this.parentElement.submit()">Instant Help</div>
				</form>
			</div>
			<p id="slogan">Ask a homework question.  Get help.</p>
			<div id="landingfooter">
				<p id="quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris!"
						- Dante User</p>
				<ul id="actions">
					<li><a href="index.php/howitworks">How it works</a></li>
					<li><a href="index.php/contactus">Contact Us</a></li>
				</ul>
				<ul id="users">
					<li><a href="index.php/contentproviders">Content Providers</a></li>
					<li><a href="index.php/tutoringagencies">Tutoring Agencies</a></li>
					<li><a href="index.php/apiconsumers">API Consumers</a></li>
				</ul>
				<p id="copyright">
					&copy; 2014 All rights reserved.
				</p>
			</div>
<?php
		}
	}
?>
