<?php

// $numero = [3,3,4,12,12,12,12,121,2654,3211,298776];

// for ($i = 0; $i < count($numero); $i++) {
//     if ($numero[$i] % 2 == 0) {
//         $somma = array_sum($numero);
//         $media = $somma / count($numero);

//         echo "La media è: " . $media . "e la somma è " . $somma . "\n";
//     }else {
//         echo $numero[$i] ." è numeri sono dispari \n";
//     }
// }


$persona = [
    'nome' => 'Mario',
    'cognome' => 'Rossi',
    'genere' => 'M',
];



foreach ($persona as $chiave => $valore) {
    //echo $chiave . "=>" . $valore . "\n";
}






$persone = [
    [
        'nome' => 'Mario',
        'cognome' => 'Rossi',
        'genere' => 'M',

    ],
    [
        'nome' => 'Giada',
        'cognome' => 'Blu',
        'genere' => 'F',

    ],
    [
        'nome' => 'Giorgio',
        'cognome' => 'Verde',
        'genere' => 'M',

    ],
    [
        'nome' => 'Rosa',
        'cognome' => 'Rossi',
        'genere' => 'F',

    ],
];

//  print_r($persone);
// echo $persone[0]['nome'] . "\n";
// echo $persone[1]['nome'] . "\n";
// echo $persone[2]['nome'] . "\n";


for ($i = 0; $i < count($persone[$i]); $i++) {

    if ($persone[$i]['genere'] == "M") {
        echo  'Buongiorno Sig.  ' . $persone[$i]['nome'] . " " . $persone[$i]['cognome'] . "\n";
    } elseif ($persone[$i]['genere'] == 'F') {
        echo  'Buongiorno Sig.ra  ' . $persone[$i]['nome'] . " " . $persone[$i]['cognome'] . "\n";
    } else {
        echo "Buongiorno \n";
    }
}




function FizzBuzz($n){

for ($i = 0; $i <= $n; $i++) {

    if ($i % 3 == 0 && $i % 5 == 0) {
        echo ('fizz');
    } elseif ($i % 3 == 0) {
        echo ('buzz');
    } else if ($i % 5 == 0) {
        echo ('fizzbuzz');
    } else {
        echo ($i);
    }
    echo "\n";
};
}


//FizzBuzz(12345332);