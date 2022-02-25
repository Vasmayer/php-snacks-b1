<?php
/* 
Snack 3
Creare un array con 15 numeri casuali,
 tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.
  */

  $random_numbers = [];
  $numbers = 15;
  
  while(count($random_numbers)<$numbers)
  {
    $random_number = rand(1,100);
    if(!in_array($random_number,$random_numbers))
    {
        $random_numbers[] = $random_number;
    }
    
  }

  var_dump($random_numbers);
?>