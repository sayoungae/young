$(document).ready(function () {
    let visualArea = gsap.timeline({
        scrollTrigger: {
            trigger: ".visualArea",
            pin: ".visualArea",
            start: "top top",
            end: "+=2500",
            scrub: 1,
        },
    });

    visualArea.addLabel("start")
        .to(".imgLine_03", { marginTop: 0, duration: 4000, }, "start")
        .to(".slide", { height: "100vh", borderRadius: "0", duration: 1000, }, "start")
        .to(".imgLine_02", { marginTop: "100px", duration: 4000, delay: 100 }, "start")
        .to(".imgLine_01", { marginTop: "200px", duration: 4000, delay: 150 }, "start")
        .to(".visualText", { opacity: 0, duration: 4000, }, "start")
        .to(".visualText", { display: "none" })
        .to(".imgBlockMain", { height: "100vh", }, "start")
        .addLabel("width")
        .to(".imgBlockMain", { width: "100vw", borderRadius: 0, duration: 5000, }, "width")
        .addLabel("end")
        .to('.imgBlockMain', { delay: 3000 }, "end")
        .to(".slogan, .dock, .visual_btn, .control-btn-container, .slide-number, .entry", { opacity: "1", duration: 4000, }, "end")

    if (matchMedia("all and (min-width: 1281px)").matches) {


    } else if (matchMedia("all and (min-width:769px) and (max-width:1280px)").matches) {


    } else if (matchMedia("all and (min-width:376px) and (max-width:768px)").matches) {


    } else if (matchMedia("all and (max-width: 767px)").matches) {


    }

    // scroll transition ----------------------------------------
    $(window).on('scroll', function () {
        var mainScroll = $(window).scrollTop();
        var mainScrollGap = $(window).height() - 500;

        // ecoArea
        var mainEcoArea = $('.ecoArea').offset().top - mainScrollGap;
        if (mainScroll > mainEcoArea) {
            $('.ecoArea').addClass('active');

        } else if (mainScroll < mainEcoArea - 500) {
            $('.ecoArea').removeClass('active');
        };

        // dxInnovationArea
        var mainDxArea = $('.dxInnovationArea').offset().top - mainScrollGap;
        if (mainScroll > mainDxArea) {
            $('.dxInnovationArea').addClass('active');
        } else if (mainScroll < mainDxArea - 500) {
            $('.dxInnovationArea').removeClass('active');
        };

        // storyArea
        var mainstoryArea = $('.storyArea').offset().top - mainScrollGap;
        if (mainScroll > mainstoryArea) {
            $('.storyArea').addClass('active');
        } else if (mainScroll < mainstoryArea - 500) {
            $('.storyArea').removeClass('active');
        };

        // sustainableArea
        var mainSusArea = $('.sustainableArea').offset().top - mainScrollGap;
        if (mainScroll > mainSusArea) {
            $('.sustainableArea').addClass('active');
        } else if (mainScroll < mainSusArea - 500) {
            $('.sustainableArea').removeClass('active');
        };

        // shortcut
        var mainShortcut = $('.shortcut').offset().top - mainScrollGap - 200;
        if (mainScroll > mainShortcut) {
            $('.shortcut').addClass('active');
        } else if (mainScroll < mainShortcut - 500) {
            $('.shortcut').removeClass('active');
        };
    });
});

// Visual play -------------------------------------------------
var slideIndex = 1;
var slideshowTimer;
showSlides(slideIndex);


function changeSlide(n) {
    // console.log("프로그레스바가 RE재생됩니다");
    progressBar.set(0);
    // console.log("set 0");
    progressBar.animate(1);
    // console.log("다시 재생됩니다");

    showSlides(slideIndex += n);
}

// function currentSlide(n) {
// 	showSlides(slideIndex = n);
// 	console.log("currentSlide"+n);
// }

function showSlides(n) {
    var slides = document.getElementsByClassName("slide");
    // var dots = document.getElementsByClassName("dot");
    var slideNumbers = document.getElementsByClassName("slide-number");

    if (n > slides.length) {
        slideIndex = 1;
    }

    if (n < 1) {
        slideIndex = slides.length;
    }

    for (var i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        slideNumbers[i].style.display = "none";
    }

    slides[slideIndex - 1].style.display = "block";
    slideNumbers[slideIndex - 1].style.display = "block";
}

function pauseSlideshow() {
    clearTimeout(slideshowTimer);
}

// 슬라이드 쇼 일시정지/재생 토글
function toggleSlideshow() {
    if (slideshowTimer) {
        pauseSlideshow();
        slideshowTimer = null;
    } else {
        // playSlideshow()할때 +1이 되면안됨 걍 재생만 되야댐
        // showSlides(slideIndex += 1);
        playSlideshow();
    }
}

// 슬라이드 쇼 시작
playSlideshow();

// ProgressBar
var progressBar;
var isPlaying = false;
var timeout;

function createProgressBar() {
    progressBar = new ProgressBar.Circle('#progress-bar', {
        color: '#fff',
        trailColor: 'rgba(120, 129, 144, 0.5)',
        strokeWidth: 8,
        duration: 10000,
        easing: 'linear',
        from: {
            color: '#fff',
            width: 8
        },
        to: {
            color: '#fff',
            width: 8
        },
        step: function (state, circle) {
            circle.path.setAttribute('stroke', state.color);
            circle.path.setAttribute('stroke-width', state.width);
        },
        onStep: function (state, circle) {
            if (circle.value() === 1) {
                circle.animate(0);
            }
        }
    });
}

// Animate the progress bar
function animateProgressBar() {
    console.log("프로그레스바가 RE재생됩니다");
    progressBar.set(0);
    // console.log("set 0");
    progressBar.animate(1);
    // console.log("다시 재생됩니다");
}

// Toggle between play and stop
function toggleAnimation() {
    if (isPlaying) {
        progressBar.stop();
        isPlaying = false;
        document.getElementById('progress-bar').style.background = `url('/images/icon/main_play.svg') 50% 50% no-repeat`;
        clearTimeout(timeout);
    } else {
        progressBar.animate(1);
        isPlaying = true;
        document.getElementById('progress-bar').style.background = `url('/images/icon/main_stop.svg') 50% 50% no-repeat`;
        if (!timeout) {
            resetAndRepeatAnimation();
        }
    }
}

// Reset the progress and animate the progress bar every 10 seconds
function resetAndRepeatAnimation() {
    progressBar.set(0);
    animateProgressBar();
    timeout = setTimeout(resetAndRepeatAnimation, 10000);
}


function playSlideshow() {
    clearTimeout(slideshowTimer);
    console.log("플레이합니다" + slideIndex);
    // animateProgressBar();
    slideshowTimer = setTimeout(function () {
        showSlides(slideIndex += 1);
        animateProgressBar();
        playSlideshow();
    }, 10000);
}

// Initialize the progress bar
createProgressBar();

// Add event listener to the toggle button
document.getElementById('progress-bar').addEventListener('click', toggleAnimation);

// Start the animation
animateProgressBar();

// Set initial state to play
toggleAnimation();

