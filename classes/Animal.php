<?php

class Animal {
    public $color;
    public $leg_number;
    public $can_fly = 0;
    
    public function move() {
        if ($this->can_fly > 0) {
            return "I'm flying";
        } else {
            return "I'm moving with ".$this->leg_number." legs!";
        }
    }
}

?>