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
<?php include '../admin/header_admin.php'; ?>
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
    <section class="produit-container">
        <div class="image-produit">
            <img src="../images/Rooibos.jpg" alt="">
        </div>
        <div class="details-produit">
            <h1>THÉ DU HAMMAM </h1>
            <div class="details-star">
                <i class="fa-sharp fa-regular fa-star"></i>
                <i class="fa-sharp fa-regular fa-star"></i>
                <i class="fa-sharp fa-regular fa-star"></i>
                <i class="fa-sharp fa-regular fa-star"></i>
                <i class="fa-sharp fa-regular fa-star"></i>
            </div>
            <p>Thé vert parfumé - Fruité & Floral</p>
            <p>Ce thé vert, gourmand et fruité, évoque la datte verte, la fleur d’oranger, la rose et les fruits rouges</p>
            <div class="quantity"> 
            </div>
            <div class="prix">
                <p>9.99 € / kg</p> 
                    <div>
                        <button id="menos" onclick="">-</button>
                        <span>1</span>
                        <button id="plus" onclick="">+</button>
                    </div>
            </div>
            <div class="oder">
                <a href="" id="achat"><p>Acheter</p></a>
                <a href="" id="ajout"><p>Ajouter au panier</p></a>
            </div>
        </div>
    </section>
    <section class="suggest-produit">
        <h1>Vous aimerez aussi les produits similaires</h1>
     <div class="post">
        <div class="post-content">
            <div class="produit"><img src="../images/Mug.jpg" alt=""></div>
            <h4>MUG INFUSEUR DOUBLE PAROI 35CL</h4>
            <p>Mug infuseur en verre double paroi et filtre intégré</p>
            <p class="prix">19.99 €</p>
            <div class="actions">
                <button><i class="fa-solid fa-eye"></i></button>
                <button><i class="fa-regular fa-heart"></i></button>
                <button><i class="fa fa-shopping-bag"></i></button>
            </div>
        </div>

        <div class="post-content">
            <div class="produit"><img src="../images/Rooibos.jpg" alt=""></div>
            <h4>SPICY PASSION</h4>
            <p>Rooibos parfumé - Épicé & Gourmand</p>
            <p class="prix">29.99 € /kg</p>
            <div class="actions">
                <button><i class="fa-solid fa-eye"></i></button>
                <button><i class="fa-regular fa-heart"></i></button>
                <button><i class="fa fa-shopping-bag"></i></button>
            </div>
        </div>
        <div class="post-content">
            <div class="produit"><img src="../images/Thé blanc.jpg" alt=""></div>
            <h4>AIGUILLES D'ARGENT</h4>
            <p>Thé blanc de Fujian, Chine - Récolte de printemps 2022</p>
            <p class="prix">19.99 € /kg</p>
            <div class="actions">
                <button><i class="fa-solid fa-eye"></i></button>
                <button><i class="fa-regular fa-heart"></i></button>
                <button><i class="fa fa-shopping-bag"></i></button>
            </div>
        </div>
        <div class="post-content">
            <div class="produit"><img src="../images/Thé vert.jpg" alt=""></div>
            <h4>MUG INFUSEUR DOUBLE PAROI 35CL</h4>
            <p>Mug infuseur en verre double paroi et filtre intégré</p>
            <p class="prix">19.99 € /kg</p>
            <div class="actions">
                <button><i class="fa-solid fa-eye"></i></button>
                <button><i class="fa-regular fa-heart"></i></button>
                <button><i class="fa fa-shopping-bag"></i></button>
            </div>
        </div>
    </div>
    </section>
    <?php include '../client/footer_client.php'; ?>

</body>
</html>