	<?php

	class Nain extends Dbh {

		public function getAllNains(){

			$stmt = $this -> connect() -> query("SELECT * FROM Nain");
			$nains = $stmt -> fetchAll();

	foreach($nains as $nain)
	{
		
		echo $nain['id'].' - '.$nain['nom'].' - '.$nain['taille'].' - '.$nain['mine_id'].'<br>';

	}


			}
		}
	

	?>