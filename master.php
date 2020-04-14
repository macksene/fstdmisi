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
        <h2>LES FORMATIONS EN MASTER</h2>
        <ol class="breadcrumb">
            <li><a href="index.html">Accueil</a></li>
            <li><a href="#" class="active">Master</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- Our Services Area -->
    <section class="our_services_tow">
        <div class="container">
            <div class="architecture_area services_pages">
                <div class="portfolio_filter portfolio_filter_2">
                    <ul>
                        <li data-filter="*" class="active"><a href=""><i class="fa fa-wrench" aria-hidden="true"></i>ARCHITECTURE</a></li>
                        <li data-filter=".building"><a href=""><i class="fa fa-cogs" aria-hidden="true"></i>Building</a></li>
                        <li data-filter=".webdesign"><a href=""><i class="fa fa-cog" aria-hidden="true"></i>CONSTRUCTION</a></li>
                        <li data-filter=".adversting"><a href=""><i class="fa fa-heart" aria-hidden="true"></i>DESIGN</a></li>
                        <li data-filter=".painting"><a href=""><i class="fa fa-paint-brush" aria-hidden="true"></i>Painting</a></li>
                    </ul>
                </div>
                <div class="portfolio_item portfolio_2">
                   <div class="grid-sizer-2"></div>
                    <div class="single_facilities col-sm-7 painting building painting adversting">
                        <div class="who_we_area">
                            <div class="subtittle">
                                <h2>ARCHITECTURE</h2>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alter-ation in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrass-ing hidden in the middle of text.</p>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
                            <a href="#" class="button_all">Contact Now</a>
                        </div>
                    </div>
                    <div class="single_facilities col-sm-5 painting webdesign">
                        <img src="images/feature-man-4.jpg" alt="">
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
