<?php
get_header();
?>

<div class="popup-background-shadow-box"></div>
<div class="popup">
    <div><button id="close">&times;</button></div>
    <div class="tnp tnp-subscription register-newsletter">
        <div class="register-newsletter-div"><h3>Cadastre-se na newsletter e fique por dentro de todas as novidades e promoções!</h3></div>
        <div class="register-newsletter-div">
            <iframe name="dummyframe" id="dummyframe" style="display: none;"></iframe>
            <form method="post" action="http://expandjr.local/?na=s" target="dummyframe" class="register-newsletter-form" 
            onsubmit="
            document.querySelector('.popup').style.display = 'none';
            document.querySelector('.popup-background-shadow-box').style.display = 'none';
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
<div class="services-modal-container">
    <div><button id="close-modal">&times;</button></div> 
    <div class="service-modal"></div>
    <div><a href="<?php echo get_permalink(get_page_by_path('contato')); ?>"><button class="service-modal-redirect-button">Diagnóstico Gratuito</button></a></div>
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
            <div class="services-left-cards-div" id="services-cards-open-modal">
                <img class="services-card-img services-card-img-hover" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Design-sem-nome-12.png' ); ?>">
                <p class="services-card-title">Dupla Cidadania Portuguesa</p>
                <p class="services-card-description hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum minima dolorum fuga voluptas quod, dolorem repellendus ipsa asperiores neque sed nulla? Sit a asperiores tempora cum molestiae laborum suscipit possimus.Eos voluptate, dolore autem iusto deserunt perspiciatis debitis consequatur placeat eius, voluptates at repudiandae et, qui enim? Eaque, culpa aliquam animi delectus pariatur officiis quibusdam corrupti quaerat tempora rerum et.</p>
            </div>
            <div class="services-left-cards-div" id="services-cards-open-modal">
                <img class="services-card-img services-card-img-hover" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Design-sem-nome-12.png' ); ?>">
                <p class="services-card-title">Assessoria para Emissão de Passaporte Brasileiro</p>
                <p class="services-card-description hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum minima dolorum fuga voluptas quod, dolorem repellendus ipsa asperiores neque sed nulla? Sit a asperiores tempora cum molestiae laborum suscipit possimus.Eos voluptate, dolore autem iusto deserunt perspiciatis debitis consequatur placeat eius, voluptates at repudiandae et, qui enim? Eaque, culpa aliquam animi delectus pariatur officiis quibusdam corrupti quaerat tempora rerum et.</p>
            </div>
        </div>
        <div class="cards-divisor"></div>
        <div class="services-right-cards">
            <div class="services-right-cards-div">
                <h2>Para Sua Empresa</h2>
            </div>
            <div class="services-right-cards-div">
                <div class="services-right-upper-cards">
                    <div class="services-right-upper-cards-div" id="services-cards-open-modal">
                        <img class="services-card-img services-card-img-hover" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Design-sem-nome-6-169x300.png' ); ?>">
                        <p class="services-card-title">Análise Burocrática</p>
                        <p class="services-card-description hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum minima dolorum fuga voluptas quod, dolorem repellendus ipsa asperiores neque sed nulla? Sit a asperiores tempora cum molestiae laborum suscipit possimus.
                        Eos voluptate, dolore autem iusto deserunt perspiciatis debitis consequatur placeat eius, voluptates at repudiandae et, qui enim? Eaque, culpa aliquam animi delectus pariatur officiis quibusdam corrupti quaerat tempora rerum et.</p>
                    </div>
                    <div class="services-right-upper-cards-div" id="services-cards-open-modal">
                        <img class="services-card-img services-card-img-hover" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Design-sem-nome-6-169x300.png' ); ?>">
                        <p class="services-card-title">Estudo e Análise de Mercado</p>
                        <p class="services-card-description hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum minima dolorum fuga voluptas quod, dolorem repellendus ipsa asperiores neque sed nulla? Sit a asperiores tempora cum molestiae laborum suscipit possimus.
                        Eos voluptate, dolore autem iusto deserunt perspiciatis debitis consequatur placeat eius, voluptates at repudiandae et, qui enim? Eaque, culpa aliquam animi delectus pariatur officiis quibusdam corrupti quaerat tempora rerum et.</p>
                    </div>
                </div>
                <div class="services-right-lower-cards">
                    <div class="services-right-lower-cards-div" id="services-cards-open-modal">
                        <img class="services-card-img services-card-img-hover" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Design-sem-nome-6-169x300.png' ); ?>">
                        <p class="services-card-title">Planejamento Logístico</p>
                        <p class="services-card-description hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum minima dolorum fuga voluptas quod, dolorem repellendus ipsa asperiores neque sed nulla? Sit a asperiores tempora cum molestiae laborum suscipit possimus.
                        Eos voluptate, dolore autem iusto deserunt perspiciatis debitis consequatur placeat eius, voluptates at repudiandae et, qui enim? Eaque, culpa aliquam animi delectus pariatur officiis quibusdam corrupti quaerat tempora rerum et.</p>
                    </div>
                    <div class="services-right-lower-cards-div" id="services-cards-open-modal">
                        <img class="services-card-img services-card-img-hover" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Design-sem-nome-6-169x300.png' ); ?>">
                        <p class="services-card-title">Prospecção Internacional</p>
                        <p class="services-card-description hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum minima dolorum fuga voluptas quod, dolorem repellendus ipsa asperiores neque sed nulla? Sit a asperiores tempora cum molestiae laborum suscipit possimus.
                        Eos voluptate, dolore autem iusto deserunt perspiciatis debitis consequatur placeat eius, voluptates at repudiandae et, qui enim? Eaque, culpa aliquam animi delectus pariatur officiis quibusdam corrupti quaerat tempora rerum et.</p>
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
            <p class="results-card-title"><strong>Anos no Mercado</strong></p>
        </div>
        <div class="card-2">
            <img class="results-card-img" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/presentation-150x150.png' ); ?>">
            <p class="results-card-counter" data-count="70">0</p>
            <p class="results-card-title"><strong>Projetos Realizados</strong></p>
        </div>
        <div class="card-3">
            <img class="results-card-img" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/graduated-150x150.png' ); ?>">
            <p class="results-card-counter" data-count="100">0</p>
            <p class="results-card-title"><strong>Estudantes Impactados</strong></p>
        </div>
        <div class="card-4">
            <img class="results-card-img" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/review-150x150.png' ); ?>">
            <p class="results-card-counter" data-count="80">0</p>
            <p class="results-card-title"><strong>Satisfação dos Clientes</strong></p>
        </div>
    </div>
