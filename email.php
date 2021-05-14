<?php

if(isset(addslashes($_POST['name']) && !empty($_POST['email'])) {



$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$phone = addslashes($_POST['phone']);
$company = addslashes($_POST['company']);
$mensagem = addslashes($_POST['message']);

$to ="igornevesmoc@gmail.com";
$subject ="Contato - TECZ"
$body = "Nome: ".$nome. "\r\n"
        "Email: ".$email. "\r\n"
        "Telefone: ".$phone. "\r\n"
        "Company: ".$company. "\r\n"
        "Mensagem: ".$mensagem; "\r\n"
$header = "From:contato@grupotecz.com"."\r\n"
            ."Reply-To:".$email."\r\n"
            ."X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)) {
    echo("E-mail enviado com sucesso");

}
    else{
        echo("O e-mail não pôde ser enviado")
    }
}
        
}

?>