<?php

// prendiamo il contenuto del file json e lo trasformiamo in un stringa
$string = file_get_contents('to-do-list.json');

// trasformiamo la stringa in un elemento php
$list = json_decode($string);

// se in post mi viene inviata la chiave item, aggiorno il json
if(isset($_POST['item'])){
    // do un valore all'elemento che ho ricevuto
    $item = $_POST['item'];
    // aggiungo l'elemento alla lista
    $list[] = $item;
    // sovrascrivo il json con la lista aggiornata
    file_put_contents('to-do-list.json', json_encode($list));
}

// se mi viene inviato l'index da rimuovere
if(isset($_POST['indexToRemove'])){
    // do un valore all'elemento ricevuto
    $index = $_POST['indexToRemove'];
    // rimuovo l'elemento dalla lista
    array_splice($list, $index, 1);
    // sovrascrivo il json con la lista aggiornata
    file_put_contents('to-do-list.json', json_encode($list));

}


// modifico header del file in modo che venga interpretato come json
header('Content-type: application/json');
// stampo l'elemento php sottoforma di stringa
echo json_encode($list);
?>