<?php
include("index.php");
include("map.php");

// if (!$fp = fopen("https://data.montpellier3m.fr/sites/default/files/ressources/FR_MTP_ANTI.xml = false","r")) {
   
// 	echo "Echec de l'ouverture du fichier";
 
// 	exit;
 
// }
 
// else {
// 	while(!feof($fp)) {
// 	// On récupère une ligne
// 	$Ligne = fgets($fp,255);
 
// 	// On affiche la ligne
// 	echo $Ligne;
 
// 	// On stocke l'ensemble des lignes dans une variable
// 	$Fichier .= $Ligne;
 
//         }
//         fclose($fp); // On ferme le fichier
// }
// $xml ="<park>
// <DateTime>2020-03-03T10:05:53</DateTime>
// <Name>ANTI</Name>
// <Status>Open</Status>
// <Free>0190</Free>
// <Total>0280</Total>
// </park>";
// $document = new DomDocument();
// $document-> load('https://data.montpellier3m.fr/sites/default/files/ressources/FR_MTP_ANTI.xml');
// $racine = $document->documentElement;
// $document = $racine->ownerDocument;
// <?xml version="1.0" encoding="UTF-16"?>
// function get_xml_from_url($url){
//     $ch = curl_init();

//     curl_setopt($ch, CURLOPT_URL, $url);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//     curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

//     $xmlstr = curl_exec($ch);
//     curl_close($ch);

//     return $xmlstr;
// }
// $url = 'https://data.montpellier3m.fr/sites/default/files/ressources/FR_MTP_ANTI.xml';
// $xmlstr = load(file_get_contents('$url'));
// print_r($xmlstr);

 ?>