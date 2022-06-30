<?php
session_start();

include_once("../../include/include.php");
$nome = mysqli_real_escape_string($conn, $_POST['nome']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, md5($_POST['senha']));
$rf = mysqli_real_escape_string($conn, $_POST['senha']);

if (empty($email) || empty($senha) || empty($nome)) {
    echo "preencher todos os campos";
} else {
    if(preg_match('[A-Z][a-z].* [A-Z][a-z].*', $nome)){
        echo "so letras";
    }
    else{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // Validar a extensão o email
        $sql01 = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
        if (mysqli_num_rows($sql01) == 1) {
            echo "ja existe uma conta com este email";
        } else {
            $senharf = strlen($rf);
            $max = 7;
            if ($senharf < $max) {
                echo "Senha muito curta";
            } else {
                $sql2 = mysqli_query($conn, "INSERT INTO users ( nome, email, senha)
                VALUES('$nome', '$email', '$senha') ");
                if ($sql2) {
                    $_SESSION['logado'] = true;
                    echo "sucesso";
                } else {
                    echo "algo deu errado";
                }
            }
        }
    } else {
        echo "Email não valido";
    }
}
}
