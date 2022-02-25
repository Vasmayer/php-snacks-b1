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
         ]
?>