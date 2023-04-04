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
        <div id="liste-oeuvres">
            <!-- Galerie des oeuvres avec PHP -->
            <?php
            // Import du tableau des oeuvres
            include_once('oeuvres.php');
            // Affichage des oeuvres
            foreach ($oeuvres as $oeuvre) {
                echo '<article class="oeuvre">';
                echo '<a href=' . $oeuvre['lien'] . '>';
                echo "<img src=" . $oeuvre['image'] . ">";
                echo "<h2>" . $oeuvre['titre'] . "</h2>";
                echo "<p class='description'>" . $oeuvre['description'] . "</p>";
                echo '<a />';
                echo '</article>';
            }
            ?>
        </div>
    </main>
    <!-- Inclusion du footer -->
    <?php include_once 'components/footer.php' ?>
</body>

</html>