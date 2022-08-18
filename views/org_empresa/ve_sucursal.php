<?php /** @var tglobally\tg_empresa\controllers\controlador_org_empresa $controlador */ ?>
<?php use config\views; ?>
<?php include 'templates/org_sucursal/alta/secciones.php'; ?>

<div class="col-md-9 formulario">
    <div class="col-lg-12">
        <h3 class="text-center titulo-form">Hola, Nombre Usuario </h3>

        <div class="  form-main" id="form">
            <?php include (new views())->ruta_templates."mensajes.php"; ?>
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
            <?php echo $controlador->inputs->org_sucursal_dp_estado_descripcion; ?>
            <?php echo $controlador->inputs->org_sucursal_dp_municipio_descripcion; ?>
            <?php echo $controlador->inputs->org_sucursal_dp_colonia_descripcion; ?>
            <?php echo $controlador->inputs->org_sucursal_dp_cp_descripcion; ?>
            <?php echo $controlador->inputs->org_sucursal_dp_calle_descripcion; ?>
            <?php echo $controlador->inputs->org_sucursal_exterior; ?>
            <?php echo $controlador->inputs->org_sucursal_interior; ?>
            <?php echo $controlador->inputs->org_sucursal_telefono_1; ?>
            <?php echo $controlador->inputs->org_sucursal_telefono_2; ?>
            <?php echo $controlador->inputs->org_sucursal_telefono_3; ?>
        </div>
    </div>
    
</div>





