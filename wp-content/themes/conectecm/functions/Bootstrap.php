<?php defined('ABSPATH') OR die('No direct access allowed.');

class Bootstrap {
   public $emails_contato = array('flaviohmg@gmail.com', 'herbertmcdonald@gmail.com', 'conectecm@gmail.com');
   

   public function __construct() {
      add_action('wp_enqueue_scripts', array($this,'my_enqueue') );

      add_action('wp_ajax_nopriv_contato', array($this, 'action_contato'));
      add_action('wp_ajax_contato',  array($this, 'action_contato'));

      add_action('phpmailer_init', array($this,'configure_smtp'));

      add_action('after_setup_theme', array($this,'after_setup_theme'));

      add_image_size('blog_crop_um', 760, 300, true);
      add_image_size('blog_crop_dois', 370, 505, true);
   }

   public function after_setup_theme() {
      add_theme_support('post-thumbnails', array('post', 'trabalhos'));
   }

   public function configure_smtp($phpmailer) {
      $phpmailer->isSMTP();
      $phpmailer->Host = 'srv82.prodns.com.br';
      $phpmailer->SMTPAuth = true;
      $phpmailer->SMTPSecure = 'ssl';
      $phpmailer->Port = 465;
      $phpmailer->Username = 'naoresponda@conectecm.com';
      $phpmailer->Password = ']}yKQA,%.RyI';
      $phpmailer->isHTML(true);

      if ( !empty($this->replyto_name) && !empty($this->replyto_address) ) {
         $phpmailer->addReplyTo($this->replyto_address, $this->replyto_name);
      }
   }

   public function my_enqueue($hook) {
      wp_enqueue_script('vanilla-masker', get_template_directory_uri() . '/assets/js/vanilla-masker.js', array(), false, true);
      wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), false, true);

      if (is_post_type_archive('trabalhos') || is_singular('trabalhos'))
         wp_enqueue_script('single-portfolio', get_template_directory_uri() . '/assets/js/single-portfolio.js', array(), false, true);

      wp_localize_script('scripts', 'theme', array(
         'ajax_url' => admin_url( 'admin-ajax.php' ),
         'theme_url' => get_template_directory_uri() 
         )
      );
   }

   public function action_contato() {
      $p = $_POST;

      $contato = new StdClass();
      $contato->nonce = $p['_wpnonce'];
      $contato->security = $p['security'];
      $contato->nome = filter_var($p['nome'], FILTER_SANITIZE_STRING);
      $contato->email = filter_var($p['email'], FILTER_VALIDATE_EMAIL);
      $contato->telefone_celular = filter_var($p['telefone_celular'], FILTER_SANITIZE_STRING);
      $contato->mensagem = filter_var($p['mensagem'], FILTER_SANITIZE_STRING);

      if ( !wp_verify_nonce( $contato->nonce, 'contato' ) || !empty($contato->security) ) {
         $erros[] = 'Ops, você não tem permissão para enviar uma mensagem.';
      }

      if ( empty($contato->nome) ) { $erros[] = 'campo nome não pode ser vazio.'; }
      if ( strlen($contato->nome) < 3 and !empty($contato->nome) ) { $erros[] = 'campo nome não pode ser menor que 3 caracteres.'; }
      if ( strlen($contato->nome) > 50 ) { $erros[] = 'campo nome não pode ser maior que 50 caracteres.'; }

      if ( empty($contato->email) ) { $erros[] = 'campo email não pode ser vazio.'; }
      if ( !is_email($contato->email) and !empty($contato->email) ) { $erros[] = 'email digitado não é válido.'; }

      if ( empty($contato->telefone_celular) ) { $erros[] = 'preencha um telefone para contato.'; }
      if ( strlen($contato->telefone_celular) < 14 and !empty($contato->telefone_celular) ) { $erros[] = 'telefone não pode ter menos que 14 caracteres.'; }

      if ( empty($contato->mensagem) ) { $erros[] = 'campo mensagem não pode ser vazio.'; }
      if ( strlen($contato->mensagem) > 1000 ) { $erros[] = 'campo mensagem não pode conter mais que 1000 caracteres.'; }

      if ( isset($erros) ) {

         wp_send_json( $erros );
      } else {

         $headers[] = "From: {$contato->nome} <{$contato->email}>";

         $this->replyto_address = $contato->email;
         $this->replyto_name = $contato->nome;
  
         $body  = "<div style='border: 1px solid #eee; padding: 15px; font-size: 14px; margin: 50px 0; max-width: 500px;'>";
            $body .= "<p style='margin-bottom: 5px; padding-bottom: 5px; border-bottom: 1px solid #f9f9f9;'><b>Nome:</b> {$contato->nome}</p>";
            $body .= "<p style='margin-bottom: 5px; padding-bottom: 5px; border-bottom: 1px solid #f9f9f9;'><b>E-mail:</b> {$contato->email}</p>";
            $body .= "<p style='margin-bottom: 5px; padding-bottom: 5px; border-bottom: 1px solid #f9f9f9;'><b>Telefone:</b> {$contato->telefone_celular}</p>";
            $body .= "<p>{$contato->mensagem}</p>";
         $body .= "</div>";

         wp_mail($this->emails_contato, 'CONECTE - Comunicação e Marketing', $body, $headers);
      }

      die();
   }

}