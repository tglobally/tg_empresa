<?php
namespace templates;
use config\generales;
use gamboamartin\errores\errores;
use gamboamartin\system\system;
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

    public function contenido_menu_lateral(system $controlador,string $titulo): array
    {
        echo "<div class='col-md-8'>";
        echo "<h3>$titulo</h3>";
        $data_template = $this->include_items(number_active: $controlador->number_active,
            registro_id:  $controlador->registro_id, seccion: $controlador->seccion,
            total_items_sections: $controlador->total_items_sections);
        if(errores::$error){
            return (new errores())->error(mensaje: 'Error al integrar include', data: $data_template);
        }
        echo "</div>";
        return $data_template;

    }

    private function data_template_section(int $i, int $number_active): array|stdClass
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

    private function include_item(int $i, int $number_active, int $registro_id, string $seccion): array|stdClass
    {
        $session_id = (new generales())->session_id;
        $data_template = $this->init_data_template(i:$i,number_active: $number_active,seccion:  $seccion);
        if(errores::$error){
            return (new errores())->error(mensaje: 'Error al obtener datos', data: $data_template);
        }



        $number = $data_template->number;

        include $data_template->include;
        return $data_template;
    }

    private function include_items(int $number_active, int $registro_id, string $seccion, int $total_items_sections): array
    {
        $i = 1;
        $data_html = array();
        while($i<=$total_items_sections){ ?>
            <hr class="hr-menu-lateral">
            <?php
            $data_template = $this->include_item(i:$i,number_active:  $number_active,
                registro_id: $registro_id,seccion:  $seccion);
            if(errores::$error){
                return (new errores())->error(mensaje: 'Error al integrar include', data: $data_template);
            }
            $data_html[] = $data_template;
            $i++;
        }
        return $data_html;
    }


    private function include_number(string $color, int $i, string $seccion): string
    {

        if($color === 'azul') {
            $include = "templates/$seccion/_base/buttons/number.$color.php";
        }
        else{
            $include = "templates/$seccion/_base/links/$i.php";
        }

        return $include;
    }

    private function init_data_template(int $i, int $number_active, string $seccion): array|stdClass
    {
        $data_template = $this->data_template_section(i:$i,number_active:  $number_active);
        if(errores::$error){
            return (new errores())->error(mensaje: 'Error al obtener datos', data: $data_template);
        }
        $include  = $this->include_number(color: $data_template->color,i: $i,seccion: $seccion);
        if(errores::$error){
            return (new errores())->error(mensaje: 'Error al obtener include', data: $include);
        }
        $data_template->include = $include;
        return $data_template;
    }



    private function number( string $color, int $i): string
    {
        return "$i.$color";
    }
}
