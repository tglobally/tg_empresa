<?php
use config\views;
$url_assets = (new views())->url_assets;
$section = 'org_empresa';

?>

<div class="col-md-3 secciones">

    <div class="col-md-12 int_secciones ">
        <div class="col-md-4 seccion">
            <img src="<?php echo $url_assets."img/numeros/1.svg"; ?>" class="img-seccion">
        </div>
        <div class="col-md-8">
            <h3>Alta de empresas</h3>
            <?php $number = '1.azul'; ?>
            <?php include "templates/$section/_base/buttons/number.azul.php"; ?>
            <hr class="hr-menu-lateral">
            <?php include "templates/$section/_base/buttons/2.gris.php"; ?>
            <hr class="hr-menu-lateral">
            <?php include "templates/$section/_base/buttons/3.gris.php"; ?>
            <hr class="hr-menu-lateral">
            <?php include "templates/$section/_base/buttons/4.gris.php"; ?>
            <hr class="hr-menu-lateral">
            <?php include "templates/$section/_base/buttons/5.gris.php"; ?>
            <hr class="hr-menu-lateral">
            <?php include "templates/$section/_base/buttons/6.gris.php"; ?>
            <hr class="hr-menu-lateral">
            <?php include "templates/$section/_base/buttons/7.gris.php"; ?>
        </div>

    </div>
</div>
