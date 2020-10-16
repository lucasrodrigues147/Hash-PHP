<?php

$senha = 'lusca';

// A variavél $passSenha está recebendo a $senha Criptografada
$passSenha = password_hash($senha, PASSWORD_BCRYPT);

// Valida se os dados de $senha estão de acordo com os de $passSenha
// que na Base já está criptografado :)
if (password_verify($senha, $passSenha)){
    
// Esses dois Echo, são só para visualização mesmo hehehe    
    echo ' Se passou aqui, tá tudo ok';
}else{
    echo 'Erro, volte no código e verifique';
}

?>