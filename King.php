<?php

class King extends AbstractChessmen
{
    public function move($x, $y)
    {
        if ( ($x > 7) || ($y > 7) || ($x < 0) || ($y < 0))
           throw new Exception('Перемещение за границы доски невозможно.');

       $offsetX = $x - $this->x;
       $offsetY = $y - $this->y;

       if (
        abs($offsetX) >= 0 && abs($offsetX) <= 1
        && abs($offsetY) >= 0 && abs($offsetY) <= 1
    ) {
        $this->x = $x;
        $this->y = $y;
    } else throw new Exception('Ход короля невозможен: попытка выхода на недопустимую область.');
}
}
