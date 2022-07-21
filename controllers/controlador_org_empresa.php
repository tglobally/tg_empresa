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
use html\org_empresa_html;
use PDO;
use stdClass;
use tglobally\template_tg\html;

class controlador_org_empresa extends \gamboamartin\organigrama\controllers\controlador_org_empresa {

    public function __construct(PDO $link, stdClass $paths_conf = new stdClass()){

        $html_base = new html();
        parent::__construct( link: $link, html: $html_base);
        $this->titulo_lista = 'Empresas';

    }


    public function alta_bd(bool $header, bool $ws = false): array|stdClass
    {

        $keys = array('dp_pais_id','dp_estado_id','dp_municipio_id','dp_cp_id','dp_colonia_postal_id');
        $_POST = (new init())->limpia_rows(keys: $keys,row:  $_POST);
        if(errores::$error){
            return $this->retorno_error(mensaje: 'Error al limpiar datos',data:  $_POST, header: $header,ws:$ws);
        }


        $r_alta_bd = parent::alta_bd(header: $header); // TODO: Change the autogenerated stub
        if(errores::$error){
            return $this->retorno_error(mensaje: 'Error al dar de alta empresa',data:  $r_alta_bd, header: $header,ws:$ws);
        }
        return $r_alta_bd;
    }

    public function modifica(bool $header, bool $ws = false, string $breadcrumbs = '', bool $aplica_form = true, bool $muestra_btn = true): array|string
    {
        $r_modifica =  parent::modifica($header, $ws, $breadcrumbs, $aplica_form, $muestra_btn); // TODO: Change the autogenerated stub
        if(errores::$error){
            return $this->retorno_error(mensaje: 'Error al generar template',data:  $r_modifica, header: $header,ws:$ws);
        }

        if(!isset($this->row_upd->cat_sat_regimen_fiscal_id)){
            $this->row_upd->cat_sat_regimen_fiscal_id = -1;
        }

        $org_empresa = $this->modelo->registro(registro_id: $this->registro_id,retorno_obj: true);
        if(errores::$error){
            $error = $this->errores->error(mensaje: 'Error al obtener registro',data:  $org_empresa);
            print_r($error);
            die('Error');
        }


        $keys_foraneas = array('dp_pais_id','dp_estado_id','dp_municipio_id','dp_cp_id','dp_colonia_postal_id',
            'dp_calle_pertenece_id','org_empresa_dp_calle_pertenece_entre1_id','org_empresa_dp_calle_pertenece_entre2_id');

        foreach ($keys_foraneas as $campo){
            if(is_null($org_empresa->$campo)){
                $org_empresa->$campo = '-1';
            }
        }


        $this->row_upd->dp_pais_id = $org_empresa->dp_pais_id;
        $this->row_upd->dp_estado_id = $org_empresa->dp_estado_id;
        $this->row_upd->dp_municipio_id = $org_empresa->dp_municipio_id;
        $this->row_upd->dp_cp_id = $org_empresa->dp_cp_id;
        $this->row_upd->dp_colonia_postal_id = $org_empresa->dp_colonia_postal_id;
        $this->row_upd->dp_calle_pertenece_id = $org_empresa->dp_calle_pertenece_id;
        $this->row_upd->dp_calle_pertenece_entre1_id = $org_empresa->org_empresa_dp_calle_pertenece_entre1_id;
        $this->row_upd->dp_calle_pertenece_entre2_id = $org_empresa->org_empresa_dp_calle_pertenece_entre2_id;


        $inputs = (new org_empresa_html($this->html_base))->genera_inputs_modifica(controler: $this, link: $this->link);
        if(errores::$error){
            $error = $this->errores->error(mensaje: 'Error al generar inputs',data:  $inputs);
            print_r($error);
            die('Error');
        }

        return $r_modifica;
    }


}