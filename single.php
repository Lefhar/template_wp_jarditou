<?php
/**
 * page single du template jarditou.
 *
 * @package WordPress
 * @subpackage jarditou
 * @since jarditou 2.0
 */

get_header();
?>
<div class="container-fluid">
<div class="row">
<div class="col-sm-8 col-12"> 

  <article>

     <h1><?php the_title(); ?></h1>
     <p><strong>Publié le : </strong><?php the_time('l j F Y'); ?><?php if(!is_page()) : ?> dans <?php the_category(', '); ?><?php endif; ?></p>

     
                   <?php the_content(); ?>
         
</article>
<hr>
                   <?php if(is_singular() or is_page()) : if(comments_open()) : comments_template(); endif; endif; ?>
</div>
<div id="pagination">
       <?php echo paginate_links(); ?>
   </div>
   
   <div class="col-sm-4">
<aside>

            <?php dynamic_sidebar('main-sidebar'); ?>
        
        </aside>
        </div>
   </div>

   </div>
   <?php
get_footer();



