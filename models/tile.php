<?php

	class Tile {
		
		private $id;
		private $name;
		private $cost;
		private $rent;
		private $type;

		public function __construct($tile) {
			$this->id = $tile->id;
			$this->name = $tile->name;
			$this->cost = $tile->cost;
			$this->rent = $tile->rent;
			$this->type = $tile->type;
		}
	}
?>