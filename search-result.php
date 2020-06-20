<?php
    $name = $_GET['name'];

    try {
      $objetPdo = new PDO('mysql:host=localhost;dbname=DB_deconnet', 'root', 'root');
      $objetPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
  
    //Préparation de la requête
    $pdoStat = $objetPdo->prepare("SELECT * FROM emotion WHERE name = '$name'");
    
  
    //execution de la requete
    $executeIsOk = $pdoStat->execute();
  
    //Récupération des résultats
    $data = $pdoStat->fetchAll();
    // var_dump($data);
    
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OffMind</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-pauline.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/multiple.js/0.0.1/multiple.min.css" integrity="sha256-8V5YphE5KeZqON9KOAVgvoqUG+cUCNGicW2wEB4gwaU=" crossorigin="anonymous" />
  </head>
    <body>
      <a href="brain.html"><img class="close-search" src="img/close.png"></a>
      <h1><?php foreach ($data as $element) {echo $element['name'];} ?></h1>
      <p class="description-emotion"><?php foreach ($data as $element) {echo $element['description'];} ?></p>
      <div class="jauge">
        <div class="jauge-detail jauge1">
          <div class="hider"></div>
        </div>
        <div class="jauge-detail jauge2">
          <div class="hider"></div>
        </div>
        <div class="jauge-detail jauge3">
          <div class="hider"></div>
        </div>
        <div class="jauge-detail jauge4">
          <div class="hider active"></div>
        </div>
        <div class="jauge-detail jauge5">
          <div class="hider active"></div>
        </div>
        <div class="jauge-detail jauge6">
          <div class="hider active"></div>
        </div>
      </div>
      <div class="cta-container">
        <a class="button-reduce" href="#">Reduce emotion</a>
        <a class="button-add" href="#">Add emotion</a>
      </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/multiple.js/0.0.1/multiple.min.js" integrity="sha256-4+vj4FcENMARxlfF1mJhD1UoK8TQDUKRoFtJO+Z0TIU=" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</html>