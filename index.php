<!DOCTYPE html>
<html>
<head>
    <title>INSCRIPTION</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/style.css" />

</head>
<body>

<h1>Formulaire de Architoi<h1>
    <form method="post" action="inscription.php">
        <p>Nom/Pseudo</p>
        <input type="text" name="pseudo">
        <p>email</p>
        <input type="email" name="email">
        <p>Password</p>
        <input type="password" name="password">
       
        <hr>

        <p>Casse à cocher </p>
        <input type="checkbox" id="architecte" name="architecte">
        <label for="architecte"> Architecte</label><br>
        <input type="checkbox" id="architecte-interieur" name="architecte-interieur">
        <label for="Architecte-intérieur"> Architecte d'intérieur</label><br>
        <input type="checkbox" id="décorateur" name="décorateur">
        <label for="décorateur"> Décorateur et paysagiste</label><br><br>

        <hr>
       


        <section id="service">
            <p>Liste des services</p>
            <select name="service-liste" id="service-liste">
                <option value="">Choisissez</option>
                <option value="total">Rénovation total</option>
                <option value="partille">Rénovation Partielle</option>
            </select>
        </section>

        <input type="submit" name="submit" value="Valider">  

    </form>

<?php
if ( isset($_GET["erreur1"]) ){
    echo "Veuillez remplir tout les champs";
}
if (isset($_GET["erreur2"])){
    echo "Votre mot de passe doit contenir 8 caractères minimum, 1 majuscule, 1 majuscule et 1 chiffre.";
}
if ( isset($_GET["erreur3"]) ){
    echo "Ce user existe déjà";
}

?>

</body>
</html>