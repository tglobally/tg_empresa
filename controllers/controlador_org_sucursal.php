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
use gamboamartin\organigrama\models\org_empresa;
use gamboamartin\organigrama\models\org_sucursal;
use gamboamartin\system\init;
use PDO;
use stdClass;
use tglobally\template_tg\html;


/**
 * este contralador se encarga de generar el contructor que define los parametros y da un titulo a la lista
 */
class controlador_org_sucursal extends \gamboamartin\organigrama\controllers\controlador_org_sucursal {
    public array $sucursales = array();
    public string $rfc = '';
    public string $razon_social = '';

    public function __construct(PDO $link, stdClass $paths_conf = new stdClass()){

        $html_base = new html();
        parent::__construct( link: $link, html: $html_base);
        $this->titulo_lista = 'Sucursal';

        $this->sidebar['lista']['titulo'] = "Sucursales";
        $this->sidebar['lista']['menu'] = array(
            $this->menu_item(menu_item_titulo: "Alta", link: $this->link_alta,menu_seccion_active: true,menu_lateral_active: true));

        $this->sidebar['alta']['titulo'] = "Alta Sucursal";
        $this->sidebar['alta']['stepper_active'] = true;
        $this->sidebar['alta']['menu'] = array(
            $this->menu_item(menu_item_titulo: "Alta", link: $this->link_alta,menu_lateral_active: true),
            $this->menu_item(menu_item_titulo: "Registro Patronal", link: $this->link_alta));

        $this->sidebar['modifica']['titulo'] = "Modifica Sucursal";
        $this->sidebar['modifica']['stepper_active'] = true;
        $this->sidebar['modifica']['menu'] = array(
            $this->menu_item(menu_item_titulo: "Modifica", link: $this->link_alta,menu_lateral_active: true),
            $this->menu_item(menu_item_titulo: "Registro Patronal", link: $this->link_alta));
    }

    public function menu_item(string $menu_item_titulo, string $link, bool $menu_seccion_active = false,bool $menu_lateral_active = false): array
    {
        $menu_item = array();
        $menu_item['menu_item'] = $menu_item_titulo;
        $menu_item['menu_seccion_active'] = $menu_seccion_active;
        $menu_item['link'] = $link;
        $menu_item['menu_lateral_active'] = $menu_lateral_active;

        return $menu_item;
    }


    /**
    public function alta(bool $header, bool $ws = false, bool $org_empresa_id_disabled = false): array|string
    {
        $disabled_org_empresa = $org_empresa_id_disabled;

        if(isset($_GET['org_empresa_id'])){
            $this->org_empresa_id = $_GET['org_empresa_id'];
            $filtro['org_empresa.id'] = $this->org_empresa_id;
            $r_org_sucursal = (new org_sucursal($this->link))->filtro_and(filtro: $filtro);
            if(errores::$error){
                return $this->retorno_error(mensaje: 'Error al obtener sucursales',data:  $r_org_sucursal,
                    header: $header,ws:$ws);
            }

            $registros = $this->maqueta_direccion(sucursales: $r_org_sucursal->registros);
            if(errores::$error){
                return $this->retorno_error(mensaje: 'Error al maquetar direcciones',data:  $registros,
                    header: $header,ws:$ws);
            }

            $this->sucursales = $registros;

            $registro = (new org_empresa($this->link))->registro(registro_id: $this->org_empresa_id);
            if(errores::$error){
                return $this->retorno_error(mensaje: 'Error al obtener registro empresa',data:  $registro,
                    header: $header,ws:$ws);
            }

            $this->rfc = $registro['org_empresa_rfc'];
            $this->razon_social = $registro['org_empresa_razon_social'];
        }

        if(isset($_GET['org_empresa_id'])){
            $this->registro_id = $_GET['org_empresa_id'];
            $disabled_org_empresa = false;
        }
        $r_alta = parent::alta($header, $ws, org_empresa_id_disabled: $disabled_org_empresa);
        if(errores::$error){
            return $this->retorno_error(mensaje: 'Error al maquetar alta',data:  $r_alta, header: $header,ws:$ws);
        }
        return $r_alta;
    }

    public function alta_bd(bool $header, bool $ws = false): array|stdClass
    {
        $registro_id = $this->registro_id;

        $r_alta_bd = parent::alta_bd(header: false, ws: $ws);
        if(errores::$error){
            return $this->retorno_error(mensaje: 'Error al maquetar alta',data:  $r_alta_bd, header: $header,ws:$ws);
        }

        if($r_alta_bd->registro_id > 0) {
            header('Location: index.php?seccion=org_sucursal&accion=alta&registro_id='.$registro_id.'&session_id='.$this->session_id);
        }
        return $r_alta_bd;
    }*/

    /**
     * Maqueta las sucursales de una empresa
     * @param array $sucursales Sucursales asignadas a empresa
     * @return array
     */
    public function maqueta_direccion(array $sucursales): array
    {
        $registros = array();
        foreach ($sucursales as $sucursal){
            $sucursal['direccion'] = "$sucursal[dp_calle_descripcion] $sucursal[org_sucursal_exterior] ";
            $sucursal['direccion'] .= "$sucursal[org_sucursal_interior] Col. $sucursal[dp_colonia_descripcion]";
            $sucursal['direccion'] .= ", $sucursal[dp_municipio_descripcion]  $sucursal[dp_estado_descripcion] ";
            $sucursal['direccion'] .= " $sucursal[dp_pais_descripcion] ";
            $registros[] = $sucursal;
        }

        return $registros;
    }

}
