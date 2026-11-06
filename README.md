# Pesquisa sobre Property Hooks em PHP

Este repositório apresenta um exemplo simples de duas formas de acessar e
alterar o preço de um produto:

- **Antes:** usando métodos getter e setter tradicionais.
- **Depois:** usando um *property hook* `set`, recurso introduzido no PHP 8.4.

O exemplo está no arquivo [`index.php`](index.php).

## Requisitos

- PHP 8.4 ou superior para executar o exemplo completo.
- Um navegador para visualizar o resultado.

> Se o terminal usa PHP 8.4 ou superior, mas o editor marca erro na sintaxe
> do *property hook*, o analisador da extensão PHP do editor pode não suportar
> essa sintaxe ainda. Atualize a extensão ou configure-a para reconhecer a
> versão do PHP usada no projeto.

## Executar no navegador

Abra um terminal na pasta do projeto e inicie o servidor embutido do PHP:

```powershell
php -S localhost:8000
```

Mantenha o terminal aberto e acesse <http://localhost:8000> no navegador.
Para encerrar o servidor, pressione `Ctrl+C` no terminal.

## O que o exemplo demonstra

### Antes: getter e setter

A classe `ProdutoAntes` mantém o preço em uma propriedade privada. O método
`setPreco()` altera o valor, e `getPreco()` permite consultá-lo:

```php
$produtoAntes = new ProdutoAntes();
$produtoAntes->setPreco(29.90);
$produtoAntes->getPreco();
```

### Depois: property hook

A classe `ProdutoDepois` declara um hook `set` na propriedade `preco`. Assim,
o valor é atribuído diretamente à propriedade:

```php
$produtoDepois = new ProdutoDepois();
$produtoDepois->preco = 29.90;
```

Os dois trechos usam classes separadas e exibem o mesmo preço. O arquivo usa
`echo` para mostrar os resultados e `<br>` para separá-los na página.
