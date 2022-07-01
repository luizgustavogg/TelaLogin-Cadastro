<?php
session_start();

include_once("../../include/include.php");
$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, md5($_POST['senha']));

if (empty($email) || empty($senha)) { // validar se eo campo ta vazio
    echo "Preencher todos os campos";
} else {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // Validar a extensão o email
        $sql01 = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND senha = '$senha'");

        if(mysqli_num_rows($sql01) == 0){
            echo "conta não encontrada";
        }
        else{
        $user = $_SESSION['unique_id'];
        $sql = mysqli_query($conn, "DELETE FROM users WHERE email = '$email' AND senha = '$senha' AND unique_id = '$user'");

        if ($sql) {
            echo "sucesso";
        } else {
            echo "conta não encontrada";
        }}
    } else {
        echo "Email invalido";
    }
}
