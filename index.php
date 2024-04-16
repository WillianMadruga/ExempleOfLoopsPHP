<?php 
//opção 1
/*$numero = 0;

while ($numero < 10) {
    echo "N: ".$numero."<br/>";
    $numero += 1;
}*/

//opção 2
/*for ($n = 0; $n < 10; $n++) {
    echo "O cerredor deu ".$n." voltas <br/>";
}*/

//opção 3
/*for ($n = 10; $n >= 0; $n--) {
    echo "faltam ". $n." voltas para a final<br/>";
}*/

//opção 4
/*$igredientes = [
    'açucar',
    'alface',
    'arroz',
    'biscoito',
];
foreach ($igredientes as $igrediente) {
    echo "item: ".$igrediente."<br/>";
};*/

//opção 5
/*$igredientes = [
    'açucar',
    'alface',
    'arroz',
    'biscoito',
];

echo '<h2>Igredientes</h2>';
foreach ($igredientes as $chave => $valor) {
    echo "item ".($chave + 1) .": " .$valor."<br/>";
};*/


//Exercicio do B7web
/*$linhas = "";
$letras = 0;
while ( $letras < 9 )
{
  $linhas .= "-";
  $letras++;
}

for ($letras = 0; $letras < 10; $letras++)
{
  echo $linhas . "<br/>";
}*/


/*
$tracos = "";
$linhas = 0;

while ( $linhas < 10 ){
    $tracos.= "_ ";
    $linhas++;
};
for ($l = 0; $l < 10; $l++) {
    echo $tracos. "<br/>";
};*/

//exercicio 3
/*
for($coluna = 0; $coluna < 20; $coluna++){
    for($linha = 0; $linha < $coluna; $linha++){
        echo "-";
    }  
        echo "</br>";
}*/