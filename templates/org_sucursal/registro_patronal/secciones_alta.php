<?php
/** @var tglobally\tg_empresa\controllers\controlador_org_empresa $controlador */
use config\views;
$url_assets = (new views())->url_assets;
$section ='org_empresa';
$number_active = 1;
$total_items = 1;
$i = 1;
?>
<div class="col-md-3 secciones">

    <div class="col-md-12 int_secciones ">
        <div class="col-md-4 seccion">
            <img src="<?php echo $url_assets."img/numeros/1.svg"; ?>" class="img-seccion">
        </div>
        <div class="col-md-8">
            <h3>Sucursales</h3>
            <?php include "templates/org_sucursal/_base/buttons/1.azul.alta.php"; ?>
            <hr class="hr-menu-lateral">
            <?php include "templates/org_sucursal/_base/buttons/2.gris.registro_patronal.php"; ?>
            <hr class="hr-menu-lateral">
        </div>

    </div>
</div>
