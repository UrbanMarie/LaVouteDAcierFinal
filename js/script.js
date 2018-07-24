// Nav class active 
var navContainer = document.getElementById("navbarText");
var navLi = navContainer.getElementsByClassName("nav-item");

for (var i = 0; i < navLi.length; i++) {
    navLi[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });

    // Fonction remplisage with mailto
    function get_subject() {

        var subject;
        var message;
        var action;

        var input = document.getElementById('subject');
        subject = input.value;

        var input = document.getElementById('message');
        message = input.value;

        document.getElementById("Form").action = "mailto:lavoutedacier@gmail.com?subject=" + subject + "&body=" + message;
    }

}
// Style Map 



// nonfonctionel

/*function verif() {
    var etat = document.getElementById('check').checked;

    if (etat) {
        document.getElementById('1').className = 'off';

        document.getElementById('2').className = 'on';
    } else {
        document.getElementById('1').className = 'on';

        document.getElementById('2').className = 'off';
    }
}

// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// Full-width images
function one() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.msFlex = "100%"; // IE10
        elements[i].style.flex = "100%";
    }
}

// Two images side by side
function two() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.msFlex = "50%"; // IE10
        elements[i].style.flex = "50%";
    }
}

// Four images side by side
function four() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.msFlex = "25%"; // IE10
        elements[i].style.flex = "25%";
    }
}*/


// Fonction remplisage with mailto
function get_subject() {

    var subject;
    var message;
    var action;

    var input = document.getElementById('subject');
    subject = input.value;

    var input = document.getElementById('message');
    message = input.value;

    document.getElementById("Form").action = "mailto:lavoutedacier@gmail.com?subject=" + subject + "&body=" + message;
}

// Stick nav bar

    $(document).ready(function() {
        var menu = document.querySelector('.menu');
        var origOffsetY = menu.offsetTop;
        
        function scroll() {
            if ($(window).scrollTop() > origOffsetY) {
                $('.menu').addClass('fixed-top');
            } else {
                $('.menu').removeClass('fixed-top');
            }
        }
        document.onscroll = scroll;
    });

// Function for home video
var vid = document.getElementById("bgvid");
var pauseButton = document.querySelector("#pauseButton");

if (window.matchMedia('(prefers-reduced-motion)').matches) {
    vid.removeAttribute("autoplay");
    vid.pause();

    pauseButton.innerHTML = "Paused";
}


function vidFade() {
    vid.classList.add("stopfade");
}

/*vid.addEventListener("ended", function () {
    // only functional if "loop" is removed 
    vid.pause();
    // to capture IE10
    vidFade();
});*/


pauseButton.addEventListener("click", function () {
    vid.classList.toggle("stopfade");
    if (vid.paused) {
        vid.play();
        pauseButton.innerHTML = '';
        pauseButton.innerHTML = '<i class="fas fa-play"></i>'; // 
    } else {
        vid.pause();
        pauseButton.innerHTML = '';
        pauseButton.innerHTML = '<i class="fas fa-pause"></i>';
    }
});

///////////////  Play with scroll //////// 
$(window).scroll(function () {
    var endscroll = 400;
    var scrollVal = document.documentElement.scrollTop;
    var x = document.getElementById("bgvid");

    function enableAutoplay() {
        x.autoplay = true

    }

    function disableAutoplay() {
        x.autoplay = false
        x.load();
        pauseButton.innerHTML = '';
        pauseButton.innerHTML = '<i class="fas fa-pause"></i>';
    }

    if (document.documentElement.scrollTop >= endscroll) {
        $("#bgvid").addClass("fade");
        disableAutoplay();
        x.load();

    } else {
        $("#bgvid").removeClass("fade");
    }
})

