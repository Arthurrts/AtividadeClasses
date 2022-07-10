<?php
    class Produto{
        public $id;
        public $qtd;
        public $nome;
        public $valor;
        public $valorT;
        public $sts;

    public function calcular(){
        $this->valorT = $this->valor * $this->qtd;
    }
}
?>
