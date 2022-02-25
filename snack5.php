<?php
/* 

Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i
 PM in un rettangolo verde.
 */

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

$keys_db = array_keys($db); 

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
<?php
        for($i=0;$i<count($keys_db);$i++):
    ?>        
        <h2><?= $keys_db[$i]?></h2>
        <?php
            if($keys_db[$i] === 'teachers'):
            ?>
                <div class="bg-secondary">
            <?php
            endif;
            if($keys_db[$i] === 'pm'):
            ?>
                <div class="bg-success">
            <?php        
            endif;
            ?>
        <ul>
            <?php
            for($j=0;$j<count($db[$keys_db[$i]]);$j++):
            ?>
            <li>
            <ul>
                <?php
                $keys_posts = array_keys($db[$keys_db[$i]][$j]); 
                for($k=0;$k<count($keys_posts);$k++):
                ?>
                       <?= $db[$keys_db[$i]][$j][$keys_posts[$k]] ?>
                <?php
                endfor;
                ?>
            </ul>
            </li> 
            <?php  
            endfor;  
            ?>
        </ul>  
        </div> 
        <?php    
        endfor;
        ?>
</body>
</html>