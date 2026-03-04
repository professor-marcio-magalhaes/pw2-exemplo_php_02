<?php 

//algoritmo Bcrypt
$senhaPura = "1234";
$senhaDigitada = "1234";
$senhaHash = password_hash($senhaPura, PASSWORD_DEFAULT);
echo $senhaHash . "<br>";

if (password_verify($senhaDigitada, $senhaHash)) {
        echo "As senhas são iguais!";
       
    } else {
        echo "Senha incorreta.";
    }


?>