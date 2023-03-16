<?php 
get_header();

$telefone = get_option('expandjr_telefone');
$email = get_option('emjr_cadastro_email');
$endereco2 = get_option('enjr_cadastro_endereco');
$cel = get_option('zap_cadastro_telefone');
$endereco_completo = get_option('enjr_cadastro_telefone')  . '</br>' .get_option('enjr_cadastro_email') . '</br>' . get_option('enjr_cadastro_endereco');
$endereco = urlencode(get_option('enjr_cadastro_endereco'));

if (isset($_POST['submit'])) {
  $to = $email;
  $subject = 'Novo contato do site Expand Jr.';

  /*Armazenando as informações do formulário nas variáveis*/
  $sender_name = $_POST['contact_name'];
  $sender_email = $_POST['contact_email'];
  if ( strlen($_POST['contact_telephone']) != 0) {
    $sender_telephone = $_POST['contact_telephone'];
  }
  if ( strlen($_POST['contact_city']) != 0 ) {
    $sender_city = $_POST['contact_city'];
  }
  $sender_message = $_POST['contact_message'];
  if (isset($_POST['check_option1'])) {
    $check_option1 = 'Dupla Cidadania Portuguesa';
  }
  if (isset($_POST['check_option2'])) {
    $check_options2 = 'Assessoria para emissão de Passaporte Brasileiro';
  }
  if (isset($_POST['check_option3'])) {
    $check_option3 = 'Análise Burocrática';
  }
  if (isset($_POST['check_option4'])) {
    $check_option4 = 'Estudo e Análise do Mercado';
  }
  if (isset($_POST['check_option5'])) {
    $check_option5 = 'Planejamento Logístico';
  }
  if (isset($_POST['check_option6'])) {
    $check_option6 = 'Prospecção Internacional';
  }
  if (isset($_POST['radio_option1'])) {
    $radio_option = $_POST['radio_option1'];
  }
  else {
    if (isset($_POST['radio_option2'])) {
      $radio_option = $_POST['radio_option2'];
    }
    else {
      if (isset($_POST['radio_option3'])) {
        $radio_option = $_POST['radio_option3'];
      }
      else {
        if (isset($_POST['radio_option4'])) {
          $radio_option = $_POST['radio_option4'];
        }
        else {
          if (isset($_POST['radio_option5'])) {
            $radio_option = $_POST['radio_option5'];
          }
          else {
            if (isset($_POST['radio_option6'])) {
              $radio_option = $_POST['radio_option6'];
            }
            else {
              if (isset($_POST['radio_option7'])) {
                $radio_option = $_POST['radio_option7'];
              }
            }
          }
        }
      }
    }
  }
  
  /*Adicionando todas as informações disponíveis no corpo do email*/
  $message = "INFORMAÇÕES DO REMETENTE: \n\n";
  $message .= 'Nome: ' . $sender_name . "\n";
  $message .= 'Email: ' . $sender_email . "\n";
  if (isset($sender_telephone)) {
    $message .= 'Telefone: ' . $sender_telephone . "\n";
  }
  if (isset($sender_city)) {
    $message .= 'Cidade: '. $sender_city . "\n";
  }
  $message .= 'Principal necessidade: ' . $sender_message . "\n";
  $message .= 'Serviços que despertam mais interesse: ' . "\n";
  if (isset($check_option1)) {
    $message .= '   - ' . $check_option1 . "\n";
  }
  if (isset($check_option2)) {
    $message .= '   - ' . $check_option2 . "\n";
  }
  if (isset($check_option3)) {
    $message .= '   - ' . $check_option3 . "\n";
  }
  if (isset($check_option4)) {
    $message .= '   - ' . $check_option4 . "\n";
  }
  if (isset($check_option5)) {
    $message .= '   - ' . $check_option5 . "\n";
  }
  if (isset($check_option6)) {
    $message .= '   - ' . $check_option6 . "\n";
  }
  $message .= 'Como chegou até nós: ' . $radio_option;
  
  wp_mail($to, $subject, $message);
}


