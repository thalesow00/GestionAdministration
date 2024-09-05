let form = document.querySelector("form")

form.addEventListener('submit', (event) => {
    event.preventDefault()
    let nom = document.getElementById("nom")

    console.log(nom.value)
})

// let email = document.querySelector("email")

// form.addEventListener('submit', (event) => {
//     event.preventDefault()
//     let email = document.getElementById("email")

//     alert(email.value)
// })

let password = document.querySelector("password")

form.addEventListener('submit', (event) => {
    event.preventDefault()
    let password = document.getElementById("password")
    console.log(password.value)
    let confirmPassword = document.getElementById("confirmPassword")
    console.log(confirmPassword.value)
    if (password.value!== confirmPassword.value) {
        alert("Les mots de passe ne correspondent pas.")
    }
    else {
        console.log("Les mots de passe correspondent.")
    }
  })   
// function verifEmail()

let confirmEmail = document.querySelector("confirmEmail")

form.addEventListener('submit', (event) => {
    event.preventDefault()
    let confirmEmail = document.getElementById("confirmEmail")
    let email = document.getElementById("email")

    if (confirmEmail.value !== email.value) {
        alert("Les adresses emails ne correspondent pas.")
    }
    else {
        console.log("Les adresses emails correspondent.")
    }
})

