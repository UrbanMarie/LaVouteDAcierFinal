<?php      
$self = $_SERVER['PHP_SELF'];
          $gall = "/page/gallery.php";
          $hom = "/page/home.php";
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark top-navbar" data-toggle="sticky-onscroll">
    <a class="navbar-brand" href="#"><img src="../img/logo/log_voute_isol.png" alt="Logo La voute d'Acier" id="img-nav"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
                <?php 
            if ($self === $hom) {
                echo '<a class="nav-link active" href="home.php">Acceuil</a>';
            } else {
               echo '<a class="nav-link" href="home.php">Acceuil</a>';
            }
        ?>       
            </li>
            <li class="nav-item">
                <?php
                if ($self === $gall) {
                  echo '<a class="nav-link active" href="gallery.php">Gallerie</a>'; 
                } else {
                   echo '<a class="nav-link" href="gallery.php">Gallerie</a>';
                }
                ?>
               
            </li>
        </ul>
    </div>
</nav>
