<?php

namespace Deg540\DockerPHPBoilerplate\Test;

use Deg540\DockerPHPBoilerplate\ListaCompra;
use PHPUnit\Framework\TestCase;

class ListaCompraTests extends TestCase
{
    /**
     * @test
     */
    public function AddProductReturnsOneOfThisProduct()
    {
        $example = new ListaCompra();
        $this->assertEquals("pan x1", $example->listaCompra("añadir pan"));
    }
}