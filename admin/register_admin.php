<?php
session_start();
require_once '../class/Methodes.php';
$user = new METOD();

//  verifier que l'utilisateur avalider le formulaire. 
if (isset($_POST['submit'])) {
    $prenom = htmlspecialchars(strip_tags(trim($_POST['prenom'])));
    $nom = htmlspecialchars(strip_tags(trim($_POST['nom'])));
    $email = htmlspecialchars(strip_tags(trim($_POST['email'])));
    $password = htmlspecialchars(strip_tags(trim($_POST['password'])));
    $c_password = htmlspecialchars(strip_tags(trim($_POST['c_password'])));

    //  Verifier que l'utilisateur a rempli tous les cases.
    $err = [];
    if (empty($email)):
        $err[] = '<li>Veiller remplir votre Email</li>';
    endif;

    if (empty($prenom)):
        $err[] = '<li>Veiller remplir le Prénom</li>';
    endif;

    if (empty($nom)):
        $err[] = '<li>Veiller remplir le Nom</li>';
    endif;

    if (empty($password)):
        $err[] = '<li>Veiller remplir le Password</li>';
    endif;

    if (empty($c_password)):
        $err[] = '<li>Veiller confirmer le Password</li>';
    endif;

    // verifier que l'utilisateur a rentrer le meme password. 
    if ($password !== $c_password){
        $err[] = '<li>Veiller rentrer le meme password</li>';
    }
    else{ //  cryptage du password
        $password = password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);
    }

    if (empty($err)):

        // la verification des login dans la BDD.

        if (empty($user->verif_bdd($email))):

            //  ajouter le nouveau utilisateur à la base de données
            $user->register($nom, $prenom, $email, $password);
            $_SESSION['email'] = $email;

            // redirection vers la page de connexion.
            header("location:../admin/login_admin.php");
        else:
            $err[] = '<li>Le login n\'est pas disponible, Veuillez le changer !</li>';
        endif;
    endif;
}
?>
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
    <?php include '../admin/header_admin.php'; ?>
      <div class="toggle">
        <a href="../admin/login_admin.php"><p>Se connecter</p></a>
        <a href="../admin/register_admin.php" class="toggle-button-register"><p>S'inscrire</p></a>
      </div>
      <div class="register-content">
          <h3>Inscriver vous en tant que admin !</h3>
          <p class="errs"><?php
                if (!empty($err)){
                    $i = 0;
                    while(isset($err[$i])):
                        echo $err[$i];
                        $i++;
                    endwhile;
                }
            ?></p>
            <form action="" method="POST">
                <div class="register-content-left">
                        <label for="nom">Nom*</label>
                        <input type="text" name="nom" class="register-box">

                        <label for="prenom">Prenom*</label>
                        <input type="text" name="prenom" class="register-box">

                        <label for="email">Email*</label>
                        <input type="email" name="email" class="register-box">
                </div>
                <div class="register-content-right">

                        <label for="password">Mot de passe*</label>
                        <input type="password" name="password" class="register-box">

                        <label for="c_password">Confirmer votre mot de passe*</label>
                        <input type="password" name="c_password" class="register-box">
                        <label for=""></label>
                        <input type="submit" value="CRÉER MON COMPTE" class="button">
                    </div>

            </form>
        
        <span>Vous avez déja un compt : <a href="../admin/login_admin.php">Se connecter</a></span>
      </div>
      <?php include '../admin/footer_admin.php'; ?>
</body>
</html>