<?php
	require_once 'gaheaderView.php';

	function render($viewClass, $args = '') {
?>
	<html>
		<head>
<?php
			$gaheader = new GaHeaderView();
			$gaheader->render();
?>
			<link rel="stylesheet" href="//<?php echo $_SERVER['HTTP_HOST'] ?>/style.css" type="text/css"/>
			<script type="text/javascript">
				function inputFocus(i) {
					if(i.value==i.defaultValue){ i.value=""; i.style.color="#000"; }
				}
				
				function inputBlur(i){
	    			if(i.value==""){ i.value=i.defaultValue; i.style.color="#888"; }
				}
			</script>
		</head>
		<body>
<?php
			$view = new $viewClass();
			$view->render($args);
?>
		</body>
	</html>

<?php } ?>	
