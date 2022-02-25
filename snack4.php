<?php
/*
 Snack 4
 Prendere un paragrafo abbastanza lungo,
 contenente diverse frasi. 
 Prendere il paragrafo e suddividerlo in tanti paragrafi in base ai punti: ogni punto un nuovo paragrafo.
  */


  $paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
  Incidunt accusamus dignissimos voluptatem iure ea magni? Accusantium, 
  praesentium ex enim eaque ipsum nostrum eveniet sit voluptas quas? 
  Aliquid placeat deleniti odio.Lorem ipsum dolor sit amet consectetur adipisicing elit.
   Tenetur aut dolor unde quis quaerat adipisci ducimus est tempore ut debitis. 
   magnam incidunt voluptates quo quia placeat excepturi voluptatem doloremque! Sed!';
   
  $list_paragraph = explode('.',$paragraph);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack4</title>
</head>
<body>
    <p><?= $paragraph ?></p>
    <div>-----------------------------------------------------------------</div>
    <?php
        for($i=0;$i<count($list_paragraph);$i++):
    ?>
    <p><?= $list_paragraph[$i] ?></p>
    <hr>
    <?php
        endfor;
    ?>
    
</body>
</html>