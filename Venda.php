<?php
    class Venda{
        public $produtos;
        public $valor;
        public $numProd=0;

        public function imprimir(){
            echo "<b>Venda no valor: </b>" . $this->valor . "</br></br>";

            for ($i=0; $i<$this->numProd; $i++) {
                if ($this->produtos[$i]->sts==1) {
                    echo "<font color='blue'><b>Esta venda foi paga a vista.</br></b></font>";
                    echo "Produto: " . $this->produtos[$i]->nome . "</br>";
                    echo "Valor Unitário: " . $this->produtos[$i]->valor . "</br>";
                    echo "Quantidade: " . $this->produtos[$i]->qtd . "</br>";
                    echo "Valor total: " . $this->produtos[$i]->valorT . "</br></br>";
                }

                if ($this->produtos[$i]->sts==2) {
                    echo "<font color='red'><b>Esta venda foi paga a prazo.</br></b></font>";
                    echo "Produto: " . $this->produtos[$i]->nome . "</br>";
                    echo "Valor Unitário: " . $this->produtos[$i]->valor . "</br>";
                    echo "Quantidade: " . $this->produtos[$i]->qtd . "</br>";
                    echo "Valor total: " . $this->produtos[$i]->valorT . "</br></br>";
                }

                if ($this->produtos[$i]->sts==3) {
                    echo "<font color='yellow'><b>Estas venda foi a prazo porém já foi paga.</br></b></font>";
                    echo "Produto: " . $this->produtos[$i]->nome . "</br>";
                    echo "Valor Unitário: " . $this->produtos[$i]->valor . "</br>";
                    echo "Quantidade: " . $this->produtos[$i]->qtd . "</br>";
                    echo "Valor total: " . $this->produtos[$i]->valorT . "</br></br>";
                }
            }
        }

        public function calcularV(){
            $this->valor = 0;
            for ($i=0; $i<$this->numProd; $i++) {
                $this->valor += $this->produtos[$i]->valorT;
            }
        }

        public function gerarP(){
            $p1 = new Produto();
            $p1->id = 1;
            $p1->qtd = 5;
            $p1->nome = "Sabão";
            $p1->valor = 4;
            $this->numProd++;
            $p1->calcular();
            $p1->sts = 3;

            $p2 = new Produto();
            $p2->id = 2;
            $p2->qtd = 4;
            $p2->nome = "Leite";
            $p2->valor = 8;
            $this->numProd++;
            $p2->calcular();
            $p2->sts = 1;

            $p3 = new Produto();
            $p3->id = 3;
            $p3->qtd = 2;
            $p3->nome = "Vanish";
            $p3->valor = 15;
            $this->numProd++;
            $p3->calcular();
            $p3->sts = 1;

            $p4 = new Produto();
            $p4->id = 4;
            $p4->qtd = 2;
            $p4->nome = "Tenis";
            $p4->valor = 350;
            $this->numProd++;
            $p4->calcular();
            $p4->sts = 2;

            $p5 = new Produto();
            $p5->id = 5;
            $p5->qtd = 6;
            $p5->nome = "Banana";
            $p5->valor = 6;
            $this->numProd++;
            $p5->calcular();
            $p5->sts = 1;

            $p6 = new Produto();
            $p6->id = 6;
            $p6->qtd = 1;
            $p6->nome = "Frigobar";
            $p6->valor = 600;
            $this->numProd++;
            $p6->calcular();
            $p6->sts = 2;

            $this->produtos[0] = $p1;
            $this->produtos[1] = $p2;
            $this->produtos[2] = $p3;
            $this->produtos[3] = $p4;
            $this->produtos[4] = $p5;
            $this->produtos[5] = $p6;
        }
    }
?>
