<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../css/style_client.css">
    <title>view produit</title>
</head>
<body>
<?php include '../client/header_client.php'; ?>
    <section class="paysage">
             <div class="nav-content">
                <div>
                    <a href=""><div class="nav1"></div></a>
                    <p>les plus acheter</p>
                </div>
                <div>
                    <a href=""><div class="nav2"></div></a>
                    <p>Thés verts</p>
                </div>
                <div>
                    <a href=""><div class="nav3"></div></a>
                    <p>Thés noirs</p>
                </div>
                <div>
                    <a href=""><div class="nav4"></div></a>
                    <p>Thés blanc</p>
                </div>
                <div>
                    <a href=""><div class="nav5"></div></a>
                    <p>Thés et infusions</p>
                </div>
                <div>
                    <a href=""><div class="nav6"></div></a>
                    <p>Rooibos</p>
                </div>
                <div>
                    <a href=""><div class="nav7"></div></a>
                    <p>Nouveautés</p>
                </div>
             </div>
    </section>
    <section class="panier">
            <div class="produit-list">
                 <div class="produit-added">
                    <img src="../images/Rooibos.jpg" alt="">
                    <h4>Nom du produit</h4>
                    <p>Prix du produit</p>
                    <div class="oder">
                        <a href="" id="achat-unitaire"><p>Acheter l'article</p></a>
                        <a href="" id="delete-unitaire"><p>supprimer</p></a>
                    </div>
                 </div>
                 <div class="produit-added">
                    <img src="../images/Rooibos.jpg" alt="">
                    <h4>Nom du produit</h4>
                    <p>Prix du produit</p>
                    <div class="oder">
                        <a href="" id="achat-unitaire"><p>Acheter l'article</p></a>
                        <a href="" id="delete-unitaire"><p>supprimer</p></a>
                    </div>
                 </div>
                 <div class="produit-added">
                    <img src="../images/Rooibos.jpg" alt="">
                    <h4>Nom du produit</h4>
                    <p>Prix du produit</p>
                    <div class="oder">
                        <a href="" id="achat-unitaire"><p>Acheter l'article</p></a>
                        <a href="" id="delete-unitaire"><p>supprimer</p></a>
                    </div>
                 </div>

                 <div class="produit-added">
                    <img src="../images/Rooibos.jpg" alt="">
                    <h4>Nom du produit</h4>
                    <p>Prix du produit</p>
                    <div class="oder">
                        <a href="" id="achat-unitaire"><p>Acheter l'article</p></a>
                        <a href="" id="delete-unitaire"><p>supprimer</p></a>
                    </div>
                 </div>
                
            </div>
            <div class="total-price">
                <h4>Articles:</h4>
                <p>Nombre:</p>
                <p>Prix total:</p>
                <div class="oder">
                        <a href="" id="achat"><p>Acheter maintenant</p></a>
                        <a href="" id="delete"><p>supprimer</p></a>
                 </div>
            </div>

    </section>
    <?php include '../client/footer_client.php'; ?>

</body>
</html>