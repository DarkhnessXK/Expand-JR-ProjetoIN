<?php
get_header();
?>
<div class="popup-background-shadow-box"></div>
<div class="popup">
    <div><button id="close">&times;</button></div>
    <div class="register-newsletter">
        <div class="register-newsletter-div"><h3>Cadastre-se na newsletter e fique por dentro de todas as novidades e promoções!</h3></div>
        <div class="register-newsletter-div">
            <form class="register-newsletter-form">
                <div class="register-newsletter-form-field">
                    <label for="register-newsletter-form-name-field">Seu nome:</label>
                    <input type="text" class="register-newsletter-form-name-field" required="required">
                </div>
                <div class="register-newsletter-form-field">
                    <label for="register-newsletter-form-email-field">Seu email:</label>
                    <input type="text" class="register-newsletter-form-email-field" required="required">
                </div>
                <div class="register-newsletter-form-button">
                    <input type="button" class="register-newsletter-submit-button" value="Cadastrar">
                </div>
            </form>
        </div>
        
    </div>
</div>
<section class="section-1-home">
    <h1 class="section-1-home-title">Expanda seus Horizontes</h1>
    <h2 class="section-1-home-subtitle">através das nossas soluções internacionais de alto impacto.</h2>
    <a href="<?php echo get_permalink(get_page_by_path('contato')); ?>"><button class="section-1-home-redirect-button">Fale com um especialista</button></a>
</section>
<section class="section-2-services">
    <div class="title-h2-div">
        <h2>Nossos Serviços</h2>
    </div>
    <div class="services-cards">
        <div class="services-left-cards">
            <div class="services-left-cards-div">
                <h2>Para Você</h2>
            </div>
            <div class="services-left-cards-div">
                <img class="services-card-img" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Design-sem-nome-12.png' ); ?>">
                <p class="services-card-description">Dupla Cidadania Portuguesa</p>
            </div>
            <div class="services-left-cards-div">
                <img class="services-card-img" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Design-sem-nome-12.png' ); ?>">
                <p class="services-card-description">Assessoria para Emissão de Passaporte Brasileiro</p>
            </div>
        </div>
        <div class="cards-divisor"></div>
        <div class="services-right-cards">
            <div class="services-right-cards-div">
                <h2>Para Sua Empresa</h2>
            </div>
            <div class="services-right-cards-div">
                <div class="services-right-upper-cards">
                    <div class="services-right-upper-cards-div">
                        <img class="services-card-img" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Design-sem-nome-6-169x300.png' ); ?>">
                        <p class="services-card-description">Análise Burocrática</p>
                    </div>
                    <div class="services-right-upper-cards-div">
                        <img class="services-card-img" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Design-sem-nome-6-169x300.png' ); ?>">
                        <p class="services-card-description">Estudo e Análise de Mercado</p>
                    </div>
                </div>
                <div class="services-right-lower-cards">
                    <div class="services-right-lower-cards-div">
                        <img class="services-card-img" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Design-sem-nome-6-169x300.png' ); ?>">
                        <p class="services-card-description">Planejamento Logístico</p>
                    </div>
                    <div class="services-right-lower-cards-div">
                        <img class="services-card-img" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Design-sem-nome-6-169x300.png' ); ?>">
                        <p class="services-card-description">Prospecção Internacional</p>
                    </div>
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
            <img class="results-card-img" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/calendar-150x150.png' ); ?>">
            <p class="results-card-counter" data-count="6">0</p>
            <p><strong>Anos no Mercado</strong></p>
        </div>
        <div class="card-2">
            <img class="results-card-img" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/presentation-150x150.png' ); ?>">
            <p class="results-card-counter" data-count="70">0</p>
            <p><strong>Projetos Realizados</strong></p>
        </div>
        <div class="card-3">
            <img class="results-card-img" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/graduated-150x150.png' ); ?>">
            <p class="results-card-counter" data-count="100">0</p>
            <p><strong>Estudantes Impactados</strong></p>
        </div>
        <div class="card-4">
            <img class="results-card-img" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/review-150x150.png' ); ?>">
            <p class="results-card-counter" data-count="80">0</p>
            <p><strong>Satisfação dos Clientes</strong></p>
        </div>
    </div>
</section>

<?php
get_footer();
?>