<?php
get_header();


?>
<section class="section-1-blog">
  <h1 class="section-1-blog-title">NOSSO BLOG</h1>
  <p class="section-1-blog-subtitle">Nos conectamos para conectar o mundo</p>
</section>

<section class="section-2-blog">

  <div class="blog-container">
    <div class="blog-filters">
      <div class="search-bar-blog-div">
        <form class="search-bar-form" action="" method='POST'>
          <input type="search" name='search_bar_blog' class="search-bar-blog" placeholder="Buscar" list='historico'>
          <datalist id='historico'>
            <?php
            $objeto = new WP_Query(array('category_name' => 'post-blog', 'posts_per_page' => 3, 'paged' => $paged));
            if ($objeto->have_posts()) {
              while ($objeto->have_posts()){
                $objeto->the_post();
                echo '<option value="';
                echo the_title();
                echo '"></option>';
              } 
            }
            ?>
          </datalist>
          <button name='submit' type="submit" class="submit-search-blog">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/lupa.png'); ?>">
          </button>
        </form>
      </div>
      <div class="categories-blog-div">
        <h2>Categorias</h2>
        <?php 
          $categories = get_categories('exclude=2');
          foreach($categories as $category) {
            echo '
            <div class="col-md-4">
            <a class="category-item" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>
            </div>';
          } 
        ?>
      </div>
    </div>

    <div class="blog-width-div">
      <?php
      if (isset($_POST['submit'])) {
        $all_posts = new WP_Query(array('category_name' => 'post-blog'));
        $existe_algum = false;
        if ($all_posts->have_posts()) {
          while($all_posts->have_posts()) {
            $all_posts->the_post();
            $string_searched = $_POST['search_bar_blog'];
            if($string_searched == ""){
              break;
            }
            if (mb_strpos(strtolower(the_title('', '', false)), strtolower($string_searched)) !== false) {
              ?>
              <div class="blog-post-div">
              <?php 
                $img_src = get_field('image-blog');
                if($img_src != ""){
                  ?>
                  <div class="image-blog-div">
                  <img src="<?php echo $img_src; ?>" class="blog-image">
                  </div>
                  <?php
                }else{
                  ?>
                  <div class="image-blog-div">
                  <img src="<?php echo IMAGES_DIR . '/default-image.png' ?>" class="blog-image">
                  </div>
                  <?php
                }
              ?>
                <div class="content-blog">
                  <h2 class="news-title">
                    <?php the_title(); ?>
                  </h2>
                  <h6 class="blog-subtitle-category">
                    <?php the_category(); ?>
                  </h6>
                  <?php the_excerpt(); ?>
                  <input type="button" href="" class="read-more-blog" value="LER MAIS">
                </div>
              </div>
              <?php
            $existe_algum = true;
            }
          }
        }
        if ($existe_algum == false) {
          ?>
          <h1 class='not_found'>Nenhum blog encontrado</h1>
          <?php
        }
      }
      else {
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $objeto = new WP_Query(array('category_name' => 'post-blog', 'posts_per_page' => 3, 'paged' => $paged));

      if ($objeto->have_posts()):

        while ($objeto->have_posts()):
          $objeto->the_post();
          $post_id = get_the_ID();


          ?>
          <div class="blog-post-div">
              <?php 
                $img_src = get_field('image-blog');
                if($img_src != ""){
                  ?>
                  <div class="image-blog-div">
                  <img src="<?php echo $img_src; ?>" class="blog-image">
                  </div>
                  <?php
                }else{
                  ?>
                  <div class="image-blog-div">
                  <img src="<?php echo IMAGES_DIR . '/default-image.png' ?>" class="blog-image">
                  </div>
                  <?php
                }
              ?>

            <div class="content-blog">
              <h2 class="news-title">
                <?php the_title(); ?>
              </h2>
              <h6 class="blog-subtitle-category">
                <?php the_category(); ?>
              </h6>

              <?php the_excerpt(); ?>
              <a href="<?php echo get_permalink($post_id); ?>" class="read-more-blog">LER MAIS</a>
            </div>
          </div>

        <?php endwhile;
        wp_reset_postdata();
        ?>

    </div>
  </div>

  <div class="pagination-blog-div">
      <?php
      $total_pages = $objeto->max_num_pages;

      if ($total_pages > 1) {

        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(
          array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text' => __('<   '),
            'next_text' => __('    >'),
          )
        );
      }
      ?>
  </div>
    <?php endif; 
      }
    ?>
</section>

<?php $cel = get_option('zap_cadastro_telefone'); ?>
<a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=<?php echo $cel; ?>" target="_blank">
  <img src="<?php echo IMAGES_DIR . '/icon-whatsapp-48.png'; ?>" alt="Ícone do Whatsapp">
</a>
<?php
get_footer();
?>