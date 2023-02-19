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
	'select'=>$select_deroche,
	'drapeau1' => ['url' => 'drapeau_français.png', 'alt' => 'langue1'],
	'drapeau2' => ['url' => 'drapeau_anglais.jpg', 'alt' => 'langue2'],

	'image1' => ['url' => 'picto_audace.png', 'alt' => 'logo_categorie'],
    'image2' => ['url'=>'elisa_deroche1.jpg','alt'=>'image1_Les_Audacieuses'],
	'image3' =>['url'=>'elisa_deroche2.jpg' ,'alt' =>'image2_Les_Audacieuses'],
	'video' =>[ 'url'=>  'elisa_deroche.mp4', 'alt' =>'deroche_video'],
	'image4' =>['url'=>'elisa_deroche3.jpg' ,'alt' =>'elisa_deroche3'],
	'image5' =>['url'=>'elisa_deroche4.jpg' ,'alt' =>'elisa_deroche4'],
	'tabinfos'=>$tab_deroche,
	'biographie' => $biographie_deroche,
	'page'=>$page,
	'footer'=>$footer    
    ]);