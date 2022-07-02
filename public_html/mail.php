<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
    $retour = mail('christophe.pelletier.contact@gmail.com', 'Envoi depuis la page Contact', $_POST['commentaire'], 'From: webmaster@monsite.fr');
    if ($retour)
        echo '<p>Votre commentaire a bien été envoyé.</p>';
    ?>
</body>
</html>