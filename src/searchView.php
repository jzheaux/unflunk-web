<?php
	require_once 'signupView.php';
	
	class searchView {
		public function render($args = '') {
		
			new signupView()->render($args);
		}
	}
?>