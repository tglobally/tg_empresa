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
use gamboamartin\system\init;
use JsonException;
use PDO;
use stdClass;
use tglobally\template_tg\html;

class controlador_org_empresa extends \gamboamartin\organigrama\controllers\controlador_org_empresa {

    public function __construct(PDO $link, stdClass $paths_conf = new stdClass()){

        $html_base = new html();
        parent::__construct( link: $link, html: $html_base);
        $this->titulo_lista = 'Empresas';


    }

    public function lista(bool $header, bool $ws = false): array
    {

        $r_lista = parent::lista(header:false); // TODO: Change the autogenerated stub
        if(errores::$error){
            return $this->retorno_error(mensaje: 'Error al ejecutar template',data:  $_POST, header: $header,ws:$ws);
        }

        $links = $this->registros;

        $registros = $this->modelo->registros(return_obj: true);
        if(errores::$error){
            return $this->retorno_error(mensaje: 'Error al obtener registros',data:  $registros, header: $header,ws:$ws);
        }

        foreach ($registros as $indice=>$registro){
            foreach($links as $link){

                if((int)$registro->org_empresa_id  === (int)$link->org_empresa_id){
                    $registro->link_modifica = $link->link_modifica;
                    $registro->link_elimina_bd = $link->link_elimina_bd;
                }
            }
            $registros[$indice] = $registro;

        }

        $this->registros = $registros;

        return $r_lista;
    }


}
