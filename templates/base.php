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

    public function include_number(string $color, int $i, string $seccion): string
    {
        $include = '';
        if($color === 'azul') {
            $include = "templates/$seccion/_base/buttons/number.$color.php";
        }
        else{
            $include = "templates/$seccion/_base/links/$i.php";
        }

        return $include;
    }

    public function number( string $color, int $i): string
    {
        return "$i.$color";
    }
}
