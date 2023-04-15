<?php
//Declarando um array vazio
$carros = array();

//Primeira forma de declaração e atribuição de valores
$carros = Array("Fusca", "Monza", "Passat");

//Segunda forma de declaração e atribuição de valores
//Esta forma é semelhante à anterior, mas utilizando sintaxe similar a do Javascript
$carros = ["Fusca", "Monza", "Passat"];

//Terceira forma de declaração e atribuição de valores
$carros[0] = "Fusca";
$carros[1] = "Monza";
$carros[2] = "Passat";

//Quarta forma de declaração e atribuição de valores
$carros[] = "Fusca";
$carros[] = "Monza";
$carros[] = "Passat";


//INDICES ASSOCIATIVOS (INDICES DE STRING INVES DE NUMEROS)
 //Primeira forma
 $carros = array (
	'vw'        => "Fusca",
	'chevrolet' => "Monza",
	'fiat'      => "Tempra"
 );

 //Segunda forma
 $carros = [
	'vw'        => "Fusca",
	'chevrolet' => "Monza",
	'fiat'      => "Tempra"
 ];

 //Terceira forma
 $carros['vw']        = "Fusca";
 $carros['chevrolet'] = "Monza";
 $carros['fiat']      = "Tempra";

 //misturado
 $carros = array (
	'vw'        => "Fusca",
	0           => "Passat",
	'chevrolet' => "Monza",
	1           => "Chevette",
	'fiat'      => "Tempra",
	2           => "Uno"
 );

// apagar items usando os metodos 
//unset e array_splice ou  definindo o valor do elemento como vazio

print_r($carros);
echo "O tamanho atual do array é: " . count($carros);
 echo "\n\n";
 //Definindo o valor do índice 0 como vazio
 $carros[0] = '';
 
 print_r($carros);
 echo "O tamanho atual do array é: " . count($carros);
 echo "\n\n";