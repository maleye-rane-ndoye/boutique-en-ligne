<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../css/style_client.css">
    <title>hearder</title>
</head>
<body>
       <header>
               <div class="navtop">
                    <!-- FORMULAIRE DE LA LOCALISATION DU CLIENT -->
                    <div class="postal-content">
                        <form action="" method="post" >
                        <label for="localisation">Bonjour entrer votre localisation</label><br>
                        <input type="text" name="localisation" placeholder="code postale" class="box">
                        </form>
                    </div>
                    <!-- FORMULAIRE DE LA RECHERCHE DU CLIENT SUR LA PAGE EN COURS -->
                    <div class="search-content">
                        <form action="" method="post">
                            <select name="category" class="box">
                                <option value="" desabled selected>choisie une catégorie</option>
                                <option value="thes">Thés</option>
                                <option value="tisanes">Tisanes</option>
                                <option value="rooibos">Rooibos</option>
                                <option value="accessoires">Accessoires</option>
                                <option value="nouveautés">Nouveautés</option>
                            </select>
                            <input type="text" name="search" placeholder="Recherhe" class="box">
                        </form>
                        <button><i class="fa fa-search"></i></button>
                    </div>
                    <a href="login_client.php"><i class="fa fa-user"></i>Se connecter</a>
                    <a href=""><i class="fas fa-right-from-bracket"></i> Retours et commandes</a>
                    <a href=""><i class="fa fa-shopping-bag"></i>Panier</a>
               </div>

               <div class="navbottom">
                   <a href=""><i class="fa fa-bars"></i></a>
                   <a href="">Thés</a>
                   <a href="">Tisanes</a>
                   <a href="">Rooibos</a>
                   <a href="">Accessoires</a>
                   <a href="">Nouveautés</a>
                   <a href="">Blog</a>
                   <a href="">Contact</a>
               </div>
       </header>
</body>
</html>