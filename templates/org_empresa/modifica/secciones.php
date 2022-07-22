<?php /** @var controllers\controlador_org_empresa $controlador */ ?>
<div class="col-md-3 secciones">

    <div class="col-md-12 int_secciones ">
        <div class="col-md-4 seccion">
            <img src="img/1.svg" class="img-seccion">
        </div>
        <div class="col-md-8">
            <h3>Empresas</h3>

            <button class="btn btn-default menu-lateral menu-lateral-active">
                <?php include "templates/org_empresa/_base/buttons/_1.azul.php"; ?>

            </button>
            <hr class="hr-menu-lateral">
            <a href="index.php?seccion=org_empresa&accion=ubicacion&registro_id=<?php echo $controlador->registro_id; ?>&session_id=<?php echo $controlador->session_id; ?>">
                <button class="btn btn-default menu-lateral">
                    <?php include "templates/org_empresa/_base/buttons/_2.gris.php"; ?>
                </button>
            </a>

        </div>

    </div>
</div>
