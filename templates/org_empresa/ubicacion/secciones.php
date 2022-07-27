<?php /** @var controllers\controlador_org_empresa $controlador */?>
<div class="col-md-3 secciones">

    <div class="col-md-12 int_secciones ">
        <div class="col-md-12 ">
            <h4 class="sub_text_datos">RFC:</h4>
            <h5 class="text_datos"><?php echo $controlador->rfc;?></h5>
            <h4 class="sub_text_datos">Razón social:</h4>
            <h5 class="text_datos"><?php echo $controlador->razon_social;?></h5>
        </div>
        <div class="col-md-4 seccion">
            <img src="img/2.svg" class="img-seccion">
        </div>
        <div class="col-md-8">
            <h3>Empresas</h3>
            <?php include "templates/org_empresa/_base/links/1.php"; ?>
            <hr class="hr-menu-lateral">
            <?php include "templates/org_empresa/_base/buttons/2.azul.php"; ?>
            <hr class="hr-menu-lateral">
            <?php include "templates/org_empresa/_base/links/3.php"; ?>
            <hr class="hr-menu-lateral">
            <?php include "templates/org_empresa/_base/links/4.php"; ?>
            <hr class="hr-menu-lateral">
            <?php include "templates/org_empresa/_base/links/5.php"; ?>
            <hr class="hr-menu-lateral">
            <?php include "templates/org_empresa/_base/links/6.php"; ?>
        </div>
    </div>
</div>
