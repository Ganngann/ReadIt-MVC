<?php
// if (isset($_GET['pageID'])) :
/*
* ROUTES DES ARTICLES
*/
if (isset($_GET['postID'])):
   $postID = $_GET['postID'];

   include_once ROOT_RT . '/postsRouteur.php';
   var_dump($postID);

else:
   /*
   * ROUTES DES PAGES
   */

   if (isset($_GET['pageID'])):
      $pageID = $_GET['pageID'];

   else:
      // ROUTE PAR DEFAUT PAGE N 0
      $pageID = 1;


   endif;

   include_once ROOT_RT . '/pagesRouteur.php';

endif;
