<?php include 'templates/org_empresa/alta/secciones.php'; ?>
<div class="col-md-9 formulario">
    <div class="col-lg-12">

        <h3 class="text-center titulo-form">Hola, Nombre Usuario </h3>

        <div class="  form-main" id="form">

            <form method="post" action="./index.php?seccion=org_empresa&amp;accion=alta_bd&amp;session_id=3089863899" class="form-additional">
                <?php echo $controlador->inputs->codigo; ?>
                <?php echo $controlador->inputs->rfc; ?>
                <?php echo $controlador->inputs->razon_social; ?>
                <?php echo $controlador->inputs->nombre_comercial; ?>
                <?php echo $controlador->inputs->email_sat; ?>
                <?php echo $controlador->inputs->fecha_inicio_operaciones; ?>
                <?php echo $controlador->inputs->fecha_ultimo_cambio_sat; ?>



            </form>
        </div>
    </div>
</div>
