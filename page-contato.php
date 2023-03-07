<?php 
get_header();
?>
<?php
$endereco_completo = get_option('erjr_cadastro_telefone')  . '</br>' .get_option('erjr_cadastro_email') . '</br>' . get_option('erjr_cadastro_endereco');
$endereco = urlencode(get_option('erjr_cadastro_endereco'));
$cel = get_option('zap_cadastro_telefone');
?>

<nav>
<div class="solicitar">
  <h1>Contatos</h1>
  <p>Fale conosco e peça seu diagnóstico gratuito!</p>
</nav>
<section class="step-wizard">
    <ul class="step-wizard-list">
        <li class="step-wizard-item">
        <span class="progress-label">Primeiro Contato</span>
            <span class="progress-count">1</span>
          
        </li>
           <li class="step-wizard-item ">
           <span class="progress-label">Diagnostico</span>
            <span class="progress-count">2</span>
           
            </li>
        <li class="step-wizard-item ">
        <span class="progress-label">Negociação</span>
            <span class="progress-count">3</span>
         
        </li>
       <li class="step-wizard-item ">
       <span class="progress-label">Inicio do Projeto</span>
            <span class="progress-count">4</span>
   
        </li>
    </ul>
</section>

<p>
Lorem ipsum dolor sit amet.
 Est laborum rerum qui corrupti fugiat aut numquam quisquam et repudiandae reprehenderit 33 quos aliquid quo tempora quod ut aspernatur iste. Eos inventore porro sit reiciendis omnis est molestias atque.
  Quo autem accusantium in delectus consequatur quo dolore temporibus ex quos dicta eum sequi voluptatem et suscipit aliquam. Ut nihil natus qui temporibus asperiores qui recusandae nisi ut eligendi recusandae et tempora rerum ut facilis iste qui delectus excepturi.

Ut aspernatur provident ut porro quia id omnis rerum sit laudantium galisum in soluta sequi a deleniti suscipit. Eos alias iure id recusandae voluptas et labore omnis non minus dignissimos ut soluta consequuntur et reiciendis incidunt qui eligendi assumenda. 
Id quia enim qui minima voluptatem et maiores expedita ad provident quod eos perferendis odio eos fugiat maxime ad corrupti quos. Et aliquam quos non quas dolore est blanditiis consequuntur et ipsam dolore in quaerat rerum vel debitis accusantium.

</p>
<main>
  <div class="bloco">
   <div class="bloco1">
    <h1>Informações de contato</h1>
    <div class="parent">
   
        <p><?php echo $endereco_completo; ?></p>
        <div class="rotulo">
        <div style="overflow:hidden;width: 250px;position: relative;">
        <iframe width="350" height="300" src="https://maps.google.com/maps?width=250&amp;height=168&amp;hl=en&amp;q=<?php echo $endereco; ?>;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">

        </iframe>
        <div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by 
        <a href="https://embedgooglemaps.com/it/">embedgooglemaps IT</a> & <a href="https://yatzyregler.se/da/">yatzy regler</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>
          <br />

        </div>
    
      </div>
  </div>

    <div class="bloco2">
       <h1>Fale Conosco</h1>
         <div class="parent">
          <form class="dados"> 
           <p>Nome</p>
           <input type="text" class="cor" placeholder="Nome">
           <p>Telefone</p>
           <input type="text"class="cor" placeholder="Ex: (xx)xxxxx-xxxx">
           <p>E-mail</p>
           <input type="text" class="cor" placeholder="Digite aqui o seu email">
           <p>Mensagem</p>
           <textarea class="color" placeholder="Conte para nós a sua necessidade"></textarea>
           </br>
           <button>Enviar</button>
        </form>
      </div>
   </div>
  </div>
</main>
<a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=<?php echo $cel; ?>" target_blank="_blank">
  <img src="<?php echo IMAGES_DIR . '/icon-whatsapp-48.png'; ?>" alt="Ícone do Whatsapp">
</a>

<?php 
get_footer();
?>