// Fonction remplisage with mailto
function get_subject() {

    var subject;
    var message;
    var action;

    var input = document.getElementById("subject");
    subject = input.value;

    var input = document.getElementById("message");
    message = input.value;

    document.getElementById("Form").action = "mailto:lavoutedacier@gmail.com?subject=" + subject + "&body=" + message;
}



// Function for home video
var vid = document.getElementById("bgvid");
var pauseButton = document.querySelector("#pauseButton");

if (window.matchMedia("(prefers-reduced-motion)").matches) {
    vid.removeAttribute("autoplay");
    vid.pause();

    pauseButton.innerHTML = "Paused";
}

function vidFade() {
    vid.classList.add("stopfade");
};

/*
vid.addEventListener("ended", function () {
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
})

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




