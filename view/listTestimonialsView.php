
<!-- Affichages des données -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Vive le MVC !</title>
        <link rel="stylesheet" href="pulic/design/default.css" />
    </head>

    <body>

        <header>
            <span>MVC</span>
        </header>

        <section class="container">
        
            <h1>Les Avis clients</h1>
            <p>Voici la liste des avis :</p>

            <?php
                
                while($avis = $requete->fetch()) {
            
            ?>
                <p>
                    <b><?= $avis['note'] ?> / 5</b>
                    <?= $avis['content'] ?>
                </p>
            <?php
                }
            ?>

        </section>

    </body>
</html>