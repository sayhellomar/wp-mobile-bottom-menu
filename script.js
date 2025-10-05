document.addEventListener("DOMContentLoaded", function () {
    let position = window.scrollY;

    window.addEventListener("scroll", function () {
        let scroll = window.scrollY;
        const menu = document.getElementById("mobile-bottom-menu");

        if (scroll > position) {
            menu.classList.remove("show");
            menu.classList.add("hide");
        } else {
            menu.classList.add("show");
            menu.classList.remove("hide");
        }

        position = scroll;
    });
});
