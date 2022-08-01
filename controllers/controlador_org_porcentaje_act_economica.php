<?php
/**
 * @author Martin Gamboa Vazquez
 * @version 1.0.0
 * @created 2022-05-14
 * @final En proceso
 *
 */
namespace controllers;

use gamboamartin\errores\errores;
use gamboamartin\system\init;
use models\org_empresa;
use models\org_porcentaje_act_economica;
use models\org_sucursal;
use PDO;
use stdClass;
use tglobally\template_tg\html;

class controlador_org_porcentaje_act_economica extends \gamboamartin\organigrama\controllers\controlador_org_porcentaje_act_economica {

    public array $actividades_economicas = array();
    public string $rfc = '';
    public string $razon_social = '';

    public function __construct(PDO $link, stdClass $paths_conf = new stdClass()){

        $html_base = new html();
        parent::__construct( link: $link, html: $html_base);
        $this->titulo_lista = 'Empresas';


    }

    public function alta(bool $header, bool $ws = false): array|string
    {
        if(isset($this->registro_id) && $this->registro_id > 0){

            $filtro['org_porcentaje_act_economica.id'] = $this->registro_id;

            $r_org_porcentaje_act_economica = (new org_porcentaje_act_economica($this->link))->filtro_and(filtro: $filtro);
            if(errores::$error){
                return $this->retorno_error(mensaje: 'Error al obtener actividades economicas',data:  $r_org_porcentaje_act_economica,
                    header: $header,ws:$ws);
            }

            $registros = $this->maqueta_direccion(actividades_economicas: $r_org_porcentaje_act_economica->registros);
            if(errores::$error){
                return $this->retorno_error(mensaje: 'Error al maquetar direcciones',data:  $registros,
                    header: $header,ws:$ws);
            }

            $this->actividades_economicas = $registros;

            $registro = (new org_empresa($this->link))->registro(registro_id: $this->registro_id);
            if(errores::$error){
                return $this->retorno_error(mensaje: 'Error al obtener registro empresa',data:  $registro,
                    header: $header,ws:$ws);
            }

            $this->rfc = $registro['org_empresa_rfc'];
            $this->razon_social = $registro['org_empresa_razon_social'];
        }

        $r_alta = parent::alta($header, $ws);
        if(errores::$error){
            return $this->retorno_error(mensaje: 'Error al maquetar alta',data:  $r_alta, header: $header,ws:$ws);
        }
        return $r_alta;
    }

    public function maqueta_direccion(array $actividades_economicas){
        $registros = array();
        foreach ($actividades_economicas as $actividad_economica){
            $actividad_economica['porcentaje'] = "$actividad_economica[porcentaje] $actividad_economica[porcentaje] ";
            $actividad_economica['porcentaje'] .= "$actividad_economica[porcentaje] Col. $actividad_economica[porcentaje]";
            $actividad_economica['porcentaje'] .= ", $actividad_economica[porcentaje]";
            $registros[] = $actividad_economica;
        }

        return $registros;
    }


}
