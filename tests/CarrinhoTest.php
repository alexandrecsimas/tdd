<?php

namespace Code; 

use PHPUnit\Framework\TestCase;

Class CarrinhoTest extends TestCase
{
    //Manipular varios produtos
    //Visualizar produtos
    //Total de produtos || Total compra
    
    public function testSeClasseCarrinhoExiste()
    {
        $classe = class_exists('\\Code\\Carrinho');

        $this->assertTrue($classe);
    }

    public function testAdicaoDeProdutosNoCarrinho()
    {
        $produto = new Produto();

        $produto->setName('Produto 1');
        $produto->setPrice(19.99);
        $produto->setSlug('produto-1');

        $produto2 = new Produto();

        $produto2->setName('Produto 2');
        $produto2->setPrice(19.99);
        $produto2->setSlug('produto-2');

        $carrinho = new Carrinho();

        $carrinho->addProduto($produto);
        $carrinho->addProduto($produto2);

        $this->assertIsArray($carrinho->getProdutos());

    }
}