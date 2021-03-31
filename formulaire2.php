<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    
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
        <div class="contenu">
            <h1 class="titreEspace"> Formulaire Inscription pour visiteur</h1>
        <!--CORPS Formulaire-->
        <form id="myForm"  action="formulaire2.php" method="post">
        <label class="form_col" for="firstName">Nom :</label>
        <input name="firstName" id="firstName" type="text" required />
        <span class="tooltip">Un Nom ne peut pas faire moins de 2caractères</span>
        <br /><br />
        <label class="form_col" for="lastName">Prenom :</label>
        <input name="lastName" id="lastName" type="text" required />
        <span class="tooltip">Un Prenom ne peut pas faire moins de 2 caractères</span>
        <br /><br />
        <label class="form_col" for="age">Contact:</label>
        <input name="age" id="age" type="text" />
        <span class="tooltip">contact doit etre 10 chiffres</span>
        <br /><br />
        <label class="form_col" for="date">Date de Naissance :</label>
        <input name="date" id="date" type="date" required />
        <br /><br />
        <span class="form_col"> Sexe :</span>
            <label><input name="sex" type="radio" value="H"
            />Homme</label>
            <label><input name="sex" type="radio" value="F"
            />Femme</label>
            <span class="tooltip">Vous devez sélectionnez votre sexe</span>
        <br /><br />
        <label class="form_col" for="Lieu">Lieu:</label>
        <input name="Lieu" id="Lieu" type="text"  required/>
        <span class="tooltip">un Lieu ne peut pas faire moins de 2 caractères</span>
        <br /><br />
        <label class="form_col" for="login">Email :</label>
        <input name="login" id="login" type="text" />
        <span class="tooltip">Email invalid au moins 4 caractères</span>
        <br /><br />
        
        <span class="form_col"></span>
        <input type="submit" value="M'inscrire" /> <input type="reset" 
        value="Réinitialiser le formulaire"  />
        </form>
        </div>
        <?php
  //recuperation des données
  try
{
    
$bdd = new PDO('mysql:host=localhost;dbname=tourisme', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
  if(isset($_POST['date'],$_POST['Lieu'])){
    $req = $bdd->prepare("
    INSERT INTO visiteurs(nom,prenom,dateNaissance,sexe,contact,lieu,email)
    VALUES (:nom, :prenom, :dateNaissance, :sexe, :contact, :lieu, :email)
");
$req->execute(array(
    'nom' => $_POST['firstName'],
    'prenom' => $_POST['lastName'],
    'dateNaissance' => $_POST['date'],
    'sexe' => $_POST['sex'],
    'contact' => $_POST['age'],
    'lieu' => $_POST['Lieu'],
    'email' => $_POST['login'],
));
}
?> 
        <!--FOOTER-->
        <footer>
            <div class="footer-content">
                <h2>Inscription</h2>
                <p>Inscrivez-vous pour recevoir de continuelles informations sur la région du Gbêkê</p>
                <a href="#"><button>Clique Ici</button></a>
                <div class="copyright">&copy; Copyright 2021 | Hamilton&Jean-Parfait</div>
            </div>
        </footer>
        <script  src="formulaire.js">
       </script>
    </div>
    </body>
</html>
