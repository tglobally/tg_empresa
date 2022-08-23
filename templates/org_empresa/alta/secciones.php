<?php
/** @var tglobally\tg_empresa\controllers\controlador_org_empresa $controlador */
use config\views;
$url_assets = (new views())->url_assets;

$number_active = 1;
$total_items = 7;
$i = 1;


?>

<div class="col-md-3 secciones">

    <div class="col-md-12 int_secciones ">
        <div class="col-md-4 seccion">
            <img src="<?php echo $url_assets."img/numeros/1.svg"; ?>" class="img-seccion">
        </div>
        <div class="col-md-8">
            <h3>Alta de empresas</h3>

            <?php
            while($i<=$total_items){ ?>
                <hr class="hr-menu-lateral">
                <?php
                $color = 'gris';
                if($i===$number_active){
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
