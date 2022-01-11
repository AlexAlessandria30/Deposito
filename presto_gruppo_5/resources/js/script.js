window.onload = function () {

  var mustheadlogo = document.getElementsByClassName('musthead-logo');
  if (mustheadlogo.length > 0) {

    let logohome = document.querySelector(".musthead-logo")
    logohome.classList.add("musthead-logo-trans")
  }
  var musthead = document.getElementsByClassName('musthead');
  if (musthead.length > 0) {


    let cic = document.querySelector(".musthead")
    cic.classList.add("musthead-trans")
  }


}

window.onscroll = function () {
  var whocard1 = document.getElementsByClassName('card-why1');
  if (whocard1.length > 0) {

    let cardwhy1 = document.querySelector(".card-why1")
    cardwhy1.classList.add("card-why-trans1")
  }

  var whocard2 = document.getElementsByClassName('card-why2');
  if (whocard2.length > 0) {

    let cardwhy2 = document.querySelector(".card-why2")
    cardwhy2.classList.add("card-why-trans2")
  }

  var whocard3 = document.getElementsByClassName('card-why3');
  if (whocard3.length > 0) {

    let cardwhy3 = document.querySelector(".card-why3")
    cardwhy3.classList.add("card-why-trans3")
  }

}



/* carousel */

var swiper = new Swiper(".mySwiper", {
  effect: "cube",
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  grabCursor: true,
  cubeEffect: {
    shadow: true,
    slideShadows: true,
    shadowOffset: 20,
    shadowScale: 0.94,
  }
});
