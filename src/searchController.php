<?php
	class searchController {
		public function doPost() {
			// write to database
			$connection = mysql_connect('localhost', 'root', 'p314159265I!', 'unflunkme');
			$query = $_POST['q'];
			$type = $_POST['type'] === 'instant' ? 1 : 2;
			$sql = "INSERT INTO query (query, type) VALUES (?,?)";
			$query = strrpl($query, '\'', '\'\'');
			$query = strrpl($query, '%', '\%');
			$sql = strrpl($sql, '?', '\'' . $query . '\''); // need this to be replace first
			$sql = strrpl($sql, '?', $type);
			mysql_execute($sql);
		}
	}
?>