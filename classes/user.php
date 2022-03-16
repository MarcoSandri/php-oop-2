<?php

class user {
    public $name;
    public $surname;
    public $email;
    public $logged = false;
    private $password;

    private $creditcardNumber;
    private $creditcardCvv;
    public $creditcardExp;

    public function __construct($name, $surname, $email, $password){
        
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->password = $password;

    }

    public function setCreditCardInfo($number, $exp, $cvv) {
        $this->creditcardNumber = $number;
        $this->creditcardExp = $exp;
        $this->creditcardCvv = $cvv;
    }

    public function login($name, $password){
        if($this->name == $name && $this->password == $password) {
            $this->logged = true;
        }
    }

    public function getLogged() {
        return $this->logged;
    }

    public function getCreditcardExp() {
        return $this->creditcardExp;
    }
}

?>