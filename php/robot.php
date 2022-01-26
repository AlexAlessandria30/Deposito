<?php

abstract class artoSuperioreDestro{
    abstract public function attack();
}


abstract class artoSuperioreSinistro{
    abstract public function attack();
}


abstract class artiInferiori{
    abstract public function move();
}

class BraccioMissile extends artoSuperioreDestro {

    public function attack()
    {
        echo "Braccio missileeeee\n";
    }
}

class Laser extends artoSuperioreDestro {

    public function attack()
    {
        echo "Laser affetta\n";
    }
}

class PugnoVolante extends artoSuperioreSinistro {

    public function attack()
    {
        echo "Pugno spacca tutto\n";
    }
}

class Spada extends artoSuperioreSinistro {

    public function attack()
    {
        echo "Super spada\n";
    }
}

class Cavallo extends artiInferiori{

    public function move(){
        echo "Ti inseguo a cavallo\n";
    }
}

class Razzo extends artiInferiori{

    public function move(){
        echo "Ti inseguo grazie al razzo\n";
    }
}

class JeegRobot{

    public $artoSuperioreDestro;
    public $artoSuperioreSinistro;
    public $artiInferiore;

    public  function __construct(artoSuperioreDestro $primaArma,artoSuperioreSinistro $secondaArma,artiInferiori $movimento)
    {
        $this->artoSuperioreDestro = $primaArma;
        $this->artoSuperioreSinistro = $secondaArma;
        $this->artiInferiori = $movimento;
    }
    
    public function attaccoDestro(){
        $this->artoSuperioreDestro->attack();
    }
    public function attaccoSinistro(){
        $this->artoSuperioreSinistro->attack();
    }
    public function azione(){
        $this->artiInferiori->move();
    }
}

$jeegRobot1 = new JeegRobot(new BraccioMissile ,new Spada ,new Razzo);

$jeegRobot1->attaccoDestro();
$jeegRobot1->attaccoSinistro();
$jeegRobot1-> azione();

