<?php /** @var tglobally\tg_empresa\controllers\controlador_org_empresa $controlador */?>
<?php include $controlador->include_menu_secciones; ?>

<div class="col-md-9 formulario">
    <div class="col-lg-12">
        <h3 class="text-center titulo-form">Hola, <?php echo $controlador->datos_session_usuario['adm_usuario_user']; ?> </h3>
        <div class="  form-main" id="form">
            <form method="post" action="<?php echo $controlador->link_im_registro_patronal_modifica_bd; ?>" class="form-additional">
                <div class="col-lg-12">

                    <?php echo $controlador->inputs->id; ?>
                    <?php echo $controlador->inputs->codigo; ?>
                    <?php echo $controlador->inputs->codigo_bis; ?>
                    <?php echo $controlador->inputs->fc_csd_id; ?>
                    <?php echo $controlador->inputs->descripcion; ?>
                    <?php echo $controlador->inputs->select->im_clase_riesgo_id; ?>
                    <?php if($controlador->muestra_btn_upd){ ?>
                        <div class="col-md-6 btn-ancho">
                            <button type="submit" class="btn btn-info btn-guarda col-md-12 " name="btn_action_next" value="modifica_sucursal">Modifica</button>
                        </div>
                        <div class="col-md-6 btn-ancho">
                            <button type="submit" class="btn btn-info btn-guarda col-md-12 " name="btn_action_next" value="sucursales">Sucursales</button>
                        </div>
                    <?php } ?>
                </div>
            </form>
        </div>

    </div>
    <br>



</div>





