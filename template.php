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

    if( class_exists('BaseBlock') ) {
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

?>
<section class="<?php echo $block->classes(); ?>" id="<?php echo $block->id(); ?>"  data-tracking="<?php echo $block->id(); ?>" data-block-slug="<?php echo $block->namespace(); ?>" data-block-version="<?php echo $block->version(); ?>">
    <div class="placeholder">
        <h2>I'm a {name} Block!</h2>
    </div>
</section>
