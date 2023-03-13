<?php
get_header();
?>
<section class="section-1-blog">
  <h1 class="section-1-blog-title">NOSSO BLOG</h1>
  <p class="section-1-blog-subtitle">Nos conectamos para conectar o mundo</p>
</section>

<section class="section-2-blog">
  <div class="blog-width-div">
    <?php
    $objeto = new WP_Query(array('category_name' => 'post-blog'));

    if ($objeto->have_posts()):

      while ($objeto->have_posts()):
        $objeto->the_post();

        ?>

        <div class="blog-post-div">
          <img src="<?php the_field('image-blog'); ?>" class="blog-image">
          <div class="content-blog">
            <h2 class="news-title">
              <?php the_title(); ?>
            </h2>
            <h6 class="blog-subtitle-category">
              <?php the_category(); ?>
            </h6>
            <?php the_content(); ?>
            <a type="button" href="" class="read-more-blog">Leia Mais</a>
          </div>
        </div>
      <?php endwhile;
      wp_reset_postdata();
      ?>

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