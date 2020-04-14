<!DOCTYPE html>
<html lang="en">
<?php   
    include('entete.php'); 
?> 
<body>
    <!-- Preloader -->
    <div class="preloader"></div>
<?php   
    include('menu_top.php'); 
?>

    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>NOUS CONTACTER</h2>
        <ol class="breadcrumb">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="#" class="active">Contact</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- Map -->
    <div class="contact_map">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.50094122228!2d-17.467178785137754!3d14.684240078958199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec1728834739695%3A0x575b31bd9e79491d!2sNouveau+Batiment+%2FFst%2FUcad!5e0!3m2!1sfr!2ssn!4v1561053214112!5m2!1sfr!2ssn" width="600" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <!-- End Map -->

    <!-- All contact Info -->
    <section class="all_contact_info">
        <div class="container">
            <div class="row contact_row">
                <div class="col-sm-6 contact_info">
                    <h2>NOS CONTACTS</h2>
                    
                    <div class="location">
                        <div class="location_laft">
                            <a href="#">Pays</a>
                            <a href="#">Region</a>
                            <a href="#">Ville</a>
                            <a href="#">Université</a>
                            <a href="#">Faculté</a>
                            <a href="#">Département</a>
                            <a href="#">Téléphone</a>
                            <a href="#">Fax</a>
                            <a href="#">E-mail</a>
                        </div>
                        <div>
                            </div>
                        <div class="address">
                            <a href="#">Sénégal</a>
                            <a href="#">Dakar</a>
                            <a href="#">Dakar</a>
                            <a href="#">UCAD(Université Cheikh Anta Diop)</a>
                            <a href="#">FST(Faculté des Sciences et Techniques</a>
                            <a href="#">DMI(Département Mathématique-Informatique</a>
                            <a href="#">+221 33 768 89 78</a>
                            <a href="#">+221 33 768 89 78</a>
                            <a href="#">info@FSTDMISI.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 contact_info send_message">
                    <h2>VOTRE MESSAGE</h2>
                    <form class="form-inline contact_box">
                        <input type="text" class="form-control input_box" placeholder="Prenom *">
                        <input type="text" class="form-control input_box" placeholder="Nom *">
                        <input type="text" class="form-control input_box" placeholder="Email *">
                        <input type="text" class="form-control input_box" placeholder="objet">
                        <textarea class="form-control input_box" placeholder="Message"></textarea>
                        <button type="submit" class="btn btn-default">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End All contact Info -->

<?php   
    include('pied.php'); 
?>
</body>
</html>
