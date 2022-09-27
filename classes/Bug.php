<?php

class Bug extends Animal {
    
    public function __construct($color = '', $leg_number = 6) {
        $this->color = $color;
        $this->leg_number = $leg_number;
    }
    
}

?>