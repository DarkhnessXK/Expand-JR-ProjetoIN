<?php
get_header();
?>
<section class="section-1-quem-somos">
    <h1 class="section-1-quem-somos-title">QUEM SOMOS</h1>
    <p class="section-1-quem-somos-subtitle">Conheça um pouco da nossa história</p>
</section>
<main>
    <section class='main_aside2_section'>
        <h2 class="titulo_sessao_principal_hidden"> <?php the_field('titulo_sessao_principal') ?> </h2>
        <img src="<?php the_field('imagem_sessao_principal') ?>" alt="">
            <img src="<?php the_field('imagem_sessao_principal') ?>" alt="">
        
        <div class='main_aside2_text'>
            <h2> <?php the_field('titulo_sessao_principal') ?> </h2>
            <p> <?php the_field('texto_sessao_principal') ?> </p>
        </div>
    </section>

    <section class='main_aside1_section'>
        <div class='main_aside1_left_div'>
            <img src="<?php the_field('imagem_sessao_aside1_esquerda') ?>" alt="">
            <p> <?php the_field('texto_sessao_aside1_esquerda') ?> </p>
        </div>
        <div class='main_aside1_right_div'>
            <img src="<?php the_field('imagem_sessao_aside1_direita') ?>" alt="">
            <p> <?php the_field('texto_sessao_aside1_direita') ?> </p>
        </div>
    </section>

    <section class='main_values_section'>
        <h2> <?php the_field('titulo_da_sessao_valores') ?> </h2>
        <div class='main_values_container'>
            <div class="main_values_div">
                <h2> <?php the_field('titulo_card_missao') ?> </h2>
                <img src="<?php the_field('imagem_card_missao') ?>" alt="">
                <p> <?php the_field('texto_card_missao') ?> </p>
            </div>
            <div class="main_values_div">
                <h2> <?php the_field('titulo_card_visao') ?> </h2>
                <img src="<?php the_field('imagem_card_visao') ?>" alt="">
                <p> <?php the_field('texto_card_visao') ?> </p>
            </div>
            <div class="main_values_div">
                <h2> <?php the_field('titulo_card_valores') ?> </h2>
                <img src="<?php the_field('imagem_card_valores') ?>" alt="">
                <p> <?php the_field('texto_card_valores') ?> </p>
            </div>
        </div>
    </section>

    <section class='main_aside2_section aside2_section'>
        <h2 class="titulo_sessao_aside2_hidden"> <?php the_field('titulo_sessao_aside2') ?> </h2>
        <img src="<?php the_field('imagem_sessao_aside2') ?>" alt="">
        <div class='main_aside2_text aside2_section_text'>
            <h2> <?php the_field('titulo_sessao_aside2') ?> </h2>
            <p> <?php the_field('texto_sessao_aside2') ?> </p>
        </div>
    </section>
</main>
    <?php $cel = get_option('zap_cadastro_telefone'); ?>
    <a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=<?php echo $cel; ?>" target="_blank">
        <img src="<?php echo IMAGES_DIR . '/icon-whatsapp-48.png'; ?>" alt="Ícone do Whatsapp">
    </a>
<?php
get_footer();
?>