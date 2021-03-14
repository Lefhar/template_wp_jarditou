<?php
/**
 * page loop du template jarditou.
 *
 * @package WordPress
 * @subpackage jarditou
 * @since jarditou 1.0
 */ 



?>

<div class="container-fluid">
<div class="row">
<div class="col-sm-8 col-12"> 
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
    <div class="col-12"> 
            <h2 ><?php the_title(); ?></h2>
            <p class="blog-post-meta"><?php the_time('d/m/Y'); ?> par <?php the_author(); ?></p>
            <?php the_excerpt(); ?>
            
                <p><a href="<?php the_permalink(); ?>" class="btn btn-primary">Lire la suite</a></p>

     
        </div>
    <?php endwhile; ?>
    <div id="pagination">
       <?php echo paginate_links(); ?>
   </div>
   
<?php endif; ?>


</div>
<div class="col-sm-4">
<aside>

            <?php dynamic_sidebar('main-sidebar'); ?>
        
        </aside>
        </div>
</div>



