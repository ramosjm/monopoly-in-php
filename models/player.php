<?php

	class Player {
		protected $id;
		protected $cash;
		protected $properties;
		protected $position;
		protected $in_jail;
		protected $roll;
	
		public function __construct($id) {
			$this->id = $id;
			$this->cash = 10000;
			$this->properties = array();
			$this->position = 39;
			$this->in_jail = false;
			$this->roll;
		}

		//will probably need to change this to a public fn. Go with this for now.
		private function addCash($cash){
			$this->cash += $cash;
		}

		private function subtractCash($cash){
			$this->cash -= $cash;
		}

		function buyProperty($property){
			if ($property->cost <= $this->cash){
				$this->subtractCash($property->cost);
				$this->addProperty($property);
			}
		}

		private function addProperty($property){
			$this->properties[$property->id] = $property;
		}

		function removeProperty($property){
			if (array_key_exists($property->id, $this->properties)){
				unset($this->properties[$property->id]);
			}
		}

		function rollDice(){
			$this->roll = array(rand(1,6), rand(1,6));
		}

		private function makeBank(){
			$this->addCash(2000);
		}

		function move()
		{
			$roll = array_sum($this->roll);
			$new_position = $this->position + $roll;
			if($new_position >= 40 ){
				$this->position =  $new_position - 40;
				$this->makeBank();
			} else {
				$this->position += $roll;
			}
		}
	}



//Testing -- Will leave this here for now.
$testProperty = new stdClass;
$testProperty->id = 69;
$testProperty->cost = 200;


$player = new Player(5);
$player->buyProperty($testProperty);
var_dump($player);
$player->removeProperty($testProperty);
echo "----------------------- \n";
$player->rollDice();
$player->move();
var_dump($player);

?>