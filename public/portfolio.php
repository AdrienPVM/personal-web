<?php
//J'inclus la config
require __DIR__.'/../inc/config.php';


//TODO Pleins de choses
$sql='SELECT *
FROM portfolio
ORDER BY por_id DESC
';

$pdoStatement=$pdo->query($sql);
$result=$pdoStatement->fetchAll(PDO::FETCH_ASSOC);

//A la fin, j'affiche
require_once __DIR__.'/../view/header.php';
require_once __DIR__.'/../view/portfolio.php';
require_once __DIR__.'/../view/footer.php';