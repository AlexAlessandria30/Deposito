//var showContatti = false;

let rubrica = {

    contatti: [
        {
            nome: 'Federico',
            telefono: '+3912345671'
        },
        {
            nome: 'Joshua',
            telefono: '+3912345672'
        },
        {
            nome: 'Angelo',
            telefono: '+3912345673'
        },
        {
            nome: 'Paolo',
            telefono: '+3912345674'
        }
    ],

    eliminaContatto: function (nome) {

        let contatto = this.contatti.find(function (){ return contatto.nome.toLowerCase() != nome.toLowerCase() })
        
        if (!contatto) {
            throw {
                status: 404,
                message: `contatto ${nome} inesistente`
            }

        }



        this.contatti = this.contatti.filter(function (contatto) {
            return contatto.nome.toLowerCase() != nome.toLowerCase()
        })


        let wrapper = document.querySelector("#contacts-wrapper")
        let card = document.querySelector(`#${nome.toLowerCase}`)
        if (card) {
            wrapper.removeChild(card)
        }
    },

     hideContatti: function () {
         let wrapper = document.querySelector("#contacts-wrapper")
         wrapper.innerHTML = ""
         let showContacts = document.querySelector("#show-contacts")
         showContacts.removeAttribute("disabled")
         let hideContacts = document.querySelector("#hide-contacts")
         hideContacts.setAttribute("disabled", true)
         showContatti = false;
     },
     showContatti: function () {
         let wrapper = document.querySelector("#contacts-wrapper")

        this.contatti.forEach(function (contatto) {
            let card = document.createElement("div")
            card.classList.add("my-card")
            card.classList.add("mt-3")
            card.classList.add("me-2")
            card.classList.add("position-relative")
            card.id = contatto.nome.toLowerCase()

            card.innerHTML =
                `
            <button id="edit-${contatto.nome}" class="btn position-absolute top-0 end-0 text-dark" title="Modifica ${contatto.nome}">
                <i class="fas fa-edit"></i>
            </button>
            <div class="avatar">
                <i class="fas fa-user fa-2x"></i>
            </div>
            <div class="info">
                <span>Nome:</span>
                <span>${contatto.nome}</span>
            </div>
            <div class="info">
                <span>Telefono:</span>
                <span>${contatto.telefono}</span>
            </div>
            `
            wrapper.appendChild(card);

            let editButton = document.querySelector(`#edit-${contatto.nome}`)
            editButton.addEventListener('click', function () {
                let hiddenContact = document.querySelector("#hidden-contact")
                let nomeEdit = document.querySelector("#nome-edit")
                let telefonoEdit = document.querySelector("#telefono-edit")
                nomeEdit.value = contatto.nome
                telefonoEdit.value = contatto.telefono

                nomeEdit.removeAttribute("disabled")
                telefonoEdit.removeAttribute("disabled")

                let editContact = document.querySelector("#edit-contact")
                editContact.removeAttribute("disabled")
                hiddenContact.value = card.id
            })
        })
    let showContacts = document.querySelector("#show-contacts")
    showContacts.setAttribute("disabled", true)
    let hideContacts = document.querySelector("#hide-contacts")
     hideContacts.removeAttribute("disabled")
     showContatti = true;
    },
    ricercaContatto: function (nome) {
        const contatto = this.contatti.find(function (contatto) {
            return contatto.nome.toLowerCase() == nome.toLowerCase()
        });
        let wrapper = document.querySelector("#search-wrapper")
        if (contatto) {
            let card = document.createElement("div")
            card.classList.add("my-card")
            card.classList.add("mt-3")
            card.classList.add("me-2")

            card.innerHTML =
                `
            <div class="avatar">
                <i class="fas fa-user fa-2x"></i>
            </div>
            <div class="info">
                <span>
                    Nome:
                </span>
                <span>
                    ${contatto.nome}
                </span>
            </div>
            <div class="info">
                <span>
                    Telefono:
                </span>
                <span>
                ${contatto.telefono}
                </span>
            </div>
            `
            wrapper.appendChild(card)
        } else {
            wrapper.innerHTML = ""
        }
    },


    inserisciContatto: function (nome, telefono) {
        try {
            const contatto = this.contatti.find(function (contatto) {
                return contatto.nome.toLowerCase() == nome.toLowerCase()
            });

            if (contatto) throw {
                status: 500,
                message: `Il contatto ${nome} esiste!`
            }

            this.contatti.push({
                nome: nome,
                telefono: telefono
            })

            if (showContatti) {
                let wrapper = document.querySelector("#contacts-wrapper")
                let card = document.createElement("div")
                card.classList.add("my-card")
                card.classList.add("mt-3")
                card.classList.add("me-2")
                card.classList.add("position-relative")
                card.id = nome.toLowerCase()

                card.innerHTML =
                    `
                <button id="delete-${nome}" class="btn position-absolute top-0 end-0 text-danger">
                    <i class="fas fa-times"></i>
                </button>
                <div class="avatar">
                    <i class="fas fa-user fa-2x"></i>
                </div>
                <div class="info">
                    <span>Nome:</span>
                    <span>${nome}</span>
                </div>
                <div class="info">
                    <span>Telefono:</span>
                    <span>${telefono}</span>
                </div>
                `
                wrapper.appendChild(card);
                let deleteButton = document.querySelector(`#delete-${nome}`)
                deleteButton.addEventListener('click', function () {
                    let card = document.querySelector(`#${nome}`)
                    wrapper.removeChild(card)
                    rubrica.contatti = rubrica.contatti.filter((c) => c.nome != nome);
                })
            }
        } catch (error) {
            errorHandling(error)
        }

    },
    modificaContatto: function (nome, telefono, id) {
        try {
            this.contatti.forEach(function (contatto) {
                if (contatto.nome.toLowerCase() == id) {
                    contatto.nome = nome;
                    contatto.telefono = telefono;
                }
            })

        } catch (error) {
            errorHandling(error)
        }

    }
}


