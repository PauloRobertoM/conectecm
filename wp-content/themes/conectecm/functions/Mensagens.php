<?php defined('ABSPATH') OR die('No direct access allowed.');

class Mensagens {

   public function __construct() {
      add_action('init', array($this, 'init'), 0);
      add_filter('manage_mensagens_posts_columns' , array($this,'mensagens_cpt_columns'));
      add_action('manage_mensagens_posts_custom_column' , array($this, 'custom_mensagens_column'), 10, 2);
   }

   public function init() {
      $this->mensagens();
   }

   public function mensagens_cpt_columns($columns) {
      $new_columns = array('social' => 'Rede Social');
      return array_merge($columns, $new_columns);
   }

   public function custom_mensagens_column( $column, $post_id ) {
      switch ( $column ) {
         case 'social':
            echo get_post_meta($post_id, 'redes_sociais', true); 
            break;
      }
   }

   public function mensagens() {

      $labels = array(
         'name'                => _x( 'Mensagens', 'Post Type General Name', 'text_domain' ),
         'singular_name'       => _x( 'Mensagem', 'Post Type Singular Name', 'text_domain' ),
         'menu_name'           => __( 'Mensagens', 'text_domain' ),
         'name_admin_bar'      => __( 'Mensagens', 'text_domain' ),
         'parent_item_colon'   => __( 'Mensagem pai:', 'text_domain' ),
         'all_items'           => __( 'Todos as mensagens', 'text_domain' ),
         'add_new_item'        => __( 'Adicionar nova mensagem', 'text_domain' ),
         'add_new'             => __( 'Adicionar nova', 'text_domain' ),
         'new_item'            => __( 'Nova mensagem', 'text_domain' ),
         'edit_item'           => __( 'Editar mensagem', 'text_domain' ),
         'update_item'         => __( 'Atualizar mensagem', 'text_domain' ),
         'view_item'           => __( 'Ver mensagem', 'text_domain' ),
         'search_items'        => __( 'Procurar mensagem', 'text_domain' ),
         'not_found'           => __( 'Não encontrada', 'text_domain' ),
         'not_found_in_trash'  => __( 'Não encontrada na lixeira', 'text_domain' ),
      );

      $args = array(
         'label'               => __( 'mensagens', 'text_domain' ),
         'description'         => __( 'Mensagens', 'text_domain' ),
         'labels'              => $labels,
         'supports'            => array( 'title', 'excerpt' ),
         'hierarchical'        => false,
         'public'              => false,
         'show_ui'             => true,
         'show_in_menu'        => true,
         'menu_position'       => 5,
         'show_in_admin_bar'   => true,
         'show_in_nav_menus'   => true,
         'can_export'          => true,
         'has_archive'         => true,
         'exclude_from_search' => false,
         'publicly_queryable'  => true,
         'capability_type'     => 'page',
      );

      register_post_type('mensagens', $args);
   }
}