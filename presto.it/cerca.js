window.onscroll = function () {
  let navbar = document.querySelector(".presto-navbar");

  if (document.documentElement.scrollTop > 50) {
    navbar.classList.add("padding-extension");
  } else {
    navbar.classList.remove("padding-extension");
  }
};



let buttonToogler = document.querySelector(".navbar .navbar-toggler");
let togglerIcon = document.querySelector(".navbar .navbar-toggler i");

togglerIcon.classList.add("rotate-0");
buttonToogler.addEventListener("click", function () {
  togglerIcon.classList.toggle("rotate-90");
});


fetch("./annunci.json")
  .then((response) => {

    console.log("Then 1");
    return response.json();
  })
  .then((annunci) => {



    let categories = new Set();
    annunci.forEach((el) => categories.add(el.category));

    categories.forEach(function (category) {
      let categoryElement = document.createElement("div");
      categoryElement.classList.add("presto-catgory-find");

      categoryElement.innerHTML = `
          <div class="form-check fw-bolder">
              <input class="form-check-input" type="checkbox" value="${category}" id="checkbox${category}">
              <label class="form-check-label" for="checkbox${category}">
                  ${category}
              </label>
          </div>
          `;

      categoryElement.addEventListener("input", allFilters);

      let categoriesWrapper = document.querySelector(
        "#accordionCategoryWrapper"
      );
      categoriesWrapper.appendChild(categoryElement);
    });


    //  slider prezzo

    let maxPrice = Number(annunci[0].price);
    let minPrice = Number(annunci[0].price);

    annunci.forEach((annuncio, index) => {
      if (index == 0) return;

      let price = Number(annuncio.price);
      if (price > maxPrice) {
        maxPrice = price;
      }
      if (price < minPrice) {
        minPrice = price;
      }
    });

    let slider = document.querySelector("#rangePrice");
    noUiSlider.create(slider, {
      start: [minPrice, maxPrice],
      connect: true,
      range: {
        min: 0,
        max: maxPrice,
      },
    });
    let connect = slider.querySelector(".noUi-connect");
    connect.classList.add("presto-bg");

    slider.noUiSlider.on("change", allFilters); // ON era scritto sul sito dello slider

    let search = document.querySelector("#searchName");
    search.addEventListener("input", allFilters);

    let radioSort = document.querySelectorAll(".presto-radio-sort");
    radioSort.forEach(function (radio) {
      radio.addEventListener("input", allFilters);
    });

    slider.noUiSlider.on("update", function () {
      let rangeMin = document.querySelector("#rangeMin");
      let rangeMax = document.querySelector("#rangeMax");
      let sliderParams = slider.noUiSlider.get();
      rangeMin.innerHTML = `${sliderParams[0]}`;
      rangeMax.innerHTML = `${sliderParams[1]}`;
    });



    //COMMENTARE SE CASO ANNUNCI VUOTI SENZA CATEGORIA


    annunciPopulate(annunci);

    function allFilters() {
      let categoryInputs = document.querySelectorAll(
        ".presto-catgory-find .form-check .form-check-input"
      );
      let checkedCategories = [];
      categoryInputs.forEach(function (inputElement) {
        if (inputElement.checked) checkedCategories.push(inputElement.value);
      });
      let search = document.querySelector("#searchName");
      let lowerSearch = search.value.toLowerCase();
      let sliderParams = slider.noUiSlider.get();
      let min = sliderParams[0];
      let max = sliderParams[1];

      let filteredAnnunci;


      //ricerca combinata di nome ,categotia e prezzo

      filteredAnnunci = annunci
        .filter((annuncio) =>!lowerSearch || annuncio.name.toLowerCase().includes(lowerSearch))
        .filter((annuncio) => checkedCategories.length == 0 || checkedCategories.includes(annuncio.category))
        .filter((annuncio) => Number(annuncio.price) >= min && Number(annuncio.price) <= max);

      // ordinamento con radiobutton

      let radioSort = document.querySelectorAll(".presto-radio-sort");

      radioSort.forEach(function (radio, index) {
        if (radio.checked) {
          switch (index) {
            // Data crescente
            case 0:
              filteredAnnunci.sort((a, b) => a.id - b.id);
              break;

            // Data decrescente
            case 1:
              filteredAnnunci.sort((a, b) => b.id - a.id);
              break;

            // Prezzo crescente
            case 2:
              filteredAnnunci.sort((a, b) => Number(a.price) - Number(b.price));
              break;

            // Prezzo decrescente
            case 3:
              filteredAnnunci.sort((a, b) => Number(b.price) - Number(a.price));
              break;

            // Nome crescente
            case 4:
              filteredAnnunci.sort((a, b) => {
                var nameA = a.name.toLowerCase();
                var nameB = b.name.toLowerCase();
                if (nameA < nameB) {
                  return -1;
                }
                if (nameA > nameB) {
                  return 1;
                }

                // names must be equal
                return 0;
              });
              break;

            // Nome decrescente
            case 5:
              filteredAnnunci.sort((a, b) => {
                var nameA = a.name.toLowerCase();
                var nameB = b.name.toLowerCase();
                if (nameA > nameB) {
                  return -1;
                }
                if (nameA < nameB) {
                  return 1;
                }

                // names must be equal
                return 0;
              });
              break;

            default:
              break;
          }
        }
      })

      annunciPopulate(filteredAnnunci);
    }

    function nameFilter() {
      let search = document.querySelector("#searchName");
      let lowerSearch = search.value.toLowerCase();
      if (lowerSearch) {
        let filteredAnnunci = annunci.filter((annuncio) =>
          annuncio.name.toLowerCase().includes(lowerSearch)
        );
        annunciPopulate(filteredAnnunci);
      } else {
        annunciPopulate(annunci);
      }
    }

    function categoryFilter() {
      let categoryInputs = document.querySelectorAll(
        ".presto-catgory-find .form-check .form-check-input"
      );
      let checkedCategories = [];
      categoryInputs.forEach(function (inputElement) {
        if (inputElement.checked) checkedCategories.push(inputElement.value);
      });

      if (checkedCategories.length > 0) {
        let filteredAnnunci = annunci.filter((annuncio) =>
          checkedCategories.includes(annuncio.category)
        );
        annunciPopulate(filteredAnnunci);
      } else {
        annunciPopulate(annunci);
      }
    }

    function annunciPopulate(annunci) {
      let annunciWrapper = document.querySelector("#annunciWrapper");

      annunciWrapper.innerHTML = "";
      annunci.forEach(function (annuncio) {
        let announcementElement = document.createElement("div");
        announcementElement.classList.add("presto-find-card");
        announcementElement.classList.add("text-center");
        announcementElement.classList.add("mx-4");
        announcementElement.classList.add("mb-4");

        announcementElement.innerHTML = `
                  <h4 class="fw-bolder">${annuncio.category}</h4>
                  <img class="rounded rounded-3" src="https://picsum.photos/201">
                  <div class="d-flex flex-column">
                      <span>${annuncio.name}</span>
                      <span>€ ${annuncio.price}</span>
                  </div>
              `;
        annunciWrapper.appendChild(announcementElement);
      });
    }
  });
