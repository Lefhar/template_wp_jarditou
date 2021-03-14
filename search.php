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
<h1>Résultat de recherche : <?php echo get_search_query(); ?></h1>

        <?php get_search_form(); ?>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
    <div class="col-12"> 
            <h2 ><?php the_title(); ?></h2>
            <p><strong>Publié le : </strong><?php the_time('l j F Y'); ?><?php if(!is_page()) : ?> dans <?php the_category(', '); ?><?php endif; ?></p>
            <?php the_excerpt(); ?>
            
                <p><a href="<?php the_permalink(); ?>" class="btn btn-primary">Lire la suite</a></p>

     
        </div>
    <?php endwhile; ?>
    <hr>
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
</div>
<?php
get_footer();


