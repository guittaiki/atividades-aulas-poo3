<?php

// Antes: usando getter e setter.
class ProdutoAntes
{
    private float $preco = 0.0;

    public function setPreco(float $preco): void
    {
        $this->preco = $preco;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }
}


class ProdutoDepois
{
    public float $preco {
        set {
            $this->preco = $value;
        }
    }
}

$produtoAntes = new ProdutoAntes();
$produtoAntes->setPreco(29.90);
echo 'Antes: R$ ' . number_format($produtoAntes->getPreco(), 2, ',', '.');

$produtoDepois = new ProdutoDepois();
$produtoDepois->preco = 29.90;
echo '<br>Depois: R$ ' . number_format($produtoDepois->preco, 2, ',', '.');
