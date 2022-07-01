<?php
session_start();
if(!isset($_SESSION['logado'])){
  header("location:../login/login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/card.css">
  <title>Document</title>
</head>

<body>
  <div class="card cadastroc">

    <div class="wrapper cadastro">
      <div class="divisao">

        <div class="content">
          <div class="title">
            <strong>Deletar conta</strong>
            <p>Depois de confirmar não tem mais volta...</p>
          </div>
          <div class="cadastro">
            <form action="" method="">
              <div class="errortxt"></div>
              <div class="input">

                <label>Email:</label>
                <input type="text" name="email">

                <label>Senha:</label>
                <input type="password" name="senha">
                <div class="button">
                  <input type="submit" value="enviar" id="submit">
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
    <script src="../assets/script/remove.js"></script>
</body>

</html>