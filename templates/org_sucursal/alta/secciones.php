<?php
/** @var tglobally\tg_empresa\controllers\controlador_org_empresa $controlador */
use config\views;
$url_assets = (new views())->url_assets;
$section ='org_empresa';?>
<div class="col-md-3 secciones">

    <div class="col-md-12 int_secciones ">
        <div class="col-md-12 ">
            <h4 class="sub_text_datos">RFC:</h4>
            <h5 class="text_datos"><?php echo $controlador->rfc;?></h5>
            <h4 class="sub_text_datos">Razón social:</h4>
            <h5 class="text_datos"><?php echo $controlador->razon_social;?></h5>
        </div>
        <div class="col-md-4 seccion">
            <img src="<?php echo $url_assets."img/numeros/6.svg"; ?>" class="img-seccion">
        </div>
        <div class="col-md-8">
            <h3>Empresas</h3>
            <?php $number = '1.gris'; ?>
            <?php include "templates/$section/_base/links/1.php"; ?>
            <hr class="hr-menu-lateral">
            <?php $number = '2.gris'; ?>
            <?php include "templates/$section/_base/links/3.php"; ?>
            <hr class="hr-menu-lateral">
            <?php $number = '3.gris'; ?>
            <?php include "templates/$section/_base/links/3.php"; ?>
            <hr class="hr-menu-lateral">
            <?php $number = '4.gris'; ?>
            <?php include "templates/$section/_base/links/4.php"; ?>
            <hr class="hr-menu-lateral">
            <?php $number = '5.gris'; ?>
            <?php include "templates/$section/_base/links/5.php"; ?>
            <hr class="hr-menu-lateral">
            <?php $number = '6.azul'; ?>
            <?php include "templates/org_empresa/_base/buttons/number.azul.php"; ?>
            <hr class="hr-menu-lateral">
            <?php $number = '7.gris'; ?>
            <?php include "templates/$section/_base/links/7.php"; ?>
        </div>

    </div>
</div>
