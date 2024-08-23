<?php

// prendiamo il contenuto del file json e lo trasformiamo in un stringa
$string = file_get_contents('to-do-list.json');

// var_dump($string);

// trasformiamo la stringa in un elemento php
$list = json_decode($string);


// qui va la logica della manipolazione e aggiornamento del file json

// restituisco il json per javascript



// modifico header del file in modo che venga interpretato come json
header('Content-type: application/json');
// stampo l'elemento php sottoforma di stringa
echo json_encode($list);
?>