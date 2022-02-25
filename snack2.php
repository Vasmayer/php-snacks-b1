<?php
/*Snack 2
Creare un array di array. 
Ogni array figlio avrà come chiave una data in questo formato: 
    DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
    Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
*/


$posts = [
                '01-02-2022'=>[
                    [   'title' => 'Post 1',
                        'author' => 'Name Author 1',
                        'text' => 'Text post 1',
                    ],
                    [   'title' => 'Post 2',
                        'author' => 'Name Author 2',
                        'text' => 'Text post 2',
                    ],
                    [   'title' => 'Post 3',
                        'author' => 'Name Author 3',
                        'text' => 'Text post 3',
                    ]
                ],
                '15-02-2022'=>[
                    [   'title' => 'Post 4',
                        'author' => 'Name Author 4',
                        'text' => 'Text post 4',
                    ],
                    [   'title' => 'Post 5',
                        'author' => 'Name Author 5',
                        'text' => 'Text post 5',
                    ]
                ],
                '30-02-2022'=>[
                    [   'title' => 'Post 6',
                        'author' => 'Name Author 6',
                        'text' => 'Text post 6',
                    ]
                ]
                ];

       /*  var_dump($posts); */
        $keys_date = array_keys($posts); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack2</title>
</head>
<body>
    <?php
        for($i=0;$i<count($keys_date);$i++):
    ?>        
        <h2><?= $keys_date[$i]?></h2>
        <ul>
            <?php
            for($j=0;$j<count($posts[$keys_date[$i]]);$j++):
            ?>
            <li>
            <ul>
                <?php
                $keys_posts = array_keys($posts[$keys_date[$i]][$j]); 
                for($k=0;$k<count($keys_posts);$k++):
                ?>
                       <li> <?= $posts[$keys_date[$i]][$j][$keys_posts[$k]] ?></li>
                <?php
                endfor;
                ?>
            </ul>
            </li> 
            <?php  
            endfor;  
            ?>
        </ul>   
        <?php    
        endfor;
        ?>
    
</body>
</html>