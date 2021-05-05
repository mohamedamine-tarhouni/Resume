<?php
    if(isset($_POST['message'])) :
        $to = "mohamedamine.tarhouni@ynov.com";
        $from = $_POST['email'];
        $name = $_POST['name'];
        $subject = "Message envoyé depuis le formulaire du contact de CV";
        $message = "" . $name . " a écrit ce qui suit: " . $_POST['message'];
        //echo $message;exit;

        $headers = "From:" . $from;
        if(mail($to,$subject,$message,$headers)){
            $message = "Mail envoyé. Merci " . $name;
        }
        else{
            $message = "Erreur d'envoie";
        }
    endif;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CV</title>
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body>
    <div id="page-top" class="cv__container">
      <nav class="cv__navbar">
          <div class="cv__navbar-img">
              <a href="#">
                  <img src="assets/img/MAT-ANIM.png" alt="Tarhoune Mohamed Amine">
              </a>
          </div>
          <div class="cv__navbar-list">
              <ul>
                  <li class="cv__navbar-list-item">
                      <a href="#" class="cv__navbar-list-link active" data-href="about">
                          à propos de moi
                      </a>
                  </li>
                  <li class="cv__navbar-list-item">
                      <a href="#" class="cv__navbar-list-link" data-href="experience">
                          Expérience
                      </a>
                  </li>
                  <li class="cv__navbar-list-item">
                      <a href="#" class="cv__navbar-list-link" data-href="education">
                          Éducation
                      </a>
                  </li>
                  <li class="cv__navbar-list-item">
                      <a href="#" class="cv__navbar-list-link" data-href="skills">
                          Compétences
                      </a>
                  </li>
                  <li class="cv__navbar-list-item">
                      <a href="#" class="cv__navbar-list-link" data-href="interests">
                          Intérêts
                      </a>
                  </li>
                  <li class="cv__navbar-list-item">
                      <a href="#" class="cv__navbar-list-link" data-href="certifications">
                          Certifications
                      </a>
                  </li>
                  <li class="cv__navbar-list-item">
                      <a href="#" class="cv__navbar-list-link" data-href="contact">
                          Contact
                      </a>
                  </li>
              </ul>
          </div>
      </nav>
      <div class="cv__content">
      <section id="about">
                <h1>
                    Mohamed Amine Tarhouni
                </h1>
                <p>
                J'étais passionné par les jeux vidéos dès mon enfance et je suis très doué par la programmation
                et je suis un étudiant en developpement pour améliorer mes compétences de programmation pour
                que je serai capable d'atteindre mon objectif et créer ma propre jeu vidéo.
                </p>
            </section>
            <section id="experience">
                <h2>
                    Expérience
                </h2>
                <h3>Mes Projets(2020-2021)</h3>
                <p>
                   Sudoku : Prendre une grille et la résoudre si possible.
                </p>
                <p>
                    ASCII-ART : prendre une texte et la transformer en style de graffiti.
                </p>
                <p>
                    ASCII-ART-WEB : lancer un serveur et le relier avec ASCII-ART pour avoir un formulaire dans lequel 
                    on peut manipuler la sortie de texte en choisissant la font,couleur et taille.
                </p>
                <p>
                    Challenge 48H : Le but de ce challenge c'est de finir un projet demandé par un vrai client en moins de 48H.
                   
                </p>
                <p>
                    Challenge 48H(2020-2021) : créer un site web qui contient un formulaire relié à une base de donnée 
                    et dans ce formulaire on peut mettre les caractéristiques d'une image qu'on veut télécharger vers la base
                    et d'avoir la possibilité de la modifier ou la télécharger.
                </p>
                <p>
                    Sauvegarde/Restauration : un script qui permet de sauvegarder les fichiers desirés
                    par les stocker dans une machine distante et on a la possibilité de récuperer ces fichiers
                    après.
                </p>
                <p>
                    CV-ZELDA : Un CV sous forme d'un jeu dans lequel on peut explorer comme si on est
                     en train de jouer The Legend Of Zelda The Minish Cap et en même temps de trouver
                     des informations à propos de moi
                </p>
                <p>
                    Insult Simulator : Recréation du jeu Insult Simulator en utilisant python
                </p>
                <p>
                    Super Mario : Recréation du jeu Super Mario sur le web en utilisant js avec le framework Phaser 3
                </p>
                <p>
                    Brick Breaker : Recréation du jeu Brick Breaker sur le web en utilisant js avec le framework Phaser 3
                </p>
            </section>
            <section id="education">
                <h2>
                    Éducation
                </h2>
                <p>
                   (2018-2020) : Bac Informatique
                </p>
                <p>
                    (2020-2021) : Etudiant en developpement chez Paris Ynov Campus
                </p>
                
            </section>
            <section id="skills">
                <h2>
                    Compétences
                </h2>
                <p>
                Golang,Python,HTML,CSS,Javascript,Bash,MySQL
                </p>
                <p>
                    Editeurs : Visual Studio Code,NotePad++
                </p>
                <p>
                   Langues :  Anglais (très bon niveau) —  Allemand(notions)                   
                </p>

            </section>
            <section id="interests">
                <h2>
                    Intérêts
                </h2>
                <p>
                    Jeux Vidéos
                </p>
                <p>
                    Programmation
                </p>
                <p>
                    Cinéma
                </p>
                <p>
                    Musique
                </p>

            </section>
            <section id="certifications">
                <h2>
                    Certifications
                </h2>
                <p>
                    Baccalauréat scientifique spécialité informatique
                </p>

            </section>
            <section id="contact">
              <h2>
                  Contact
              </h2>
              <form class="cv__form" action="index.php" method="POST">
                  <?php if(isset($message)) :?>
                  <p class="cv--alert cv--alert-success">
                      <?php echo $message;?>
                  </p>
                  <?php endif;?>
                <span class="cv__form-content">
                    <label for="name" class="text-small-uppercase">Nom</label>
                    <input class="text-body" id="name" name="name" type="text" required>
                </span>
                <span class="cv__form-content">
                    <label for="email" class="text-small-uppercase">Email</label>
                    <input class="text-body" id="email" name="email" type="email" required>
                </span>
                <span class="cv__form-content">
                    <label for="message" class="text-small-uppercase">Message</label>
                    <textarea class="text-body" id="message" name="message" required></textarea>
                </span>
                <input class="text-small-uppercase" id="submit" type="submit" value="Envoyer">
                </form>
          </section>
        </div>
    </div>
    <script src="assets/js/main.js"></script>
    <?php if(isset($message)) :?>
    <script type="text/javascript">
        document.getElementById("contact").scrollIntoView();
    </script>
    <?php endif;?>
  </body>
</html>
