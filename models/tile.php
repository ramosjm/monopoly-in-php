<?php

	class Tile {
		
		public $id;
		public $name;
		public $cost;
		public $rent;
		public $type;

		public function __construct($tile) {
			$this->id = $tile->id;
			$this->name = $tile->name;
			$this->cost = $tile->cost;
			$this->rent = $tile->rent;
			$this->type = $tile->type;
		}
	}
?>