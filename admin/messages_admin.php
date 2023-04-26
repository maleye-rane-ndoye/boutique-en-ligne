<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../css/style_admin.css">
    <title>panier</title>
</head>
<body>
    <?php include 'header_admin.php'; ?>

             <div class="wall">
                <img src="../images/plantation.jpeg" alt="">
             </div>
    </section>
    <section class="messages">
        <div class="message-content">
            <div class="messenger">
                <img src="../images/avatar.jpg" alt="">
                <h4>identifiant du client</h4>
                <p>Nom et prenom du client</p>
                <p>Adresse du client</p>
                <p>numero de telephone du client</p>
                <div class="actions">
                <button><i class="fa-solid fa-eye"></i></button>
                <button><i class="fa-solid fa-trash-can"></i></button>
                <button><i class="fa fa-shopping-bag"></i></button>
            </div>
            </div>
            <div class="message">
                <p>message du client</p>
                <form action="" method="POST">
                <textarea name="" id="" cols="30" rows="15" placeholder="repondre"></textarea>
                <input type="submit" name="submit" value="Envoyer" class="send-message">
                </form>
            </div>
        </div>


        <div class="message-content">
            <div class="messenger">
                <img src="../images/avatar.jpg" alt="">
                <h4>identifiant du client</h4>
                <p>Nom et prenom du client</p>
                <p>Adresse du client</p>
                <p>numero de telephone du client</p>
                <div class="actions">
                <button><i class="fa-solid fa-eye"></i></button>
                <button><i class="fa-solid fa-trash-can"></i></button>
                <button><i class="fa fa-shopping-bag"></i></button>
            </div>
            </div>
            <div class="message">
                <p>message du client</p>
                <form action="" method="POST">
                <textarea name="" id="" cols="30" rows="15" placeholder="repondre"></textarea>
                <input type="submit" name="submit" value="Envoyer" class="send-message">
                </form>
            </div>
        </div>
        

    </section>
    <?php include 'footer_admin.php'; ?>

</body>
</html>