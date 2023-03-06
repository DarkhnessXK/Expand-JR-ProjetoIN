<?php
get_header();
?>
    <main>
        <section class='main_aside2_section'>
            <img src="<?php the_field('imagem_sessao_principal') ?>" alt="">
            <div class='main_aside2_text'>
                <h2> <?php the_field('titulo_sessao_principal') ?> </h2>
                <p> <?php the_field('texto_sessao_principal') ?> </p>
            </div>
        </section>

        <section class='main_aside2_section aside2_section'>
            <img src="<?php the_field('imagem_sessao_aside2') ?>" alt="">
            <div class='main_aside2_text aside2_section_text'>
                <h2> <?php the_field('titulo_sessao_aside2') ?> </h2>
                <p> <?php the_field('texto_sessao_aside2') ?> </p>
            </div>
        </section>
    </main>
<?php
get_footer();
?>