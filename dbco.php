<?php
   $servname = 'localhost';
   $dbname = 'formulaire-de-architoi';
   $dbuser = 'root';
   $pass = '';

   try {
       $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $dbuser, $pass);
       $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch (PDOException $e) {
       echo "Erreur : " . $e->getMessage();
   }
   ?>