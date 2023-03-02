let section = document.querySelectorAll(".mySlides")
let indice = 1
let limite = 2
let rightArrow = document.querySelector("#right-arrow")
let leftArrow = document.querySelector("#left-arrow")
window.addEventListener("load", slider)


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



