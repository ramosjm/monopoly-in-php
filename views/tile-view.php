<?php

	class TileView {

		public function renderTile($tile){

			$elements = '<div class="tile-' . $tile->id . '">';
			foreach($tile as $key =>$value){
				if(!is_null($value)){
					if($key != "id" && $key != "type") {
						$elements .= "<h5>" . $key . " " . $value . "</h5>";
					}
				}
			}
			$elements .= "</div>";
			return $elements;
		}
	}

?>

<div></div>