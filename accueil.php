<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();
include('include/data1-accueil.php');
include('include/data1-base.php');


// Lancement du moteur Twig :
// $twig->render($modele-de-page, $tableau-de-variables)
//
// Le premier paramètre est le nom du modèle de page (le fichier Twig) à utiliser
//
// Le second paramètre est un tableau contenant les variables envoyées au modèle Twig
// Chaque ligne indique 'nom-variable-twig' => valeur-variable-twig
echo $twig->render('accueil.twig', [
	'base'=>$base,
    'index'=>$menu,
	'nav'=>$nav,
	'logo'=>['url' => 'logo.png', 'alt' => 'logo_principale'],
    'picto_langues' => ['url' => 'langues.jpg', 'alt' => 'logo_langues'],
	'select'=>$select1,
	'drapeau1' => ['url' => 'drapeau_français.png', 'alt' => 'langue1'],
	'drapeau2' => ['url' => 'drapeau_anglais.jpg', 'alt' => 'langue2'],

	'accueil'=>$accueil_bienvenue,
	'image1'=>['url'=>'josephine_baker.jpg', 'alt'=>'josephine_baker1'],
	'image2'=>['url'=>'maria_telkes1.jpg', 'alt'=>'maria_telkes1'],
	'image3'=>['url'=>'peggy_guggenheim.jpg', 'alt'=>'peggy_guggenheim'],
	'page'=>$page,
	'footer'=>$footer

    
    ]);