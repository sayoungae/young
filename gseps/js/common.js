
window.onload = function () {


    /* gnb */
    var $gnbWrap = document.querySelector(".gnb_wrap");
    var gnbAelements = $gnbWrap.querySelectorAll("a");
    var $gnb = document.querySelector("#gnb > ul");
    var depth1Links = document.querySelectorAll('#gnb > ul > li > a');
    var gnbMenu = document.querySelector('.gnb_menu');


    $gnb.addEventListener("mouseover", function () {
        dwGnbMenu();
    });

    $gnb.addEventListener("mouseleave", function () {
        upGnbMenu();
    });
    depth1Links.forEach(function (e) {
        e.addEventListener('focus', function () {
            dwGnbMenu();
        });
    });

    gnbAelements.forEach(function (element, index) {
        if (index === gnbAelements.length - 1) {
            element.addEventListener("focusout", function (event) {
                upGnbMenu();
            });
        }
    });
    function dwGnbMenu() {
        // gnbMenu.style.display = "block";
        $gnbWrap.classList.add('active');
        return false;
    }
    function upGnbMenu() {
        // gnbMenu.style.display = "none";
        $gnbWrap.classList.remove('active');
        return false;
    }

    // tab_select add class on
    var tabs = document.querySelectorAll('.tab_select a');
    var tabCont = document.querySelectorAll('.tabCont');
    tabs.forEach(function (tab) {
        tab.addEventListener('click', function (e) {
            e.preventDefault();

            tabs.forEach(function (tab) {
                tab.classList.remove('on');
            });
            this.classList.add('on');
            var activeTab = this.getAttribute('rel');

            tabCont.forEach(function (cont) {
                if (cont.id === activeTab) {
                    cont.classList.add('on');
                } else {
                    cont.classList.remove('on');
                }
            });
        });
    });

}



