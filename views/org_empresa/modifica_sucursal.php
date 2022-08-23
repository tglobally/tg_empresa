<?php /** @var tglobally\tg_empresa\controllers\controlador_org_empresa $controlador */?>
<?php include $controlador->include_menu_secciones; ?>

<div class="col-md-9 formulario">
    <div class="col-lg-12">
        <h3 class="text-center titulo-form">Hola, <?php echo $controlador->datos_session_usuario['adm_usuario_user']; ?> </h3>
        <div class="  form-main" id="form">
            <form method="post" action="<?php echo $controlador->link_org_sucursal_modifica_bd; ?>" class="form-additional">
                <div class="col-lg-12">
                    <?php echo $controlador->inputs->select->org_empresa_id; ?>
                    <?php echo $controlador->inputs->razon_social; ?>
                </div>
                <div class="col-lg-12">

                    <?php echo $controlador->inputs->org_sucursal_id; ?>
                    <?php echo $controlador->inputs->org_sucursal_codigo; ?>
                    <?php echo $controlador->inputs->org_sucursal_codigo_bis; ?>
                    <?php echo $controlador->inputs->org_sucursal_descripcion; ?>
                    <?php echo $controlador->inputs->org_sucursal_tipo_sucursal_descricpion; ?>
                    <?php echo $controlador->inputs->org_sucursal_serie; ?>
                    <?php echo $controlador->inputs->org_sucursal_fecha_inicio_operaciones; ?>
                    <?php echo $controlador->inputs->org_sucursal_dp_estado_id; ?>
                    <?php echo $controlador->inputs->org_sucursal_dp_municipio_id; ?>
                    <?php echo $controlador->inputs->org_sucursal_dp_cp_id; ?>
                    <?php echo $controlador->inputs->org_sucursal_dp_colonia_postal_id; ?>
                    <?php echo $controlador->inputs->org_sucursal_dp_calle_pertenece_id; ?>
                    <?php echo $controlador->inputs->org_sucursal_exterior; ?>
                    <?php echo $controlador->inputs->org_sucursal_interior; ?>
                    <?php echo $controlador->inputs->org_sucursal_telefono_1; ?>
                    <?php echo $controlador->inputs->org_sucursal_telefono_2; ?>
                    <?php echo $controlador->inputs->org_sucursal_telefono_3; ?>
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





