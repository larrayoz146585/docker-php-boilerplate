<?php

namespace Deg540\DockerPHPBoilerplate\Test;

use Deg540\DockerPHPBoilerplate\ListaCompra;
use PHPUnit\Framework\TestCase;

class ListaCompraTests extends TestCase
{
    /**
     * @test
     */
    public function addProductReturnsOneOfThisProduct()
    {
        $example = new ListaCompra();
        $this->assertEquals("pan x1", $example->listaCompra("añadir pan"));
    }

    /**
     * @test
     **/
    public function addEspecificQuantityOfProductReturnsThisProduct()
    {
        $example = new ListaCompra();
        $this->assertEquals("pan x2", $example->listaCompra("añadir pan 2"));
    }


}