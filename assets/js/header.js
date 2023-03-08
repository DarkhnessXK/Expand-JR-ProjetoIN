function criarServicos() {
    let servico1 = document.createElement('a')
    servico1.setAttribute('href', '')
    servico1.innerText = 'Análise Burocrática'

    let servico2 = document.createElement('a')
    servico2.setAttribute('href', '')
    servico2.innerText = 'Assessoria para Emissão de Passaporte Brasileiro'

    let servico3 = document.createElement('a')
    servico3.setAttribute('href', '')
    servico3.innerText = 'Captação Internacional de Recursos'

    let servico4 = document.createElement('a')
    servico4.setAttribute('href', '')
    servico4.innerText = 'Dupla Cidadania Portuguesa'

    let servico5 = document.createElement('a')
    servico5.setAttribute('href', '')
    servico5.innerText = 'Estudo e Análise de Mercado'

    let servico6 = document.createElement('a')
    servico6.setAttribute('href', '')
    servico6.innerText = 'Planejamento Logístico'

    let servico7 = document.createElement('a')
    servico7.setAttribute('href', '')
    servico7.innerText = 'Prospecção Internacional'

    servicos = [servico1, servico2, servico3, servico4, servico5, servico6, servico7]

    let services_options = document.createElement('div')
    for (let i = 0; i < 6; i++) {  //Se não fizesse com for, ele sempre substituia o último divider que foi adicionado
        let divider = document.createElement('div')
        divider.setAttribute('class', 'services_divider')
        services_options.append(servicos[i])
        if (i == 5) {
            break
        }
        services_options.append(divider)
    }
    services_options.classList.add('services_options')
    services_options.setAttribute('onmouseover', 'mostrarServicos()')
    services_options.setAttribute('onmouseout', 'tirarServicos()')

    let li_services = document.querySelector('#li_services')
    li_services.append(services_options)
}

function mostrarServicos() {
    let services_options = document.querySelector('.services_options')
    services_options.style.display = 'flex'
}

function tirarServicos() {
    let services_options = document.querySelector('.services_options')
    services_options.style.display = 'none'
}

function mostrarLinguas() {
    let lang_options = document.querySelectorAll('.lang_options')
    if (lang_options[0].style.display == 'flex') {
        lang_options[0].style.display = 'none'
    }
    else {
        lang_options[0].style.display = 'flex'
    }

    if (lang_options[1].style.display == 'flex') {
        lang_options[1].style.display = 'none'
    }
    else {
        lang_options[1].style.display = 'flex'
    }
}

function alterarBotao(htmlTag) {
    console.log(htmlTag.title)
    let alt_lang = document.querySelectorAll('.alt_lang')
    if (htmlTag.title == 'English') {
        alt_lang[0].innerText = 'EN'
    }
    else {
        if (htmlTag.title == 'Portuguese') {
            alt_lang[0].innerText = 'PT'
        }
        else {
            if (htmlTag.title == 'Spanish') {
                alt_lang[0].innerText = 'ES'
            }
        }
    }
}






/*Functions related to the hamburger menu*/
function mostrarMenu() {
    let menu_list = document.querySelector('.menu_list')
    let menu_img = document.querySelector('.hamburger_menu')
    let x_img = document.querySelector('.x_menu')
    if (menuAparecendo) {
        menu_list.style.display = 'none'
        menuAparecendo = false
        menu_img.style.display = 'flex'
        x_img.style.display = 'none'
    }
    else {
        menu_list.style.display = 'flex'
        menuAparecendo = true
        menu_img.style.display = 'none'
        x_img.style.display = 'flex'
    }
}

var menuAparecendo = false