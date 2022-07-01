<?php
session_start();

include_once("../../include/include.php");
$nome = mysqli_real_escape_string($conn, $_POST['nome']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, md5($_POST['senha']));
$rf = mysqli_real_escape_string($conn, $_POST['senha']); // senha sem md5

if (empty($email) || empty($senha) || empty($nome)) { // validar se eo campo ta vazio
    echo "Preencher todos os campos";
} else {
    if (!preg_match("/^[a-zA-Z-' ]*$/", $nome)) { //  validar o nome (so tendo letras e Espaço)
        echo "Apenas letras e espaço";
    } else {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // Validar a extensão o email
            $sql01 = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
            if (mysqli_num_rows($sql01) == 1) { // validar se ja existe uma conta com este email
                echo "ja existe uma conta com este email";
            } else {
                $senharf = strlen($rf);
                $max = 7;
                if ($senharf <= $max) { // validar se a senha ta curta
                    echo "Senha muito curta";
                } else { // deu tudo certo
                    $random_id = rand(time(), 10000000);
                    $sql2 = mysqli_query($conn, "INSERT INTO users ( unique_id, nome, email, senha)
                VALUES('$random_id', '$nome', '$email', '$senha') ");
                    if ($sql2) {
                        $_SESSION['logado'] = true;
                        $_SESSION['unique_id'] = $random_id; // id aleatorio do usuario
                        echo "sucesso";
                    } else {
                        echo "Algo deu errado";
                    }
                }
            }
        } else {
            echo "Email não valido";
        }
    }
}
