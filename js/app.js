// menu responsive
function setWindowSize() {
    if (typeof (window.innerWidth) == 'number') {
        width = window.innerWidth;

        if (width <= 768) {
            $(".sidebarApp").addClass("hide");

        } else if (width <= 1023) {
            $(".sidebarApp").addClass("close");
            $(".sidebarApp").removeClass("hide");
        } else if (width >= 1024) {
            $(".sidebarApp").removeClass("close");
            $(".sidebarApp").removeClass("hide");
        }
    }

}
setWindowSize()
window.addEventListener('resize', setWindowSize);



const body = document.querySelector("body"),
    html = document.querySelector("html"),
    sidebarApp = body.querySelector(".sidebarApp")
toggle = body.querySelector(".toggle")

toggle.addEventListener("click", () => {
    sidebarApp.classList.toggle("close");
});
const languageSwitcher = document.querySelector(".selectLanguage");

languageSwitcher.addEventListener("change", () => {
    if (languageSwitcher.value === "ar") {
        html.setAttribute("lang", "ar");
        body.style.direction = "rtl";
    } else {
        html.setAttribute("lang", "en");
        body.style.direction = "ltr";
    }
});


