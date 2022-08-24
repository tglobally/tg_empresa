<?php
/** @var tglobally\tg_empresa\controllers\controlador_org_empresa $controlador */
use config\views;
use gamboamartin\errores\errores;

use templates\base;

$url_assets = (new views())->url_assets;

?>

<div class="col-md-3 secciones">

    <div class="col-md-12 int_secciones ">
        <div class="col-md-4 seccion">
            <img src="<?php echo $url_assets."img/numeros/$controlador->number_active.svg"; ?>" class="img-seccion">
        </div>
        <div class="col-md-8">
            <h3>Alta de empresas</h3>

            <?php
            $i = 1;
            while($i<=$controlador->total_items_sections){ ?>
                <hr class="hr-menu-lateral">
                <?php

                $data_template = (new base())->include_item(i:$i,number_active:  $controlador->number_active,
                    registro_id: $controlador->registro_id,seccion:  $controlador->seccion);
                if(gamboamartin\errores\errores::$error){
                    return (new errores())->error(mensaje: 'Error al integrar include', data: $data_template);
                }

                $i++;

            }
            ?>


        </div>

    </div>
</div>
