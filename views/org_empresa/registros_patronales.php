<?php /** @var tglobally\tg_empresa\controllers\controlador_org_empresa $controlador */ ?>
<?php include $controlador->include_menu_secciones; ?>
<div class="col-md-9 formulario">
    <div class="col-lg-12">

        <h3 class="text-center titulo-form">Hola, Nombre Usuario </h3>

        <div class="  form-main" id="form">
            <form method="post" action="<?php echo $controlador->link_im_registro_patronal_alta_bd; ?>" class="form-additional">

                <?php echo $controlador->inputs->select->org_empresa_id; ?>
                <?php echo $controlador->inputs->select->org_sucursal_id; ?>
                <?php echo $controlador->inputs->fc_csd_id; ?>
                <?php echo $controlador->inputs->descripcion; ?>
                <?php echo $controlador->inputs->select->im_clase_riesgo_id; ?>


                <div class="buttons col-md-12">
                    <div class="col-md-6 btn-ancho">
                        <button type="submit" class="btn btn-info btn-guarda col-md-12" name="btn_action_next" value="departamentos" >Departamentos</button>
                    </div>
                    <div class="col-md-6 btn-ancho">
                        <button type="submit" class="btn btn-info btn-guarda col-md-12" name="btn_action_next" value="registros_patronales" >Guarda</button>
                    </div>

                </div>

                <div class="cont_tabla_sucursal  col-md-12">
                    <table class="table  footable-sort">
                        <thead>
                        <tr>
                            <th data-breakpoints="xs sm md" data-type="html" >Id</th>
                            <th data-breakpoints="xs sm md" data-type="html" >Codigo</th>
                            <th data-breakpoints="xs sm md" data-type="html" >Descripcion</th>

                            <th data-breakpoints="xs sm md" data-type="html" data-filterable="false">Modifica</th>
                            <th data-breakpoints="xs sm md" data-type="html" data-filterable="false">Elimina</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($controlador->registros_patronales->registros as $registro_patronal){
                            ?>
                            <tr>
                                <td><?php echo $registro_patronal['im_registro_patronal_id']; ?></td>
                                <td><?php echo $registro_patronal['im_registro_patronal_codigo']; ?></td>
                                <td><?php echo $registro_patronal['im_registro_patronal_descripcion']; ?></td>
                                <td><?php echo $registro_patronal['link_modifica']; ?></td>
                                <td><?php echo $registro_patronal['link_elimina']; ?></td>

                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>
