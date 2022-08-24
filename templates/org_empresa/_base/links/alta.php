<?php /** @var string $seccion */
use config\generales;
?>

<a href="index.php?seccion=org_empresa&accion=alta&session_id=<?php echo (new generales())->session_id; ?>">
    <?php include "templates/$controlador->seccion/_base/buttons/_1.azul.alta.php"; ?>
</a>