$(document).ready(function () {
    gsap.registerPlugin(ScrollTrigger);
    // GSAP
    /********************** m_visual ***************************/
    const mVisual = gsap.timeline({
        scrollTrigger: {
            trigger: '.m_visual',
            pin: '.m_visual',  //고정*
            start: 'top top',
            end: '+=2500',
            scrub: 1,
            // markers: true,
        }
    });

    mVisual.addLabel("start")
        .to(".imgLine_03", { marginTop: 0, duration: 4000, }, "start")
        .to(".img_block_Main", { height: "100vh", duration: 1000, }, "start")
        .to(".imgLine_02", { marginTop: "100px", duration: 4000, delay: 100 }, "start")
        .to(".imgLine_01", { marginTop: "200px", duration: 4000, delay: 150 }, "start")
        .to('.visual_text', {
            opacity: 0,
            duration: 4000,
        }, "start")
        .to('.visual_text', {
            display: "none"
        })
        .to(".img_block_Main", { width: "100vw", borderRadius: 0, duration: 5000, }, "width")
        .addLabel("end")
        .to('.img_block_Main', { delay: 3000 }, "end")
        .to(".dock, .txt_box", { opacity: "1", duration: 4000, }, "end")
        .to(".imgLine_02", { display: "none" }, "end")
        .to(".imgLine_01", { display: "none" }, "end")

    /********************** scroll ***************************/
    window.addEventListener('scroll', function () {
        var mainScroll = window.scrollY || document.documentElement.scrollTop;
        var mainScrollGap = window.innerHeight;

        // eco_area
        var ecoArea = document.querySelector('.eco_area');
        var mainEcoArea = ecoArea.offsetTop - mainScrollGap;
        if (mainScroll > mainEcoArea) {
            ecoArea.classList.add('active');
        } else if (mainScroll < mainEcoArea - 500) {
            ecoArea.classList.remove('active');
        };

        // innovation_area
        var invationArea = document.querySelector('.innovation_area');
        var mainInvationArea = invationArea.offsetTop - mainScrollGap;
        if (mainScroll > mainInvationArea) {
            invationArea.classList.add('active');
        } else if (mainScroll < mainInvationArea - 500) {
            invationArea.classList.remove('active');
        };

        // story_area
        var storyArea = document.querySelector('.story_area');
        var mainStoryArea = storyArea.offsetTop - mainScrollGap;
        if (mainScroll > mainStoryArea) {
            storyArea.classList.add('active');
        } else if (mainScroll < mainStoryArea - 500) {
            storyArea.classList.remove('active');
        };
        var lis = document.querySelectorAll('.tab_content ul li');
        lis.forEach(function (li, index) {
            li.style.transitionDelay = (0.6 + index * 0.2) + 's';
        });

        // sustainable_area
        var sustainableArea = document.querySelector('.sustainable_area');
        var mainSustainArea = sustainableArea.offsetTop - mainScrollGap;
        if (mainScroll > mainSustainArea) {
            sustainableArea.classList.add('active');
        } else if (mainScroll < mainSustainArea - 500) {
            sustainableArea.classList.remove('active');
        };
        var lis = document.querySelectorAll('.sustainable_cont li');
        lis.forEach(function (li, index) {
            li.style.transitionDelay = (0.3 + index * 0.2) + 's';
        });

        // shortcut_area
        var shortcutArea = document.querySelector('.shortcut_area');
        var mainShortArea = shortcutArea.offsetTop - mainScrollGap;
        if (mainScroll > mainShortArea) {
            shortcutArea.classList.add('active');
        } else if (mainScroll < mainShortArea - 500) {
            shortcutArea.classList.remove('active');
        };
    });


    /* m_visual swiper */
    const progressCircle = document.querySelector(".autoplay-progress svg");
    // const progressContent = document.querySelector(".autoplay-progress span");
    var pBtn = document.querySelector(".pBtn");
    const mSwiper1 = new Swiper("#mSwiper1", {
        slidesPerView: 1,
        loop: true,
        // autoplay: {
        //     delay: 6000,
        //     disableOnInteraction: false,
        // },
        navigation: {
            nextEl: '.mSwiper-btn-next',
            prevEl: '.mSwiper-btn-prev',
        },
        pagination: {
            el: ".mSwiper-fraction",
            clickable: true,
            type: 'fraction',
        },
        on: {
            init: function () {
                $('.swiper-slide').addClass('changed');
                $('.mSwiper-fraction .current').text(this.realIndex + 1);
                $('.mSwiper-fraction .all').text(this.loopedSlides);
                // 자동재생 클릭 이벤트 추가
                var imgElement = document.querySelector('.pBtn > img');

                pBtn.addEventListener('click', function () {
                    if (pBtn.classList.contains('on')) {
                        mSwiper1.autoplay.stop();
                        pBtn.classList.remove('on');
                        imgElement.src = '/images/main_stop.svg';
                    } else {
                        pBtn.classList.add('on');
                        mSwiper1.autoplay.start();
                        imgElement.src = '/images/main_play.svg';
                    }
                })
            },

            slideChangeTransitionStart: function () {
                $('.swiper-slide').addClass('changing');
                $('.swiper-slide').removeClass('changed');

                $('.mSwiper-fraction .current').text(this.realIndex + 1);
            },

            slideChangeTransitionEnd: function () {
                $('.swiper-slide').removeClass('changing');
                $('.swiper-slide').addClass('changed');
            },

            autoplayTimeLeft(s, time, progress) {
                progressCircle.style.setProperty("--progress", 1 - progress);
                // progressContent.textContent = `${Math.ceil(time / 1000)}s`;
            }
        },
    });

});