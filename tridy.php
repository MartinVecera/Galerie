<?php


class Galerie
{

    public $precteni_obr;

    public function __construct($precteni_obr)
    {
        $this->precteni_obr = $precteni_obr;
    }


    public function obrazky ()
    {
        $pole_obr = "";

        $obrazky = glob($this->precteni_obr . "*");

        foreach ($obrazky as $o) {
            $pole_obr .= $o . " ";
        }


        return explode(" ", trim($pole_obr));
    }
}

$galerie = new Galerie("galerie/");
($galerie->obrazky());



?>
