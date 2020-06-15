<?php
include_once ROOT_CTRL . '/pagesControleur.php';


if ($pageID == 1) :
   // ROUTE du blog
   // include_once ROOT_CTRL . '/postsControleur.php';


   blogAction($connexion);

else :
   detailsAction($connexion, $pageID);


endif;
