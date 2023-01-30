<!DOCTYPE html>

<html lang="fr">

    <!-- Head -->
    <?php
        include("./includes/head.inc.html");
    ?>

    <!-- Header -->
    <?php
        include("./includes/header.inc.html");
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col col-md-2 col-sm-1">
                <!-- Navigation Bar -->
                <?php
                    include("./includes/nav.inc.html");
                ?>

                <!-- Section -->
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

                    else{
                        ?>
                            <button type="button" class="btn btn-primary">Ajouter une valeur</button>
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

</html>