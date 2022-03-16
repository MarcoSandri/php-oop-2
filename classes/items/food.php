<?php

require_once __DIR__ . '/item.php';

class food extends item {
    private $category = 'food';
    public $type;
    public $flavor;


    public function __construct($name, $price, $animal, $type, $flavor){
        
        parent::__construct($name, $price, $animal);

        $this->type = $type;
        $this->flavor = $flavor;

    }

}
?>