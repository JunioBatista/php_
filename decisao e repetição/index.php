<?php
// <!-- ESTRUTURAS DECISAO: If,  else, elseif, switch  -->

$_var1 = 5;
$_var2 = '5';

// <!-- ternário -->
$comparacao = ($_var1 && $_var2) ? 'alguma coisa' : 'outra coisa';
$outracomp = ($var1 >= 10) ? 11 : 9;
echo $var2; //imprimirá 9

if($_var1 == $_var2) {
    // <!-- do something -->
}else {
    // <!-- do something -->
}

$var3 = 10;
$var4 = 20;

if($var3 > $var3){
    echo "$var3 é maior que $var4";
}

// <!-- FORMA ALTERNATIVA -->
if($_var1 == $_var2) :
    // <!-- do something -->
else:
    // <!-- do something -->
endif;

// <!-- SWITCH -->
$fruta = 'banana';

switch($fruta) {
    case 'laranja':
        echo('laranja');

    case 'banana':
        echo('banana');

    case 'pera':
        echo('pera');

    case 'uva':
        echo('uva');

    default:
        echo('nenhuma das opcoes');
        break;
}

// <!-- ESTRUTURAS REPETIÇÃO: While, Do-while, for, for each  -->

// <!-- WHILE -->
$contador = 0
while(contador < 10){
    <!-- do-something -->
    contador++
};

// ou
$i = 2;
while ($i <= 20):
    echo $i;
    $i+=2;
    echo "\n";
endwhile;

// <!-- DO WHILE -->
do {
        <!-- do-something -->
        contador++
}while(contador < 10);

// <!-- FOR -->
for($cont = 0; $cont < 10; $cont ++) {
    <!-- do something -->
}


// <!-- FOR ARRAY -->
$lista_frutas = array('uva','pera', 'banana','laranja');
for($i=0; $i < count($frutas); $i++) {
    <!-- do something -->
}


// <!-- FOREACH ARRAY -->
$frutas = array('uva','pera', 'banana','laranja');
foreach($lista_frutas as fruta) {
    echo "Fruta: " . $fruta . "\n";
}
