<?php

abstract class AbstractChessmen implements IChessmen {
    protected $x, $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    // public function getPosition()
    // {
    //     $alphabet = 'abcdefgh';
        
    //     print 'Позиция фигуры: '.$alphabet[$this->x].$this->y;
    // }

     public function getPosition(){
        return 'x:'.$this->x.', y:'.$this->y;
     }
}