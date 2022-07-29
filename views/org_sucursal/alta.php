<?php /** @var controllers\controlador_org_sucursal $controlador */ ?>
<?php include 'templates/org_sucursal/alta/secciones.php'; ?>
<div class="col-md-9 formulario">
    <div class="col-lg-12">

        <h3 class="text-center titulo-form">Hola, Nombre Usuario </h3>

        <div class="  form-main" id="form">
            <form method="post" action="./index.php?seccion=org_sucursal&accion=alta_bd&session_id=<?php echo $controlador->session_id; ?>" class="form-additional">
                <?php echo $controlador->inputs->codigo; ?>
                <?php echo $controlador->inputs->codigo_bis; ?>
                <?php echo $controlador->inputs->fecha_inicio_operaciones; ?>
                <?php echo $controlador->inputs->select->dp_calle_pertenece_id; ?>
                <?php echo $controlador->inputs->select->org_empresa_id; ?>
                <?php echo $controlador->inputs->select->dp_calle_pertenece_entre1_id; ?>
                <?php echo $controlador->inputs->select->dp_calle_pertenece_entre2_id; ?>
                <?php echo $controlador->inputs->exterior; ?>
                <?php echo $controlador->inputs->interior; ?>
                <?php echo $controlador->inputs->telefono_1; ?>
                <?php echo $controlador->inputs->telefono_2; ?>
                <?php echo $controlador->inputs->telefono_3; ?>
                <div class="buttons col-md-12">
                    <div class="col-md-6 btn-ancho">
                        <button type="submit" class="btn btn-info btn-guarda col-md-12 " >Guarda</button>
                    </div>
                    <div class="col-md-6 btn-ancho">
                        <button type="submit" class="btn btn-info btn-guarda col-md-12 " >Siguiente</button>
                    </div>

                </div>

                <div class="cont_tabla_sucursal col-md-12">
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Codigo</th>
                            <th scope="col">Fecha Inicio Operacion</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Telefono 1</th>
                            <th scope="col">Telefono 2</th>
                            <th scope="col">Telefono 3</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($controlador->sucursales as $registro){
                            echo "<tr>";
                            echo "<td>$registro[org_sucursal_id]</td>";
                            echo "<td>$registro[org_sucursal_codigo]</td>";
                            echo "<td>$registro[org_sucursal_fecha_inicio_operaciones]</td>";
                            echo "<td>$registro[direccion]</td>";
                            echo "<td>$registro[org_sucursal_telefono_1]</td>";
                            echo "<td>$registro[org_sucursal_telefono_2]</td>";
                            echo "<td>$registro[org_sucursal_telefono_3]</td>";
                            echo "</tr>";
                        } ?>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>
