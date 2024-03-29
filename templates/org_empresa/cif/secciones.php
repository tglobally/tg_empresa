<?php
/** @var tglobally\tg_empresa\controllers\controlador_org_empresa $controlador */

use gamboamartin\errores\errores;
use tglobally\template_tg\menu_lateral;
?>

<div class="col-md-3 secciones">

    <div class="col-md-12 int_secciones ">
        <div class="col-md-12 ">
            <h4 class="sub_text_datos">RFC:</h4>
            <h5 class="text_datos"><?php echo $controlador->rfc;?></h5>
            <h4 class="sub_text_datos">Razón social:</h4>
            <h5 class="text_datos"><?php echo $controlador->razon_social;?></h5>
        </div>
        <?php echo $controlador->menu_lateral; ?>
        <?php
        $data_template = (new menu_lateral())->contenido_menu_lateral(aplica_link:true,controlador:$controlador, titulo: 'Empresas');
        if(gamboamartin\errores\errores::$error){
            return (new errores())->error(mensaje: 'Error al integrar include', data: $data_template);
        }
        ?>
    </div>
</div>
