<?php
	//Initialisation
	//Exercice 1
	$TabMois = array('janvier','fevrier', 'mars', 'avril', "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre");
	//Exercice 2 Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.
	echo $TabMois[2].'<br />';
	//Exercice 3 Avec le tableau de l'exercice , afficher la valeur de l'index 5.
	echo $TabMois[5].'<br />';
	//Exercice 4 Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.
	$TabMois[7] = "août";
	echo($TabMois[7]);
	//Exercice 5 Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.
	$TabDep = array("02"=>"Aisne", "59"=>"Nord", "60"=>"Oise", "62"=>"Pas-De-Calais", "80"=>"Somme");
	//Exercice 6 Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.
	echo '<br /><br />'.$TabDep['59'];
	// Il est plus correct de faire un tableau de cette manière
	//$TabDep = [
	//		"02" => "Aisne",
	//		"59" => "Nord",
	//		"60" => "Oise",
	//		"62" => "Pas-De-Calais",
	//		"80" => "Somme"
	//
	//			];

	//Exercice 7 Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.
	echo '</br>';
	$TabDep[51]= "Reims";
	//Verification de la variable
	var_dump($TabDep);
	
	//Exercice 8 Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.
	for ($i=0; $i < count($TabMois) ; $i++) { 
		echo "<br />".$TabMois[$i];
	}
	//Exercice 9 Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.
	foreach ($TabDep as $value) {
		echo "<br />".$value;
	}
	//Exercice 10 Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.Cela pourra être, par exemple, de la forme : "Le département" + nom_departement + "a le numéro" + num_departement.
	foreach ($TabDep as $key => $value) {
		echo "<p>Le département ".$value." a le numéro ".$key;
	}
?>