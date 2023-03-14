<?php
get_header();
?>
<section class="section-1-blog">
  <h1 class="section-1-blog-title">NOSSO BLOG</h1>
  <p class="section-1-blog-subtitle">Nos conectamos para conectar o mundo</p>
</section>

<section class="section-2-blog">


  <div class="blog-width-div">
    <div class="search-bar-blog-div">
      <input type="search" class="search-bar-blog" placeholder="Buscar">
      <button type="submit" class="submit-search-blog">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/lupa.png'); ?>">
      </button>
    </div>

    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $objeto = new WP_Query(array('category_name' => 'post-blog', 'posts_per_page' => 3, 'paged' => $paged));

    if ($objeto->have_posts()):

      while ($objeto->have_posts()):
        $objeto->the_post();
        $post_id =  get_the_ID(  );


        ?>

        <div class="blog-post-div">
          <div class="image-blog-div">
            <img src="<?php the_field('image-blog'); ?>" class="blog-image">
          </div>
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




    <?php endif; ?>
  </div>
</section>

<?php $cel = get_option('zap_cadastro_telefone'); ?>
<a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=<?php echo $cel; ?>" target="_blank">
  <img src="<?php echo IMAGES_DIR . '/icon-whatsapp-48.png'; ?>" alt="Ícone do Whatsapp">
</a>
<?php
get_footer();
?>