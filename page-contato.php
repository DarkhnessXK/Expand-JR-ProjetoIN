<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
    <title><?php the_title(); ?></title>
</head>
<body>
    <header>
        <?php get_header(); ?>
    </header>

    <main>
        <section class="background-overlay">
            <div class="heading-title">
                <h1>Contatos</h1>
            </div>
            <div class="heading-description">
                <h2>Fale conosco e peça seu diagnóstico gratuito!</h2>
            </div>
        </section>
        <section class="container-contact">
            <div class="container-contact-info">
                <div>
                    <h2>Informações de contato</h2>
                </div>
                <?php
                    if (is_active_sidebar('map-text')) {
                        dynamic_sidebar('map-text');
                    }
                ?>
            </div>
            <div class="container-contact-us">
                <div>
                    <h2>Fale Conosco</h2>
                </div>
                <div>
                    <form method="post" class="container-contact-us-form">
                        <div class="container-contact-us-form-field">
                            <label for="contact-us-name-field" class="form-label">Nome</label>
                            <input type="text" placeholder="Nome" required="required" id="contact-us-name-field" class="contact-us-name-field">
                        </div>
                        <div class="container-contact-us-form-field">
                            <label for="contact-us-phone-field" class="form-label">Telefone</label>
                            <input type="text" placeholder="Ex: (xx) xxxxx-xxxx" required="required" id="contact-us-phone-field" class="contact-us-phone-field">
                        </div>
                        <div class="container-contact-us-form-field">
                            <label for="contact-us-email-field" class="form-label">E-mail</label>
                            <input type="text" placeholder="Digite aqui seu e-mail" required="required" id="contact-us-email-field" class="contact-us-email-field">
                        </div>
                        <div class="container-contact-us-form-field">
                            <label for="contact-us-message-field" class="form-label">Mensagem</label>
                            <textarea class="contact-us-message-field" id="contact-us-message-field" rows="4" placeholder="Conte para nós sua necessidade" required="required"></textarea>
                        </div>
                        <div class="form-submit">
                            <button type="submit" class="form-submit-button">
                                <span class="form-submit-button-text">Enviar</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <?php get_footer(); ?>
    </footer>
</body>
</html>