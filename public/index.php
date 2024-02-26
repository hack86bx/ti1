<?php
/*
 * Front Controller.
 * Il sert de routeur, router, routing il "redirige"
 */

// si le paramètre "section" est défini dans l'URL
if(isset($_GET['p'])){
    // on va utiliser un switch pour rediriger vers le bon fichier
    switch($_GET['p']){
        case 'accueil':
            $title = "accueil";
            # on inclut le fichier contact.php en suivant l'arborescence de fichiers
            include('../templates/accueil.php');
            break;
        case 'geographie':
            $title = "geographie";
            include('../templates/geographie.php');
            break;
        case 'histoire':
            $title = "histoire";
            include('../templates/histoire.php');
            break;
        case 'culture':
            $title = "culture";
            include('../templates/culture.php');
            break;
        case 'galerie':
            $title = "galerie";
            include('../templates/galerie.php');
            break;
        case 'contact':
            $title = "contact";
            include('../templates/contact.php');
            break;
        case 'liens':
            $title = "liens";
            include('../templates/liens.php');
            break;    
        # Si aucune des sections n'est valide, on affiche la page 404
        default:
            $title = "Erreur 404";
            include('../templates/page-404.php');
    }
// si le paramètre "section" n'est pas défini dans l'URL
}else{
    $title ="accueil";
    // on inclut le fichier accueil.php en suivant l'arborescence de fichiers
    include('../templates/accueil.php');
}
