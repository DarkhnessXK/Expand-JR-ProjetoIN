    <footer>
        <div>
            <div class='footer_top'>
                <div class='footer_columns popular_posts'>
                    <p>Postagens Populares</p>
                    <div>
                        <?php
                        /* $args = array(
                            'limit' => 3, 
                            'range' => 'all',
                            'post_type' => 'post',
                            'stats_views' => '0',
                            'stats_comments' => '0',
                            'stats_author' => '0',
                            'stats_date' => '0',
                            'category_name' => 'post-blog',
                        );
                        wpp_get_mostpopular($args); */

                        
                        $popular_posts = new WP_Query( array( 
                            'posts_per_page' => 3, 
                            'meta_key' => 'wpb_post_views_count', 
                            'orderby' => 'meta_value_num', 
                            'order' => 'DESC',
                            'category_name' => 'post-blog'  ) );
                        
                        if ( $popular_posts) {
                            while ( $popular_posts->have_posts() ) {
                                $popular_posts->the_post();
                                echo '<a href="' . get_permalink() . '">';
                                the_title();
                                echo '</a>';
                            } 
                        wp_reset_postdata();
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
                        'order' => 'DESC',
                        'category_name' => 'post-blog'  //Só pega com essa categoria (slug)
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
                        <p onclick='irAteServicos()'>Serviços</p>
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path('quem-somos') ) ); ?>">Quem somos</a>
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path('blog') ) ); ?>">Blog</a>
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path('privacy-policy') ) ); ?>">Termos de uso e Políticas de privacidade</a>
                    </div>
                </div>
            </div>

            <div class='footer_bottom'>
                <div>
                    <?php the_custom_logo(); ?>
                    <!-- <img src="<?php echo IMAGES_DIR . '/expandjr-logo-210.png' ?>" alt="Logo da Expand Jr"> -->
                    <p>CNPJ: 11.111.111/0000-00</p>
                </div>

                <!-- <form class='footer_form' method="post" action="http://expand-jr.local/?na=s">
                    <input type="hidden" name="nlang" value="">
                    <label for="tnp-2">Cadastre-se em nossa newsletter!</label>
                    <input class="footer_email" type="email" name="ne" id="tnp-2" placeholder='Digite seu email' required>
                    <div class="tnp-field tnp-privacy-field">
                        <input type="checkbox" id='politica_priv' name="ny" required class="tnp-privacy">
                        <label for="politica_priv">Li e aceito as politicas de privacidade e termos de uso</label>
                    </div>
                    <input class="tnp-submit" type="submit" value="Cadastrar" >
                </form> -->

                <form class='footer_form' method="post" action="http://expandjr.local/?na=s">
                    <input type="hidden" name="nlang" value="">
                    <label for="tnp-2">Email</label>
                    <input class="footer_email" type="email" name="ne" id="tnp-2" value="" placeholder='Email' required>
                    
                    <div class='input_hidden'>
                        <label for="tnp-1">Nome</label>
                        <input class="tnp-name cor" type="text" name="nn" id="tnp-1" value="" placeholder='Nome'>
                        <label for="tnp-3">Telefone</label>
                        <input class="tnp-profile tnp-profile-2 cor" id="tnp-profile_2" type="text" size="" name="np2" placeholder="Ex.: (xx) xxxxx-xxxx">
                        <label for="tnp-4">Mensagem</label>
                        <input class="tnp-profile tnp-profile-3 cor" id="tnp-profile_3" type="text" size="" name="np3" placeholder="Conte para nós a sua necessidade">
                    </div>
                    
                    <div class='form_priv'>
                        <input type="checkbox" name="ny" id='politica_priv' required class="tnp-privacy">
                        <label for='politica_priv'>
                            <a target="_blank" href="http://expandjr.local/privacy-policy/">Li e aceito as politicas de privacidade e termos de uso</a>
                        </label>
                    </div>
                    <input class="tnp-submit" type="submit" value="Enviar" >
                </form>
            
                <div>
                    <div>
                        <p><?php echo get_option('enjr_cadastro_endereco'); ?></p>
                        <p>Telefone: &nbsp; <?php echo get_option('expandjr_telefone'); ?></p>
                    </div>
                    <div>
                        <a href="<?php echo get_option('expandjr_instagram'); ?>" target=_blank><img src="<?php echo IMAGES_DIR . '/icon-instagram.png' ?>" alt="Ícone do Instagram"></a>
                        <a href="<?php echo get_option('expandjr_linkedin'); ?>" target=_blank><img src="<?php echo IMAGES_DIR . '/icon-linkedin.png' ?>" alt="Ícone do Linkedin"></a>
                        <a href="<?php echo get_option('expandjr_email'); ?>" target=_blank><img src="<?php echo IMAGES_DIR . '/icon-email.png' ?>" alt="Ícone do Email"></a>
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