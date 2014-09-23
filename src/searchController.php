<?php
	class searchController {
		public function doGet() {
			// write to database
			$connection = mysql_connect('localhost', 'root', 'p314159265I!');
			
			mysql_select_db('unflunkme');
			$query = $_GET['q'];
			$type = $_GET['type'] === 'instant' ? 1 : 2;
			$sql = "INSERT INTO query (query, type, create_date) VALUES (?,?,now())";
			
			$sql = preg_replace('/\\?/', '!@#$%', $sql);
			
			
			$query = preg_replace('/\'/', '\'\'', $query, 1);
			$query = preg_replace('/%/', '\\%', $query, 1);
			
			$sql = preg_replace('/!@#\\$%/', '\'' . $query . '\'', $sql, 1);
			$sql = preg_replace('/!@#\\$%/', $type, $sql, 1);
			
			$result = mysql_query($sql, $connection);
			
			mysql_close($connection);
		}
		
		public function doPost() {
			$this->doGet();
		}
	}
?>