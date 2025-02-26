<?php 
// no default values. using these as examples
$taxonomies = array('category');

$args = array(
    'orderby'           => 'name', 
    'order'             => 'ASC',
    'hide_empty'        => true, 
    'exclude'           => array(), 
    'exclude_tree'      => array(), 
    'include'           => array(),
    'number'            => '', 
    'fields'            => 'all', 
    'slug'              => '',
    'parent'            => '',
    'hierarchical'      => true, 
    'child_of'          => 0,
    'childless'         => false,
    'get'               => '', 
    'name__like'        => '',
    'description__like' => '',
    'pad_counts'        => false, 
    'offset'            => '', 
    'search'            => '', 
    'cache_domain'      => 'core'
); 

$terms = get_terms($taxonomies, $args);
?>

<?php if ( !empty($terms) ) : ?>
<!-- Widget Category
============================================= -->
<div class="category-widget widget">
    <h3 class="widget-title title-link">Categorias</h3>
    <ul class="widget-item">
        <?php foreach ($terms as $term) : ?>
        <li><a href="<?php echo get_category_link($term->term_id); ?>"><?php echo $term->name; ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>
<!-- end of widget category -->
<?php endif; ?>

<!-- Widget Archives
============================================= -->
<div class="category-widget widget">
    <h3 class="widget-title title-link">Arquivos</h3>
    <ul class="widget-item">
    <?php $args = array(
        'type'            => 'monthly',
        'limit'           => '',
        'format'          => 'html', 
        'before'          => '',
        'after'           => '',
        'show_post_count' => false,
        'echo'            => 1,
        'order'           => 'DESC'
    ); ?>
    <?php wp_get_archives( $args ); ?> 
    </ul>
</div>
<!-- end of widget archives -->

<!-- Widget Tags
============================================= -->
<div class="tags-widget widget">
    <h3 class="widget-title title-link">Tags</h3>

<?php $args = array(
    'smallest'                  => 8, 
    'largest'                   => 22,
    'unit'                      => 'pt', 
    'number'                    => 45,  
    'format'                    => 'flat',
    'separator'                 => "\n",
    'orderby'                   => 'name', 
    'order'                     => 'ASC',
    'exclude'                   => null, 
    'include'                   => null, 
    'link'                      => 'view', 
    'taxonomy'                  => 'post_tag', 
    'echo'                      => true,
    'child_of'                  => null, // see Note!
); ?>

<?php wp_tag_cloud( $args ); ?>
</div>
<!-- end of tags -->