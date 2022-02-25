<?php
    /* Snack 1
Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione)
 che name sia più lungo di 3 caratteri, 
 che mail contenga un punto e una chiocciola e che age sia un numero.
  Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */

  $name= $_GET['name'] ?? '';
  $mail= $_GET['mail'] ?? '';
  $age= $_GET['age'] ?? '';

  var_dump($name);
  var_dump($mail);
  var_dump($age);

  $isName = $isMail = $isAge = false;
  

  if($name && strlen($name) > 3)
  {
    $isName = true;
  }

  if($mail && strpos($mail,'@') !== false && strpos($mail,'.') !== false)
  {
    $isMail = true;
  }
  if($age && is_numeric($age))
  {
    $isAge = true;
  }

  var_dump($isName);
  var_dump($isMail);
  var_dump($isAge);

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <title>Snack1</title>
</head>
<body>
    
        <div class="text-center">
            <?php if($isName && $isMail && $isAge):?>
            <div class="text-success">
                <i class="fas fa-check fa-10x"></i>
                <h2>ACCESSO RIUSCITO</h2>
            </div>
            <?php else: ?>
            <div class="text-danger">
                <i class="fas fa-times fa-10x"></i>
                <h2>ACCESSO NEGATO</h2>
            </div>
            <?php endif;?>
       
        </div>
</body>
</html>