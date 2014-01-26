<?php
    require_once('includes/connexion.inc.php');     /*==========  script de connexion à la bdd  ==========*/
    require_once('includes/verif_connect.inc.php'); /*==========  script de verification de la connexion utilisateur   ==========*/
    if(!$connecte){
        header('Location:index.php');
        die();
    }   
    require_once('includes/haut.inc.php');
    require_once('includes/fonctions.inc.php');

    /*=============================================
    =            Installation de smarty          =
    =============================================*/
    
        require("lib/SmartyBC.class.php");
        $smarty = new SmartyBC();
    
    /*------------------  fin  ------------------*/
    
    if (isset($_GET['id'])) {
        $id =mysql_real_escape_string(var_get('id'));
        $sqlmodif = "SELECT articles.*, tags.nom FROM articles 
                    LEFT JOIN tags ON tags.id = articles.tags_id WHERE articles.id='$id'";
        $resultmodif = mysql_query($sqlmodif);
        $nr=mysql_num_rows($resultmodif);
        if ($nr==1) {
            $data=mysql_fetch_assoc($resultmodif);
            $smarty->assign(array('data' =>$data,));
        }
    }

    if (!empty($_POST)) {
        $titre = mysql_real_escape_string($_POST['titre']);
        $content = mysql_real_escape_string($_POST['texte']);
        $tag = trim(strtolower(mysql_real_escape_string($_POST['tag'])));
       
        $dir="data/images/";

        /*==========  Ajout et modification d'un article avec image ==========*/
        
            if (!empty($_FILES['image']['name'])) {
                $image=$_FILES['image'];
                if (isset($_POST['modif']) AND $_POST['modif']) {
                    modif($titre,$content,$tag);
                }else{
                    add($titre,$content,$tag);
                }

                /*==========  upload de l'image   =========================================================*/

                    $imgdir=$dir.$articles_id.'.jpg';
                    if (file_exists(dirname(__FILE__).'/'.$imgdir)) {
                        unlink(dirname(__FILE__).'/'.$imgdir);
                    }
                    move_uploaded_file($image['tmp_name'], dirname(__FILE__).'/'.$imgdir);
                /*==========  fin   =========================================================*/
            }
        /*==========  fin   =========================================================*/

        else{

        /*==========  Ajout et modification d'un article sans image ==========*/

            if (isset($_POST['modif']) AND $_POST['modif']) {
                modif($titre,$content,$tag);
            } else {
                add($titre,$content,$tag);
            }  
        }
        /*==========  fin   ========================================================*/

        /*==========  gestion des erreurs   ==========*/

            if (!$query){
                $smarty->assign('err',1);
            } else {
                header('location: index.php');
                die();
            }
        /*==========  fin   ==========================*/
    }

    /*==========  appel de la vue  ===============*/

        $smarty->display("views/article.tpl");
    /*==========  fin   ==========================*/

    require_once('includes/bas.inc.php');

    /*==========  fonction ajout article  =============================================*/

        function add($titre,$content,$tag) {
            global $query;
            global $articles_id;
            if ($tag) {
                $sql   = "SELECT id FROM tags WHERE nom = '$tag'";
                $query = mysql_query($sql);
                $nr    = mysql_num_rows($query);
                if ($nr==1) {
                    $data    = mysql_fetch_assoc($query);
                    $tags_id = $data['id'];
                    $sql     = "INSERT INTO articles(titre, texte,tags_id) VALUES('$titre','$content',$tags_id)";
                }elseif ($nr==0) {
                    $sql     = "INSERT INTO tags(nom) VALUES('$tag')";
                    $query   = mysql_query($sql);
                    $tags_id = mysql_insert_id();
                    $sql     = "INSERT INTO articles(titre, texte,tags_id) VALUES('$titre','$content',$tags_id)";
                }
            }else{
                $sql = "INSERT INTO articles(titre, texte) VALUES('$titre','$content')";
            }
            $query       = NULL;
            $query       = mysql_query($sql);
            $articles_id = mysql_insert_id();
        }

    /*==========  fin  =======================================================================*/

    /*==========  fonction modification article  =============================================*/

        function modif($titre,$content,$tag){
            global $query;
            global $articles_id;
            $articles_id    = (int) $_POST['id'];
            if (!$tag) { /*==========  champ tag vide  ==========*/
                $sql   = "SELECT count( * ) AS ne,tags_id FROM articles WHERE tags_id = (SELECT tags_id FROM articles WHERE id =$articles_id)";
                $query = mysql_query($sql);
                $nr    = mysql_num_rows($query);
                if ($nr) {
                    $data=mysql_fetch_assoc($query);
                    extract($data);
                    if ($ne==1) {
                        $sql="DELETE FROM tags WHERE id=$tags_id";
                        $query = mysql_query($sql);
                        $sql   = "UPDATE articles SET titre='$titre', texte='$content', tags_id = NULL WHERE id=$articles_id";
                    }elseif ($ne>1) {
                        $sql   = "UPDATE articles SET titre='$titre', texte='$content', tags_id = NULL WHERE id=$articles_id";
                    }else{
                        $sql   = "UPDATE articles SET titre='$titre', texte='$content' WHERE id=$articles_id";
                    }
                    $query = NULL;
                    $query = mysql_query($sql);
                }
            }else{ /*==========  champ tag non vide  ==========*/
                $sql   = "SELECT id AS tags_id FROM tags WHERE nom = '$tag'";
                $query = mysql_query($sql);
                $nr    = mysql_num_rows($query);
                if ($nr==1) {
                    $data=mysql_fetch_assoc($query);
                    extract($data);
                }elseif ($nr==0) {
                    $sql     = "INSERT INTO tags (nom) VALUES ('$tag')";
                    $query   = NULL;
                    $query   = mysql_query($sql);
                    $tags_id = mysql_insert_id();
                }

                $sql   = "UPDATE articles SET titre='$titre', texte='$content',tags_id=$tags_id WHERE id=$articles_id";
                $query = mysql_query($sql);
                if ($query==0) {
                    $query=1;
                }
            }
        }
    
    /*==========  fin  ================================================================*/
?>   