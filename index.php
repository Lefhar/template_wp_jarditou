<?php 
/**
 * page index du template jarditou.
 *
 * @package WordPress
 * @subpackage jarditou
 * @since jarditou 2.0
 */
get_header();
if(is_singular()or is_page())   : 
        get_template_part('single'); 

        else : 
             
        get_template_part('loop'); 
                 
                endif; 
                
                get_footer();?>