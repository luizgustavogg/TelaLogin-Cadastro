<?php
    session_start();
    include_once 'include/include.php';
    if(!isset($_SESSION['logado'])){
        header("location:login/login.php");
    }
    else{
        $user = $_SESSION['unique_id'];
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '$user'");
        $row = mysqli_fetch_assoc($sql);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/card.css">
    <link rel="stylesheet" href="assets/css/perfil.css">
</head>
<body>
    <div class="card">
        <div class="wrapper">
            <div class="content conta">
                <div class="title">
                    <strong>Informações do Usuario</strong>
                    <p>Cuidado com essas informações...</p>
                </div>
                <label>Nome:</label>
                <p><?php echo $row['nome']; ?></p>

                <label>Email:</label>
                <p><?php echo $row['email']; ?></p>

                <label>Senha:</label>
                <p>**********</p>

                <a href="logout.php">Deslogar da Conta</a>
                <a href="delete/delete.php">Excluir a Conta</a>
            </div>
        </div>
    </div>
</body>
</html>