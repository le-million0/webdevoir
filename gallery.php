<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gbêkê</title>
</head>
<body>
    <div id="global">
        <!--MENU TOUT HAUT-->
        <nav>
            <h3><a href="./homepage.php">Région du Gbêkê</a></h3>
            <ul class="nav-link">
                <li class="dropdown">
                    <a href="./activites.php">Nos Activités</a>
                    <ul class="dropdown-list">
                        <li><a href="./activites.php#histoire">Histoire</a></li>
                        <li><a href="./activites.php#event">Evenements</a></li>
                        <li><a href="./activites.php#lieu">Lieux somptueux</a></li>
                    </ul>
                </li>
                <li><a href="./gallery.php">Galerie</a></li>
                <li><a href="./aboutus.php">About Us</a></li>
                <li><a href="./contact.php">Contacts</a></li>
            </ul>
        </nav>

        <!--CORPS IMAGE-->
        <main>
            <!--<div class="card-image">
                <div class="pic">
                    <img src="./images/bouake.jpg" alt="">
                </div>
                <div class="legend">Ville de Bouake</div>
            </div>-->

            <div class="cards">
                <div class="card-single">
                    <div>
                        <img src="./images/bouake.jpg" alt="">
                    </div>
                    <div>Ville de Bouaké</div>
                </div>
                
                <div class="card-single">
                    <div>
                        <img src="./images/akwaba.jpg" alt="">
                    </div>
                    <div>Statue AKWABA</div>
                </div>

                <div class="card-single">
                    <div>
                        <img src="./images/cathedrale.jpg" alt="">
                    </div>
                    <div>Cathédrale de Bouaké</div>
                </div>

                <div class="card-single">
                    <div>
                        <img src="./images/hotel.jpg" alt="">
                    </div>
                    <div>Hôtel Luxueux de Bouaké</div>
                </div>

                <div class="card-single">
                    <div>
                        <img src="./images/mairie.jpg" alt="">
                    </div>
                    <div>Mairie de Bouaké</div>
                </div>

                <div class="card-single">
                    <div>
                        <img src="./images/peace_place.jpg" alt="">
                    </div>
                    <div>Place de la paix</div>
                </div>
            </div>
        </main>

        <!--FOOTER-->
        <footer>
            <div class="footer-content">
                <h2>Inscription</h2>
                <p>Inscrivez-vous pour recevoir de continuelles informations sur la région du Gbêkê</p>
                <a href="formulaire2.php"><button>Clique Ici</button></a>
                <div class="copyright">&copy; Copyright 2021 | Hamilton&Jean-Parfait</div>
            </div>
        </footer>
    </div>
</body>
</html>