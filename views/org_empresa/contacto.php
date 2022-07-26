<?php /** @var controllers\controlador_org_empresa $controlador */ ?>
<?php include 'templates/org_empresa/ubicaciones/secciones.php'; ?>
<div class="col-md-9 formulario">
    <div class="col-lg-12">

        <h3 class="text-center titulo-form">Hola, Nombre Usuario </h3>

        <div class="  form-main" id="form">
            <form method="post" action="./index.php?seccion=org_empresa&accion=modifica_contacto&session_id=<?php echo $controlador->session_id; ?>&registro_id=<?php echo $controlador->registro_id; ?>" class="form-additional">

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
