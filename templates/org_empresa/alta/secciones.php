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
            <?php $number = '2.gris'; ?>
            <?php include "templates/$section/_base/buttons/number.gris.php"; ?>
            <hr class="hr-menu-lateral">
            <?php $number = '3.gris'; ?>
            <?php include "templates/$section/_base/buttons/number.gris.php"; ?>
            <hr class="hr-menu-lateral">
            <?php $number = '4.gris'; ?>
            <?php include "templates/$section/_base/buttons/number.gris.php"; ?>
            <hr class="hr-menu-lateral">
            <?php $number = '5.gris'; ?>
            <?php include "templates/$section/_base/buttons/number.gris.php"; ?>
            <hr class="hr-menu-lateral">
            <?php $number = '6.gris'; ?>
            <?php include "templates/$section/_base/buttons/number.gris.php"; ?>
            <hr class="hr-menu-lateral">
            <?php $number = '7.gris'; ?>
            <?php include "templates/$section/_base/buttons/number.gris.php"; ?>
        </div>

    </div>
</div>
