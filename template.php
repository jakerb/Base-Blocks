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
        die('BaseBlock class not found!');
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
<section class="<?php echo $block->classes(); ?>" id="<?php echo $block->id(); ?>"  data-tracking="<?php echo $block->id(); ?>" data-block-slug="<?php echo $block->namespace(); ?>" data-block-version="<?php echo $blcok->version(); ?>">
    <!-- Do something interesting -->
</section>
