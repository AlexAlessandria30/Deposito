
window.onscroll = function() {
    let navbar = document.querySelector(".presto-navbar")
   
    if (document.documentElement.scrollTop > 40) {
        navbar.classList.add("padding-extension")
    } else {
        navbar.classList.remove("padding-extension")
    }
}



let buttonToogler = document.querySelector(".navbar .navbar-toggler")
let togglerIcon = document.querySelector(".navbar .navbar-toggler i")

togglerIcon.classList.add("rotate-0")
buttonToogler.addEventListener("click", function() {
    togglerIcon.classList.toggle("rotate-90")
})



fetch('./annunci.json')
.then((response) => response.json())
.then((annunci) => { 
    let categories = new Set()
    annunci.forEach((el) => categories.add(el.category))
    
    categories.forEach(function(category) {
        let categoryElement = document.createElement("div")
        categoryElement.className = "presto-card presto-text text-center d-flex flex-column shadow m-1"
    
        categoryElement.innerHTML = 
        `
            <p class="h3 fw-bolder mt-3">
                ${category}
            </p>
        `
        categoryElement.addEventListener("mouseenter", function() {
            categoryElement.classList.remove("shadow")
            categoryElement.classList.add("shadow-lg")
        })
        categoryElement.addEventListener("mouseleave", function() {
            categoryElement.classList.remove("shadow-lg")
            categoryElement.classList.add("shadow")
        })
    
        let categoriesWrapper = document.querySelector("#categories-wrapper")
        categoriesWrapper.appendChild(categoryElement)
    })

    annunci.sort((a, b) => b.id - a.id)

    annunci.slice(0,3).forEach(function(annuncio, indice) {
        let announcementElement = document.createElement("div")
        announcementElement.classList.add("glide__slide")
        announcementElement.classList.add("mb-4")
    
        announcementElement.innerHTML = 
        `
            <h4 class="fw-bolder">${annuncio.category}</h4>
            <img class="rounded rounded-3" src="https://picsum.photos/200">
            <div class="d-flex flex-column ">
                <span>${annuncio.name}</span>
                <span>${annuncio.price}</span>
            </div>
        `
    
        let glideSlidesWrapper = document.querySelector(".glide .glide__track .glide__slides")
        glideSlidesWrapper.appendChild(announcementElement)
    
        if(indice % 2 == 0) {
            let announcementBullet = document.createElement("button")
            announcementBullet.classList.add("glide__bullet")
            announcementBullet.classList.add("presto-bullet-button")
            announcementBullet.setAttribute("data-glide-dir", `=${indice}`)
        
            let glideBulletsWrapper = document.querySelector(".glide .glide__bullets")
            glideBulletsWrapper.appendChild(announcementBullet)
        }
    })
    new Glide('.glide', {
        type: 'carousel',
        startAt: 0,
        perView: 1
    }).mount()
})
   

