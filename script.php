<?php 

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//var+dump($nome);
//var_dump($idade);

//Restrinções ******************************************************
if(empty($nome))
{
    echo'O nome não pode ser vazio';
    return;
}
if (strlen($nome) < 3) // strlen averigua a condição
{
    echo'O nome deve conter mais de 3 caracteres';
    return;
}
if(strlen($nome) > 40)
{
    echo'O nome deve conter até 40 caracteres';
    return;
}
if( ! is_numeric($idade)) // se não for numerico não sera aceito
{
    echo'Informe um número para a idade';
    return;
}
// ***************************************************************

if ($idade >= 6 && $idade <= 12) {
    echo "O nadador " .$nome. " compete na categoria " . $categorias[0];
} elseif ($idade >= 13 && $idade <= 18) {
    echo "O nadador ".$nome. " compete na categoria " . $categorias[1];
} else {
    echo "O nadador " .$nome. " compete na categoria " . $categorias[2];
}
?>