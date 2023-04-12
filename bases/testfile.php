<!doctype html>
<html lang="pt-BR">
<head>Primeiro código PHP com tags HTML</head>
<body>
    <h1>Título do texto</h1>
    <p><?php 
        //criar variavel usando $, são case sensitive.
        $var1 = 2 + 2;
        echo "O Resultado da soma é igual a: " . $var1;
        
        //atribuição de valores
        $_nomeCurso = "Programação de Páginas Dinâmicas com PHP";
        $ano_criacao = 1994;
        $flagLinguagemScript = true;
    ?></p>
    
    OPERADORES:
    +,-,*,/ = comuns
    % = resto da divisão
    ** = expornencial

    $var1 += 2; //com a utilização da combinação de operadores a variável $var1 passou a ter o valor de 6 (4 + 2)
    $var1 *= 2; //com a utilização da combinação de operadores a variável $var1 passou a ter o valor de 12 (4 + 2) * 2

    $var2 = "Programação";
    $var2 .= " com PHP"; //com a utilização da combinação de operadores a variável $var2 passou a ter o conteúdo "Programação com PHP"

    == verifica igualdade
    === verifica se são identicas. Nesse caso, além do valor, verifica se ambas são do mesmo tipo
    != ou <> diferente
    !== Verifica se não são idênticas/iguais ou se não são do mesmo tipo
    < , > , <=, => maior, menor , maior ou igual, menor ou igual
    <=> (spaceship) retorna -1, 0 ou 1 quando for, respectivamente, menor, igual ou maior.

    LOGICOS: 
    AND ou && (e)
    OR ou || (ou)
    XOR true se um valor for verdadeiro, mas não ambos
    ! negação
</body>
</html>