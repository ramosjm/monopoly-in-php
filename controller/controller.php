<?php 

// controller will need listeners to check for changes in the view.

	class Controller{
		private $tiles;
		private $view;

		public function __construct($tiles, $view){
			$this->tiles = $tiles;
			$this->view = $view;
		}
	
		public function main(){
			$this->view->renderTiles($this->tiles);
		}
	
	}

?>