<?php
	require_once('views/tile-view.php');

	class BoardView {

		public function renderTiles($tiles){
			// need to create a div to keep all the tiles inside it
			// all individual tiles need to have their own divs -- add this to the tile view class
			$board_element = '<div class="board">';
			foreach ($tiles as $tile) {
				$flex_element = $this->setFlexClass($tile->id);
				$board_element .= $flex_element;
				$tile_view = new TileView();
				$board_element .= $tile_view->renderTile($tile);
				if($tile->id == 10 || $tile->id == 20 || $tile->id == 30 || $tile->id == 40){
					$board_element .= '</div>';
				}
			}
			$board_element .= "</div>";
			echo $board_element;
		}

		public function setFlexClass($id){
			$flex_div="";
			switch ($id) {
				case $id == 1:
					$flex_div='<div class="flex-top">';
					break;
				case $id == 11:
					$flex_div='<div class="flex-right">';
					break;
				case $id == 21:
					$flex_div='<div class="flex-bottom">';
					break;
				case $id == 31:
					$flex_div='<div class="flex-left">';
					break;
				default:
					break;
			}
			return $flex_div;
		}
	}

?>

	
