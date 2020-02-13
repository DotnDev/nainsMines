	<?php
	include_once 'dbh.php';
	include_once 'nain.php';
	include_once 'mine.php';
	?>

	<!DOCTYPE html>
	<html>
	    <head>
	    	<meta charset="utf-8">
	        <title></title>
	    </head>
	    <body>

	  <?php 

		$listeDeNains = new Nain();
		echo $listeDeNains -> getAllNains();

		$listeDeMines = new Mine();
		echo $listeDeMines -> getAllMines();



	   ?>

	    </body>
	</html>