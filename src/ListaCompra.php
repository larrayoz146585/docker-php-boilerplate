<?php

namespace Deg540\DockerPHPBoilerplate;

class ListaCompra
{
    // TODO: Lista de la compra Kata
    public static function listaCompra(string $productos): string
    {
        /*
        * Añadir productos
        ●  Instrucción: añadir <nombre> [cantidad]

        ●  Si no se indica cantidad, se asume 1.
        ●  Si el producto ya existe en la lista, se suma la nueva cantidad a la anterior.
        ●  Ejemplos:

        ○  añadir pan → "pan x1"

        ○  añadir Pan 2 → "pan x3"
 */
        if($productos[2] != "") {
            $producto = explode(" ", $productos);
            $nombre = strtolower($producto[1]);
            $cantidad = (int)$producto[2];
            return $nombre . " x" . ($cantidad)
        } else if ($productos[2] == "") {
            $producto = explode(" ", $productos);
            $nombre = strtolower($producto[1]);
            return $nombre . " x1";
        } else {
            return "";
        }


    }

}


