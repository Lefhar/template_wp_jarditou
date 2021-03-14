<?php
/**
 * page single du template jarditou.
 *
 * @package WordPress
 * @subpackage jarditou
 * @since jarditou 1.0
 */

get_header();
?>
<div class="container-fluid">
<div class="row">
<div class="col-sm-8 col-12"> 

  <article>

     <h1><?php the_title(); ?></h1>
     <p><strong>Publié le :</strong><?php the_time('d/m/Y'); ?><?php if(!is_page()) : ?> dans <?php the_category(', '); ?><?php endif; ?></p>
     
                   <?php the_content(); ?>
                   <?php if(is_singular()) : if(comments_open()) : comments_template(); endif; endif; ?>
</article>
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



