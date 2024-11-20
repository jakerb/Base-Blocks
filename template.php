<?php
    /*
     * Base Block
     * @name        {name}
     * @author      {author}
     * @version     {version}
     * @namespace   {slug}
     * @category    {category}
     * @description {description}   
     */ 

    if( ! class_exists('BaseBlock') ) {
        return false;
    }

    $block = new BaseBlock(array(
        'id'            => '{id}',
        'name'          => '{name}',
        'author'        => '{author}',
        'version'       => '{version}',
        'namespace'     => '{slug}',
        'category'      => '{category}',
        'description'   => '{description}',
        'classes'       => ['{slug}', 'no-js']
    ));

    /*
     * Register ACF Fields
     */ 
    $block->register_fields(array(
        array(
            'label' => 'Heading',
            'name' => 'heading',
            'type' => 'text'
        )
    ));

    /*
     * Add Field Modifiers
     * Change the element before it's rendered.
     */
    $block->add_modifier('heading', function( $string ) {
        return "<em>{$string}</em>";
    });

?>
<?php if($block->can_render()) : ?>
<section class="<?php echo $block->classes(); ?>" id="<?php echo $block->id(); ?>"  data-tracking="<?php echo $block->id(); ?>" data-block-slug="<?php echo $block->namespace(); ?>" data-block-version="<?php echo $block->version(); ?>">
    <div class="placeholder">
        <h1><?php echo $block->heading(); ?></h1>
        <h2>I'm a {name} Block!</h2>
    </div>
</section>
<?php endif; ?>