</section>
<section class="section-4-success-cases">
    <div class="title-h2-div">
        <h2>Cases de Sucesso</h2>
    </div>
    <div class="w3-content w3-display-container">
    
    <?php $args_search = array('cat_name' => 'cases-slug',); 
    $objeto = new WP_Query($args_search);

    if( $objeto->have_posts() ):

      while ( $objeto->have_posts() ) :   
        $objeto->the_post();

    ?>

        <div class="mySlides">
             <?php the_content(); ?>
            <div class="sucess-people-div">
                <img src="<?php the_field('image-case'); ?>" class="case-image">
                <cite>
                    <span><?php the_title(); ?></span>
                </cite>
            </div>
        </div>
    <?php endwhile; 
    wp_reset_postdata();
    ?>

    <?php endif; ?>
    
        
        
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
    <div class="group-images-section5-div">
    <?php
    $contador_imagens = get_field('Partnership-images');
        if (have_rows('Partnership-images')):
            ?>
            <?php
            while (have_rows('Partnership-images')):
                
                ?>
    
                <div class="mySlides2">

                    <?php
                    echo '<img class="img-partnerships" src="' . the_row()['full_image_url'] . '"alt="">';
                    
                    ?>
                    <div class="quantity-images"><?php echo count($contador_imagens);?></div>
                </div>
            <?php endwhile ?>
        <?php endif ?>
            </div>
        <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle">
            <div class="w3-left w3-hover-text-khaki" id="left-arrow2">&#10094;</div>
            <div class="w3-right w3-hover-text-khaki" id="right-arrow2">&#10095;</div>
        </div>
    </div>
</section>
<?php $cel = get_option('zap_cadastro_telefone'); ?>
<a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=<?php echo $cel; ?>" target_blank="_blank">
  <img src="<?php echo IMAGES_DIR . '/icon-whatsapp-48.png'; ?>" alt="Ícone do Whatsapp">
</a>

<?php
get_footer();
?>