?>

<nav>
<div class="solicitar">
  <h1>CONTATOS</h1>
  <p>Fale conosco e peça seu diagnóstico gratuito!</p>
</nav>
<section class="step-wizard">
    <h2>Nossa Jornada do Cliente</h2>
    <!-- <ul class="step-wizard-list">
        <li class="step-wizard-item">
          <span class="progress-label">Primeiro Contato</span>
          <span class="progress-count">1</span> 
        </li>

        <li class="step-wizard-item current-item">
          <span class="progress-label">Diagnostico</span>
          <span class="progress-count">2</span>
        </li>

        <li class="step-wizard-item current-item">
          <span class="progress-label">Negociação</span>
          <span class="progress-count">3</span>
        </li>

        <li class="step-wizard-item current-item">
          <span class="progress-label">Inicio do Projeto</span>
          <span class="progress-count">4</span>
        </li>
    </ul> -->
    <div class='journey'>
      <div class='big_circle' onclick='mostrarJornada(this)'>
        <p class='primeiro'>Primeiro Contato</p>
        <div class='small_circle first_small_circle'>
        </div>
      </div>
      
      <div class='progress_bar'></div>

      <div class='big_circle' onclick='mostrarJornada(this)'>
        <p class='segundo'>Diagnóstico</p>
        <div class='small_circle second_small_circle'>
        </div>
      </div>
      
      <div class='progress_bar'></div>

      <div class='big_circle' onclick='mostrarJornada(this)'>
        <p class='terceiro'>Negociação</p>
        <div class='small_circle third_small_circle'>
        </div>
      </div>
      
      <div class='progress_bar'></div>

      <div class='big_circle' onclick='mostrarJornada(this)'>
        <p class='quarto'>Início do Projeto</p>
        <div class='small_circle fourth_small_circle'>
        </div>
      </div>
    </div>
    <div class='text_journey'>
    <p class='client_journey_text first_text'>
      Primeiro Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores illum quis error odio, corrupti doloribus iure voluptas temporibus ad reiciendis doloremque officia vero? Temporibus optio obcaecati itaque dolorum accusantium consequatur.
      Laudantium beatae voluptas esse corporis vero error repellat nostrum consequuntur ipsa. Corporis quidem laborum beatae molestias enim necessitatibus numquam natus delectus omnis, aspernatur fuga accusamus earum unde, aperiam saepe cumque!
      Dolor iure itaque doloribus voluptatum nisi libero adipisci harum sapiente minus reiciendis molestias facilis reprehenderit atque, debitis eum. Ullam ea dicta voluptas molestias fugiat eveniet? Rem eos inventore placeat suscipit.
      Suscipit in labore esse deserunt placeat laboriosam enim veniam architecto totam? Eos, fugiat explicabo ducimus ad delectus soluta aperiam? Perferendis at ipsa iusto corrupti repellat, veniam eveniet neque! Fugiat, sed.
      Laborum nostrum tenetur, eum saepe placeat quasi beatae at, laudantium ipsam ea sint. Aliquid obcaecati nemo aliquam sint accusantium quae numquam deleniti minima nihil magni. Quaerat aliquid placeat fugit voluptatum.
    </p>
    <p class='client_journey_text second_text'>
      Segundo Fugit, corporis possimus dolorum, sint dolores quibusdam pariatur totam doloribus, vero laborum eos amet veritatis aut a at! Illo eligendi aut molestias voluptate! Repudiandae asperiores, commodi nisi repellendus voluptatum provident!
      Dolor quasi dolores, repudiandae ea deserunt nihil voluptate necessitatibus, quia rerum cumque quaerat? Cupiditate commodi voluptates cumque sequi animi id. Dicta dolor beatae iure odit id dolore quibusdam. Quod, sit.
      In eum quasi eos repellat assumenda deleniti iusto distinctio, expedita nobis dicta voluptate tenetur libero? Qui veritatis ducimus laborum minus saepe vitae neque, soluta beatae doloremque! Animi similique quibusdam perspiciatis?
      Laboriosam repellat tempore reiciendis, beatae ullam tempora accusantium quasi! Provident maiores veniam quam corporis fuga obcaecati pariatur eveniet iste soluta expedita nesciunt consectetur saepe dignissimos repudiandae, beatae id eius atque?
    </p>
    <p class='client_journey_text third_text'>
      Terceiro Eius vel laudantium accusantium sunt unde adipisci impedit nam natus quod, doloribus neque, inventore numquam a voluptate. Placeat illo, culpa minima provident est, dolores, fugit cumque sequi sit deserunt commodi?
      Esse, tempora aperiam laboriosam atque beatae eligendi suscipit cumque ducimus aspernatur enim. Recusandae voluptatum laborum impedit numquam, totam provident qui cum libero, non corrupti ducimus illum omnis, fugiat atque facere?
      Fugit, incidunt. Velit, nisi id! Illum qui sapiente ducimus ipsa eius. Quaerat odit est, ratione ducimus sit recusandae? Corporis dignissimos molestiae placeat ratione, expedita recusandae voluptate blanditiis eveniet asperiores explicabo?
      Laborum quas inventore, aperiam voluptatum eos magnam ipsa quo error porro. Voluptatibus eveniet maiores, odit magni totam dolorum sunt laudantium similique veniam consequatur doloribus expedita consequuntur ea autem ab nihil!
    </p>
    <p class='client_journey_text fourth_text'>
      Quarto Amet, in reprehenderit laborum praesentium suscipit mollitia minima sed dolorum provident sit sint ad, iste aperiam vero debitis quo voluptatum pariatur. Saepe et quas ratione sequi dolorem totam iure veniam.
      Ducimus optio fuga esse magnam, doloribus ullam, impedit quos maiores qui earum consectetur quas, voluptate minima dolore. Eius perferendis inventore tenetur impedit iure, ab quia doloremque ad molestias nihil tempora!
      Laborum doloremque qui impedit recusandae sunt fuga delectus possimus excepturi a distinctio maiores consequatur porro eveniet odit ab, est quisquam illo dicta magnam. Ipsum cum hic quod laboriosam, tempore accusantium!
      Sequi quas veniam quae aliquam, laudantium totam minima, soluta a rem sit ipsam perspiciatis, commodi corporis adipisci suscipit. Vero porro dicta mollitia a veritatis qui minus delectus amet tempora in?
    </p>
    </div>
    
