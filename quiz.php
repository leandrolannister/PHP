<?php
  $string = "PHP 7.1";
  $regexp = "/??/";

  preg_match_all($regexp, $string, $ocorrencias);
  print_r($ocorrencias);
?>

Qual dos seguintes meta-caracteres (sinalizados por ??) pode ser usado para pesq\
uisar qualquer caractere que não seja dígito decimal? 
A: \s
B: \S
C: \d
D: \D

*****************************************************************************************

Qual dos seguintes meta-caracteres (sinalizados por ??) pode ser usado para pe\
squisar qualquer caractere que não seja espaço em branco?
A: \s
B: \S
C: \d
D: \D

*****************************************************************************************
O que sera impresso?
<?php 
    if ('um' == 0){
	    echo "true"
    }else {
	    echo "false"
    } 
?>
*****************************************************************************************
Qual a saída do código a seguir:
<?php
    function ExibeFilme($filme = ""){
       if(8 == "8 Mile"){
           $resultado = "Verdadeiro";
       }else {
           $resultado = "Falso";
       }
       echo $filme;
    }
    echo ExibeFilme(); ?>

	A: Verdadeiro
	B: Falso
	C: Parse error
	D: (vazio)
	E: 8 Mile
*****************************************************************************************
De acordo com o código abaixo:

<?='ZCPE'?>

Assinale a alternativa correta:
    A: Gera um Parse error, pois não há instruções PHP válidas
    B: Gera um Fatal error, pois o bloco PHP não está devidamente delimitado com as \
    tags padrão <?php ... ?>
    C: As "short tags" <? ... ?> devem estar especificadas no php.ini para funcionar
    D: Essa construção é particularmente possível e exibe "ZCPE"
    E: Gera um mensagem do tipo Notice pois considera "ZCPE" como uma constante
*****************************************************************************************
Quais alternativas abaixo são identificadores válidos?

    A: $1 = "Ari";
    B: $_1 = "Ari";
    C: function object() {}
    D: function 6Pack() {}
    E: function _6Pack() {}    
*****************************************************************************************Qual a saída do código abaixo?
<?php echo '5'. (print '2') + 3; ?>

*****************************************************************************************
Qual será a saída?
<?php
  $a=20%-8;
  echo $a;
?>

A: Script exibe uma mensagem de erro
B: 4
C: -4
D: -2
*****************************************************************************************
O código a seguir atribui verdadeiro a variável $a?
<?php $a = 123 !== 1230E-1; ?>
A: Sim
B: Não
****************************************************************************************
Qual a saída do código abaixo?
<?php
$p = "PHP";
$P = "php";
echo ($p < $P) + 2 * ($p > $P) + 3 * ($p == $P); ?>

A: 0
B: 1
C: 2
D: 3
****************************************************************************************
Das alternativas a seguir, qual a forma mais elegante de se elevar o decimal 5 à\
potência 3:
<?php
  A: 5^3
  B: 5 * 5 * 5
  C: pow(5,3)
  D: pow(3,5)
  E: 5 ** 3  ?>
****************************************************************************************
Considere o trecho de código a seguir e diga qual será a saída:
<?php 
  $var=10 & 2;
  echo $var; ?>
  A: 3
  B: 0
  C: 10
  D: 2 
**************************************************************************************
Qual a saída do código a seguir?
<?php
  echo 4 >> 3; ?>
A: 32
B: 1
C: 0
D: 0.5
***************************************************************************************
Qual a saída do script a seguir:
<?php
    function BancoDeHoras(){
        define("EXPEDIENTE_INICIAL", 8);
    }
    echo EXPEDIENTE_INICIAL ?>

A: 8
B: <vazio>
C: "8"
D: Notice: Use of undefined constant EXPEDIENTE_INICIAL...
****************************************************************************************
Digamos que você tenha um script.php com o conteúdo abaixo rodando na raiz do se\
rvidor /var/www:

<?php include "constantesmagicas.php"; ?>

E o script constantesmagicas.php contém __FILE__, que é a constante mágica que e\
xibe o nome do arquivo:
<?php echo __FILE__; ?>

Portanto qual a saída do código script.php?

A: script.php
B: constantesmagicas.php
C: /var/www/script.php
D: /var/www/constantesmagicas.php
E: Nenhuma das alternativas
****************************************************************************************
Qual a saída do código abaixo?
<?php echo "3" + 5 * "0x02"; ?>
A: Parse errorFundamentos do PHP 74
B: 3
C: 13
D: 310
E: Notice e o valor 3
****************************************************************************************
Qual a saída do código a seguir?
<?php $a = array('a', 'b'=>'c'); ?>
<?php echo property_exists((object) $a, 'a') ? 'verdadeiro' : 'falso';
echo property_exists((object) $a, 'b') ? 'verdadeiro' : 'falso'; ?>
****************************************************************************************
Qual a saída do código a seguir:
<?php
$n = "Ari Stopassola Junior";
$n1 = "Ari";
$n2 = "Stopassola";
$n3 = "Junior";
$saudacao = "Olá $n2";
echo $saudacao; ?>
A: Olá Ari Stopassola Junior2
B: Olá
C: Olá Stopassola2
D: Olá Stopassola
****************************************************************************************
Qual a saída do código a seguir:
<?php echo strlen('1\n2') * strlen("1\n2"); ?>
****************************************************************************************
Qual a saída do código a seguir?
<?php echo true ? 'verdadeiro' : false ? 'v' : 'f'; ?>
A: 'verdadeiro'
B: true
B: 'v'
C: 'f'
D: false
****************************************************************************************
Qual a saída do código abaixo?
<?php echo (bool)(new stdClass)? (bool)true : (bool)false; ?>
_____________ (campo aberto)
****************************************************************************************
Qual a saída do código abaixo?
<?php
function fibonacci (&$x1 = 0, &$x2 = 1){
$result= $x1 + $x2;
$x1 = $x2;
$x2 = $result;
return $result;
}
for ($i = 0; $i < 10; $i++) {
echo fibonacci() . ',';
} ?>
A: Erro
B: 1,1,1,1,1,1,1,1,1,1,
C: 1,1,2,3,5,8,13,21,34,55,
D: Vazio
***************************************************************************************
Qual a saída do código a seguir?
<?php
namespace MinhaBiblioteca;
function count($a)
{
return "Contando";
}
$a = ["Ari", "Stopassola", "Junior"];
echo count($a); ?>
A: 3
B: Contando
C: Fatal error: Cannot redeclare count() in ...
D: Nenhuma das alternativas
***************************************************************************************
Quais dos seguintes métodos estão disponíveis para limitar a quantidade de recur\
sos disponíveis ao PHP, configurados através do php.ini?
[ escolha 2 ]
A: Limitar a quantidade de memória que um script pode consumir
B: Limitar a quantidade total de memória que PHP usa em todo o servidor
C: Limitar o tempo máximo de execução de um script
D: Limitar o número máximo de processos simultâneos do PHP
E: Limitar o número máximo de threads simultâneas do PHP
**************************************************************************************