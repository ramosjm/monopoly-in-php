<?php
	require_once('views/tile-view.php');

	class BoardView {

		public function renderTiles($tiles){
			// need to create a div to keep all the tiles inside it
			// all individual tiles need to have their own divs -- add this to the tile view class
			$tiles_list = '<div class="board>';
			foreach ($tiles as $tile) {
				$tile_view = new TileView();
				$tiles_list .= $tile_view->renderTile($tile);
			}
			$tiles_list .= "</div>";
			echo $tiles_list;
		}
	}

?>

	
