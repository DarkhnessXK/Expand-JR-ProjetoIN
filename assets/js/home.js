let section = document.querySelectorAll(".mySlides")
let indice = 0
let limite = section.length - 1
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
    indice = limite
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

function reset(bol){
  for(contador_auxiliar = contador2 ;contador_auxiliar < ultima_imagem ;contador_auxiliar++){
    section2[contador_auxiliar].style.display = "none"
  
}
  if(bol){
    contador2=0
  }

  else{
    contador2= section2.length - quantidade_carrosel_2 
  }
    ultima_imagem = contador2 + quantidade_carrosel_2
    primeira_imagem = contador2
    slider2()
}

function next2(){
 
  if(ultima_imagem < section2.length && contador2 < section2.length -1){
    contador2++
    ultima_imagem++
    section2[primeira_imagem].style.display = "none"
    primeira_imagem++
    slider2()
  }
  else{
    reset(true)
  }
  
}

rightArrow2.addEventListener("click", next2)
window.addEventListener("load", slider2)

function left2(){
  if(ultima_imagem > 4 && contador2>0){
    contador2--
    section2[ultima_imagem-1].style.display = "none"
    ultima_imagem--
    primeira_imagem--
    slider2()
  }
  else{
    reset(false)
  }
  
  
}

leftArrow2.addEventListener("click", left2)