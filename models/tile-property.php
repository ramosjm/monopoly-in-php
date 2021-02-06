<?php 
	include_once('models/tile.php');
	class TileProperty extends Tile {

		private $house_count;
		private $house_cost;
		private $hotel_cost;

		public function __construct($tile){
			$this->house_cost = $tile->housecost;
			$this->hotel_cost = $tile->hotelcost;
			$this->house_count = 0;
		}
	}

?>
