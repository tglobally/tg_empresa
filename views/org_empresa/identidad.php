<?php /** @var tglobally\tg_empresa\controllers\controlador_org_empresa $controlador */ ?>
<?php include $controlador->include_menu_secciones; ?>
<div class="col-md-9 formulario">
    <div class="col-lg-12">

        <h3 class="text-center titulo-form">Hola, <?php echo $controlador->datos_session_usuario['adm_usuario_user']; ?> </h3>

        <div class="  form-main" id="form">
            <form method="post" action="./index.php?seccion=org_empresa&accion=modifica_identidad&session_id=<?php echo $controlador->session_id; ?>&registro_id=<?php echo $controlador->registro_id; ?>" class="form-additional">
                <?php echo $controlador->inputs->logo; ?>
                <?php echo $controlador->inputs->pagina_web ?>
                <div class="buttons col-md-12">
                    <div class="col-md-6 btn-ancho">
                        <button type="submit" class="btn btn-info btn-guarda col-md-12 " >Guarda</button>
                    </div>
                    <div class="col-md-6 btn-ancho">
                        <button type="submit" class="btn btn-info btn-guarda col-md-12 " >Siguiente</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
