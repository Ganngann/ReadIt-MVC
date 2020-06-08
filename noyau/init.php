<?php
/*
  ./noyau/init.php
 */

 // Definir les racourcis de chemins
 define('ROOT_CORE', '../noyau');

 define('ROOT_APP',  '../app');
 define('ROOT_CFG', ROOT_APP . '/config');
 define('ROOT_RT', ROOT_APP . '/routeurs');
 define('ROOT_CTRL', ROOT_APP . '/controleurs');
 define('ROOT_MDL', ROOT_APP . '/modeles');
 define('ROOT_VUES', ROOT_APP . '/vues');

 define('ROOT_TMPL', ROOT_VUES . '/template');

require_once ROOT_CFG . '/parametres.php';
require_once ROOT_CORE . '/connexion.php';
