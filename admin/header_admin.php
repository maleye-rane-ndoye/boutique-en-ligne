<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../css/style_admin.css">
    <title>hearder</title>
</head>
<body>
       <header>
               <div class="navtop">
                    <!-- FORMULAIRE DE LA RECHERCHE DU CLIENT SUR LA PAGE EN COURS -->
                    <div class="search-content">
                        <form action="" method="post">
                            <input type="text" name="search" placeholder="Recherhe" class="box">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <a href="../admin/login_admin.php"><i class="fa fa-user"></i>Se connecter</a>
                    <a href="../admin/clients_admin.php"><i class="fa fa-user"></i>clients</a>
                    <a href="retours_commandes_admin.php"><i class="fas fa-right-from-bracket"></i> Retours et commandes</a>
                    <a href="panier_admin.php"><i class="fa fa-shopping-bag"></i>Panier clients</a>
                    <a href="messages_admin.php"><i class="fa-regular fa-envelope"></i>Messagerie</a>

               </div>

               <div class="navbottom">
                   <a href="../view_produit_admin/dashboard_admin.php"><i class="fa fa-house"></i></a>
                   <a href="../view_produit_admin/the_admin.php">Thés</a>
                   <a href="../view_produit_admin/tisanes_admin.php">Tisanes</a>
                   <a href="../view_produit_admin/rooibos_admin.php">Rooibos</a>
                   <a href="../view_produit_admin/accessoires_admin.php">Accessoires</a>
                   <a href="../view_produit_admin/nouveaute_admin.php">Nouveautés</a>
                   <a href="">Blog</a>
                   <a href="../view_produit_admin/contact_admin.php">Contact</a>
               </div>
       </header>
</body>
</html>