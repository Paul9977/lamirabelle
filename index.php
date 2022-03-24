<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Accueil</title>
</head>
<body>

    <!-- le menu  -->
    <?php include('menu.php'); ?>

    <!-- Le contenu de la page -->

    <div class="home">
        <div class="block">
            <div class="pic">
                <img src="https://picsum.photos/600/900" alt="">
            </div>
            <div class="txt">
                <p>
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur., a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.
                </p>
            </div>
            <div class="home-reseau">
                <div class="direction-fleche">
                    <img src="img/fleche.png" alt="">
                </div>
                <div class="insta">
                    <div class="block-inta">
                        <i class="fab fa-instagram"></i>
                        <a href="#">
                            <p>@la_mira_belle</p>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Les projet réaliser -->

        <div class="projets">
            <div class="textes">
                <h1>Projet Numéro un</h1>
                <p>
                    of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)
                </p>
            </div>

            <div class="images">
                <!-- les projets -->
                <div class="projet">
                    <img src="https://picsum.photos/400/400?r=1" alt="">
                    <div class="txt">
                        <p></p>
                    </div>
                </div>

                <div class="projet">
                    <img src="https://picsum.photos/400/400?r=2" alt="">
                    <div class="txt">
                        <p></p>
                    </div>
                </div>

                <div class="projet">
                    <img src="https://picsum.photos/400/400?r=3" alt="">
                    <div class="txt">
                        <p></p>
                    </div>
                </div>

                <div class="projet">
                    <img src="https://picsum.photos/400/400?r=4" alt="">
                    <div class="txt">
                        <p></p>
                    </div>
                </div>

                <div class="projet">
                    <img src="https://picsum.photos/400/400?r=5" alt="">
                    <div class="txt">
                        <p></p>
                    </div>
                </div>

                <div class="projet">
                    <img src="https://picsum.photos/400/400?r=6" alt="">
                    <div class="txt">
                        <p></p>
                    </div>
                </div>

                <div class="projet">
                    <img src="https://picsum.photos/400/400?r=7" alt="">
                    <div class="txt">
                        <p></p>
                    </div>
                </div>

                <div class="projet">
                    <img src="https://picsum.photos/400/400?r=8" alt="">
                    <div class="txt">
                        <p></p>
                    </div>
                </div>

                <div class="projet">
                    <img src="https://picsum.photos/400/400?r=9" alt="">
                    <div class="txt">
                        <p></p>
                    </div>
                </div>
            </div>
            <!-- dernier projet -->
        </div>
        <!-- fin des projets  -->

        <!-- L'espèce de bandeau -->
        <div class="bandeau" style="overflow: hidden;">
            <img class="parallax" src="https://picsum.photos/1200/500?r=1" alt="">
        </div>


        <!-- Les 3 images du projet 2-->
        <div class="pictures">
            <div class="imgs">
                <div class="img">
                    <img src="https://picsum.photos/400/300?r=1" alt="">
                </div>

                <div class="img">
                    <img src="https://picsum.photos/400/300?r=2" alt="">
                </div>

                <div class="img">
                    <img src="https://picsum.photos/400/300?r=3" alt="">
                </div>
            </div>

            <div class="projet2">
                <div class="titre">
                    <h1>Projet numéro deux</h1>
                </div>
                <div class="txt">
                    <p>
                        of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)
                    </p>
                </div>
            </div>
        </div>

    </div>

    <div class="contenu_page_mobile">
        <h1> Site en production </h1>
        <br>
        <img src="img/load.gif" alt="" height="50">
    </div>

<script src="app.js"></script>
    
</body>
</html>