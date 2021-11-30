<?php

$nome = $_POST["nome"];
$numero = $_POST["numero"];
$data = $_POST["data"];
$firma = $_POST["firma"];
$endereco = $_POST["endereco"];
$complemento = $_POST["complemento"];
$estado = $_POST["estado"];
$cidade = $_POST["cidade"];
$bairro = $_POST["bairro"];
$cep = $_POST["cep"];
$cnpj = $_POST["cnpj"];
$inscricao = $_POST["inscricao"];
$telefone = $_POST["telefone"];
$celular = $_POST["celular"];
$email = $_POST["email"];
$obs = $_POST["obs"];

file_put_contents("dados.csv", "$nome,$telefone,$data,$firma,$endereco,$complemento,$estado,$cidade,$bairro,$cep,$cnpj,$inscricao,$telefone,$celular,$email,$obs\n", FILE_APPEND);
echo "<p> Oii, <b>$nome</b>!! Seu pedido foi realizado com sucesso, agora você pode rastrear seu pedido.</p>";
