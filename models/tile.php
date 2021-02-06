<?php

	class Tile {
		
		private $id;
		private $name;
		private $cost;
		private $rent;
		private $type;

		public function __construct($id, $name, $cost, $rent, $type) {
			$this->id = $id;
			$this->name = $name;
			$this->cost = $cost;
			$this->rent = $rent;
			$this->type = $type;
		}
	}
?>