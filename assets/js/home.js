let section = document.querySelectorAll(".mySlides")
let indice = 1
let limite = 2
let rightArrow = document.querySelector("#right-arrow")
let leftArrow = document.querySelector("#left-arrow")
window.addEventListener("load", slider)

let section2 = document.querySelectorAll(".mySlides2")
let indice2 = 0
let quantity_images = document.querySelector(".quantity-images")
let limite2 = quantity_images.textContent
let rightArrow2 = document.querySelector("#right-arrow2")
let leftArrow2 = document.querySelector("#left-arrow2")
window.addEventListener("load", slider2)


function slider() {
  section[indice].style.display = "block"

}

function next() {
  if (indice < limite) {

    section[indice].style.display = "none"
    indice++
    section[indice].style.display = "block"
  }
  else if (indice = limite) {
    section[indice].style.display = "none"
    indice = 0
    section[indice].style.display = "block"
  }
}

rightArrow.addEventListener("click", next)


function left() {
  if (indice > 0) {

    section[indice].style.display = "none"
    indice--
    section[indice].style.display = "block"
  }
  else if (indice == 0) {
    section[indice].style.display = "none"
    indice = 2
    section[indice].style.display = "block"
  }
}

leftArrow.addEventListener("click", left)

function slider2() {
  section2[indice2].style.display = "block"

}

function next2() {
  if (indice2 < (limite2-1)) {

    section2[indice2].style.display = "none"
    indice2++
    section2[indice2].style.display = "block"
  }
  else if (indice2 == (limite2-1)) {
    section2[indice2].style.display = "none"
    indice2 = 0
    section2[indice2].style.display = "block"
  }
}

rightArrow2.addEventListener("click", next2)

function left2() {
  if (indice2 > 0) {

    section2[indice2].style.display = "none"
    indice2--
    section2[indice2].style.display = "block"
  }
  else if (indice2 == 0) {
    section2[indice2].style.display = "none"
    indice2 = limite2-1
    section2[indice2].style.display = "block"
  }
}

leftArrow2.addEventListener("click", left2)


