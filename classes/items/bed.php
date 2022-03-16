<?php

require_once __DIR__ . '/item.php';

class bed extends item {
    private $category = 'bed';
    public $size;


    public function __construct($name, $price, $animal, $size){
        
        parent::__construct($name, $price, $animal);

        $this->size = $size;

    }

}
?>
