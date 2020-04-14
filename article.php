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
<?php
if(isset($_POST['btn']))
{
$q =  "select * from articles where id_a=".$_POST['article']."";
$r = $db -> query($q) ; 
$c = $r -> fetch(); 
}

?> 
    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2><?php echo $c['titre_a'] ; ?></h2>
        
    </section>
    <!-- End Banner area -->

    <!-- Our Services Area -->
  




    <section class="our_services_tow">
    <section class="our_services_tow">
        <div class="container">
            <div class="architecture_area services_pages">
                <div class="portfolio_item portfolio_2">
                   <div class="grid-sizer-2"></div>
                    <div class="single_facilities col-sm-7 painting building painting adversting">
                        <div class="who_we_area">
                            <div class="subtittle">
                                <h2><?php echo $c['description_a'] ; ?></h2>
                            </div>
                            <p><?php echo $c['texte_a'] ; ?></p>
                            <a href="index.php" class="button_all">Retour</a>
                        </div>
                    </div>
                    <div class="single_facilities col-sm-5 painting webdesign">
                        <img src="images/<?php echo $c['photo_a'] ; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Services Area -->

   <?php   
    include('pied.php'); 
?>

</body>
</html>
