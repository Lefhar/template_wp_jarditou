<?php 
/**
 * page index du template jarditou.
 *
 * @package WordPress
 * @subpackage jarditou
 * @since jarditou 1.0
 */
get_header();
if(is_singular()or is_page())   : 
        get_template_part('single'); 
        ?>
                   <?php  
                   //the_content(); 
                   ?>
               <?php else : ?>
                   <?php 
             
                       get_template_part('loop'); 
                  // the_excerpt(); 
                endif; 
                 
           
            
      
                 
                 ?>