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

		// for now this will add 1 to the house count -- consider expanding this to allowe user to choose number of houses
		// although for useability clicking a button twice is better than some dumb drop down -- Unles you have separe buttons for houses.
		// e.g add 1 house, add 2 houses and so on.
		public function addHouse(){
			$this->house_count += 1;
		}

		public function removeHouse(){
			if ($this->house_count > 0) {
				$this->house_count -= 1;
			}
		}
	}

?>
