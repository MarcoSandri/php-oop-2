<?php

require_once __DIR__ . '/item.php';

class toy extends item {
    private $category = 'toy';
    public $type;
    public $color;


    public function __construct($name, $price, $animal, $type, $color){
        
        parent::__construct($name, $price, $animal);

        $this->type = $type;
        $this->color = $color;

    }

}
?>