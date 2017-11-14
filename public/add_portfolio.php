<?php
//J'inclus la config
require __DIR__.'/../inc/config.php';

if (!empty($_POST)) {
    $title=isset($_POST['title'])? $_POST['title']:'';
    $text=isset($_POST['text'])? $_POST['text']:'';
    $image=isset($_POST['image'])? $_POST['image']:'';
    $link=isset($_POST['link'])? $_POST['link']:'';
// Traiter les données
    $title = strtoupper(trim(strip_tags($title))); // retire les espaces au debut et à la fin
    $image = strtolower(trim(strip_tags($image)));
    $link = strtolower(trim(strip_tags($link))); 

    $formOk = true;

    if (empty($title)) {
		echo 'Title empty<br>';
		$formOk = false;
    }
    if (empty($text)) {
		echo 'Description empty<br>';
		$formOk = false;
    }
    if (empty($image)) {
		echo 'Image URL empty<br>';
		$formOk = false;
    }
    if (empty($link)) {
		echo 'Link to URL empty<br>';
		$formOk = false;
    }
    
    if ($formOk) {
        $sql='INSERT INTO portfolio (por_title, por_text, por_image, por_link)
        VALUES (:title, :text, :image, :link)
        ';

        $pdoStatement=$pdo->prepare($sql);
        $pdoStatement->bindValue(':title', $title, PDO::PARAM_STR);
        $pdoStatement->bindValue(':text', $text, PDO::PARAM_STR);
        $pdoStatement->bindValue(':image', $image, PDO::PARAM_STR);
        $pdoStatement->bindValue(':link', $link, PDO::PARAM_STR);

        $pdoStatement->execute();

        header('Location: admin.php');
    }
}