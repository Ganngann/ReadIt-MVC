<?php
function getPage(PDO $connexion, $pageID) {
   $sql = "select *
   from pages
   where idpage = $pageID";

   $rs = $connexion->query($sql);

   $pages = $rs->fetch(PDO::FETCH_ASSOC);

   $rs->closeCursor();
   unset($rs);

   return $pages;
};

function findAll(PDO $connexion) {
   $sql = "select *
   from pages
   order by idpage asc;";
   $rs = $connexion->query($sql);

   $pages = $rs->fetchAll(PDO::FETCH_ASSOC);

   $rs->closeCursor();
   unset($rs);

   return $pages;
}
