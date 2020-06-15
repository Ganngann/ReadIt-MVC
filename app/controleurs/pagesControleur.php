<?php
function detailsAction(PDO $connexion, $pageID) {
   include_once ROOT_MDL . '/pagesModele.php';
   $page = getPage($connexion, $pageID);
   GLOBAL $zone_principale;
   ob_start();

   include_once ROOT_VUES . '/pages/details.php';
   $zone_blog;

   $zone_principale = ob_get_clean();
}

function blogAction(PDO $connexion) {
   include_once ROOT_MDL . '/postsModele.php';
   $posts = findAllPosts($connexion);


   include_once ROOT_MDL . '/pagesModele.php';
   $page = getPage($connexion, 1);
   GLOBAL $zone_principale;

   ob_start();

   include_once ROOT_VUES . '/pages/blog.php';
   $posts;

   $zone_principale = ob_get_clean();
}

function menuAction(PDO $connexion) {
   include_once ROOT_MDL . '/pagesModele.php';
   $pages = findAll($connexion);

   return $pages;
}
