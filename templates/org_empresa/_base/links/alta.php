<?php /** @var \tglobally\tg_empresa\controllers\controlador_org_empresa $controlador */ ?>
<a href="index.php?seccion=<?php echo $controlador->tabla; ?>&accion=alta&session_id=<?php echo $controlador->session_id; ?>">
    <?php include "templates/$controlador->seccion/_base/buttons/_1.azul.alta.php"; ?>
</a>