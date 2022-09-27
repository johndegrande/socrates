<?php

class Bird extends Animal {
    
    public function __construct($can_fly = 0, $color = '', $leg_number = 2) {
        $this->can_fly = $can_fly;
        $this->color = $color;
        $this->leg_number = $leg_number;
    }
    
}

?>