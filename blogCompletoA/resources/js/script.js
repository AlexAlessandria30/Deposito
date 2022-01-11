
window.onscroll = function() {
    let navbar = document.querySelector(".blog-navbar")
   
    if (document.documentElement.scrollTop > 30) {
        navbar.classList.add("padding-extension")
    } else {
        navbar.classList.remove("padding-extension")
    }
}