<?php
//
// Links que podem ajudar:
// a) http://viniciusban.blogspot.com/2010/08/php-em-15-minutos-parte-1.html
// b) http://viniciusban.blogspot.com/2010/08/php-em-15-minutos-parte-2.html
// c) http://www.php.net/manual/pt_BR/
//
//
//
//
// 1) Qual desses comandos serve para percorrer um array sem precisar
// controlar o indexador?
//
// a) if
// b) echo
// c) foreach
// d) explode
// e) print
//
//
//
// 2) Tendo o seguinte comando abaixo, escolha a alternativa correta:
   $a = array("Pedro", "25/03/2013", 17);
//
// a) A variável $a é um inteiro
// b) A variável $a é inválida
// c) A variável $a é um array com 3 itens
// d) A variável $a é um array associativo
// e) Nenhuma das alternativas acima
//
//
//
// 3) Os modificadores de acesso do PHP são:
//
// a) public, protected e private
// b) public, protected, private e final
// c) abstract, interface e class
// d) Não possui modificadores
// e) Nenhuma das alternativas acima
//
//
//
// 4) A função explode() serve para:
//
// a) Separar uma string letra por letra
// b) Somar variáveis inteiras de uma forma rápida
// c) Separar uma string em partes, delimitada por um caractere
// d) Separar as ocorrências de um array
// e) Juntar todas as variáveis do programa num array único
//
//
//
// 5) O comando return, usado dentro de uma function, serve para:
//
// a) Terminar definitivamente o programa
// b) Sair da function e voltar para o trecho de código que a invocou
// c) Retornar o maior item de um array
// d) Inverter uma string
// e) Validar uma data conforme o padrão brasileiro
//
//
//
// 6) Escreva um programa que mostre a quantidade de vezes que cada
// palavra aparece no texto abaixo, entre aspas:
   "Nós não desistiremos nem fracassaremos. Nós iremos até o fim. 
   Nós lutaremos na França, lutaremos nos mares e oceanos, nós 
   lutaremos com confiança crescente e uma força também crescente 
   ao nosso redor. Nós defenderemos nossa ilha, qualquer que seja o 
   preço. Nós lutaremos nas praias, lutaremos em terra firme, lutaremos 
   nos campos e nas ruas, lutaremos nas montanhas. Nós nunca nos renderemos!"
//
// Observações:
// a) Faça seu programa desconsiderar os sinais de pontuação: vírgulas, pontos e 
// sinais de exclamação.
// b) Faça seu programa considerar como iguais, as palavras escritas da mesma forma,
// independente de estarem em maiúsculas ou em minúsculas.
//
// Dicas: str_replace() e strtolower()/strtoupper() podem te ajudar.
//
//
//
// 7) O que faz o trecho de código abaixo?
   if ($a = $b) {
     echo "as variaveis sao iguais";
   }
//
// a) Ele está errado, porque o operador de comparação é ==
// b) Mostra o texto entre aspas se as variáveis forem iguais
// c) Mostra o texto entre aspas se as variáveis forem diferentes
// d) Dá erro porque o ponto-e-vírgula deveria estar na última linha
// e) Nenhuma das alternativas acima
//
//
//
// 8) Quando preciso escrever um trecho de código que será usado em várias
// partes do programa, eu crio:
//
// a) Um novo sistema
// b) Uma function
// c) Uma stored procedure
// d) Uma tabela no banco de dados
// e) Um novo comando na linguagem PHP
//
//
//
// 9) A função count() serve para:
//
// a) Contar números inteiros
// b) Contar números decimais
// c) Saber a quantidade de itens em um array
// d) Saber o tamanho, em caracteres, de uma string
// e) Contar a quantidade de variáveis do programa
//
//
//
// 10) Tendo o seguinte trecho de código PHP abaixo, o que será mostrado como resultado?
   $s = "Maria";
   echo "Meu nome é $s";
//
// a) Maria, Meu nome é $s
// b) Meu nome é Maria
// c) Meu nome é $s; Maria
// d) Meu nome é $s
// e) Meu nome é;
//
//
//
// 11) Tendo o seguinte trecho de código PHP abaixo, o que será mostrado como resultado?
// Observação: essa questão é diferente da questão acima.
   $s = "Maria";
   echo 'Meu nome é $s';
