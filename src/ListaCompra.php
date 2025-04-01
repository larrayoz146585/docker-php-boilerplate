<?php

namespace Deg540\DockerPHPBoilerplate;

class ListaCompra
{
    // TODO: Lista de la compra Kata
    public static function listaCompra(string $productos): string
    {
        if ($productos != "") {
            return  $productos + " x1";
        } else {
            return "";
        }


    }

}
