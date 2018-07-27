<footer class="container-fluid">
    <div class="foot white-text">
        <div>
            <h4 class="title-foot small-caps">Mentions Légales</h4>
            <p class=" small-caps font-quick-bold">Siret</p><p class="font-quick">83539574000011</p>
            <p class=" small-caps font-quick-bold">Mentions Légales</p>
            <span> <a id="mentions" href="mentions.html" class="title-foot"><span class="font-quick" id="linkML">Cliquez ici</span></a>
            </span><br>
        </div>
        <div id="adresse">
            <h4 class="title-foot small-caps">Adresse</h4>
            <p class="font-quick">Mas Chabert <br>Che des mases<br> 34500 AUMES</p>
        </div>
        <div id="contacts">
            <h4 class="title-foot small-caps">Contact</h4><br>
            <p class="small-caps font-quick-bold">Benet Christope<span class="font-quick ml-2">06 13 10 25 62</span><br> Urbano Maxime <span class="font-quick ml-2">06 59 12 12 93</span></p>
        </div>
        <div class="mt-4">
            <img src="../logo.png" alt="Logo la voute d'acier" id="logo" />
        </div>

        <div class="icon text-center mx-5">
            <a href="https://www.facebook.com/lavoutedacier/" target=_blank> <img src="../img/logo/logo_facebook.png" alt="Lien vers facebook" class="hov-transp"/></a>
            <a href="https://www.instagram.com/la.voute.d.acier/" target="_blank">   <img src="../img/logo/logo_instagram.png" alt="Lien vers instagram" class="hov-transp"/></a>
            <a href="contact.php"> <img src="../img/logo/logo_mail.png" alt="Lien vers page contact" class="hov-transp"/></a><br>
            <span>© Tout droits réservé, La Voute D'Acier</span>
        </div>
    </div>
</footer>

<script>
var header = document.getElementById("navbarSupportedContent");
var btns = header.getElementsByClassName("nav-item");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });                  
}
</script>

<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>


<script type="text/javascript" src="../js/jQuery-Parallax/scripts/jquery.parallax-1.1.3.js"></script>


<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script src="../lightbox/js/lightbox.js"></script>

<script src="../js/script.js"></script>
