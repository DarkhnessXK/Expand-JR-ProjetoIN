<?php
get_header();
wpb_set_post_views(get_the_ID());

?>

<section class="section-1-blog">
  <h1 class="section-1-blog-title">NOSSO BLOG</h1>
  <p class="section-1-blog-subtitle">Nos conectamos para conectar o mundo</p>
</section>



<section class="single-product-section">
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_title();
        the_content();
    }
}
?>
</section>

<?php
get_footer();
?>