//
// a) Maria, Meu nome é $s
// b) Meu nome é Maria
// c) Meu nome é $s; Maria
// d) Meu nome é $s
// e) Meu nome é;
//
//
//
// 12) O que é um array associativo?
//
// a) É um array que associa duas variáveis
// b) É um array que usa strings como chave aos itens
// c) É um array indexado numérica e sequencialmente a partir do zero
// d) Isso não existe em PHP
// e) É um array que associa o programa ao email do seu autor
//
//
//
// 13) Escreva um comando que, em uma única linha, transforme o array abaixo 
// em uma string delimitada por espaços:
   $a = array("Maria", "Paula", "Fernanda");
//
//
//
// 14) Escreva um trecho de código que mostre uma data invertida.
//
// Exemplo de data: 25/03/2013
// Exemplo de data invertida: 2013/03/25
//
//
//
// 15) Num array simples, qual é o índice do primeiro item?
//
// a) 1
// b) zero
// c) indefinido
// d) -1
// e) "a"
//
//
//
// 16) Qual é a função que converte uma string para minúsculas?
//
//
//
// 17) Para que serve o comando break?
//
//
//
// 18) Escreva um trecho de código que crie uma variável inteira,
// inicializada com o valor 10.
//
//
//
// 19) Qual é o resultado da soma abaixo?
   $r = "1" + 1;
//
// a) 2
// b) 11
// c) Inválido
// d) Indeterminado
// e) "11"
//
//
//
// 20) Por que o teste abaixo dá como resultado false?
   (1 === "1")
//
// a) Porque === não existe no PHP
// b) Porque os itens são de tipos diferentes
//
//
//
// 21) Por que o teste abaixo dá como resultado true?
// Observação: essa questão é diferente da questão acima.
   (1 == "1")
//
// a) Porque o segundo item é uma string dentro de aspas duplas
// b) Porque o operador == nao testa o tipo dos itens comparados
// c) Porque o primeiro item é um inteiro
// d) Porque o operador == sempre dá um resultado true, independente do que
//    seja comparado
// e) Nenhuma alternativa acima
//
//
//
// 22) Para que serve a função trim()?
//
//
//
// 23) Escreva uma função que retorne um número multiplicado por outro, ambos
// recebidos como argumento.
//
//
//
// 24) Escreva um programa que mostre as chaves e os valores de um array 
// associativo.
//
//
//
// 25) Usando o texto da questão número 6, escreva um programa que mostre 
// a maior palavra que aparece no texto.
//
//
//
// 26) Mostre a quantidade de palavras existentes no texto da questão número 6.
//
//
//
// 27) Mostre a quantidade de palavras diferentes existentes no texto da 
// questão número 6.
//
//
//
// 28) Dado o array abaixo, escreva um programa que mostre o nome e a idade
// dos homens:
   $a = array("Maria" => "41,f", "Pedro" => "18,h", "Joao" => "58,h",
              "Joana" => "15,f");
//
//
//
// 29) Usando o array da questão 28, faça um programa que indique quais nomes
// abaixo não estão presentes nele.
   $nomes = "Pedro,Fernando,Joaquim,Joana,Estefane";
//
//
//
// 30) Qual é o operador de concatenação de strings no PHP?
//
//
//
// 31) Usando o texto da questão número 6, mostre as palavras que estão no plural.
// Obs.: considere como plural as palavras que terminam com a letra "s".
// Dica: strlen() pode te ajudar.
//
//
//
// 32) A partir dos dois arrays abaixo, escreva um programa para criar um array 
// associativo usando $chaves para as chaves do array associativo e $valores para 
// os valores.
   $chaves = ["nome", "idade", "conjuge", "filhos"];
   $valores = ["Marta", 23, "Fernando", "Huguinho, Zezinho, Luizinho"];
//
//
//
// 33) No trecho de código abaixo, o que será mostrado como resultado e por que?
   $a = "maior";
   $b = "menor";
   if ($a > $b) {
     echo "$a";
   } else {
     echo "$b";
   }
//
//
//
// 34) No trecho de código abaixo, o que será mostrado como resultado e por que?
   $a = "100";
   $b = "50";
   if ($a > $b) {
     echo "$a";
   } else {
     echo "$b";
   }
//
//
//
// 35) No trecho de código abaixo, o que será mostrado como resultado e por que?
// Obs.: essa questão nao é igual à anterior.
   $a = 100;
   $b = 50;
   if ($a > $b) {
     echo "$a";
   } else {
     echo "$b";
   }
//
//
//
// ------------ fim