</section>



<main>
  <div class="bloco">
   <div class="bloco1">
    <h1>Informações de contato</h1>
    <div class="parent">

        <div class='div_contact_info'>
          <div class='c_phone_div'>
            <div class="div-border-phone">
              <img src="<?php echo IMAGES_DIR . '/icon-phone.png'; ?>" alt="Ícone do telefone">
            </div>
            <p><?php echo $telefone; ?></p>
          </div>

          <div class='c_email_div'>
            <div class="div-border-email">
              <img src="<?php echo IMAGES_DIR . '/icon-email2.png'; ?>" alt="Ícone do email">
            </div>
            <p><?php echo $email; ?></p>
          </div>

          <div class='c_address_div'>
            <div class="div-border-adress">
              <img src="<?php echo IMAGES_DIR . '/icon-location.png'; ?>" alt="Ícone da localização">
            </div>
            <p><?php echo $endereco2; ?></p>
          </div>
        </div>
        

        <div class="rotulo">
          <div style="overflow:hidden;position: relative;" class="div-iframe">
          <iframe width="500" height="380" src="https://maps.google.com/maps?width=250&amp;height=168&amp;hl=en&amp;q=<?php echo $endereco; ?>;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
          </iframe>

          <div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by 
          <a href="https://embedgooglemaps.com/it/">embedgooglemaps IT</a> & <a href="https://yatzyregler.se/da/">yatzy regler</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>
          

        </div>
    
      </div>
  </div>

    
  <div class="bloco2">
       <h1>Formulario de Contato</h1>
         <form class='contact-page-form' action='' method="POST">
          <div class='input-div'>
            <label for="name">Nome Completo</label>
            <input class="cor" type="text" name="contact_name" id="contact_name" placeholder='Nome'>
          </div>
          <div class='input-div'>
            <label for="email">Email</label>
            <input class="cor" type="email" name="contact_email" id="contact_email" placeholder='Email' required>
          </div>
          <div class='input-div'>
            <label for="telephone">Telefone</label>
            <input class="cor" type="text" id="contact_telephone" name="contact_telephone" placeholder="Ex.: (xx) xxxxx-xxxx">
          </div>
          <div class='input-div'>
            <label for="city">Cidade</label>
            <input class="cor" type="text" id="contact_city" name="contact_city" placeholder="Cidade">
          </div>
          <div class='input-div'>
            <label for="message">Qual a sua principal necessidade?</label>
            <textarea class="cor" type="text" id="contact_message" name="contact_message" placeholder="Conte para nós a sua necessidade" required></textarea>
          </div>
          <div class="questionary">
            <p>Algum dos nossos serviços te disperta mais interesse?</p>
            <div class="option1">
              <div>
                <input type="checkbox" name="check_option1" id='como chegou até nós'>
                <label>Dupla Cidadania Portuguesa</label>
              </div>
              <div>
                <input type="checkbox" name="check_option2" id='como chegou até nós'>
                <label>Assessoria para emissão de Passaporte Brasileiro</label>
              </div>
              <div>
                <input type="checkbox" name="check_option3" id='como chegou até nós'>
                <label>Análise Burocrática</label>
              </div>
              <div>
                <input type="checkbox" name="check_option4" id='como chegou até nós'>
                <label>Estudo e Análise do Mercado</label>
              </div>
              <div>
                <input type="checkbox" name="check_option5" id='como chegou até nós'>
                <label>Planejamento Logístico</label>
              </div>
              <div>
                <input type="checkbox" name="check_option6" id='como chegou até nós'>
                <label>Prospecção Internacional</label>
              </div>
            </div>
          </div>
          <div class="option_questionary">
            <p>Como chegou até nós?</p>
            <div class="option2">
              <div>
                <input type="radio" name="radio_option1" value="Pesquisando na como chegou até nós"/>
                <label>Pesquisando na como chegou até nós</label>
              </div>
              <div>
                <input type="radio" name="radio_option2" value="Instagram"/>
                <label>Instagram</label>
              </div>
              <div>
                <input type="radio" name="radio_option3" value="Linkedin"/>
                <label>Linkedin</label>
              </div>
              <div>
                <input type="radio" name="radio_option4" value="Me indicaram voçês"/>
                <label>Me indicaram voçês</label>
              </div>
              <div>
                <input type="radio" name="radio_option5" value="Evento"/>
                <label>Evento</label>
              </div>
              <div>
                <input type="radio" name="radio_option6" value="Recebi um e-mail de voçês"/>
                <label>Recebi um e-mail de voçês</label>
              </div>
              <div>
                <input type="radio" name="radio_option7" value="Outros"/>
                <label>Outros</label>
              </div>
            </div>
          </div>
          <div class="yes_privacity">
            <input type="checkbox" name="politica_priv" id='politica_priv' required>
            <label for='politica_priv'>
              <a target="_blank" href="http://expandjr.local/privacy-policy/">Li e aceito as politicas de privacidade e termos de uso</a>
            </label>
          </div>
          <input class='botao' name='submit' type="submit" value="Enviar">
        </form>
</div>
      </div>
   </div>
  </div>
</main>
<a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=<?php echo $cel; ?>" target="_blank">
  <img src="<?php echo IMAGES_DIR . '/icon-whatsapp-48.png'; ?>" alt="Ícone do Whatsapp">
</a>

<?php 
get_footer();
?>