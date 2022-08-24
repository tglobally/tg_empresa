<?php
/** @var tglobally\tg_empresa\controllers\controlador_org_empresa $controlador */
use config\views;
use gamboamartin\errores\errores;
use templates\base;

$url_assets = (new views())->url_assets;

?>

<div class="col-md-3 secciones">

    <div class="col-md-12 int_secciones ">
        <div class="col-md-12 ">
            <h4 class="sub_text_datos">RFC:</h4>
            <h5 class="text_datos"><?php echo $controlador->rfc;?></h5>
            <h4 class="sub_text_datos">Razón social:</h4>
            <h5 class="text_datos"><?php echo $controlador->razon_social;?></h5>
        </div>
        <div class="col-md-4 seccion">
            <img src="<?php echo $url_assets."img/numeros/$controlador->number_active.svg"; ?>" class="img-seccion">
        </div>
        <div class="col-md-8">
            <h3>Empresas</h3>
            <?php
            $i = 1;
            while($i<=$controlador->total_items_sections){ ?>
                <hr class="hr-menu-lateral">
                <?php
                $color = (new base())->color(i:$i,number_active:  $controlador->number_active);
                if(gamboamartin\errores\errores::$error){
                    return (new errores())->error(mensaje: 'Error al obtener color', data: $color);
                }
                $number = "$i.$color";
                if($color === 'azul') {
                    include "templates/$controlador->seccion/_base/buttons/number.$color.php";
                }
                else{
                    include "templates/$controlador->seccion/_base/links/$i.php";
                }
                $i++;

            }
            ?>
        </div>
    </div>
</div>
