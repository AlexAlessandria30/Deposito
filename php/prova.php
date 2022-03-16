<?php


$eta_utenti = array(
    'Simone' => 29,
    'Josephine' => 30,
    'Giuseppe' => 23,
    'Renato' => 26,
    'Gabriele' => 24
);
foreach ($eta_utenti as $nome => &$eta) {
    $eta++;
}
print_r($eta_utenti);


// echo "ciao \n";

// $a = "Ciao ";
// $b = "Giuseppe \n";


// echo  $a  . $b;


// $arr = [1, 2, 3, 4];

// for ($i = 0; $i < count($arr); $i++) {

   

//     echo "$arr[$i] \n";
// }

// class Saluto
// {

//     public $nome;
//     public $cognome;

//     public function __construct($nome, $cognome)
//     {
//         $this->nome = $nome;
//         $this->cognome = $cognome;
//     }

//     public  function print()
//     {

//         echo "Ciao $this->nome $this->cognome \n";
//     }
// }

// $Giuseppe = new Saluto("Giuseppe", "Rossi");

// print_r($Giuseppe);

// $Giuseppe->print();

// class Cammino extends Saluto
// {

//     public $luogo;

//     public function __construct($nome, $cognome, $luogo)
//     {
//         Saluto::__construct($nome, $cognome);
//         $this->luogo = $luogo;
//     }

//     public  function luogo()
//     {

//         echo "Ciao sono  $this->nome $this->cognome e sto andando $this->luogo \n";
//     }
// }

// $Francesco = new Cammino("Francesco", "Blu", "Montagna");

// $Francesco->luogo();
