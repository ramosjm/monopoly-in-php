<?php

require_once('controller/controller.php');
require_once('models/tiles.php');
require_once('views/board-view.php');
require_once('helpers/tile-helper.php');
include ('includes/header.php');

//Create teh controller passing in the model and the view

$tiles = new Tiles();
$tile_list = $tiles->generateTiles();
$board_view = new BoardView();
$controller = new Controller($tile_list, $board_view);

// Main will start the render process
$controller->main();

include 'includes/footer.php';
?>