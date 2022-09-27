<?php

class Cat extends Animal {
    
    public function __construct($color = '', $leg_number = 4) {
        $this->color = $color;
        $this->leg_number = $leg_number;
    }
    
}

?>