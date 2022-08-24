<?php
/** @var tglobally\tg_empresa\controllers\controlador_org_empresa $controlador */
use config\views;
use gamboamartin\errores\errores;

use templates\base;

$url_assets = (new views())->url_assets;

?>

<div class="col-md-3 secciones">

    <div class="col-md-12 int_secciones ">
        <?php
        echo (new base())->number_head(number_active: $controlador->number_active);
        if(gamboamartin\errores\errores::$error){
            return (new errores())->error(mensaje: 'Error al integrar include', data: '');
        }
        ?>
        <?php
        $data_template = (new base())->contenido_menu_lateral(aplica_link:false,controlador:$controlador, titulo: 'Empresas');
        if(gamboamartin\errores\errores::$error){
            return (new errores())->error(mensaje: 'Error al integrar include', data: $data_template);
        }
        ?>

    </div>
</div>
