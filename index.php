
<?php //Ouverture balise PHP

//Déclaration de variable
$TabVideoGames = array(" Fallout "," Overwatch "," Civilization V "," Borderlands 3 ");

//Déclaration de la fonction pour afficher notre variable tableau
function AffichageTab($TabVideoGames){
	echo $TabVideoGames.'<br />'; //Nous retourne les valeurs du tableau
}

// Boucle : départ 0 , fin inférieur ou égale à 4 , incrémentation de +1
//count = fonction length de php (longeur tableau)
for ($i = 0; $i  < count ($TabVideoGames); $i ++) { 
//Appel de la fonction affichage
echo AffichageTab($TabVideoGames[$i]);
}

?>