let showContacts = document.querySelector("#show-contacts")
showContacts.addEventListener('click', function () {
    rubrica.showContatti()
})

let hideContacts = document.querySelector("#hide-contacts")
hideContacts.addEventListener('click', function () {
    rubrica.hideContatti()
})

let searchContact = document.querySelector("#search-contact")
searchContact.addEventListener('input', function () {
    rubrica.ricercaContatto(searchContact.value)
})

let insertContact = document.querySelector("#insert-contact")
insertContact.addEventListener('click', function () {
    let nomeInsert = document.querySelector("#nome-insert")
    let telefonoInsert = document.querySelector("#telefono-insert")
    rubrica.inserisciContatto(nomeInsert.value, telefonoInsert.value)
    nomeInsert.value = ""
    telefonoInsert.value = ""
})

let editContact = document.querySelector("#edit-contact")
editContact.addEventListener('click', function () {
    let hiddenContact = document.querySelector("#hidden-contact")
    let nomeEdit = document.querySelector("#nome-edit")
    let telefonoEdit = document.querySelector("#telefono-edit")
    rubrica.modificaContatto(nomeEdit.value, telefonoEdit.value, hiddenContact.value)
    nomeEdit.value = ""
    telefonoEdit.value = ""
    hiddenContact.value = ""
})

let deleteContact = document.querySelector("#delete-contact")
deleteContact.addEventListener('click', function () {
    let wrapper = document.querySelector("#contacts-wrapper")
    let deleteSearchContact = document.querySelector("#delete-search-contact")
    if (deleteSearchContact.value) {
        try {
            if (
                deleteSearchContact.value.includes("%") ||
                deleteSearchContact.value.includes("&") ||
                deleteSearchContact.value.includes("$")) {
                throw {
                    status: 500,
                    message: "Caratteri non permessi (% & $)"
                }
            } else {
                // Parte oggetto
                let l = rubrica.contatti.lenght;
                rubrica.contatti = rubrica.contatti.filter(function (contatto) {
                    return contatto.nome.toLowerCase() != deleteSearchContact.value.toLowerCase()
                })
                if (l == rubrica.contatti.lenght) {
                    throw {
                        status: 404,
                        message: `Contatto ${deleteSearchContact.value} inesistente!`
                    }
                }
                // Parte grafica
                let card = document.querySelector(`#${deleteSearchContact.value.toLowerCase()}`)
                if (card) {
                    wrapper.removeChild(card)
                }
            }
        } catch (error) {
            errorHandling(error)
        } finally {
            deleteSearchContact.value = ""
        }
    }
})


function errorHandling(error) {
    let errorToast = document.querySelector('#errorToast')
    let message = document.querySelector('#error-message')
    let header = document.querySelector('#error-header')
    errorToast.classList.add("toast")
    errorToast.classList.remove("bg-danger")
    errorToast.classList.remove("bg-warning")
    errorToast.classList.remove("bg-primary")

    if (error.status == 500) {
        errorToast.classList.add("bg-danger")
        header.innerHTML = "Errore"
    } else if (error.status == 404) {
        errorToast.classList.add("bg-warning")
        header.innerHTML = "Attenzione"
    } else {
        errorToast.classList.add("bg-primary")
        header.innerHTML = "Info"
    }


    let toast = new bootstrap.Toast(errorToast)
    message.innerHTML =
        `
        <strong>${error.status}</strong>:
        <span class="text-white">${error.message}</span>
    `
    toast.show();
    setTimeout(function () {
        toast.hide()
        
    },2000)
}






//let modificaContatto = document.querySelector()