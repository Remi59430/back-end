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
            <!-- Navigation Bar -->
            <div class="col-sm-4 col-xs-12">
                <?php
                    include("./includes/nav.inc.html");
                ?>
            </div>

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

                    else{
                ?>
                        <div>
                            <button type="button" class="btn btn-primary">Ajouter des données</button>
                        </div>
                <?php
                    }
                ?>
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
    </div>

</html>