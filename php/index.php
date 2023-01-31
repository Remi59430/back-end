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
                    if(isset($_POST["form"])){
                        print_r($_POST);

                        $table=["first_name","last_name","age","size","civility",];

                        print_r($table);

                    }

                    elseif(isset($_GET["Debogage"])){
                        echo '<h2 class="d-flex justify-content-center">Débogage</h2>';
                        echo '<h3 class="mt-4 mb-4">===>Lecture du tableau à l\'aide de la fonction print_r()</h3>';
                    }

                    elseif(isset($_GET["Concatenation"])){
                        echo '<h2 class="d-flex justify-content-center">Concaténation</h2>';
                        echo '<h3 class="mt-4 mb-4">===>Construction d\'une phrase avec le contenu du tableau</h3>';
                        echo '<h3 class="mt-4 mb-4">===>Construction d\'une phrase après MAJ du tableau</h3>';
                        echo '<h3 class="mt-4 mb-4">===>Affichage d\'une virgule à la place du point pour la taille</h3>';
                    }   

                    elseif(isset($_GET["Boucle"])){
                        echo '<h2 class="d-flex justify-content-center">Boucle</h2>';
                        echo '<h3 class="mt-4 mb-4">===>Lecture du tableau à l\'aide d\'une boucle foreach</h3>';

                    }

                    elseif(isset($_GET["Fonction"])){
                        echo '<h2 class="d-flex justify-content-center">Fonction</h2>';
                        echo '<h3 class="mt-4 mb-4">===>J\'utilise ma fonction readTable()</h3>';
                    }

                    elseif(isset($_GET["Supprimer"])){
                        echo '<h2 class="d-flex justify-content-center">Supprimer</h2>';
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