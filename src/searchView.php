<?php
	require_once 'signupView.php';
	
	class searchView {
		public function render($args = '') {
			$view = new signupView();
			$view->render($args);
		}
	}
?>