console.log('OI')
function mostrarJornada(htmlTag) {
    console.log(htmlTag.children[0].classList[0])
    if (htmlTag.children[0].classList[0] == 'primeiro') {
        let second_small_circle = document.querySelector('.second_small_circle')
        second_small_circle.style.backgroundColor = '#999'
        let third_small_circle = document.querySelector('.third_small_circle')
        third_small_circle.style.backgroundColor = '#999'
        let fourth_small_circle = document.querySelector('.fourth_small_circle')
        fourth_small_circle.style.backgroundColor = '#999'
        let client_journey_text = document.querySelectorAll('.client_journey_text')
        let cont = 0
        for (single_text of client_journey_text) {
            single_text.style.transform = 'translateX(' + cont + '00%)'
            cont++
        }
    }
    else {
        if (htmlTag.children[0].classList[0] == 'segundo') {
            htmlTag.children[1].style.backgroundColor = '#0076C1'
            let third_small_circle = document.querySelector('.third_small_circle')
            third_small_circle.style.backgroundColor = '#999'
            let fourth_small_circle = document.querySelector('.fourth_small_circle')
            fourth_small_circle.style.backgroundColor = '#999'
            let client_journey_text = document.querySelectorAll('.client_journey_text')
            let cont = 1
            for (single_text of client_journey_text) {
                if (cont == 1) {
                    single_text.style.transform = 'translateX(-100%)'
                }
                else {
                    if (cont == 2) {
                        single_text.style.transform = 'translateX(0)'
                    }
                    else {
                        if (cont == 3) {
                            single_text.style.transform = 'translateX(100%)'
                        }
                        else {
                            if (cont == 4) {
                                single_text.style.transform = 'translateX(200%)'
                            }
                        }
                    }
                }
                
                cont++
            }
        }
        else {
            if (htmlTag.children[0].classList[0] == 'terceiro') {
                htmlTag.children[1].style.backgroundColor = '#0076C1'
                let second_small_circle = document.querySelector('.second_small_circle')
                second_small_circle.style.backgroundColor = '#0076C1'
                let fourth_small_circle = document.querySelector('.fourth_small_circle')
                fourth_small_circle.style.backgroundColor = '#999'
                let client_journey_text = document.querySelectorAll('.client_journey_text')
                let cont = 1
                for (single_text of client_journey_text) {
                    if (cont == 1) {
                        single_text.style.transform = 'translateX(-200%)'
                    }
                    else {
                        if (cont == 2) {
                            single_text.style.transform = 'translateX(-100%)'
                        }
                        else {
                            if (cont == 3) {
                                single_text.style.transform = 'translateX(0)'
                            }
                            else {
                                if (cont == 4) {
                                    single_text.style.transform = 'translateX(100%)'
                                }
                            }
                        }
                    }
                    cont++
                }
            }
            else {
                if (htmlTag.children[0].classList[0] == 'quarto') {
                    htmlTag.children[1].style.backgroundColor = '#0076C1'
                    let second_small_circle = document.querySelector('.second_small_circle')
                    let third_small_circle = document.querySelector('.third_small_circle')
                    second_small_circle.style.backgroundColor = '#0076C1'
                    third_small_circle.style.backgroundColor = '#0076C1'
                    let client_journey_text = document.querySelectorAll('.client_journey_text')
                    let cont = 1
                    for (single_text of client_journey_text) {
                        if (cont == 1) {
                            single_text.style.transform = 'translateX(-300%)'
                        }
                        else {
                            if (cont == 2) {
                                single_text.style.transform = 'translateX(-200%)'
                            }
                            else {
                                if (cont == 3) {
                                    single_text.style.transform = 'translateX(-100%)'
                                }
                                else {
                                    if (cont == 4) {
                                        single_text.style.transform = 'translateX(0)'
                                    }
                                }
                            }
                        }
                        cont++
                    }
                }
            }
        }
    }
}