<?php /** @var tglobally\tg_empresa\controllers\controlador_org_empresa $controlador */ ?>
<?php include $controlador->include_menu_secciones; ?>
<div class="col-md-9 formulario">
    <div class="col-lg-12">

        <h3 class="text-center titulo-form">Hola, Nombre Usuario </h3>

        <div class="  form-main" id="form">
            <form method="post" action="<?php echo $controlador->link_org_departamento_alta_bd; ?>" class="form-additional">

                <?php echo $controlador->inputs->org_empresa_id; ?>
                <?php echo $controlador->inputs->org_clasificacion_dep_id; ?>
                <?php echo $controlador->inputs->codigo; ?>
                <?php echo $controlador->inputs->descripcion; ?>


                <div class="buttons col-md-12">
                    <div class="col-md-12 btn-ancho">
                        <button type="submit" class="btn btn-info btn-guarda col-md-12" name="btn_action_next" value="departamentos" >Guarda</button>
                    </div>

                </div>

                <div class="cont_tabla_sucursal  col-md-12">
                    <table class="table  footable-sort">
                        <thead>
                        <tr>
                            <th data-breakpoints="xs sm md" data-type="html" >Id</th>
                            <th data-breakpoints="xs sm md" data-type="html" >Codigo</th>
                            <th data-breakpoints="xs sm md" data-type="html" >Codigo BIS</th>
                            <th data-breakpoints="xs sm md" data-type="html" >Descripcion</th>
                            <th data-breakpoints="xs sm md" data-type="html" >Empresa</th>
                            <th data-breakpoints="xs sm md" data-type="html" >Clasificacion Departamento</th>

                            <th data-breakpoints="xs sm md" data-type="html" data-filterable="false">Modifica</th>
                            <th data-breakpoints="xs sm md" data-type="html" data-filterable="false">Elimina</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($controlador->departamentos->registros as $departamento){
                            ?>
                            <tr>
                                <td><?php echo $departamento['org_departamento_id']; ?></td>
                                <td><?php echo $departamento['org_departamento_codigo']; ?></td>
                                <td><?php echo $departamento['org_departamento_codigo_bis']; ?></td>
                                <td><?php echo $departamento['org_departamento_descripcion']; ?></td>
                                <td><?php echo $departamento['org_empresa_razon_social']; ?></td>
                                <td><?php echo $departamento['org_clasificacion_dep_descripcion']; ?></td>

                                <td><?php echo $departamento['link_modifica']; ?></td>
                                <td><?php echo $departamento['link_elimina']; ?></td>

                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>
