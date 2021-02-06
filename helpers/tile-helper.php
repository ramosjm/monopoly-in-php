<?php 

	class TileHelper {

		public static function getData(){

			$connection = new mysqli('localhost','root','','monopoly');
			if ($connection->connect_errno) {
				die("Connection Error: " . $connection->connect_error);
			} else {
				$query = "SELECT * FROM tiles;";
				$result = $connection->query($query);
				if (!$result){
					die("Sorry buddy. Your query no worky: " . $connection->connect_error);
				} else {
					while($row = $result->fetch_assoc())
						{
							$rows[] = $row;
						}
					return $rows;
				}
			}
		}
	}

?>