<?php /** @var controllers\controlador_org_empresa $controlador */ ?>
<?php include 'templates/org_empresa/ubicacion/secciones.php';
?>
<div class="col-md-9 formulario">
    <div class="col-lg-12">

        <h3 class="text-center titulo-form">Hola, <?php echo $controlador->datos_session_usuario['adm_usuario_user']; ?></h3>

        <div class="  form-main" id="form">
            <form method="post" action="./index.php?seccion=org_empresa&accion=modifica_ubicacion&session_id=<?php echo $controlador->session_id; ?>&registro_id=<?php echo $controlador->registro_id; ?>" class="form-additional">
                <?php echo $controlador->inputs->select->dp_pais_id; ?>
                <?php echo $controlador->inputs->select->dp_estado_id; ?>
                <?php echo $controlador->inputs->select->dp_municipio_id; ?>
                <?php echo $controlador->inputs->select->dp_cp_id; ?>
                <?php echo $controlador->inputs->select->dp_colonia_postal_id; ?>
                <?php echo $controlador->inputs->select->dp_calle_pertenece_id; ?>
                <?php echo $controlador->inputs->exterior; ?>
                <?php echo $controlador->inputs->interior; ?>
                <?php echo $controlador->inputs->select->dp_calle_pertenece_entre1_id; ?>
                <?php echo $controlador->inputs->select->dp_calle_pertenece_entre2_id; ?>
                <div class="buttons col-md-12">
                    <div class="col-md-4">
                        <a href="<?php echo $controlador->link_modifica; ?>" role="button" class="btn btn-info btn-guarda check-estado col-md-12 " >Generales</a>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-info btn-guarda col-md-12 " name="btn_action_next"  value="ubicacion">Modifica</button>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-info btn-guarda col-md-12 " name="btn_action_next"  value="cif">Siguiente</button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</div>
