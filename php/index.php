<?php

$numero = [12,12,1,3];


if ($numero % 2 == 0 ) {
    $somma = array_sum($numero);
    $media = $somma / count($numero);

    echo "La media è: " . $media . "e la somma è " . $somma;
};


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

// print_r($persone);


// for ($i=0; $i < count($persone[$i]); $i++) { 

//   if ($persone['genere' == 'M'] ) {
//     echo  'Buongiorno Sig.' .$persone['nome']. " " .$persone['cognome']. "\n";
// }elseif ($persone['genere' == 'F'] ) {
//     echo  'Buongiorno Sig.ra' .$persone['nome']. " " .$persone['cognome']. "\n";
// }else {
//     echo "Buongiorno \n";
// }
// }




// function FizzBuzz($n){

// for ($i = 0; $i <= $n; $i++) {

//     if ($i % 3 == 0 && $i % 5 == 0) {
//         echo ('HACKADEMY35');
//     } elseif ($i % 3 == 0) {
//         echo ('PHP');
//     } else if ($i % 5 == 0) {
//         echo ('JAVASCRIPT');
//     } else {
//         echo ($i);
//     }
//     echo "\n";
// };
// }


// FizzBuzz(20);