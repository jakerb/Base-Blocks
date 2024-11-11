/*
 * Base Block
 * @name        {name}
 * @author      {author}
 * @version     {version}
 * @namespace   {slug}
 * @category    {category}
 * @description {description}   
 */ 
(() => {

    let block = {
        id: '{id}',
        element: null,
        init: () => {
            // Define Element
            block.element = document.getElementById(block.id);

            // Run something.
            block.remove_js_class();

        },
        remove_js_class: () => {
            block.element.classList.remove('no-js');
        }
    };

    block.init();

})();