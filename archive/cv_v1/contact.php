<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact</title>
    <meta name="title" content="Contact"/>
    <?php
    include "./assets/partials/head.php"
     ?>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>


    <link rel="stylesheet" href="./assets/stylesheets/contact.css">
  </head>
  <body>

    <?php
    include "./assets/partials/header.php"
     ?>
     <section id="title_page">
     <h2>Me Contacter</h2>
   </section>

     <section id="global_container">
       <?php
       include "./assets/partials/global_left.php"
        ?>
        <section id="right">
          <!--<p>Le formulaire ne fonctionne pas. Vous pouvez me contacter ici en attendant : <a href="https://le-max-de-culture.fr/fr/contact/" target="_blank">Contact</a> </p>!-->
          <?php

                    /*
               ********************************************************************************************
               CONFIGURATION
               ********************************************************************************************
             */
                    // destinataire est votre adresse mail. Pour envoyer à plusieurs à la fois, séparez-les par une virgule
                    $objet_before = "";

                    $destinataire = 'contact@maxime-luce.fr';


                    // copie ? (envoie une copie au visiteur)
                    $copie      = 'non';


                    // Action du formulaire (si votre page a des paramètres dans l'URL)
                    // si cette page est index.php?page=contact alors mettez index.php?page=contact
                    // sinon, laissez vide
                    $form_action = '';

                    // Messages de confirmation du mail
                    $message_envoye = "Votre message m'est bien parvenu !";
                    $message_non_envoye = "L'envoi du mail a échoué, veuillez réessayer s'il vous plaît.";

                    // Message d'erreur du formulaire
                    $message_formulaire_invalide = "Vérifiez que tous les champs soient bien remplis et que l'email soit sans erreur.";





                    /*
              * NoSpamQuestion affiche une question pour la validation d'un formulaire ...
              * $mode, mode question ou réponse par défaut tirage au sort de question {string}
              * $answer, lors de la demande d'une réponse à la question numero tant ... {int}
              *
              * @returns array
              *
              * Ajouter une question :
              * copier/coller ces lignes et remplir le contenu entre guillemets doubles :
              *
              * $array_pictures[$j]['num'] = $j; // ne pas changer cette ligne
              * $array_pictures[$j]['question'] = "mettre ici la question (correspondant à l'image si vous utilisez une image)";
              * $array_pictures[$j]['answer'] = "mettre ici la réponse à l'énigme";
              * $j++; // ne pas oublier cette ligne dans la copie :-)
              *
              * C'est tout. Question suivante ? :-)
              *
              */
                    function NoSpamQuestion($mode = 'ask', $answer = 0)
                    {
                        $array_pictures = array(); $j = 0;

                        $array_pictures[$j]['num'] = $j;
                        $array_pictures[$j]['question'] = 'Ecrire "humain" pour vérifier que vous n\'êtes pas un robot';
                        $array_pictures[$j]['answer'] = "humain";
                        $j++;
                        $array_pictures[$j]['num'] = $j;
                        $array_pictures[$j]['question'] = "Ecrire la réponse au calcul 3+3";
                        $array_pictures[$j]['answer'] = "6";
                        $j++;
                        $array_pictures[$j]['num'] = $j;
                        $array_pictures[$j]['question'] = "Ecrire la réponse au calcul 2+2";
                        $array_pictures[$j]['answer'] = "4";
                        $j++;

                        //          $array_pictures[$j]['num'] = $j;
                        //        $array_pictures[$j]['question'] = "Quelle est la question?";
                        //      $array_pictures[$j][''] = "réponse de la question précédente, la casse n'est pas respecter";
                        //    $j++;

                        if ($mode != 'ans')
                        {
                            // on est en mode 'tirer au sort', on tire une image aléatoire
                            $lambda = rand(0, count($array_pictures)-1);
                            return $array_pictures[$lambda];
                        }
                        else
                        {
                            // on demande une vraie réponse
                            foreach($array_pictures as $i => $array)
                            {
                                if ($i == $answer)
                                {
                                    return $array;
                                    break;
                                };
                            };
                        }; // Fin if ($mode != 'ans')
                    };
                    /*
               ********************************************************************************************
               FIN DE LA CONFIGURATION
               ********************************************************************************************
             */
                    // on tire au sort une question
                    //$nospam = NoSpamQuestion();
                    /*
              * cette fonction sert à nettoyer et enregistrer un texte
              */
                    function Rec($text)
                    {
                        $text = htmlspecialchars(trim($text), ENT_QUOTES);
                        if (1 === get_magic_quotes_gpc())
                        {
                            $text = stripslashes($text);
                        }

                        $text = nl2br($text);
                        return $text;
                    };

                    /*
              * Cette fonction sert à vérifier la syntaxe d'un email
              */
                    function IsEmail($email)
                    {
                        $value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
                        return (($value === 0) || ($value === false)) ? false : true;
                    }

                    // formulaire envoyé, on récupère tous les champs.
                    $nom        = (isset($_POST['nom']))        ? Rec($_POST['nom'])        : '';
                    $email      = (isset($_POST['email']))      ? Rec($_POST['email'])      : '';
                    $objet_saisie = (isset($_POST['objet']))      ? Rec($_POST['objet'])      : '';
                    $message    = (isset($_POST['message']))    ? Rec($_POST['message'])    : '';
                    $antispam_h = (isset($_POST['antispam_h'])) ? Rec($_POST['antispam_h']) : '';
                    $antispam_r = (isset($_POST['antispam_r'])) ? Rec($_POST['antispam_r']) : '';

                    // On va vérifier les variables et l'email ...
                    $email = (IsEmail($email)) ? $email : ''; // soit l'email est vide si erroné, soit il vaut l'email entré
                    $err_formulaire = false; // sert pour remplir le formulaire en cas d'erreur si besoin

                    if (isset($_POST['envoi']))
                    {
                      // Ma clé privée
                    $secret = "";
                    // Paramètre renvoyé par le recaptcha
                    $response = $_POST['g-recaptcha-response'];
                    // On récupère l'IP de l'utilisateur
                    $remoteip = $_SERVER['REMOTE_ADDR'];
                    $api_url = "https://www.google.com/recaptcha/api/siteverify?secret="
                        . $secret
                        . "&response=" . $response
                        . "&remoteip=" . $remoteip ;

                    $decode = json_decode(file_get_contents($api_url), true);





                    if ($decode['success'] == true) {

                      // C'est un humain
                      $secu = 1;
                    }
                    else {
                      // C'est un robot ou le code de vérification est incorrecte
                      $secu = 0;
                    }
                    if (($nom != '') && ($email != '') && ($objet_saisie != '') && ($message != '') && ($secu = 1))
                    {
                        // les 4 variables sont remplies, on génère puis envoie le mail
                        $headers  = 'MIME-Version: 1.0' . "\r\n";
                        $headers .= 'From:' . $nom . ' <'.$email.'>' . "\r\n" .
                            'Reply-To:'.$email. "\r\n" .
                            'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .
                            'Content-Disposition: inline'. "\r\n" .
                            'Content-Transfer-Encoding: 7bit'." \r\n" .
                            'X-Mailer:PHP/'.phpversion();

                        // envoyer une copie au visiteur ?
                        if ($copie == 'oui')
                        {
                            $cible = $destinataire.','.$email;
                        }
                        else
                        {
                            $cible = $destinataire;
                        }

                        // Remplacement de certains caractères spéciaux du message
                        $message = str_replace("&#039;","'",$message);
                        $message = str_replace("&#8217;","'",$message);
                        $message = str_replace("&quot;",'"',$message);
                        $message = str_replace('<br>','',$message);
                        $message = str_replace('<br />','',$message);
                        $message = str_replace("&lt;","<",$message);
                        $message = str_replace("&gt;",">",$message);
                        $message = str_replace("&amp;","&",$message);

                        // Remplacement de certains caractères spéciaux de l'objet
                        $objet_saisie = str_replace("&#039;","'",$objet_saisie);
                        $objet_saisie = str_replace("&#8217;","'",$objet_saisie);
                        $objet_saisie = str_replace("&quot;",'"',$objet_saisie);
                        $objet_saisie = str_replace('<br>','',$objet_saisie);
                        $objet_saisie = str_replace('<br />','',$objet_saisie);
                        $objet_saisie = str_replace("&lt;","<",$objet_saisie);
                        $objet_saisie = str_replace("&gt;",">",$objet_saisie);
                        $objet_saisie = str_replace("&amp;","&",$objet_saisie);

                        // Envoi du mail
                        $objet_after = $objet_before . $objet_saisie;
                        $num_emails = 0;
                        $tmp = explode(',', $cible);
                        foreach($tmp as $email_destinataire)
                        {
                            if (mail($email_destinataire, $objet_after, $message, $headers))
                                $num_emails++;

                        }

                        if ((($copie == 'oui') && ($num_emails == 2)) || (($copie == 'non') && ($num_emails == 1)))
                        {
                            echo '<p>'.$message_envoye.'</p>';
                        }
                        else
                        {

                            echo '<p>'.$message_non_envoye.'</p>';

                            mail($destinataire, $objet_after, $message, $headers);

                            echo "</p>email : ".$email_destinataire."</p>";
                            echo "<p> objet : ".$objet_after."</p>";
                            echo "<p> message : ".$message."</p>";
                            echo "<p> header : ".$headers."</p>";
                            if ($secu = 0) {
                              echo '<p>Le captcha n\'a pas été correctement compléter</p>';
                            }
                        };
                    }
                    else
                    {
                      // une des 3 variables (ou plus) est vide ...
                      if ($secu = 0) {
                          echo '<p>Le captcha n\'a pas été correctement compléter</p>';
                          $err_formulaire = true;
                      }
                          echo '<p>' . $message_formulaire_invalide . '</p>';
                          $err_formulaire = true;
                    };

                  }

                    if (($err_formulaire) || (!isset($_POST['envoi'])))
                    {
                        // afficher le formulaire
                        echo '
               <form id="contact" method="post" class="formulaire" action="'.$form_action.'">


                 <input type="text" id="nom" class="nom_saisie" placeholder="Nom" required name="nom" value="'.stripslashes($nom).'" tabindex="1" />

                 <input type="text" id="email" required required placeholder="Adresse mail" class="email_saisie" name="email" value="'.stripslashes($email).'" tabindex="2" />

                 <input type="text" id="objet" placeholder="Objet : " class="objet_saisie" name="objet" value="'. stripslashes($objet_saisie) .'"/>

                 <textarea id="message" required placeholder="Votre message" name="message" value="'.stripslashes($message).'"></textarea>

                 <!--<p class="antispam">
                 <label for="antispam_h">'
                 .//$nospam['question'].
                 '</label>
                 <input type="text" name="antispam_h" required placeholder="Votre réponse" id="antispam_h" class="antispam_saisie" />
                 <input type="hidden" name="antispam_r" value="'
                 .//$nospam['num'].
                 '" />
                 </p>!-->
             <div class="g-recaptcha" data-sitekey="6Lf227oUAAAAAPL9B1BqvP-18Wp38_D1tNCd606I"></div>

               <input type="submit" id="send" name="envoi" class="envoi" value="Envoyer le message" /></div>
               </form>
';
                    };
                    ?>
        </section>
     </section>
<?php
include "./assets/partials/footer.php"
 ?>
      <?php
      include "./assets/partials/foot.php"
       ?>

  </body>
</html>
