<?php
/** @var tglobally\tg_empresa\controllers\controlador_org_empresa $controlador */
use config\views;
$url_assets = (new views())->url_assets;

$total_items = 7;
$i = 1;
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
            <img src="<?php echo $url_assets."img/numeros/4.svg"; ?>" class="img-seccion">
        </div>
        <div class="col-md-8">
            <h3>Empresas</h3>
            <?php
            while($i<=$total_items){ ?>
                <hr class="hr-menu-lateral">
                <?php
                $color = 'gris';
                if($i===$controlador->number_active){
                    $color = 'azul';
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
