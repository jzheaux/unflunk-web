<?php
	class signupView {

		public function render($args = '') {
?>
		<div id="comingsoon" class="centered">

<?php		if ( $args ) { ?>
			<p class="centered"><?php echo $args?></p>

<?php		} ?>
			<form action="signup" method="post">
				<h1 class="wordstripe centered"><span class="one">coming</span><span class="two">soon!</span></h1>
				<input id="emailAddress" name="emailAddress" title="Email Addresss" value="Email Address" class="centered" size="40" name="q" style="color:#888" onfocus="inputFocus(this)" onblur="inputBlur(this)"/>
				<div class="button" onclick="this.parentElement.submit()">Notify me</div>
				<p id="comingsoonmessage" class="centered">Be notified when this service is available!  (We won't use your email address for anything else without your consent.)</p>
			</form>
		</div>
<?php 		}
	} ?>
