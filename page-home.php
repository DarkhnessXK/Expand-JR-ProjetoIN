<?php
get_header();
?>

<section class="section-1-home">
    <h1>Expanda seus Horizontes</h1>
    <h2>através das nossas soluções internacionais de alto impacto.</h2>
    <a href="" role="button">Fale com um especialista</a>
</section>
<section class="section-2-services">
    <div class="title-h2-div">
        <h2>Nossos Serviços</h2>
    </div>
    <div class="services-div">
        <div class="for-you-div">
            <h2 class="title-h2-div">Para Você</h2>
            <div class="card-div-service">
                <a href=""><img src="<?php echo IMAGES_DIR . '/Pessoa-Fisica.png' ?>" class="img-services"></a>
                <p class="services-p">Dupla Cidadania Portuguesa</p>
            </div>
            <div class="card-div-service">
                <a href=""><img src="<?php echo IMAGES_DIR . '/Pessoa-Fisica.png' ?>" class="img-services"></a>
                <p class="services-p">Assessoria para Emissão de Passaporte Brasileiro</p>
            </div>
        </div>
        <div class="for-your-company-div">
            <h2 class="title-h2-div">Para Sua Empresa</h2>
            <div class="double-cards-service">
                <div class="card-div-service">
                    <a href=""><img src="<?php echo IMAGES_DIR . '/Pessoa-Fisica.png' ?>" class="img-services"></a>
                    <p class="services-p">Analise Burocratica</p>
                </div>

                <div class="card-div-service">
                    <a href=""><img src="<?php echo IMAGES_DIR . '/Pessoa-Fisica.png' ?>" class="img-services"></a>
                    <p class="services-p">Estudo e Analise de Mercado</p>
                </div>
            </div>
            <div class="double-cards-service">
                <div class="card-div-service">
                    <a href=""><img src="<?php echo IMAGES_DIR . '/Pessoa-Fisica.png' ?>" class="img-services"></a>
                    <p class="services-p">Planejamento Logistico</p>
                </div>
                <div class="card-div-service">
                    <a href=""><img src="<?php echo IMAGES_DIR . '/Pessoa-Fisica.png' ?>" class="img-services"></a>
                    <p class="services-p">Prospecção Internacional</p>
                </div>
            </div>

        </div>
    </div>

</section>

<section class="section-3-results">
    <div class="title-h2-div">
        <h2>Resultados</h2>
    </div>
    <div class="results-cards-div">
        <div class="card-1">
            <img>
            <p>card 1</p>
        </div>
        <div class="card-2">
            <img>
            <p>card 2</p>
        </div>
        <div class="card-3">
            <img>
            <p>card 3</p>
        </div>
        <div class="card-4">
            <img>
            <p>card 4</p>
        </div>
    </div>
</section>

<section class="section-4-success-cases">
    <div class="title-h2-div">
        <h2>Cases de Sucesso</h2>
    </div>
    <div class="w3-content w3-display-container">
        <div class="mySlides">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, deserunt nulla. Assumenda, similique quos
            fugiat, minima eius est incidunt tempore at nam quisquam eos eum doloribus sunt velit deleniti consequuntur?
            <div>
                <img>
                <cite>
                    <span>Sem nome 1</span>
                </cite>
            </div>
        </div>
        <div class="mySlides">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, deserunt nulla. Assumenda, similique quos
            fugiat, minima eius est incidunt tempore at nam quisquam eos eum doloribus sunt velit deleniti consequuntur?
            <div>
                <img>
                <cite>
                    <span>Sem nome 2</span>
                </cite>
            </div>
        </div>
        <div class="mySlides">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, deserunt nulla. Assumenda, similique quos
            fugiat, minima eius est incidunt tempore at nam quisquam eos eum doloribus sunt velit deleniti consequuntur?
            <div>
                <img>
                <cite>
                    <span>Sem nome 3</span>
                </cite>
            </div>
        </div>
        <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle">
            <div class="w3-left w3-hover-text-khaki" id="left-arrow">&#10094;</div>
            <div class="w3-right w3-hover-text-khaki" id="right-arrow">&#10095;</div>
        </div>
    </div>
</section>

<section class="section-5-partnerships">
    <div class="title-h2-div">
        <h2>Nossos Parceiros</h2>
    </div>
    <div class="w3-content w3-display-container">
        <div class="mySlides2">
            <img src="assets/images/1-1-150x150.png" alt="teste 1">
        </div>
        <div class="mySlides2">
            <img src="" alt="teste 2">
        </div>
        <div class="mySlides2">
            <img src="" alt="teste 3">
        </div>
        <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle">
            <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
            <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
        </div>
    </div>
</section>

<?php
get_footer();
?>