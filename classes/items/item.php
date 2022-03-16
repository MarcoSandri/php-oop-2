<?php

class item {
    protected $name;
    protected $price;
    protected $animal;

    //imposta il nome, il prezzo e l'animale a cui è destinato l'oggetto
    public function __construct($name, $price, $animal){
        $this->name = $name;
        $this->price = $price;
        $this->animal = $animal;
    }

    //se l'utente è registrato $logged è true e calcola lo sconto
    public function payment($logged, $creditcardExp, $date) {

        if($logged == true) {
            $this->price = $this->price * 0.8;
            echo '<p> sconto applicato </p>';
        }
            
        if($creditcardExp > $date) {
            echo '<p> carta di credito scaduta </p>';
            die;

        } else {
            echo '<p> hai appena pagato' . $this->price; '</p>';
        }

    }

}

?>
