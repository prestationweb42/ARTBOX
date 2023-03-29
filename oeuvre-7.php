<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>

<body>
    <!-- Inclusion du header -->
    <?php include_once 'components/header.php' ?>
    <main>
        <article id="detail-oeuvre">
            <!-- Détails des oeuvres avec PHP -->
            <?php
            // inclusion du tableau des oeuvres
            include_once('oeuvre.php');
            //
            echo '<div id="img-oeuvre">';
            echo "<img src=" . $oeuvre7['image'] . ">";
            echo '</div>';
            echo '<div id="contenu-oeuvre">';
            echo "<h1>" . $oeuvre7['titre'] . "</h1>";
            echo "<p class='description'>" . $oeuvre7['description'] . "</p>";
            echo "<p class='description-complete'>" . $oeuvre7['texte'] . "</p>";
            echo '</div>';
            //
            ?>
        </article>
    </main>
    <!-- Inclusion du footer -->
    <?php include_once 'components/footer.php' ?>
</body>

</html>