// JavaScript source code

var isMenuOpened = false;

function openwindow(link) {
    window.open(link, "_self");
}

function openMenu() {
    var menu = document.getElementsByClassName('menu');
    if (isMenuOpened == false) {
        isMenuOpened = true;
        //Open menu
        menu[0].style.visibility = "initial";

    } else {
        isMenuOpened = false;
        //Close menu
        menu[0].style.visibility = "hidden";
    }
}

window.addEventListener("scroll", function () {
    document.getElementsByClassName('menu')[0].style.visibility = "hidden";
});