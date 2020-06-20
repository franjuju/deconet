<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OffMind</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-pauline.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  </head>
    <body>
      <div class="home-wrapper">
        <?php
            $name = $_POST['name'];
            $bdd = new PDO('mysql:host=localhost;dbname=DB_Deconnet;charset=utf8', 'root', 'root');
            $contenu = $bdd->query('SELECT * FROM emotion WHERE name = :name');
            while($donnees = $contenu->fetch())
              {
                echo $donnees['name'];
              } ?> 
              </br>
              <?php echo $donnees['description']
              ?>
        
      </div>
    </body>
</html>