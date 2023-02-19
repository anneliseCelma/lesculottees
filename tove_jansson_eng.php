<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();
include('include/data1-categ3_eng.php');
include('include/data1-base_eng.php');


// Lancement du moteur Twig :
// $twig->render($modele-de-page, $tableau-de-variables)
//
// Le premier paramètre est le nom du modèle de page (le fichier Twig) à utiliser
//
// Le second paramètre est un tableau contenant les variables envoyées au modèle Twig
// Chaque ligne indique 'nom-variable-twig' => valeur-variable-twig
echo $twig->render('categorie3.twig', [
    'base'=>$base,
    'index'=>$menu,
	'nav'=>$nav,
	'logo'=>['url' => 'logo.png', 'alt' => 'logo_principale'],
    'picto_langues' => ['url' => 'langues.jpg', 'alt' => 'logo_langues'],
	'select'=>$select_jansson,
	'drapeau1' => ['url' => 'drapeau_français.png', 'alt' => 'langue1'],
	'drapeau2' => ['url' => 'drapeau_anglais.jpg', 'alt' => 'langue2'],

    'image1' => ['url' => 'picto_art.png', 'alt' => 'logo_categorie'],
    'image2' => ['url'=>'tove_jansson1.jpg', 'alt'=>'image1_Les_Rêveuses'],
    'image6'=>['url'=>'tove_jansson2.jpeg', 'alt'=>'image2_Les_Rêveuses'],
    'tabinfos'=>$tab_jansson,
    'biographie' => $biographie_jansson,
    'page'=>$page,
	'footer'=>$footer
    
    ]);