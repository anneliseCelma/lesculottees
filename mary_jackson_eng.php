<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();
include('include/data1-categ1_eng.php');
include('include/data1-base_eng.php');


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
	'select'=>$select_jackson,
	'drapeau1' => ['url' => 'drapeau_français.png', 'alt' => 'langue1'],
	'drapeau2' => ['url' => 'drapeau_anglais.jpg', 'alt' => 'langue2'],

    'image1' => ['url' => 'picto_audace.png', 'alt' => 'logo_categorie'],
    'image2' => [ 'url'=> 'mary_jackson1.jpg', 'alt' => 'image1_Les_Audacieuses'],
	'image3' => ['url'=>'mary_jackson2.jpg', 'alt'=>'image2_Les_Audacieuses'],
	'video'  => ['url'=>'hidden_figures.mp4', 'alt'=>'hidden_figures'] ,
	'image4' => [ 'url'=>'mary_jackson3.jpg', 'alt'=>'mary_jackson3'],
	'image5' => ['url'=>'mary_jackson4.jpg', 'alt'=>'mary_jackson4'],
	'tabinfos'=>$tab_jackson,
	'biographie' => $biographie_jackson,
	'page'=>$page,
	'footer'=>$footer
    
    ]);