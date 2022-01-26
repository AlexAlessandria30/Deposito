<?php


class Zoo
{

    public $nome;
    public $razza;


    public function __construct($nome, $razza)
    {
        $this->nome = $nome;
        $this->razza = $razza;
    }

    public function Animale()
    {
        echo "Benvenuti allo Zoo qui trovate il $this->nome che appartiene alla razza $this->razza \n";
    }
};

// $leone = new Zoo("leone","felino");
// $pecora = new Zoo ("pecora","merino");

// print_r($leone);
// print_r($pecora);

// $leone->Animale();
// $pecora->Animale();




class Habitat extends Zoo
{
    public $habitat;

    public function __construct($nome, $razza, $habitat)
    {
        parent::__construct($nome, $razza);
        $this->habitat = $habitat;
    }

    public function abitazione()
    {
        echo "$this->nome il mio habitat naturale è $this->habitat \n";
    }
};

// $leone2 = new Habitat("Leone","Felino","Savana");
// $zebra = new Habitat("Zebra","quagga","Savana");

// print_r($leone2);
// print_r($zebra);

// $leone2 -> abitazione();
// $zebra -> abitazione();



class Alimentazione extends Zoo
{

    public $alimenti;

    public function __construct($nome, $razza, $alimenti)
    {
        parent::__construct($nome, $razza);
        $this->alimenti = $alimenti;
    }

    public function cibo()
    {
        echo "$this->nome sono $this->alimenti \n";
    }
}

// $tigre = new Alimentazione("tigre","felino","carnivoro");
// $coniglio = new Alimentazione("coniglio","coni","erbivoro");

// print_r($tigre);
// print_r($coniglio);

// $tigre->cibo();
// $tigre->cibo();


class AnimaliNutrizione extends Alimentazione
{

    public $nutrizione;

    public function __construct($nome, $razza, $alimenti, $nutrizione)
    {
        parent::__construct($nome,$razza,$alimenti);
        $this->nutrizione = $nutrizione;
        $this->alimenti = $alimenti;
    }

    public function mangio($alimenti)
    {

        switch ($alimenti) {
            case 'carnivoro':
                echo "Mangio molta carne \n";
                break;
            case 'erbivoro':
                echo "Mangio molta erba\n";
                break;
            case 'onnivoro':
                echo "Mangio sia carne che erba\n";
                break;
        }
    }
}


// $cane = new AnimaliNutrizione("cane", "Siberian husky", "onnivoro", "tutto");
// $capra = new AnimaliNutrizione("capra", "boera", "erbivoro", "piante");

// print_r($cane);
// print_r($capra);

// $cane->mangio("onnivoro");
// $capra->mangio("erbivoro");


class Acquario extends Zoo{

    public $Tipospettacolo;

    public function __construct($nome, $razza, $Tipospettacolo)
    {
        parent::__construct($nome, $razza);
        $this->Tipospettacolo= $Tipospettacolo;
    }

    public function Spettacolo()
    {
        echo " Siamo $this->nome  e alle 18 avremo lo spettacolo \n";
    }
};

$delfini = new Acquario("delf e ino", "delfini","danza acrobatica");
$orca =new Acquario("Gina", "orca","immersione");

print_r($delfini);
print_r($orca);

$delfini->Spettacolo();
$orca->Spettacolo();