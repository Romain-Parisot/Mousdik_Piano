"use strict"

let hours = document.querySelector("#date__hours");
let day = document.querySelector("#date__day");
let month = document.querySelector("#date__month");

let temoin = document.querySelector("#date__temoin");



[hours, day,month].forEach(input => {
    if(!input) return
    input.addEventListener("input", () => {
        let currentTime = new Date()
        let reservationTime = new Date(`2022-${month.value}-${day.value}T${hours.value}:00:00`)
        let year = currentTime > reservationTime ? reservationTime.getFullYear() + 1 : reservationTime.getFullYear()
        temoin.value = `${year}-${month.value}-${day.value}T${hours.value}:00`
    })
})

let reserverBtn = document.querySelector(".reserver")
let formContainer = document.querySelector(".form__container")
let form = document.querySelector('.page-template-renovation main .form__container form')
let submit = document.querySelector('.page-template-renovation main .form__container form input[type="submit"]')
let conf = document.querySelector('.confirmation')
console.log(conf)
if(reserverBtn) {
    reserverBtn.addEventListener("click", ()=> {
        reserverBtn.classList.add("disappear")
        formContainer.classList.remove("disappear")
    })
}


if(conf) {
    setTimeout(() => {
        scrollTo({
            top: conf.offsetTop - 48,
            behavior: 'smooth'
          })
    }, 500)
}