    <footer>
        <div>
            <div class='footer_top'>
                <div class='footer_columns popular_posts'>
                    <p>Postagens Populares</p>
                    <div>
                        <?php
                        $popular_posts = array();
                        if (function_exists( 'stats_get_csv' )) {
                            $popular_posts = stats_get_csv( 'postviews', '&days=-1&limit=-1&summarize' );
                        }

                        if ( ! empty( $popular_posts ) ) {
                            foreach ( $popular_posts as $post ) {
                                $post_id = $post['post_id'];
                                $post_title = get_the_title( $post_id );
                                $post_permalink = get_permalink( $post_id );
                                echo "<a href='$post_permalink'>$post_title</a>";
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class='footer_columns recent_posts'>
                    <p>Postagens Recentes</p>
                    <div>
                        <?php
                        $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'orderby' => 'date',
                        'order' => 'DESC'
                        );

                        $query = new WP_Query($args);

                        if($query->have_posts()) {
                            while($query->have_posts()) {
                                $query->the_post();
                                ?><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><?php
                            }
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <div class='footer_columns links_column'>
                    <p>Links</p>
                    <div>
                        <a href="">Serviços</a>
                        <a href="">Quem somos</a>
                        <a href="">Blog</a>
                        <a href="">Política de privacidade</a>
                        <a href="">Termos de uso</a>
                    </div>
                </div>
            </div>

            <div class='footer_bottom'>
                <div>
                    <img src="<?php echo IMAGES_DIR . '/expandjr-logo-210.png' ?>" alt="Logo da Expand Jr">
                    <p>CNPJ: 11.111.111/0000-00</p>
                </div>
                <form class='footer_form' action="">
                    <label for="footer_email">Cadastre-se em nossa newsletter!</label>
                    <input type="text" id='footer_email' name='footer_email' placeholder='Digite seu email'>
                    <div>
                        <input type="checkbox" name="politica_priv" id="politica_priv">
                        <label for="politica_priv">Li e aceito as politicas de privacidade e termos de uso</label>
                    </div>
                    <input type="submit" value="Cadastrar">
                </form>
                <div>
                    <div>
                        <p>Av. Exemplo, 111 - Niterói, Rio de Janeiro</p>
                        <p>Telefone: &nbsp; <?php echo get_option('expandjr_telefone'); ?></p>
                    </div>
                    <div>
                        <a href="<?php echo get_option('expandjr_instagram'); ?>"><img src="<?php echo IMAGES_DIR . '/icon-instagram.png' ?>" alt="Ícone do Instagram"></a>
                        <a href="<?php echo get_option('expandjr_linkedin'); ?>"><img src="<?php echo IMAGES_DIR . '/icon-linkedin.png' ?>" alt="Ícone do Linkedin"></a>
                        <a href="<?php echo get_option('expandjr_email'); ?>"><img src="<?php echo IMAGES_DIR . '/icon-email.png' ?>" alt="Ícone do Email"></a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class='footer_copyright'>
            <p>Copyright ⒸExpand JR 2023</p>
        </div>
        
    </footer>
<?php wp_footer(); ?>
</body>
</html>