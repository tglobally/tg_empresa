<?php
namespace templates;
class base{
    public function color(int $i, int $number_active): string
    {
        $color = 'gris';
        if($i===$number_active){
            $color = 'azul';
        }
        return $color;
    }
}
