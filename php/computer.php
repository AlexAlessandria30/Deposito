<?php


abstract class SchedaVideo{
   abstract function video();

}

abstract class SchedaMadre{

    abstract function sm();

}

abstract class ImpiantoDiRaffreddamento{

    abstract function idr();

}

abstract class Casa {

    abstract function casa();

}


class Rtx3070Ti extends Schedavideo{

    public function video()
    {
        echo "Una della più potenti al momento\n";
    }
}


class Rtx3060 extends Schedavideo{

    public function video()
    {
        echo "Un ottimo compromesso prezzo prestazioni\n";
    }
}


class AsusRog extends Schedavideo{

    public function video()
    {
        echo "Buona scheda video\n";
    }
}

class Z390 extends SchedaMadre{

    public function sm()
    {
        echo "LA scheda madre adatta al mondo dei videogiochi\n";
    }
}

class B450 extends SchedaMadre{

    public function sm()
    {
        echo "Migliore qualita prezzo\n";
    }
}


class AsusPrime  extends SchedaMadre{

    public function sm()
    {
        echo "Ottima scheda con prestazioni normali\n";
    }
}


class  ColerMAsterA extends  ImpiantoDiRaffreddamento{

    public function idr()
    {
        echo "Migliore sul mercato\n";
    }
}

class  ColerMAsterb extends  ImpiantoDiRaffreddamento{

    public function idr()
    {
        echo "Ottima alternativa alla A\n";
    }
}
class corsair123 extends  ImpiantoDiRaffreddamento{

    public function idr()
    {
        echo "Una delle Migliori\n";
    }
}


class Jonsbo  extends Casa{

    public function casa()
    {
        echo "Case molto estetico che da buone prestazioni\n";
    }
}

class Tailusled extends Casa{

    public function casa()
    {
        echo "Case con ottime prestazioni e un mondo di led\n";
    }
}

class AzzaPyramid  extends Casa{

    public function casa()
    {
        echo "Case a forma di piramide \n";
    }
}

trait Ottimo {

    public function Ottimo(){echo "Hai configurato un ottimo computer\n";}
    
}

class Computer {

    use Ottimo;

    public $schedaVideo;
    public $schedaMadre;
    public $impiantoDiRaffreddamento;
    public $casa;

    public  function __construct(SchedaVideo $prima, SchedaMadre $seconda,impiantoDiRaffreddamento $terza, Casa $quarto ){

        $this->schedaVideo= $prima;
        $this->schedaMadre=$seconda;
        $this->impiantoDiRaffreddamento=$terza;
        $this->casa=$quarto;
    }

    public function schedaV(){
        $this->schedaVideo->video();
    }
    public function schedaM(){
        $this->schedaMadre->sm();
    }
    public function freddo(){
        $this->impiantoDiRaffreddamento->idr();
    }
    public function casa(){
        $this->casa->casa();
    }

}

$computer1 = new Computer(new Rtx3070Ti, new Z390 , new corsair123, new AzzaPyramid  );

$computer1->schedaV();
$computer1->schedaM();
$computer1-> freddo();
$computer1-> casa();
$computer1-> Ottimo();
