<?php
$title = "contact";
include "includes\header.php";
session_start();
$_SESSION["token"] = bin2hex(random_bytes(32));
//var_dump($_SESSION["token"]);
?>
<br>
<h2 class="text-center" style="color:white;text-decoration:underline">UNE IDÉE? UN PROJET? N'HÉSITEZ PAS À ME
    CONTACTER !</h2>

<section style="margin-top: 150px;">
    <div>
        <div class="row">
            <div class="col order-first">
                <div class="card-body col">
                    <h5 style="color: white;" class="card-title">MERHEJ Roland.</h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        Développeur web. <br />

                    </h6>
                    <p style="color: white" class="card-text">ADRESSE :<br> 8 Rue Auguste RENOIR <br />78400
                        CHATOU.<br>TÉL :06.71.74.66.24<br>EMAIL : rolandmerhej8@gmail.com
                    </p>

                </div>
            </div>

            <div class="col order-last">
                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2622.672054392417!2d2.157313715019408!3d48.902586805548864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e663a7bbe8b103%3A0xd84f42a874d40e09!2sRue%20Auguste%20Renoir%2C%2078400%20Chatou!5e0!3m2!1sfr!2sfr!4v1656667862719!5m2!1sfr!2sfr"
                        width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <form action="http://localhost/Pr%C3%A9sentation/traitement_contact.php" method="POST"
        enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nom" class="form-label" style="color: #2196f3;"><strong>NOM</strong>
            </label>
            <input type="text" class="form-control" id="nom" name="nom" maxlength="30">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label" style="color: #2196f3;"><strong>PRÉNOM</strong>
            </label>
            <input type="text" class="form-control" id="prenom" name="prenom" maxlength="30">
        </div>
        <div class="mb-3">
            <label for="tel" class="form-label" style="color: #2196f3;"><strong>TÉLÉPHONE</strong></label>
            <input type="tel" class="form-control" id="tel" name="tel">
        </div>
        <div class="mb-3">
            <label for="mail" class="form-label" style="color: #2196f3;"><strong>ADRESSE
                    MAIL</strong>
            </label>
            <input type="email" class="form-control" id="mail" name="mail">
        </div>
        <div class="mb-3">
            <label for="msg" class="form-label" style="color: #2196f3;"><strong>MESSAGE</strong>
            </label>
            <textarea class="form-control" id="msg" name="msg" rows="5"
                placeholder="veuillez rédiger votre message ici"></textarea>
        </div>
        <input type="hidden" name="token" value="<?= $_SESSION["token"] ?>" />

        <button type="submit" class="btn btn-primary" style="background-color:#2196f3 ;color:white; ;"> ENVOYER</button>

    </form>
</section><br>
<?php include "includes/footer.php"; ?>