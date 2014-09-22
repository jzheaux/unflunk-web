<?php
	require_once 'Drewm/MailChimp.php';

	class signupController {
		public function doPost() {

			$id = 'ced532d78b';
			$apikey = 'de19c88c0fdeac4660ad33de8e21690a-us9';
			$email = $_POST['emailAddress'];
	
			$mailChimp = new MailChimp($apikey);

			$method = "lists/subscribe";
			$args = array( 	'id' => $id, 
							'email' => array('email'=>$email)
						);
			if ( $mailChimp->call( $method, $args ) ) {
				return 'You\'re all set! Please check your email of confirm your subscription.';
			} else {
				return 'An unknown error occurred.  Please try again.';
			}
		}
	}
?>
