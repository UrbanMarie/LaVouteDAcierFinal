<?php 
    include '../tpl/head.php';
    include '../tpl/nav.php';
    include '../tpl/homeHead.php';

    ?>

<main class="container-fluid" id="homeView">

    <section class="relative home-one " id="slide1">
        <div class="slide_inside row" id="slide11">
            <div class="col-sm-1 col-md-6 d-flex align-items-center not-mob ">
                <div class="row not-mob">
            <!--        <div class="col-sm-6 col-md-6 text-center ">
                        <h2 class="draw white-text center-elmt p-3 ">
                            <a href="gallery.php"><button class="draw">Nos réalisations</button></a>
                                <a href="gallery.php">Nos réalisations</a>
                        </h2>
                    </div>
                    <div class="col-sm-6 col-md-6 text-center">
                        <h2 class="draw white-text center-elmt p-3 ">
                            <a href="#slide2" id="anchor2"><button class="draw">A propos</button></a>
                        </h2>
                    </div>-->
                </div>
                <div class="not-desk d-flex justify-content-between" id="lien-home">
                        <h3 class="white-text center-elmt  not-desk ml-3 mr-3">
                            <a href="gallery.php">Nos réalisations</a>
                        </h3>
                       <h3 class="white-text center-elmt not-desk mr-3" style="float:right;">
                            <a href="#slide2" id="anchor4">A propos</a>
                        </h3>
                          <h3 class="white-text center-elmt not-desk mr-2" style="float:right;">
                            <a href="#slide3" id="anchor5">Contact</a>
                        </h3>
                </div>
            </div>
            <div class="col-sm-11 col-md-6 text-white" id="slide1inside">
                <h2 class="subtiles textleft">La Ferronnerie</h2>
                <h1 class="title-1">Notre métier</h1>
                <div class="line-wrap"></div>
                <p class="mt-3">Toutes nos réalisations sont faites sur-mesure et chaque pièce est unique. Proposez nous vos idées, nous étudierons votre projet et établirons un devis.</p><br>
                <p>Nous intervenons à 50kms autour de Pézénas intégrant ainsi Clermont l'Herault, Lodève, le sud de Montpellier, Béziers, la Minervoise jusqu'aux portes de Narbonne.</p>
            </div>
            <div class="col-md-1"></div>
            <div class="row">
                <div class="anchor-white width-all-vp text-center not-mob ">
                    <a href="#slide2" id="anchor2"><i class="fas fa-angle-double-down fa-2x white-text"></i></a>
                </div>
            </div>

        </div>
    </section>

    <section id="slide2">
        <div class="slide_inside d-flex align-items-center text-center" id="slide22">
             <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5 px-5" id="slide2inside">
                    <h2 class="subtiles text-left">À propos</h2>
                    <h1 class="title-1">Une entreprise familiale</h1>
                    <div class="line-wrap-maroon"></div>
                    <p> Descendant d'un père Ferronier d'art. Christophe et Maxime ont commencé leur carrière chacun de leur côté, l'un dans l'enseignement l'autre dans le compagnonnage. C'est avec la complémentarité de leurs deux cursus qu'ils ont décidé de se retrouver autour des valeurs qu'ils revendiquent:<br> tradition, technicité et design.</p>
                </div>
                <div class="col-md-6">
                    <div class="text-center">
                        <img src="../img/home/chris.png" alt="Photographie Christophe Benet" class="id-img img-max m-2">
                        <img src="../img/home/max.png" alt="Photographie Maxime Urbano" class="id-img m-2">
                    </div>
                </div>
                <div class="anchor-white text-center width-all-vp not-mob ">
                    <a href="#slide3" id="anchor3"><i class="fas fa-angle-double-down fa-2x" style="color:black;"></i></a>
                </div>
            </div>
        </div>

    </section>
    <section id="slide3">
        <div class="slide_inside p-5" >
            <div class="row" id="slide33">
                <div class="col-md-1"></div>
                <div class="col-md-5 text-center pt-2" id="slide3inside">
                    <h2 class="subtiles text-left">Plus d'information ?</h2>
                    <h2 class="title-1 mt-3 ml-5">Nous contacter</h2>
                    <div class="line-wrap mb-5"></div>
                    <div class="form text-center">
                        <form name="formulaire" id="Form" method="post" enctype="text/plain" action="">
                            <div class="form-group">
                                <input type="email" class="form-control rounded form-contact" id="" name="" placeholder="Adresse Mail" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control rounded form-contact" id="subject" name="Sujet" placeholder="Sujet" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control rounded form-contact" id="message" name="Message" placeholder="Message" maxlength="140" rows="7"></textarea>
                            </div>
                            <div>
                                <p class="mentions pb-3 white-text"> * Merci d'indiquer votre nom, un numéro de téléphone ou une adresse mail valide</p>
                            </div>
                            <input type="reset" class="btn pull-right marg-top-little marg-little" value="Effacer">
                            <input type="submit" name="submit" onclick="get_subject()" class="btn pull-right marg-top-little" value="Envoyer">
                        </form>
                    </div>
                </div>
                <div class="col-md-5 text-center">
                    <div id='map'></div>
                    <script>
                        mapboxgl.accessToken = "pk.eyJ1IjoiaGlwcGNoeiIsImEiOiJjamp0bzFjcjk5ODBwM3FsZjY4eTRmZGw2In0.uO3oap7whdU4iJu0SGYigw";

                        /* Map: This represents the map on the page. */
                        var map = new mapboxgl.Map({
                            container: "map",
                            style: "mapbox://styles/mapbox/outdoors-v10",
                            zoom: 12.3,
                            center: [3.50000, 43.47000]
                        });

                        map.on("load", function() {
                            /* Image: An image is loaded and added to the map. */
                            map.loadImage("https://i.imgur.com/MK4NUzI.png", function(error, image) {
                                if (error) throw error;
                                map.addImage("custom-marker", image);
                                /* Style layer: A style layer ties together the source and image and specifies how they are displayed on the map. */
                                map.addLayer({
                                    id: "markers",
                                    type: "symbol",
                                    /* Source: A data source specifies the geographic coordinate where the image marker gets placed. */
                                    source: {
                                        type: "geojson",
                                        data: {
                                            type: "FeatureCollection",
                                            features: [{
                                                "type": "Feature",
                                                "geometry": {
                                                    "type": "Point",
                                                    "coordinates": ["3.46994", "43.47282"]
                                                }
                                            }]
                                        }
                                    },
                                    layout: {
                                        "icon-image": "custom-marker",
                                    }
                                });
                            });
                        });

                        map.addControl(new mapboxgl.NavigationControl());

                    </script>
                    <!--    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d23162.886422489544!2d3.4571653699195455!3d43.4739402!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b1410323ff1639%3A0x888bed50cf3bfd39!2zNDPCsDI4JzIwLjkiTiAzwrAyOCcwOC43IkU!5e0!3m2!1sfr!2sfr!4v1530874937352" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
</main>

<?php 
    include '../tpl/footer.php';
    ?>

<!--// Sticky navbar
// =========================-->
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

<script>
    $(document).ready(function() {
        $('#slide1').parallax("50%", 0.1);
        $('#slide2').parallax("50%", 0.1);
        $('#slide3').parallax("50%", 0.1);
    })

</script>


<script>
    $(document).ready(function() {
        $("#anchor,#anchor2,#anchor3,#anchor4,#anchor5,#anchor6,anchor-nav").on('click', function(event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;

                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function() {
                    window.location.hash = hash;
                });
            } // End if
        });
    });

</script>


<?php 
    include '../tpl/footerHtml.php';
    ?>
