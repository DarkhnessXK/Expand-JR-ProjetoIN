<?php
get_header();
wpb_set_post_views(get_the_ID());

?>

<section class="section-1-single">
  <h1 class="section-1-single-title">NOSSO BLOG</h1>
  <p class="section-1-single-subtitle">Nos conectamos para conectar o mundo</p>
</section>
<main class="single-main">


  <section class="section-2-single">
    <?php
    if (have_posts()):
      while (have_posts()):
        the_post(); ?>

        <h2 class="single-title">
          <?php the_title(); ?>
        </h2>

        <?php 
            $img_src = get_field('image-blog');
            if($img_src != ""){
              ?>
              <div class="image-blog-single-div">
                <img src="<?php echo $img_src; ?>" class="single-page-blog-image">
              </div>
              <?php
            }else{
              ?>
              <div class="image-blog-single-div">
              <img src="<?php echo IMAGES_DIR . '/default-image.png' ?>" class="single-page-blog-image">
              </div>
              <?php
            }
          ?>

        <div class="single-post-content">
          <?php the_content(); ?>
        </div>

        <a href="<?php echo esc_url( get_permalink( get_page_by_path('blog') ) ); ?>" class="back-to-blog-link">Voltar ao Blog</a>

      <?php endwhile; ?>

    <?php endif; ?>



  </section>
</main>
<?php
get_footer();
?>