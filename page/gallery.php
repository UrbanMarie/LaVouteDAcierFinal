<?php 
  include '../tpl/head.php';
    include '../tpl/nav.php';
    ?>

<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
                     <a href="#" id="sidebarCollapse">
                        <i class="fas fa-align-right fa-2x float-right"></i>
                    </a>
            <h5 class="mt-3">Catégories</h5>
        </div>

        <ul class="list-unstyled components ml-1">
            <li>
                <a href="javascript:visibilite('esc');" class="menu-text" data-toggle="tooltip" data-placement="right" title="Escalier"><img src="../img/gallerie/icon/ico_esc.png" width="25px">
                    <span class="cat-sidebar ml-2"> Escalier</span>
                    </a>
            </li>
            <li>
                <a href="javascript:visibilite('ver');" class="menu-text"><img src="../img/gallerie/icon/ico_verriere.png" width="25px">
                    <span class="cat-sidebar ml-2">Verrière</span>
                    </a>
            </li>
            <li>
                <a href="javascript:visibilite('gar');" class="menu-text"><img src="../img/gallerie/icon/ico_gcorp.png" width="25px">
                    <span class="cat-sidebar ml-2">Garde-corps</span>
                    </a>
            </li>
            <li>
                <a href="javascript:visibilite('mob');" class="menu-text"><img src="../img/gallerie/icon/ico_mobilier.png" width="25px">
                    <span class="cat-sidebar ml-2">Mobilier</span>
                    </a>

            </li>
            <li>
                <a href="javascript:visibilite('por');" class="menu-text"><img src="../img/gallerie/icon/ico_door.png" width="25px"><span class="cat-sidebar ml-2">Portail</span></a>
            </li>
            <li>
                <a href="javascript:visibilite('ram');" class="menu-text"><img src="../img/gallerie/icon/ico_rampe.png" width="25px"><span class="cat-sidebar ml-2">Rampe</span></a>
            </li>
        </ul>

     <!--     Peux etre utile          <ul class="list-unstyled CTAs">
                <li>

                </li>
            </ul>-->
    </nav>

    <div id="content">

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
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
    });

</script>

<?php 
    include '../tpl/footer.php';
    ?>

<script>
    var divs = ['esc', 'ver', 'gar', 'mob', 'por', 'ram', 'p_esc01', 'p_mob01', 'p_ram01', 'p_gar01', 'p_esc02'];

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
<script>
    $(document).ready(function() {
        // Custom function which toggles between sticky class (is-sticky)
        var stickyToggle = function(sticky, stickyWrapper, scrollElement) {
            var stickyHeight = sticky.outerHeight();
            var stickyTop = stickyWrapper.offset().top;
            if (scrollElement.scrollTop() >= stickyTop) {
                stickyWrapper.height(stickyHeight);
                sticky.addClass("is-sticky");
            } else {
                sticky.removeClass("is-sticky");
                stickyWrapper.height('auto');
            }
        };

        // Find all data-toggle="sticky-onscroll" elements
        $('[data-toggle="sticky-onscroll"]').each(function() {
            var sticky = $(this);
            var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
            sticky.before(stickyWrapper);
            sticky.addClass('sticky');

            // Scroll & resize events
            $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function() {
                stickyToggle(sticky, stickyWrapper, $(this));
            });

            // On page load
            stickyToggle(sticky, stickyWrapper, $(window));
        });
    });

</script>
<?php 
   include '../tpl/footerHtml.php';
    ?>
