"use strict"

let hours = document.querySelector("#date__hours");
let day = document.querySelector("#date__day");
let month = document.querySelector("#date__month");

let temoin = document.querySelector("#date__temoin");



[hours, day,month].forEach(input => {
    input.addEventListener("input", () => {
        let currentTime = new Date()
        let reservationTime = new Date(`2022-${month.value}-${day.value}T${hours.value}:00:00`)
        let year = currentTime > reservationTime ? reservationTime.getFullYear() + 1 : reservationTime.getFullYear()
        temoin.value = `${year}-${month.value}-${day.value}T${hours.value}:00`
    })
})