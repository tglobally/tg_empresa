<?php
/**
 * @author Martin Gamboa Vazquez
 * @version 1.0.0
 * @created 2022-05-14
 * @final En proceso
 *
 */
namespace tglobally\tg_empresa\controllers;
use gamboamartin\errores\errores;
use PDO;
use stdClass;
use tglobally\template_tg\html;


class controlador_org_tipo_empresa extends \gamboamartin\organigrama\controllers\controlador_org_tipo_empresa {
    public array $sidebar = array();
    public function __construct(PDO $link, stdClass $paths_conf = new stdClass()){

        $html_base = new html();
        parent::__construct( link: $link, html: $html_base, paths_conf: $paths_conf);
        $this->titulo_lista = 'Tipos de Empresa';

        $sidebar = $this->sidebar();
        if(errores::$error){
            $error = $this->errores->error(mensaje: 'Error al maquetar menu',data:  $sidebar);
            print_r($error);
            exit;
        }

    }

    /**
     * Inicializa las elementos de un menu
     * @param string $menu_item_titulo Label a mostrar
     * @param string $link link a seguir
     * @param bool $menu_seccion_active Se muestra la seccion como azul
     * @param bool $menu_lateral_active Se muestra la seccion como azul
     * @return array
     * @version
     */
    private function menu_item(string $menu_item_titulo, string $link, bool $menu_seccion_active = false,
                              bool $menu_lateral_active = false): array
    {

        $menu_item_titulo = trim($menu_item_titulo);
        if($menu_item_titulo === ''){
            return $this->errores->error(mensaje: 'Error menu_item_titulo esta vacio',data:  $menu_item_titulo);
        }

        $menu_item = array();
        $menu_item['menu_item'] = $menu_item_titulo;
        $menu_item['menu_seccion_active'] = $menu_seccion_active;
        $menu_item['link'] = $link;
        $menu_item['menu_lateral_active'] = $menu_lateral_active;

        return $menu_item;
    }

    private function sidebar(): array
    {
        $menu = $this->menu_item(menu_item_titulo: "Alta", link: $this->link_alta,menu_seccion_active: true,
            menu_lateral_active: true);

        if(errores::$error){
            return $this->errores->error(mensaje: 'Error al maquetar menu',data:  $menu);
        }

        $this->sidebar['lista']['titulo'] = "Tipos de Empresa";
        $this->sidebar['lista']['menu'] = array($menu);

        $menu = $this->menu_item(menu_item_titulo: "Alta", link: $this->link_alta,menu_lateral_active: true);
        if(errores::$error){
            return $this->errores->error(mensaje: 'Error al maquetar menu',data:  $menu);

        }

        $this->sidebar['alta']['titulo'] = "Tipos de Empresa";
        $this->sidebar['alta']['stepper_active'] = true;
        $this->sidebar['alta']['menu'] = array($menu);

        $menu = $this->menu_item(menu_item_titulo: "Modifica", link: $this->link_alta,menu_lateral_active: true);
        if(errores::$error){
            return $this->errores->error(mensaje: 'Error al maquetar menu',data:  $menu);
        }

        $this->sidebar['modifica']['titulo'] = "Tipos de Empresa";
        $this->sidebar['modifica']['stepper_active'] = true;
        $this->sidebar['modifica']['menu'] = array($menu);

        return $this->sidebar;
    }



}
