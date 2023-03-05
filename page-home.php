<?php
get_header();
?>
<div class="popup-background-shadow-box"></div>
<div class="popup">
    <div><button id="close">&times;</button></div>
    <div class="tnp tnp-subscription register-newsletter">
        <div class="register-newsletter-div"><h3>Cadastre-se na newsletter e fique por dentro de todas as novidades e promoções!</h3></div>
        <div class="register-newsletter-div">
            <form method="post" action="http://expandjr.local/?na=s" class="register-newsletter-form" 
            onsubmit="
            sessionStorage.setItem('alreadyShow','already shown');
            alert('Cadastro realizado com sucesso!');
            ">
                <input type="hidden" name="nlang" value=""><div class="tnp-field tnp-field-firstname register-newsletter-form-field"><label for="tnp-1">Seu nome:</label>
                <input class="tnp-name register-newsletter-form-name-field" type="text" name="nn" id="tnp-1" value=""></div>
                <div class="tnp-field tnp-field-email register-newsletter-form-field"><label for="tnp-2">Seu email:</label>
                <input class="tnp-email register-newsletter-form-email-field" type="email" name="ne" id="tnp-2" value="" required></div>
                <div class="tnp-field tnp-privacy-field register-newsletter-form-field"><label><input type="checkbox" name="ny" required class="tnp-privacy"> Li e aceito as políticas de privacidade e termos de uso</label></div><div class="tnp-field tnp-field-button register-newsletter-form-button"><input class="tnp-submit register-newsletter-submit-button" type="submit" value="Cadastrar">
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