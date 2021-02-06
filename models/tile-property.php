<?php 

	class TileProperty extends Tile {

		$private $house_count;
		$private $house_cost;
		$private $hotel_cost;

		public function __construct($id, $name, $cost, $rent, $house_count, $house_cost, $hotel_cost){
			$this->$house_cost = $house_cost;
			$this->hotel_cost = $hotel_cost;
			$this->house_count = $house_count;
		}
	}

?>
