<?php
namespace templates;
use gamboamartin\errores\errores;
use stdClass;

class base{
    private function color(int $i, int $number_active): string
    {
        $color = 'gris';
        if($i===$number_active){
            $color = 'azul';
        }
        return $color;
    }

    public function data_template_section(int $i, int $number_active): array|stdClass
    {
        $color = $this->color(i:$i,number_active:  $number_active);
        if(errores::$error){
            return (new errores())->error(mensaje: 'Error al obtener color', data: $color);
        }
        $number = $this->number(color: $color, i: $i);
        if(errores::$error){
            return (new errores())->error(mensaje: 'Error al obtener number', data: $number);
        }

        $data = new stdClass();
        $data->color = $color;
        $data->number = $number;

        return $data;
    }

    public function include_number(string $color, int $i, string $seccion): string
    {

        if($color === 'azul') {
            $include = "templates/$seccion/_base/buttons/number.$color.php";
        }
        else{
            $include = "templates/$seccion/_base/links/$i.php";
        }

        return $include;
    }



    private function number( string $color, int $i): string
    {
        return "$i.$color";
    }
}
