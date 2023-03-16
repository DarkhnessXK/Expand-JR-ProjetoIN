function criarServicos() {
    let servico1 = document.createElement('p')
    servico1.innerText = 'Análise Burocrática'

    let servico2 = document.createElement('p')
    servico2.innerText = 'Assessoria para Emissão de Passaporte Brasileiro'

    let servico3 = document.createElement('p')
    servico3.innerText = 'Captação Internacional de Recursos'

    let servico4 = document.createElement('p')
    servico4.innerText = 'Dupla Cidadania Portuguesa'

    let servico5 = document.createElement('p')
    servico5.innerText = 'Estudo e Análise de Mercado'

    let servico6 = document.createElement('p')
    servico6.innerText = 'Planejamento Logístico'

    let servico7 = document.createElement('p')
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

function irAteServicos() {
    let home_url = document.querySelector('.home_url')
    if (window.location.href == home_url.textContent) {
        let section2_services = document.querySelector('.section-2-services')
        section2_services.scrollIntoView({ behavior : 'smooth' })
    }
    else {
        setCookie('estavaHome', 'true')
        window.location.href = home_url.textContent
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

function setCookie(nome, valor, days) {
    var validade = "";
    if (days) {
        console.log('DIAS')
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        validade = "; expires=" + date.toUTCString();
    }
    document.cookie = nome + "=" + (valor || "")  + validade + "; path=/";
}

function getCookie(nome) {
    var nomeCookie = nome + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nomeCookie) == 0) return c.substring(nomeCookie.length,c.length);
    }
    return null;
}

function eraseCookie(nome) {   
    document.cookie = nome +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

var menuAparecendo = false
var estavaHome = getCookie('estavaHome')
var linguaAtual = getCookie('linguaAtual')
window.onload = () => {
    if (estavaHome == 'true') {
        let section2_services = document.querySelector('.section-2-services')
        section2_services.scrollIntoView({ behavior : 'smooth' })       
        setCookie('estavaHome', 'false')
    }

    if (linguaAtual != null) {
        let alt_lang = document.querySelectorAll('.alt_lang')
        if (linguaAtual == 'en') {  
            alt_lang[0].innerText = 'EN'
            alt_lang[1].innerText = 'EN'
        }
        else {
            if (linguaAtual == 'es') {
                alt_lang[0].innerText = 'ES'
                alt_lang[1].innerText = 'ES'
            }
            else {
                alt_lang[0].innerText = 'PT'
                alt_lang[1].innerText = 'PT'
            }
        } 
    }

    /*Change PT/EN text when chose the language WEGLOT */
    /* if (window.location.href.indexOf('/en') != -1) {
        let altLang = document.querySelector('.alt_lang')
        altLang.innerText = 'EN'
    } */

    /*Change PT/EN/ES text when choosing the language GTRANSLATE*/
    var lang_options = document.querySelector('.lang_options')
    lang_options.addEventListener('click', (e)=>{
        let alt_lang = document.querySelectorAll('.alt_lang')
        if (e.target.alt == 'en') {
            alt_lang[0].innerText = 'EN'
            alt_lang[1].innerText = 'EN'
            setCookie('linguaAtual', 'en')
        }
        else {
            if (e.target.alt == 'pt') {
                alt_lang[0].innerText = 'PT'
                alt_lang[1].innerText = 'PT'
                setCookie('linguaAtual', 'pt')
            }
            else {
                if (e.target.alt == 'es') {
                    alt_lang[0].innerText = 'ES'
                    alt_lang[1].innerText = 'ES'
                    setCookie('linguaAtual', 'es')

                    let section1_h1 = document.querySelector('.section-1-home-title')
                    section1_h1.innerText = 'Expande tus horizontes'
                }
            }
        }
    })
}

window.addEventListener('beforeunload', () => {
    document.cookie = "estavaHome=";
})