function mostrarJornada(htmlTag) {
    if (htmlTag.children[0].textContent == 'Primeiro Contato') {
        let second_small_circle = document.querySelector('.second_small_circle')
        second_small_circle.style.backgroundColor = '#999'
        let third_small_circle = document.querySelector('.third_small_circle')
        third_small_circle.style.backgroundColor = '#999'
        let fourth_small_circle = document.querySelector('.fourth_small_circle')
        fourth_small_circle.style.backgroundColor = '#999'
        let client_journey_text = document.querySelectorAll('.client_journey_text')
        for (single_text of client_journey_text) {
            single_text.style.display = 'none'
        }
        let first_text = document.querySelector('.first_text')
        first_text.style.display = 'flex'
    }
    else {
        if (htmlTag.children[0].textContent == 'Diagnóstico') {
            htmlTag.children[1].style.backgroundColor = 'black'
            let third_small_circle = document.querySelector('.third_small_circle')
            third_small_circle.style.backgroundColor = '#999'
            let fourth_small_circle = document.querySelector('.fourth_small_circle')
            fourth_small_circle.style.backgroundColor = '#999'
            let client_journey_text = document.querySelectorAll('.client_journey_text')
            for (single_text of client_journey_text) {
                single_text.style.display = 'none'
            }
            let second_text = document.querySelector('.second_text')
            second_text.style.display = 'flex'
        }
        else {
            if (htmlTag.children[0].textContent == 'Negociação') {
                htmlTag.children[1].style.backgroundColor = 'black'
                let second_small_circle = document.querySelector('.second_small_circle')
                second_small_circle.style.backgroundColor = 'black'
                let fourth_small_circle = document.querySelector('.fourth_small_circle')
                fourth_small_circle.style.backgroundColor = '#999'
                let client_journey_text = document.querySelectorAll('.client_journey_text')
                for (single_text of client_journey_text) {
                    single_text.style.display = 'none'
                }
                let third_text = document.querySelector('.third_text')
                third_text.style.display = 'flex'
            }
            else {
                if (htmlTag.children[0].textContent == 'Início do Projeto') {
                    htmlTag.children[1].style.backgroundColor = 'black'
                    let second_small_circle = document.querySelector('.second_small_circle')
                    let third_small_circle = document.querySelector('.third_small_circle')
                    second_small_circle.style.backgroundColor = 'black'
                    third_small_circle.style.backgroundColor = 'black'
                    let client_journey_text = document.querySelectorAll('.client_journey_text')
                    for (single_text of client_journey_text) {
                        single_text.style.display = 'none'
                    }
                    let fourth_text = document.querySelector('.fourth_text')
                    fourth_text.style.display = 'flex'
                }
            }
        }
    }
}