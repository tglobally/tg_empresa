<?php /** @var tglobally\tg_empresa\controllers\controlador_org_empresa $controlador */ ?>
<?php include $controlador->include_menu_secciones; ?>
<div class="col-md-9 formulario">
    <div class="col-lg-12">

        <h3 class="text-center titulo-form">Hola, <?php echo $controlador->datos_session_usuario['adm_usuario_user']; ?> </h3>

        <div class="  form-main" id="form">
            <form method="post" action="./index.php?seccion=org_empresa&accion=modifica_generales&session_id=<?php echo $controlador->session_id; ?>&registro_id=<?php echo $controlador->registro_id; ?>" class="form-additional">
                <?php echo $controlador->inputs->select->org_tipo_empresa_id; ?>
                <?php echo $controlador->inputs->codigo; ?>
                <?php echo $controlador->inputs->rfc; ?>
                <?php echo $controlador->inputs->razon_social; ?>
                <?php echo $controlador->inputs->nombre_comercial; ?>
                <div class="buttons col-md-12">
                    <div class="col-md-6 btn-ancho">
                        <button type="submit" class="btn btn-info btn-guarda col-md-12 " name="btn_action_next" value="modifica">Modifica</button>
                    </div>
                    <div class="col-md-6 btn-ancho">
                        <button type="submit" class="btn btn-info btn-guarda col-md-12 " name="btn_action_next" value="ubicacion">Siguiente</button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</div>
