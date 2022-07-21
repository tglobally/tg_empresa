<?php /** @var controllers\controlador_org_empresa $controlador */ ?>
<?php include 'templates/org_empresa/modifica/secciones.php'; ?>
<div class="col-md-9 formulario">
    <div class="col-lg-12">

        <h3 class="text-center titulo-form">Hola, Nombre Usuario </h3>

        <div class="  form-main" id="form">
            <form method="post" action="./index.php?seccion=org_empresa&accion=modifica_generales&session_id=<?php echo $controlador->session_id; ?>" class="form-additional">
                <?php echo $controlador->inputs->codigo; ?>
                <?php echo $controlador->inputs->rfc; ?>
                <?php echo $controlador->inputs->razon_social; ?>
                <?php echo $controlador->inputs->nombre_comercial; ?>
                <?php echo $controlador->inputs->email_sat; ?>
                <?php echo $controlador->inputs->fecha_inicio_operaciones; ?>
                <?php echo $controlador->inputs->fecha_ultimo_cambio_sat; ?>
                <div class="buttons col-md-12">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-info btn-guarda col-md-12 " >Guarda</button>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-info btn-guarda col-md-12 " >Siguiente</button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</div>
