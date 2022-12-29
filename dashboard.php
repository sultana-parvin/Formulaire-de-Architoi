<?php
session_start();
include 'dbco.php';
?>
<link rel="stylesheet" href="/css/style.css" />
<h1>Bonjour <?php echo $_SESSION['user']; ?></h1>
<?php 

if ( isset($_GET["valide"]) ){
    echo "Votre inscription a bien été prise en compte.<br>";
}
if (isset($_GET["valideconnexion"])){
    echo "Connexion réussie <br>"; 
}