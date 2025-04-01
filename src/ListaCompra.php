<?php

namespace Deg540\DockerPHPBoilerplate;

class ListaCompra
{

    // TODO: Lista de la compra Kata
    public static function listaCompra(string $productos): string
    {
        if($productos[2] != "") {
            $producto = explode(" ", $productos);
            $nombre = strtolower($producto[1]);
            $cantidad = (int)$producto[2];
            return $nombre . " x" . ($cantidad);
        } else if ($productos[2] == "") {
            $producto = explode(" ", $productos);
            $nombre = strtolower($producto[1]);
            return $nombre . " x1";
        } else {
            return "";
        }


    }

}


