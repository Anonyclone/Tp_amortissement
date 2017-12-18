<?php

require 'model.php';
require 'view.php';

if($_POST['jservice'] == "01" || $_POST['jservice'] == "02" && $_POST['mservice'] == "01" && $_POST['type']== "Lineaire"){
	$denomination = $_POST['denomination'];
	$duree = $_POST['duree'];
	$valeur = $_POST['valeur'];
	$type = $_POST['type'];

	$jaqui = $_POST['jaqui'];
	$maqui = $_POST['maqui'];
	$aaqui = $_POST['aaqui'];

	$jservice = $_POST['jservice'];
	$mservice = $_POST['mservice'];
	$aservice = $_POST['aservice'];
	TabLineaire($denomination, $duree, $valeur, $type, $jaqui, $maqui, $aaqui, $jservice, $mservice, $aservice);
}
elseif ($_POST['type'] == "Lineaire") {
	$denomination = $_POST['denomination'];
	$duree = $_POST['duree'];
	$valeur = $_POST['valeur'];
	$type = $_POST['type'];

	$jaqui = $_POST['jaqui'];
	$maqui = $_POST['maqui'];
	$aaqui = $_POST['aaqui'];

	$jservice = $_POST['jservice'];
	$mservice = $_POST['mservice'];
	$aservice = $_POST['aservice'];
	TabLineaire2($denomination, $duree, $valeur, $type, $jaqui, $maqui, $aaqui, $jservice, $mservice, $aservice);
}
else{
	erreurFormulaire();
}

