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
  <div class="card">

    <div class="wrapper">
      <div class="divisao">

        <div class="content">
          <div class="title">
            <strong>Boas Vindas</strong>
            <p>Faça login para começar a Diversão</p>
          </div>
          <div class="login">
            <form action="" method="">
              <div class="errortxt">pega</div>
              <div class="input">
                <label>Email:</label>
                <input type="text" name="email">

                <label>Senha:</label>
                <input type="password" name="senha">
                <div class="button">
                  <input type="submit" value="enviar" id="submit">
                </div>
                <p>Ainda não tenho uma conta <a href="../cadastro/cadastro.php">Fazer uma conta</a></p>
              </div>
            </form>
          </div>
        </div>
        <div class="qrcode">
          <div class="title qr">
            <strong>Qr Code para saber mais</strong>
            <p>Para ver mais projetos como esse..</p>
          </div>
          <img src="../img/qr.png" alt="qrcode">
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/script/login.js"></script>
</body>

</html>