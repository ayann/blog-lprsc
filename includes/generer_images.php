<?php
    header("Content-type: image/jpg"); 
    if (isset($_GET['img_id'])) {
        /*==========  id de l'image  ==========*/
            $id=(int) $_GET['img_id']; 

        /*==========  Largeur choisie  ==========*/
        
            $NouvelleLargeur = (int) $_GET['largeur'];

        /*==========  adresse de l'image  ==========*/
        
            $lien="../data/images/$id.jpg"; 

        /*==========  creation de l'image à partir du lien  ==========*/
            $ImageChoisie = imagecreatefromjpeg($lien); 
        /*==========  fin  ==========*/
        
        /*==========  on determine la taille de l'image (largeur, hauteur)  ==========*/
            $TailleImageChoisie = getimagesize($lien); 
        /*==========  fin  ==========*/

        /*==========  calcule de la nouvelle hauteur facon de garder les proportions  ==========*/
            $NouvelleHauteur = ( ($TailleImageChoisie[1] * (($NouvelleLargeur)/$TailleImageChoisie[0])) ); 
        /*==========  fin  ==========*/

        /*==========  on cree image vide avec les nouvelles dimensions  ==========*/
            $NouvelleImage = imagecreatetruecolor($NouvelleLargeur , $NouvelleHauteur) or die ("Erreur");
        /*==========  fin  ==========*/

        /*==========  on cree la nouvelle image et on la redimenssione ==========*/
            imagecopyresampled($NouvelleImage , $ImageChoisie  , 0,0, 0,0, $NouvelleLargeur, $NouvelleHauteur, $TailleImageChoisie[0],$TailleImageChoisie[1]);
        /*==========  fin  ==========*/

        /*==========  on detruit l'image de base  ==========*/
            imagedestroy($ImageChoisie);
        /*==========  fin  ==========*/
        
        /*==========  on affiche la nouvelle image  ==========*/
            imagejpeg($NouvelleImage);
        /*==========  fin  ==========*/
    }
?>