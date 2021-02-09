<?php
	require_once('views/tile-view.php');

	class BoardView {

		public function renderTiles($tiles){
			// need to create a div to keep all the tiles inside it
			// all individual tiles need to have their own divs -- add this to the tile view class
			$board_element = '<div class="board">';
			$top = '<div class="flex-top">';
			$bottom = '<div class="flex-bottom">';
			$mid_section = '<div class="mid-section">';
			$left = '<div class="flex-left">';
			$right = '<div class="flex-right">';
			$center = '<div class="center">';
			foreach ($tiles as $tile) {

				$tile_view = new TileView();
				$tile_html = $tile_view->renderTile($tile);
				if($tile->id <= 11){
					$bottom .= $tile_html;
				}
				if($tile->id >= 12 && $tile->id <= 20) {
					$left .= $tile_html;
				} elseif ($tile->id >= 32 && $tile->id <= 40) {
					$right .= $tile_html;
				}

				if($tile->id >= 21 && $tile->id <= 31){
					$top .= $tile_html;
				}

			}
			$mid_section .= $left . '</div>' . $center . '</div>' . $right . '</div>';
			$board_element .= $bottom . '</div>' . $mid_section . '</div>' . $top . '</div>' . '</div>';

			echo $board_element;
		}
	}

?>

	
