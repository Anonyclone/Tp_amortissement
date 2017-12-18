<?php

function TabLineaire($denomination, $duree,$valeur, $type, $jaqui, $maqui, $aaqui, $jservice, $mservice, $aservice){
	echo "<br/><br/>La fonction TabLineaire est lanceé !<br/>";

	echo "Durée d'amortissement : ";
	echo $duree . '<br/>';
	$i = 1;
	$taux = 1/$duree;
	$annuite = $valeur * $taux;
	$valeurFin = $valeur - $annuite;
	echo "Taux d'amortissement : ";
	echo $taux . '<br/>';
	
	echo 'Année : ' . $aservice . ' Valeur debut exercice : ' . $valeur . ' Annuité : ' . $annuite . ' Valeur fin exercice : ' . $valeurFin . '<br/>';
	

	for($i ; $i < $duree; $i++){
		$aservice++;
		$valeur = $valeur - $annuite;
		$valeurFin = $valeur - $annuite;
		echo 'Année : ' . $aservice . ' Valeur debut exercice : ' . $valeur . ' Annuité : ' . $annuite . ' Valeur fin exercice : ' . $valeurFin . '<br/>';	
	}

}


function TabLineaire2($denomination, $duree,$valeur, $type, $jaqui, $maqui, $aaqui, $jservice, $mservice, $aservice){
	echo "<br/><br/>La fonction TabLineaire est lanceé !<br/>";

	echo "Durée d'amortissement : ";
	echo $duree . '<br/>';
	$i = 0;
	$taux = 1/$duree;
	
	echo "Taux d'amortissement : ";
	echo $taux . '<br/>';
	
	$nbj = 30 * $mservice;
	$nbj = $nbj + $jservice;
	$nbj = 360 - $nbj;
	$annuite = $valeur * $taux * ($nbj/360);
	$valeurFin = $valeur - $annuite;
	
	echo 'Année : ' . $aservice . ' Valeur debut exercice : ' . $valeur . ' Annuité : ' . $annuite . ' Valeur fin exercice : ' . $valeurFin . '<br/>';
	

	for($i ; $i < $duree; $i++){
		$aservice++;
		$valeur = $valeur - $annuite;
		$valeurFin = $valeur - $annuite;
		echo 'Année : ' . $aservice . ' Valeur debut exercice : ' . $valeur . ' Annuité : ' . $annuite . ' Valeur fin exercice : ' . $valeurFin . '<br/>';	
	}

}

function erreurFormulaire(){
	echo"Le formulaire n'a pas été correctement rempli";
}