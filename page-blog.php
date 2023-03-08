<?php 
get_header();
?>

<?php $cel = get_option('zap_cadastro_telefone'); ?>
<a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=<?php echo $cel; ?>" target_blank="_blank">
  <img src="<?php echo IMAGES_DIR . '/icon-whatsapp-48.png'; ?>" alt="Ícone do Whatsapp">
</a>
<?php 
get_footer();
?>