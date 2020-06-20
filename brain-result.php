<?php $nameBrain = $_GET['name']; ?>
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
      <p style='color:white'><?php echo $nameBrain ?></p>
        <?php
            $results = mysql_query("SELECT * FROM next WHERE name=$nameBrain");    
            while ($row = mysql_fetch_array($results))     
            {       
                $url = $row['url'];
                echo $url; //Outputs: 2
            }
            ?>
    </body>
</html>