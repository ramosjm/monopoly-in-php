<?php 

include_once('models/tile-free.php');
include_once('models/tile-tax.php');
include_once('models/tile-chance.php');
include_once('models/tile-transport.php');
include_once('models/tile-utility.php');
include_once('models/tile-chest.php');
include_once('models/tile-property.php');
include_once('helpers/tile-helper.php');

	class Tiles {

		private $tiles;

		public function __construct(){
			$this->tiles = $this->generateTiles();
		}

		public function generateTiles(){
			$data = TileHelper::getData();
			$tiles = array();
			foreach ($data as $tile){

				switch ($tile->type) {
					case 'free':
						$tiles[] = new TileFree($tile);
						break;
					case 'tax':
						$tiles[] =  new TileTax($tile);
						break;
					case 'chance':
						$tiles[] =  new TileChance($tile);
						break;
					case 'transport':
						$tiles[] =  new TileTransport($tile);
						break;
					case 'utility':
						$tiles[] =  new TileUtility($tile);
						break;
					case 'chest':
						$tiles[] =  new TileChest($tile);
						break;
					default:
						$tiles[] =  new TileProperty($tile);
						break;
				}
			}
			return $tiles;

		}
	}

?>
