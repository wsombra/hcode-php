<?php
/*

O PHP possui métodos e classes abstratas. Classes definidas como abstratas não podem ser instanciadas, e qualquer classe que contenha ao menos um método abstrato também deve ser abstrata. Métodos são definidos como abstratos declarando a intenção em sua assinatura, e não podem definir a implementação.

Quando herdando de uma classe abstrata, todos os métodos marcados como abstratos da classe herdada precisam ser definidos na classe implementante. além de seguir as regras usuais de herança e compatibilidade de assinatura

*/
interface Veiculo {

    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
    
}

abstract class Automovel implements Veiculo {

    public function acelerar($velocidade){

        echo "O veículo acelerou até " . $velocidade . "km/h";

    }

    public function freiar($velocidade){

        echo "O veículo freiou até " . $velocidade . "km/h";

    }

    public function trocarMarcha($marcha){

        echo "O veículo engatou a marcha " . $marcha;

    }

}

class DelRey extends Automovel {

    public function empurrar(){



    }

}

$carro = new DelRey();

$carro->acelerar(200);

?>