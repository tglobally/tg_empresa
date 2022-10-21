<?php /** @var \tglobally\tg_empresa\controllers\controlador_org_sucursal $controlador */ ?>
<?php include 'templates/org_sucursal/registro_patronal/secciones.php'; ?>
<div class="col-md-9 formulario">
    <div class="col-lg-12">

        <h3 class="text-center titulo-form">Hola, <?php echo $controlador->datos_session_usuario['adm_usuario_user']; ?> </h3>

        <div class="  form-main" id="form">
            <form method="post" action="<?php echo $controlador->link_im_registro_patronal_alta_bd; ?>" class="form-additional">

                <?php echo $controlador->inputs->org_sucursal_id; ?>
                <?php echo $controlador->inputs->fc_csd_id; ?>
                <?php echo $controlador->inputs->im_clase_riesgo_id; ?>
                <?php echo $controlador->inputs->descripcion; ?>

                <div class="buttons col-md-12">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-info btn-guarda col-md-12 " name="btn_action_next" value="modifica">Guarda</button>
                    </div>
                    <div class="col-md-6 ">
                        <a href="index.php?seccion=<?php echo $controlador->tabla; ?>&accion=lista&session_id=<?php echo $controlador->session_id; ?>"  class="btn btn-info btn-guarda col-md-12 ">Regresar</a>
                    </div>
                </div>
            </form>


        </div>


    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="widget widget-box box-container widget-mylistings">

                    <div class="">
                        <table id="im_registro_patronal" class="table table-striped" >

                        </table>
                    </div>
                </div> <!-- /. widget-table-->
            </div><!-- /.center-content -->
        </div>
    </div>

</div>


