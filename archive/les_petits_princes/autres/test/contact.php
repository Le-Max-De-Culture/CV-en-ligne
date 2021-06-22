<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!--lien fichier externe!-->
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="css/contact/style.css">
  <link rel="stylesheet" media="screen and (max-width: 1023px)" href="css/1023max/index.css" />
  <!--fin fichier externe!-->
  <?php // REVIEW: mama ?>
<meta name="Keywords" content="Les Petis Princes, lespetitsprinces, les petits princes, les-petits-princes">
<meta name="description" content="">
<meta name="Language" content="FR;fr">
<meta name="Date" content="2018">
<meta name="Droits" content="Maxime LUCE">
<?php // REVIEW: fin mama ?>
  <title>Les Petits Princes</title>
  <link href="image/logo.png" rel="shortcut icon" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="title" content="les-petits-princes.fr"/>
<!--    <meta name="le-max-de-culture.fr" content=""/>
  <meta name="description" content=""/>
  <meta name="keywords" content=""/>!-->

  <meta name="copyright" content="©LeMaxDeCulture"/>
  <meta name="author" content="Maxime LUCE"/>
</head>

  <body>
    <?php include('header.php') ?>

    <?php
            /*
            	********************************************************************************************
            	CONFIGURATION
            	********************************************************************************************
            */
            // destinataire est votre adresse mail. Pour envoyer à plusieurs à la fois, séparez-les par une virgule
            $destinataire = 'lemaxdeculture.contact@gmail.com, alagandre17@csndnevers.net';

            // copie ? (envoie une copie au visiteur)
            $copie = 'non';

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
            	$array_pictures[$j]['question'] = "Quelle est la cinquième lettre du mot Astux";
            	$array_pictures[$j]['answer'] = "x";
            	$j++;

            	$array_pictures[$j]['num'] = $j;
            	$array_pictures[$j]['question'] = "Ecrire 2 en lettres";
            	$array_pictures[$j]['answer'] = "deux";
            	$j++;

            	$array_pictures[$j]['num'] = $j;
            	$array_pictures[$j]['question'] = "Ecrire 12 en lettres";
            	$array_pictures[$j]['answer'] = "douze";
            	$j++;

              $array_pictures[$j]['num'] = $j;
              $array_pictures[$j]['question'] = "Quelle est la couleure du cheval blanc d'Henry IV?";
              $array_pictures[$j]['answer'] = "blanc";
              $j++;

              $array_pictures[$j]['num'] = $j;
              $array_pictures[$j]['question'] = "1+1=? : il n'y pas de piège :)";
              $array_pictures[$j]['answer'] = "2";
              $j++;

              $array_pictures[$j]['num'] = $j;
              $array_pictures[$j]['question'] = "Ecrire 4 en lettres";
              $array_pictures[$j]['answer'] = "quatre";
              $j++;

              $array_pictures[$j]['num'] = $j;
              $array_pictures[$j]['question'] = "1+3=? : il n'y pas de piège :)";
              $array_pictures[$j][''] = "4";
              $j++;

              $array_pictures[$j]['num'] = $j;
              $array_pictures[$j]['question'] = "2+2=? : il n'y pas de piège :)";
              $array_pictures[$j][''] = "4";
              $j++;

              $array_pictures[$j]['num'] = $j;
              $array_pictures[$j]['question'] = "Ecrire 11 en lettres";
              $array_pictures[$j][''] = "onze";
              $j++;

              $array_pictures[$j]['num'] = $j;
              $array_pictures[$j]['question'] = "2+3=?";
              $array_pictures[$j][''] = "5";
              $j++;

              $array_pictures[$j]['num'] = $j;
              $array_pictures[$j]['question'] = "Ecrire 3 en lettres";
              $array_pictures[$j][''] = "trois";
              $j++;

              $array_pictures[$j]['num'] = $j;
              $array_pictures[$j]['question'] = "Quelle est la deuxième lettre du mot Apolux?";
              $array_pictures[$j][''] = "p";
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
            	$nospam = NoSpamQuestion();

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
            $objet      = (isset($_POST['objet']))      ? Rec($_POST['objet'])      : '';
            $message    = (isset($_POST['message']))    ? Rec($_POST['message'])    : '';
            $antispam_h = (isset($_POST['antispam_h'])) ? Rec($_POST['antispam_h']) : '';
            $antispam_r = (isset($_POST['antispam_r'])) ? Rec($_POST['antispam_r']) : '';

            // On va vérifier les variables et l'email ...
            $email = (IsEmail($email)) ? $email : ''; // soit l'email est vide si erroné, soit il vaut l'email entré
            $err_formulaire = false; // sert pour remplir le formulaire en cas d'erreur si besoin

            if (isset($_POST['envoi']))
            {
            	// On demande la vraie réponse
            	$verif_nospam = NoSpamQuestion('ans', $antispam_r);

            	if (strtolower($antispam_h) != strtolower($verif_nospam['answer']))
            	{
            		// le formulaire s'arrête ici
            		echo '<p>Vous n\'avez pas répondu correctement à la question Antispam ...</p>';
            	}
            	else
            	{
            		if (($nom != '') && ($email != '') && ($objet != '') && ($message != ''))
            		{
            			// les 4 variables sont remplies, on génère puis envoie le mail
            			$headers  = 'MIME-Version: 1.0' . "\r\n";
            			$headers .= 'From:'.$nom.' <'.$email.'>' . "\r\n" .
            				'Reply-To:'.$email. "\r\n" .
            				'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .
            				'Content-Disposition: inline'. "\r\n" .
            				'Content-Transfer-Encoding: 7bit'." \r\n" .
            				'X-Mailer:PHP/'.phpversion();

            			// envoyer une copie au visiteur ?
            			if ($copie == 'oui')
            			{
            				$cible = $destinataire.';'.$email;
            			}
            			else
            			{
            				$cible = $destinataire;
            			};

            			// Remplacement de certains caractères spéciaux
            			$message = str_replace("&#039;","'",$message);
            			$message = str_replace("&#8217;","'",$message);
            			$message = str_replace("&quot;",'"',$message);
            			$message = str_replace('<br>','',$message);
            			$message = str_replace('<br />','',$message);
            			$message = str_replace("&lt;","<",$message);
            			$message = str_replace("&gt;",">",$message);
            			$message = str_replace("&amp;","&",$message);

            			// Envoi du mail
            			$num_emails = 0;
            			$tmp = explode(';', $cible);
            			foreach($tmp as $email_destinataire)
            			{
            				if (mail($email_destinataire, $objet, $message, $headers))
            					$num_emails++;
            			}

            			if ((($copie == 'oui') && ($num_emails == 2)) || (($copie == 'non') && ($num_emails == 1)))
            			{
            				echo '<p>'.$message_envoye.'</p>';
            			}
            			else
            			{
            				echo '<p>'.$message_non_envoye.'</p>';
            			};
            		}
            		else
            		{
            			// une des 3 variables (ou plus) est vide ...
            			echo '<p>'.$message_formulaire_invalide.'</p>';
            			$err_formulaire = true;
            		};
            	};
            }; // fin du if (!isset($_POST['envoi']))

            if (($err_formulaire) || (!isset($_POST['envoi'])))
            {
            	// afficher le formulaire
            	echo '
              <div class="centre_form">
              <div class="formulaire">
                <div>
            	<form id="contact" method="post" class="formulaire" action="'.$form_action.'">
            	<fieldset class="nom_mail">
              <legend class="coordonnees">Vos coordonnées</legend>
            		<p class="nom">
                <label for="nom">Nom et prénom :</label>
                <input type="text" id="nom" class="nom_saisie" placeholder="Votre nom" name="nom" value="'.stripslashes($nom).'" tabindex="1" />
                </p>
            		<p class="mail">
                <label for="email">Email* :</label>
                <input type="text" id="email" required placeholder="Votre adresse mail" class="email_saisie" name="email" value="'.stripslashes($email).'" tabindex="2" />
                </p>
            	</fieldset>

            	<fieldset class="objet_mail">
              <legend class="message">Votre message :</legend>
            		<p class="objet">
                <label for="objet">Objet :</label>
                <input type="text" id="objet" placeholder="Votre objet" class="objet_saisie" name="objet" value="'.stripslashes($objet).'" tabindex="3" />
                </p>
            		<p class="message">
                <label for="message">Message :</label>
                <textarea id="message" class="message_saisie" placeholder="Votre message" name="message" tabindex="4" cols="60" rows="8">'.stripslashes($message).'</textarea>
                </p>
            	</fieldset>

            	<fieldset class="antispam">
              <legend class="antispam">Antispam*</legend>
            		<p class="antispam">
                <label for="antispam_h">'.$nospam['question'].'</label>
                <input type="text" name="antispam_h" required placeholder="Votre réponse" id="antispam_h" class="antispam_saisie" />
                <input type="hidden" name="antispam_r" value="'.$nospam['num'].'" />
                </p>
            	</fieldset>

            	<div style="text-align:center;">
              <input type="submit" name="envoi" class="envoi" value="Envoyer le message" /></div>
            	</form>
              * : champs obligatoires
            </div>
              </div>
                </div>
               ';
            };
            ?>

        <?php include('footer.php'); ?>
</body>
</html>
