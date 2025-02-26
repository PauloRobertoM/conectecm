<?php defined('ABSPATH') OR die('No direct access allowed.');

class Trabalhos {

   public function __construct() {
      add_action('init', array($this, 'init'), 0);
      add_image_size('trabalhos_crop', 336, 252, true);
   }

   public function init() {
      $this->trabalhos();
   }

   public function trabalhos() {

      $labels = array(
         'name'                => _x( 'Trabalhos', 'Post Type General Name', 'text_domain' ),
         'singular_name'       => _x( 'Trabalho', 'Post Type Singular Name', 'text_domain' ),
         'menu_name'           => __( 'Trabalhos', 'text_domain' ),
         'name_admin_bar'      => __( 'Trabalhos', 'text_domain' ),
         'parent_item_colon'   => __( 'Trabalho pai:', 'text_domain' ),
         'all_items'           => __( 'Todos os trabalhos', 'text_domain' ),
         'add_new_item'        => __( 'Adicionar novo trabalho', 'text_domain' ),
         'add_new'             => __( 'Adicionar novo', 'text_domain' ),
         'new_item'            => __( 'Novo trabalho', 'text_domain' ),
         'edit_item'           => __( 'Editar trabalho', 'text_domain' ),
         'update_item'         => __( 'Atualizar trabalho', 'text_domain' ),
         'view_item'           => __( 'Ver trabalho', 'text_domain' ),
         'search_items'        => __( 'Procurar trabalho', 'text_domain' ),
         'not_found'           => __( 'Não encontrado', 'text_domain' ),
         'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'text_domain' ),
      );

      $args = array(
         'label'               => __( 'trabalhos', 'text_domain' ),
         'description'         => __( 'Trabalhos', 'text_domain' ),
         'labels'              => $labels,
         'supports'            => array( 'title', 'editor', 'thumbnail', ),
         'hierarchical'        => false,
         'public'              => true,
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

      register_post_type('trabalhos', $args);

      $labels = array(
         'name'                       => _x( 'Categorias', 'Taxonomy General Name', 'text_domain' ),
         'singular_name'              => _x( 'Categoria', 'Taxonomy Singular Name', 'text_domain' ),
         'menu_name'                  => __( 'Categorias', 'text_domain' ),
         'all_items'                  => __( 'Todas as categorias', 'text_domain' ),
         'parent_item'                => __( 'Categoria pai', 'text_domain' ),
         'parent_item_colon'          => __( 'Categoria pai:', 'text_domain' ),
         'new_item_name'              => __( 'Novo nome da categoria', 'text_domain' ),
         'add_new_item'               => __( 'Adicionar nova categoria', 'text_domain' ),
         'edit_item'                  => __( 'Editar categoria', 'text_domain' ),
         'update_item'                => __( 'Atualizar categoria', 'text_domain' ),
         'view_item'                  => __( 'Ver categoria', 'text_domain' ),
         'separate_items_with_commas' => __( 'Itens com vírgulas', 'text_domain' ),
         'add_or_remove_items'        => __( 'Adicionar ou remover categorias', 'text_domain' ),
         'choose_from_most_used'      => __( 'Escolha entre as mais utilizadas', 'text_domain' ),
         'popular_items'              => __( 'Categorias populares', 'text_domain' ),
         'search_items'               => __( 'Procurar categorias', 'text_domain' ),
         'not_found'                  => __( 'Não encontrado', 'text_domain' ),
      );

      $args = array(
         'labels'                     => $labels,
         'hierarchical'               => true,
         'public'                     => false,
         'show_ui'                    => true,
         'show_admin_column'          => true,
         'show_in_nav_menus'          => true,
         'show_tagcloud'              => true,
      );

      register_taxonomy( 'categorias_trabalhos', array( 'trabalhos' ), $args );

   }
}
