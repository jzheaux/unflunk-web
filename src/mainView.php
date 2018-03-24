<?php
	class mainView {
		public function render($args = '') {
?>
			<ul id="landingheader">
				<li><a href="index.php/becomeatutor">Become A Tutor</a></li>
				<li><a href="index.php/findatutor">Find A Tutor</a></li>
				<li id="signin"><p>Sign In</p>
				<input name="username" title="Username" value="Username" style="color:#888" onfocus="inputFocus(this)" onblur="inputBlur(this)"/>
				<input name="password" title="Password" value="Password" style="color:#888" onFocus="inputFocus(this)" onBlur="inputBlur(this)"/>
				<div id="dosignin" class="button one" onclick="login()">Login</div>
				<div id="register" class="button two" onclick="register()">Register</div>
				</li>
			</ul>
			<div id="search" class="centered">
				<form id="searchForm" action="index.php/search" method="get">
					<h1 class="wordstripe centered"><span class="one">unflunk</span><span class="two">me</span></h1>
					<div style="vertical-align: top">
						<input id="query" size="60" name="q"/>
						<input name="type" type="hidden" value="instant"/>
						<div id="dosearch" class="button" onclick="document.getElementsByName('type')[0].value = 'search'; searchForm.submit()">Search</div>
						<div id="instanthelp" class="button" onclick="document.getElementsByName('type')[0].value = 'instant'; searchForm.submit()">Instant Help</div>
					</div>
				</form>
			</div>
			<h2 id="slogan">Ask a homework question.  Get help.</h2>
			<div id="landingfooter">
				<p id="quote">"Aim for success, not perfection. Never give up your right to be wrong, because then you will lose the ability to learn new things and move forward with your life. Remember that fear always lurks behind perfectionism."
						- Dr. David M. Burns</p>
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
