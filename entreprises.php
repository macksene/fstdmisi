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
        <h2>LES ENTREPRISES PARTENAIRES</h2>
        <ol class="breadcrumb">
            <li><a href="index.html">Accueil</a></li>
            <li><a href="#" class="active">entreprises</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- blog-2 area -->
    <section class="blog_tow_area">
        <div class="container">
           <div class="row blog_tow_row">
                <?php 
                            $q =  "select * from articles where type_a='entreprise' order by id_a DESC";
                            $r = $db -> query($q) ;
                            $cp=0;
                            while (($c = $r -> fetch()) && ($cp<9))
                            {
                                $cp++;
                            ?> 

                <div class="col-md-4 col-sm-6">
                    <div class="renovation">
                        <img src="images/<?php echo $c['photo_a'] ; ?>" alt="">
                        <div class="renovation_content">
                            <a class="clipboard" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                            <a class="tittle" href="#"><?php echo $c['titre_a'] ; ?></a>
                            <p></i><?php echo $c['description_a'] ; ?></p>
                            <form action="article.php" method="post">
                                            <input name="article" type="hidden" value="<?php echo $c['id_a'] ; ?>">
                                            <button name="btn"  type="submit" >Resume</button></form>
                        </div>
                    </div>
                </div>
                         <?php
                            }
                            ?>  
           </div>
        </div>
    </section>
    <!-- End blog-2 area -->

<?php   
    include('pied.php'); 
?>
</body>
</html>