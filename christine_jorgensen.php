<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();
include('include/data1-categ1.php');
include('include/data1-base.php');


// Lancement du moteur Twig :
// $twig->render($modele-de-page, $tableau-de-variables)
//
// Le premier paramètre est le nom du modèle de page (le fichier Twig) à utiliser
//
// Le second paramètre est un tableau contenant les variables envoyées au modèle Twig
// Chaque ligne indique 'nom-variable-twig' => valeur-variable-twig
echo $twig->render('categorie1.twig', [
	'base'=>$base,
    'index'=>$menu,
	'nav'=>$nav,
	'logo'=>['url' => 'logo.png', 'alt' => 'logo_principale'],
    'picto_langues' => ['url' => 'langues.jpg', 'alt' => 'logo_langues'],
	'select'=>$select_jorgensen,
	'drapeau1' => ['url' => 'drapeau_français.png', 'alt' => 'langue1'],
	'drapeau2' => ['url' => 'drapeau_anglais.jpg', 'alt' => 'langue2'],

	'image1' => ['url' => 'picto_audace.png', 'alt' => 'logo_categorie'],
    'image2' => ['url'=>'christine_jorgensen1.jpg', 'alt'=>'image1_Les_Audacieuses'],
	'image3' => ['url'=>'christine_jorgensen2.jpg', 'alt'=>'image2_Les_Audacieuses'],
	'video'  =>	['url'=>'christine_jorgensen.mp4', 'alt'=>'jorgensen_video'],
	'image4' => ['url'=>'christine_jorgensen3.jpg', 'alt'=>'christine_jorgensen3'],
	'image5' => ['url'=>'christine_jorgensen4.jpg', 'alt'=>'christine_jorgensen4'],
	'tabinfos'=>$tab_jorgensen,
	'biographie' => $biographie_jorgensen,
	'page'=>$page,
	'footer'=>$footer   
]);


    