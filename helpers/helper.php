<?php 

	class tileHelper {

		public static function getData(){

			$connection = mysqli_connect('localhost','root','','monopoly');
			if (!$connection) {
				die("Connection Error: " . mysqli_error($connection));
			} else {
				$query = "SELECT * FROM tiles;";
				$result = mysqli_query($connection, $query);
				if (!$result){
					die("Sorry buddy. Your query no worky: " . mysqli_error($connection));
				} else {
					$data = mysqli_fetch_all($result);
					return $data;
				}
				
			}
		}
	}

?>