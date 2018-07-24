<?php 
    include '../tpl/head.php';
    include '../tpl/nav.php';
    ?>

<div class="container-fluid ml-1">

    <div class="wrapper row">
        <div class="col-md-1">
            <nav id="sidebar" class="">
                <div class="sidebar-header my-4">
                    <div class="row"></div>
                    <i class="fas fa-2x fa-align-right sidebarCollapse float-right p-3"></i>
                    <h3 class="mt-4 text-center" id="title-sidebar">Catégories</h3>
                </div>

                <ul id="menu-gall">
                    <li>
                        <a href="javascript:visibilite('esc');" class="menu-text" data-toggle="tooltip" data-placement="right" title="Escalier"><img src="../img/gallerie/icon/ico_esc.png" width="25px">
                    <span class="cat-sidebar"> Escalier</span>
                    </a>

                    </li>
                    <li>
                        <a href="javascript:visibilite('ver');" class="menu-text"><img src="../img/gallerie/icon/ico_verriere.png" width="25px">
                    <span class="cat-sidebar">Verrière</span>
                    </a>

                    </li>
                    <li>
                        <a href="javascript:visibilite('gar');" class="menu-text"><img src="../img/gallerie/icon/ico_gcorp.png" width="25px">
                    <span class="cat-sidebar">Garde-corps</span>
                    </a>

                    </li>
                    <li>
                        <a href="javascript:visibilite('mob');" class="menu-text"><img src="../img/gallerie/icon/ico_mobilier.png" width="25px">
                    <span class="cat-sidebar">Mobilier</span>
                    </a>

                    </li>
                    <li>
                        <a href="javascript:visibilite('por');" class="menu-text"><img src="../img/gallerie/icon/ico_door.png" width="25px"><span class="cat-sidebar">Portail</span></a>
                    </li>
                         <li>
                        <a href="javascript:visibilite('ram');" class="menu-text"><img src="../img/gallerie/icon/ico_rampe.png" width="25px"><span class="cat-sidebar ml-2">Rampe</span></a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-md-11" id="content_gall">
            <section class="container">

                <!-- Categorie -->
                <section id="esc" style="display:bloc;">
                    <?php 
                                include 'escalier.php';
                         ?>
                </section>
                <section id="ver" style="display:none;">
                    <?php 
                                include 'verriere.php';
                         ?>
                </section>
                <section id="gar" style="display:none;">
                    <?php 
                                include 'garde.php';
                         ?>
                </section>
                <section id="mob" style="display:none;">
                    <?php 
                                include 'mobilier.php';
                         ?>
                </section>
                <section id="por" style="display:none;">
                    <?php 
                                include 'porte.php';
                         ?>
                </section>
                     <section id="ram" style="display:none;">
                    <?php 
                                include 'rampe.php';
                         ?>
                </section>

                <!-- Projet -->
                <section id="p_esc01" style="display:none;">
                    <?php 
                         include 'projet_escalier.php';
                         ?>
                </section>
                <section id="p_mob01" style="display:none;">
                    <?php 
                         include 'projet_etagere.php';
                         ?>
                </section>
                  <section id="p_ram01" style="display:none;">
                    <?php 
                         include 'projet_fleuriste.php';
                         ?>
                </section>
                 <section id="p_gar01" style="display:none;">
                    <?php 
                         include 'projet_garde_corp.php';
                         ?>
                </section>
                 <section id="p_esc02" style="display:none;">
                    <?php 
                         include 'projet_escalier_2.php';
                         ?>
                </section>
            </section>
        </div>


    </div>
</div>

<?php 
    include '../tpl/footer.php';
    ?>

<script>
    $(document).ready(function() {

        $('.sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });

    });
</script>


<script>
    var divs = ['esc', 'ver', 'gar', 'mob', 'por','ram', 'p_esc01','p_mob01','p_ram01','p_gar01','p_esc02'];

    function masquerTout() {
        for (i = 0; i < divs.length; i++) {
            document.getElementById(divs[i]).style.display = 'none';
        }
    }

    function visibilite(id) {
        masquerTout();
        var cible = document.getElementById(id);
        cible.style.display = (cible.style.display == 'none') ? 'block' : 'none';
    }

</script>

<?php 
    include '../tpl/footerHtml.php';
    ?>
