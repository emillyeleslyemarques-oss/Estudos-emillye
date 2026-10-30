<?php

// nessa segunda versão nao precisamos declarar propriedades nem fazer atribuições com $this
class Pedido {

    public function __construct(
        private int $numero,
        private string $cliente
    ) {
    }
}

// Essa é a forma tradicional de  criar propriedades de uma classe
class Pedidos {
   //primeiro declaramos as propriedades

                //Guarda o numero do pedido
    private int   $numero;
                     //Guarda o nome do cliente
    private string   $cliente;

    // aqui criamos o construtor
    public function __construct(int $numero, string $cliente) {
        $this->numero = $numero;
        $this->cliente = $cliente;
    }
}