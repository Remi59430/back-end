<!DOCTYPE html>

<html lang="fr">

    <!-- Head -->
    <?php
        include("./includes/head.inc.html");
    ?>

    <body>
    <!-- Header -->
    <?php
        include("./includes/header.inc.html");
    ?>

    <div class="container-fluid">
        <div class="row">
            <!-- Navigation Bar -->
            <nav class="col-sm-4 col-xs-12">
                <a href="index.php" class="list-group-item list-group-item-action">
                    Home
                </a>
                <?php
                    include("./includes/ul.inc.php");
                ?>
            </nav>

            <!-- Section -->
            <div class="col-sm-8 col-xs-12">
                <?php
                    if(isset($_GET["Debogage"])){
                        include("./pages/Debogage.html");
                    }

                    elseif(isset($_GET["Concatenation"])){
                        include("./pages/Concatenation.html");
                    }

                    elseif(isset($_GET["Boucle"])){
                        include("./pages/Boucle.html");
                    }

                    elseif(isset($_GET["Fonction"])){
                        include("./pages/Fonction.html");
                    }

                    elseif(isset($_GET["Supprimer"])){
                        include("./pages/Supprimer.html");
                    }

                    elseif(isset($_GET["add"])){
                        echo '<h2 class="d-flex justify-content-center">Ajouter des données</h2>';
                        include("./includes/form.inc.html");
                    }

                    else{
                ?>
                        <div>
                            <a href="index.php?add">
                                <button type="button" class="btn btn-primary">Ajouter des données</button>
                            </a>
                        </div>
                <?php
                    }
                ?>
            </div>   
         
        </div>

    </div>
    <div class="row">
            <div class="col d-flex justify-content-center">
            <!-- Footer -->
            <?php
                include("./includes/footer.inc.html");
            ?>
            </div>
        </div>
    </body>

</html>