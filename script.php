<?php 


/*$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';*/

//print_r($categorias);

include "servicos/servicoMensagemSessao.php";
include "servicos/servicoCategoriaCompetidor.php";
include "servicos/servicoValidacao.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//var+dump($nome);
//var_dump($idade);

//Restrinções ******************************************************
/*if(empty($nome))
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio, por favor preencha - o novamente';
    header('location: index.php');
    return;
}
else if (strlen($nome) < 3) // strlen averigua a condição
{
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter mais de 3 caracteres';
    header('location: index.php');
    return;    
}
else if(strlen($nome) > 40)
{
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter até 40 caracteres';
    header('location: index.php');
    return;
}
if( ! is_numeric($idade)) // se não for numerico não sera aceito
{
    $_SESSION['mensagem-de-erro'] = 'Informe um número para a idade';
    header('location: index.php');
    return;
}*/
// ***************************************************************

/*if ($idade >= 6 && $idade <= 12) {
    echo "O nadador " .$nome. " compete na categoria " . $categorias[0];
} elseif ($idade >= 13 && $idade <= 18) {
    echo "O nadador ".$nome. " compete na categoria " . $categorias[1];
} else {
    echo "O nadador " .$nome. " compete na categoria " . $categorias[2];
}*/

defineCategoriaCompetidor($nome, $idade);

header('location: index.php');
?>