let section = document.querySelectorAll(".mySlides")
let indice = 1
let limite = 2
let rightArrow = document.querySelector("#right-arrow")
let leftArrow = document.querySelector("#left-arrow")
window.addEventListener("load", slider)


// let indice2 = 0
// let quantity_images = document.querySelector(".quantity-images")
// let limite2 = quantity_images.textContent
// let rightArrow2 = document.querySelector("#right-arrow2")
// let leftArrow2 = document.querySelector("#left-arrow2")
// window.addEventListener("load", slider2)



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






let quantidade_carrosel_2 = 4
let section2 = document.querySelectorAll(".mySlides2")
let rightArrow2 = document.querySelector("#right-arrow2")
let leftArrow2 = document.querySelector("#left-arrow2")
let contador2 = 0
let ultima_imagem = contador2 + quantidade_carrosel_2
let primeira_imagem = contador2

function slider2(){

    for(contador_auxiliar = contador2 ;contador_auxiliar < ultima_imagem ;contador_auxiliar++){
      section2[contador_auxiliar].style.display = "block"
    
  }
}

function next2(){
  if(ultima_imagem < 6 && contador2<5){
    contador2++
    ultima_imagem++
    section2[primeira_imagem].style.display = "none"
    primeira_imagem++
    slider2()
  }
  
}

rightArrow2.addEventListener("click", next2)
window.addEventListener("load", slider2)

function left2(){
  if(ultima_imagem >4 && contador2>0){
    console.log("to no if da left", ultima_imagem, contador2 )
    contador2--
    section2[ultima_imagem-1].style.display = "none"
    ultima_imagem--
    primeira_imagem--
    slider2()
  }
   
  
  
}

leftArrow2.addEventListener("click", left2)












// function slider2() {
//   section2[indice2].style.display = "block"
//   section2[indice2 + 1].style.display = "block"
//   section2[indice2 + 2].style.display = "block"
//   section2[indice2 + 3].style.display = "block"
// }

// function next2() {
//   if (indice2 < (limite2 - 1)) {

//     section2[indice2].style.display = "none"
//     indice2++
//     section2[indice2].style.display = "block"
//     section2[indice2 + 1].style.display = "block"
//     section2[indice2 + 2].style.display = "block"
//     section2[indice2 + 3].style.display = "block"
//     indice2 +=3
//     console.log(indice2)
//   }
//   else if (indice2 == (limite2 - 1) || (indice2 > limite2)) {
//     console.log("else right", indice2)
//     section2[indice2].style.display = "none"
//     indice2 = 0
//     section2[indice2].style.display = "block"
//     section2[indice2 + 1].style.display = "block"
//     section2[indice2 + 2].style.display = "block"
//     section2[indice2 + 3].style.display = "block"
//   }
// }

// rightArrow2.addEventListener("click", next2)

// function left2() {
//   if (indice2 > 0) {
    
//     section2[indice2].style.display = "none"
//     indice2--
//     section2[indice2].style.display = "block"
//     section2[indice2 - 1].style.display = "block"
//     section2[indice2 - 2].style.display = "block"
//     section2[indice2 - 3].style.display = "block"
//     indice2 -=3
//     console.log(indice2)
//   }
//   else if (indice2 == 0 || (indice2 < limite2)) {
//     console.log("else left",indice2)
//     section2[indice2].style.display = "none"
//     indice2 = limite2 - 1
//     section2[indice2].style.display = "block"
//     section2[indice2 - 1].style.display = "block"
//     section2[indice2 - 2].style.display = "block"
//     section2[indice2 - 3].style.display = "block"
//   }
// }

// leftArrow2.addEventListener("click", left2)


