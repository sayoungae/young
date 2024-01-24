document.addEventListener("DOMContentLoaded", function () {
    // 페이지가 로드되면 실행될 코드
    // async function loadHeadFile() {
    //     try {
    //         const response = await fetch("https://sayoungae.github.io/young/chnYouth/incloude/head.html");
    //         const htmlContent = await response.text();

    //         document.querySelector("head").innerHTML = htmlContent;
    //     } catch (error) {
    //         console.error("head 로드하는 중 오류 발생:", error);
    //     }
    // }
    async function loadSkipNav() {
        try {
            const response = await fetch("https://sayoungae.github.io/young/chnYouth/incloude/skipNav.html");
            const htmlContent = await response.text();

            document.getElementById("skipNav").innerHTML = htmlContent;
        } catch (error) {
            console.error("skipNav 로드하는 중 오류 발생:", error);
        }
    }
   
    async function loadHeader() {
        try {
            const response = await fetch("https://sayoungae.github.io/young/chnYouth/incloude/header.html");
            const htmlContent = await response.text();

            document.getElementById("header").innerHTML = htmlContent;
        } catch (error) {
            console.error("Header를 로드하는 중 오류 발생:", error);
        }
    }
    async function loadAllmenu() {
        try {
            const response = await fetch("https://sayoungae.github.io/young/chnYouth/incloude/allMenu.html");
            const htmlContent = await response.text();

            document.getElementById("allmenu").innerHTML = htmlContent;
        } catch (error) {
            console.error("allmenu 로드하는 중 오류 발생:", error);
        }
    }
    async function loadFooter() {
        try {
            const response = await fetch("https://sayoungae.github.io/young/chnYouth/incloude/footer.html");
            const htmlContent = await response.text();

            document.getElementById("footer").innerHTML = htmlContent;
        } catch (error) {
            console.error("footer 로드하는 중 오류 발생:", error);
        }
    }
    //함수 호출
    // loadHeadFile();
    loadSkipNav();
    loadHeader();
    loadAllmenu();
    loadFooter();
});