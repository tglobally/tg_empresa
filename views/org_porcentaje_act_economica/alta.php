<?php /** @var controllers\controlador_org_sucursal $controlador */ ?>
<?php include 'templates/org_porcentaje_act_economica/alta/secciones.php'; ?>
<div class="col-md-9 formulario">
    <div class="col-lg-12">

        <h3 class="text-center titulo-form">Hola, <?php echo $controlador->datos_session_usuario['adm_usuario_user']; ?> </h3>

        <div class="  form-main" id="form">
            <form method="post" action="./index.php?seccion=org_porcentaje_act_economica&accion=alta_bd&session_id=<?php echo $controlador->session_id; ?>&registro_id=<?php echo $controlador->registro_id; ?>" class="form-additional">
                <?php echo $controlador->inputs->select->org_empresa_id; ?>
                <?php echo $controlador->inputs->select->cat_sat_actividad_economica_id; ?>
                <?php echo $controlador->inputs->porcentaje; ?>

                <div class="buttons col-md-12">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-info btn-guarda col-md-12 " >Guarda</button>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-info btn-guarda col-md-12 " >Siguiente</button>
                    </div>

                </div>

                <div class="cont_tabla_sucursal col-md-12">
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">RFC Empresa</th>
                            <th scope="col">Empresa</th>
                            <th scope="col">Porcentaje</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($controlador->actividades_economicas as $registro){
                            echo "<tr>";
                            echo "<td>$registro[org_porcentaje_act_economica_id]</td>";
                            echo "<td>$registro[org_empresa_rfc]</td>";
                            echo "<td>$registro[org_empresa_razon_social]</td>";
                            echo "<td>$registro[org_porcentaje_act_economica_porcentaje]</td>";
                            echo "</tr>";
                        } ?>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>
