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
    <body style="background-color: white">
        <?php
            $nameSearch = $_GET['name'];

            try {
              $objetPdo = new PDO('mysql:host=localhost;dbname=DB_deconnet', 'root', 'root');
              $objetPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            }
            catch(PDOException $e)
            {
                echo "Connection failed: " . $e->getMessage();
            }
          
            //Préparation de la requête
            $pdoStat = $objetPdo->prepare("SELECT * FROM emotion WHERE name = '$nameSearch'");
            
          
            //execution de la requete
            $executeIsOk = $pdoStat->execute();
          
            //Récupération des résultats
            $data = $pdoStat->fetchAll();
            // var_dump($data);
            foreach ($data as $element) {
              echo $element['description'];
            } 
        ?>

    </body>
</html>