<?php
//Données de configuration
$config=array(
    'DB_HOST'=>'wf3.progweb.fr',
    'DB_USER'=>'adrienpvm',
    'DB_PASSWORD'=>'webforce3',
    'DB_DATABASE'=>'adrienpvm_sql0',
    'MAIL_HOST' => 'smtp.gmail.com',
    'MAIL_USERNAME' => 'adrien.pvm',
    'MAIL_PASSWORD' => 'Camille933963'
);

//Inclusions de fichiers
require_once __DIR__.'/../inc/db.php';
require_once __DIR__.'/../inc/functions.php';
//Inclusion de composer
require_once __DIR__.'/../vendor/autoload.php';

//Social Networks
//Create a Page instance with the url information
/*$socialLinksPage = new SocialLinks\Page([
    'url' => 'localhost',
    'title' => 'Projet-toto',
    'text' => 'Extended page description',
    'image' => 'http://mypage.com/image.png',
    'icon' => 'http://mypage.com/favicon.png',
    'twitterUser' => '@twitterUser'
]);*/
