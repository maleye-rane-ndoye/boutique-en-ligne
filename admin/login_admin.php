<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../css/style_client.css">
    <title>Connexion</title>
</head>
<body class="body-login">
    <?php include '../admin/header_admin.php'; ?>
      <div class="toggle">
        <a href="../admin/login_admin.php" class="toggle-button-login"><p>Se connecter</p></a>
        <a href="../admin/register_admin.php"><p>S'inscrire</p></a>
      </div>
      <div class="login-content">
          <h3>Connecter vous !</h3>
            <form action="" method="post">
                <label for="email">Email*</label>
                <input type="email" name="email" class="box">

                <label for="password">Mot de passe*</label>
                <input type="password" name="password" class="box">
                <input type="submit" value="ME CONNECTER" class="button">
            </form>
        <span>mot de passe : <a href="">Oublier ?</a></span> <br>
        <span>Vous n'avais pas encore de compt : <a href="register_client.php">Inscription</a></span>
      </div>
      <?php include '../admin/footer_admin.php'; ?>
</body>
</html>