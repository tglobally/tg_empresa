<?php
namespace tglobally\tg_empresa\tests\controllers;

use gamboamartin\errores\errores;
use gamboamartin\test\liberator;
use gamboamartin\test\test;

use stdClass;
use tglobally\tg_empresa\controllers\controlador_org_clasificacion_dep;
use tglobally\tg_empresa\controllers\controlador_org_tipo_empresa;


class controlador_org_tipo_empresaTest extends test {
    public errores $errores;
    private stdClass $paths_conf;
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->errores = new errores();
        $this->paths_conf = new stdClass();
        $this->paths_conf->generales = '/var/www/html/organigrama/config/generales.php';
        $this->paths_conf->database = '/var/www/html/organigrama/config/database.php';
        $this->paths_conf->views = '/var/www/html/organigrama/config/views.php';


    }

    /**
     */
    public function test_menu_item(): void
    {
        errores::$error = false;

        $_GET['seccion'] = 'org_empresa';
        $_GET['accion'] = 'ubicacion';

        $_SESSION['grupo_id'] = 2;
        $_GET['session_id'] = '1';
        $_SESSION['usuario_id'] = '2';
        $ctl = new controlador_org_tipo_empresa(link: $this->link, paths_conf: $this->paths_conf);
        $ctl = new liberator($ctl);

        $menu_item_titulo = 'a';
        $link = '';
        $resultado = $ctl->menu_item($menu_item_titulo, $link);

        $this->assertIsArray($resultado);
        $this->assertNotTrue(errores::$error);
        $this->assertEquals('a',$resultado['menu_item']);
        $this->assertEquals('',$resultado['menu_seccion_active']);
        $this->assertEquals('',$resultado['link']);
        $this->assertEquals('',$resultado['menu_lateral_active']);


        errores::$error = false;
    }



}

