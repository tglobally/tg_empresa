<?php
namespace tglobally\tg_empresa\controllers\html;

use gamboamartin\errores\errores;

class _base{

    private errores $error;
    public function __construct(){
        $this->error = new errores();

    }

    private function text_accion(string $subtitulo): string
    {
        return "<h4 class='text_seccion'>$subtitulo</h4>";
    }

    private function text_seccion(string $titulo): string
    {
        return "<h4 class='text_seccion'>$titulo</h4>";
    }

    private function cont_imagen_accion(string $url_assets): string
    {
        $html = "<div class='cont_imagen_accion'>";
        $html .= "<img src='".$url_assets."img/inicio/imagen_2.jpg'>";
        $html .= "</div>";
        return $html;
    }

    private function cont_link(string $subtitulo, string $titulo, string $url_assets){
        $text_cont_imagen_accion = $this->cont_imagen_accion(url_assets: $url_assets);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al obtener text_cont_imagen_accion', data: $text_cont_imagen_accion);
        }
        $text_content_accion = $this->cont_text_accion(subtitulo: $subtitulo,titulo:  $titulo);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al obtener cont_text_accion', data: $text_content_accion);
        }

        return $text_cont_imagen_accion.$text_content_accion;
    }

    private function cont_text_accion(string $subtitulo,string $titulo){

        $text_seccion = $this->text_seccion(titulo: $titulo);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar text_seccion', data: $text_seccion);
        }
        $text_accion = $this->text_accion(subtitulo: $subtitulo);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar text_accion', data: $text_accion);
        }

        $html = "<div class='cont_text_accion'>";
        $html .= $text_seccion.$text_accion;
        $html .= "</div>";
        return $html;
    }

    public function data_link( string $link, string $subtitulo, string $titulo, string $url_assets){

        $cont_link = $this->cont_link(subtitulo: $subtitulo,titulo:  $titulo, url_assets: $url_assets);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar cont_link', data: $cont_link);
        }

        return "<a href='$link'> $cont_link</a>";
    }


}
