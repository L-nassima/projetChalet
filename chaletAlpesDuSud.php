<?php
require('application/database.php');
session_start();
if(isset($_SESSION['id_customer'])){
    $customerConnect=getCustomer($_SESSION['id_customer']);
}

$pdo = connect();
$req=$pdo->query('SELECT id_chalet From chalet WHERE massif="Alpes du Sud"');
$nombre_total_article = $req->rowCount();

$nombre_articles_par_page = 2;
$nombre_pages_max_gauche_et_droite = 2;
$last_pages = ceil($nombre_total_article / $nombre_articles_par_page);

if(isset($_GET['page']) && is_numeric($_GET['page'])) {
    $page_num = $_GET['page'];
} else {
    $page_num = 1;
}

if($page_num < 1) {
    $page_num = 1;
}else if($page_num > $last_pages) {
    $page_num = $last_pages;
}
$depart = ($page_num - 1) * $nombre_articles_par_page;

$pagination = '';
if($last_pages != 1) {
    if($page_num > 1) {
        $page_precedente = $page_num - 1;
        $pagination .= '<a href = "chaletAlpesDuSud.php?page=' . $page_precedente . '" class="lien_pagination">Précédent</a>&nbsp; &nbsp;';
        for($i = $page_num - $nombre_pages_max_gauche_et_droite; $i < $page_num; $i++) {
            if($i > 0) {
                $pagination .= '<a href ="chaletAlpesDuSud.php?page=' . $i . '" class="lien_pagination"> ' . $i .'</a>&nbsp;';
            }
        }
    }

    $pagination .= '<span class ="active">' .$page_num. '</span>&nbsp;';
    for($i = $page_num+1; $i<=$last_pages; $i++) {
        $pagination .= '<a href = " chaletAlpesDuSud.php?page=' . $i . '" class="lien_pagination">' . $i . '</a>';
        if($i >= $page_num + $nombre_pages_max_gauche_et_droite) {
            break;
        }
    }

    if($page_num != $last_pages) {
        $page_suivante = $page_num + 1;
        $pagination .= '<a href =" chaletAlpesDuSud.php?page=' . $page_suivante .'" class="lien_pagination">&nbsp; &nbsp; Suivant</a>';
    }
}

//Sélection et affichage du template PHTML.
$template = 'chaletAlpesDuSud';
include 'layout.phtml';