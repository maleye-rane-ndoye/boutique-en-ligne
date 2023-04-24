<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../css/style_client.css">
    <title>Inscription</title>
</head>
<body class="body-login">
    <?php include 'header_client.php'; ?>
      <div class="toggle">
        <a href="login_client.php"><p>Se connecter</p></a>
        <a href="register_client.php" class="toggle-button-register"><p>S'inscrire</p></a>
      </div>
      <div class="register-content">
          <h3>Inscriver vous !</h3>
            <form action="" method="post">
                <div class="register-content-left">
                        <label for="nom">Nom*</label>
                        <input type="text" name="nom" class="register-box">

                        <label for="prenom">Prenom*</label>
                        <input type="text" name="prenom" class="register-box">

                        <label for="email">Email*</label>
                        <input type="email" name="email" class="register-box">

                        <label for="adress">Adresse*</label>
                        <input type="text" name="adress" class="register-box">
                </div>
                <div class="register-content-right">
                        <label for="mobile">Télèphone*</label>
                        <input type="text" name="mobile" class="register-box">

                        <label for="password">Mot de passe*</label>
                        <input type="password" name="password" class="register-box">

                        <label for="c_password">Confirmer votre mot de passe*</label>
                        <input type="password" name="c_password" class="register-box">
                        <label for=""></label>
                        <input type="submit" value="CRÉER MON COMPTE" class="button">
                    </div>

            </form>
        
        <span>Vous avez déja un compt : <a href="login_client.php">Se connecter</a></span>
      </div>
      <?php include 'footer_client.php'; ?>
</body>
</html>