<?php
//J'inclus la config
require __DIR__.'/../inc/config.php';


//TODO Pleins de choses

if (!empty($_POST)) {
    $fname=isset($_POST['fname'])? $_POST['fname']:'';
    $lname=isset($_POST['lname'])? $_POST['lname']:'';
    $email=isset($_POST['email'])? $_POST['email']:'';
    $text=isset($_POST['text'])? $_POST['text']:'';

    
// Traiter les données
    $fname = ucfirst(trim(strip_tags($fname)));
    $lname = strtoupper(trim(strip_tags($lname))); // retire les espaces au debut et à la fin
    $email = trim(strip_tags($email));
    $text = strip_tags($text);

// Validation des données
	$formOk = true;
    if (empty($fname)) {
        echo 'Prénom vide<br>';
        $formOk = false;
    }
    else if (strlen($fname) < 2) {
        echo 'Prénom incorrect<br>';
        $formOk = false;
    }
	if (empty($lname)) {
		echo 'Nom vide<br>';
		$formOk = false;
	}
	else if (strlen($lname) < 2) {
		echo 'Nom incorrect<br>';
		$formOk = false;
	}
	if (empty($email)) {
		echo 'Email vide<br>';
		$formOk = false;
	}
// Je valide l'email
	else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
		echo 'Email incorrect<br>';
		$formOk = false;
    }
    if (strlen($text)>500) {
        echo 'Message trop long';
        $formOk = false;
    }

// Si aucune erreur
	if ($formOk) {
        $to="adrien.pvm@gmail.com";
        $subject="Message from your PERSONAL WEBSITE AdrienPVM";
        $htmlContent="
        ***********************************
        *****Message sent from: <br>
        *****$fname $lname <br>
        *****$email <br>
        *****<br>
        *****<br>
        *****Message: <br>
        ***********************************
        <br>
        $text
        ";
        sendEmail($to, $subject, $htmlContent, $textContent='');

        header('Location: contact_sent.php');

	}
}


//A la fin, j'affiche
require_once __DIR__.'/../view/header.php';
require_once __DIR__.'/../view/contact.php';
require_once __DIR__.'/../view/footer.php';