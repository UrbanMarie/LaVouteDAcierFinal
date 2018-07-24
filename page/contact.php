<?php 
    include '../tpl/head.php';
    include '../tpl/nav.php';
    ?>
<main class="container-fluid pt-5" style="height: 100vh;">
    <div class="row">
        <div class=" col-md-6 mt-5 px-5 text-center ">
            <h1 class="pb-3"> Nous contacter</h1>
            <!--  <p> Envoyez nous vos demandes*, nous vous établirons un devis.
                    </p>-->
            <div class="form text-center">

                <form name="formulaire" id="Form" method="post" enctype="text/plain" action="">

                    <div class="form-group">
                        <input type="text" class="form-control rounded form-contact" id="subject" name="Sujet" placeholder="Sujet" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control rounded form-contact" id="message" name="Message" placeholder="Message" maxlength="140" rows="7"></textarea>
                    </div>
                    <div>
                        <p class="mentions pb-3"> * Merci d'indiquer votre nom, un numéro de téléphone ou une adresse mail valide</p>
                    </div>
                    <input type="reset" class="btn pull-right marg-top-little marg-little" value="Effacer">
                    <input type="submit" name="submit" onclick="get_subject()" class="btn pull-right marg-top-little" value="Envoyer">
                </form>
            </div>

        </div>
        <div class="col-md-6 m-auto text-center ">
            <!--                    <h2> Nous Trouver</h2>-->
            <!--                    <p> A l'embranchement prendre a droite. Suivre le chemin, jusqu'au portail de l'entrée du domaine.</p>-->
            <!--       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d23162.886422489544!2d3.4571653699195455!3d43.4739402!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b1410323ff1639%3A0x888bed50cf3bfd39!2zNDPCsDI4JzIwLjkiTiAzwrAyOCcwOC43IkU!5e0!3m2!1sfr!2sfr!4v1530874937352" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
            <div id='map' style='width: 400px; height: 300px;'></div>
            <script>
                mapboxgl.accessToken = 'pk.eyJ1IjoiaGlwcGNoeiIsImEiOiJjamp0bzFjcjk5ODBwM3FsZjY4eTRmZGw2In0.uO3oap7whdU4iJu0SGYigw';
                var map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/mapbox/streets-v10'
                });

            </script>
            <!--<div class="row text-center">
    <div class="col-md-6">
        <div>
            <span class="title-foot small-caps">Adresse</span><br/>
            <span class="font-quick">Mas Chabert <br/>Che des mases<br> 34500 AUMES</span>
        </div>
    </div>
    <div class="col-md-6 text-center">
        <span class="title-foot small-caps">Contact</span><br/>
        <p class="small-caps font-quick-bold">Christope Benet <br> <span class="font-quick">06 13 10 25 62</span><br> Maxime Urbano <br><span class="font-quick">06 59 12 12 93</span></p>
    </div>
</div>-->
        </div>
    </div>
</main>
<?php 
    include '../tpl/footer.php';
    ?>
<?php 
    include '../tpl/footerHtml.php';
    ?>
