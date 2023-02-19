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
	'select'=>$select_baker,
	'drapeau1' => ['url' => 'drapeau_français.png', 'alt' => 'langue1'],
	'drapeau2' => ['url' => 'drapeau_anglais.jpg', 'alt' => 'langue2'],

	'image1' => ['url' => 'picto_audace.png', 'alt' => 'logo_categorie'],
    'image2' =>['url'=>'josephine_baker.jpg','alt'=>'image1_Les_Audacieuses'],
	'image3' => ['url'=>'josephine_baker2.jpg','alt'=>'image2_Les_Audacieuses'],
	'video'  => ['url'=>'josephine_baker.mp4' ,'alt'=>'baker_video'],
	'image4' => ['url'=>'josephine_baker3.jpg', 'alt'=>'mary_jackson3'],
	'image5' => ['url'=>'josephine_baker4.jpg', 'alt'=> 'mary_jackson4'],
	'tabinfos'=>$tab_baker,
	'biographie' => $biographie_baker,
	'page'=>$page,
	'footer'=>$footer
    ]);