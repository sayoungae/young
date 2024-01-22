document.addEventListener("DOMContentLoaded", function () {
    // 페이지가 로드되면 실행될 코드

    // header.html을 가져오는 함수
    async function loadHeader() {
        try {
            const response = await fetch("https://sayoungae.github.io/young/chnYouth/header.html");
            const htmlContent = await response.text();

            // 가져온 내용을 특정 요소에 추가
            document.getElementById("header").innerHTML = htmlContent;
        } catch (error) {
            console.error("Header를 로드하는 중 오류 발생:", error);
        }
    }

    async function loadFooter() {
        try {
            const response = await fetch("https://sayoungae.github.io/young/chnYouth/footer.html");
            const htmlContent = await response.text();

            document.getElementById("footer").innerHTML = htmlContent;
        } catch (error) {
            console.error("footer 로드하는 중 오류 발생:", error);
        }
    }
    // loadHeader 함수 호출
    loadHeader();
    loadFooter();
});