    <footer>
        <div>
            <div class='footer_top'>
                <div class='footer_columns popular_posts'>
                    <p>Postagens Populares</p>
                    <div>
                        <?php
                        $args = array(
                            'limit' => 3, 
                            'range' => 'all',
                            'post_type' => 'post',
                            'stats_views' => '0',
                            'stats_comments' => '0',
                            'stats_author' => '0',
                            'stats_date' => '0'
                        );
                        $popular_posts = wpp_get_mostpopular($args);
                        echo '<pre>';
                        print_r($popular_posts);
                        echo '</pre>';
                        
                        if($popular_posts) {
                            echo '<div>';
                            foreach($popular_posts as $post) {
                                setup_postdata($post);
                                ?>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                <?php
                            }
                            wp_reset_postdata();
                            echo '</div>';
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
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path('servicos') ) ); ?>">Serviços</a>
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path('quem-somos') ) ); ?>">Quem somos</a>
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path('blog') ) ); ?>">Blog</a>
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path('') ) ); ?>">Política de privacidade</a>
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path('') ) ); ?>">Termos de uso</a>
                    </div>
                </div>
            </div>

            <div class='footer_bottom'>
                <div>
                    <?php the_custom_logo(); ?>
                    <!-- <img src="<?php echo IMAGES_DIR . '/expandjr-logo-210.png' ?>" alt="Logo da Expand Jr"> -->
                    <p>CNPJ: 11.111.111/0000-00</p>
                </div>
                <!-- <form class='footer_form' action="">
                    <label for="footer_email">Cadastre-se em nossa newsletter!</label>
                    <input type="text" id='footer_email' name='footer_email' placeholder='Digite seu email'>
                    <div>
                        <input type="checkbox" name="politica_priv" id="politica_priv">
                        <label for="politica_priv">Li e aceito as politicas de privacidade e termos de uso</label>
                    </div>
                    <input type="submit" value="Cadastrar">
                </form> -->
                <form class='footer_form' method="post" action="http://expand-jr.local/?na=s">
                    <input type="hidden" name="nlang" value="">
                    <label for="tnp-1">Cadastre-se em nossa newsletter!</label>
                    <input class="footer_email" type="email" name="ne" id="tnp-1" placeholder='Digite seu email' required>
                    <div class="tnp-field tnp-privacy-field">
                        <input type="checkbox" id='politica_priv' name="ny" required class="tnp-privacy">
                        <label for="politica_priv">Li e aceito as politicas de privacidade e termos de uso</label>
                    </div>
                    <input class="tnp-submit" type="submit" value="Cadastrar" >
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
        <?php
        echo '<pre>';
        print_r($popular_posts);
        echo '</pre>';
        ?>
        
    </footer>
<?php wp_footer(); ?>
</body>
</html>