<?php
/**
 *  jarditou: Search Page
 *
 * @package WordPress
 * @subpackage jarditou
 * @since jarditou 1.0
 */

get_header();
?>
    <div class="container-fluid p-4 mb-4">

   
<div class="row">
<!-- 
    colonne central
-->
<h1>Résultat de recherche : <?php echo get_search_query(); ?></h1>
<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        <?php get_search_form(); ?>
        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->
<?php if(have_posts()) : ?>
  
  <?php while(have_posts()) : the_post(); ?>
  
  <article>
  <div class="col-sm-12 col-12 "> 
     <h1><?php the_title(); ?></h1>
     <p><stron>Publié le :</strong><?php the_time('d/m/Y'); ?><?php if(!is_page()) : ?> dans <?php the_category(', '); ?><?php endif; ?></p>
     <?php if(is_singular()) : ?>
                   <?php the_content(); ?>
               <?php else : ?>
                   <?php the_excerpt(); ?>
                   <a href="<?php the_permalink(); ?>">Lire la suite</a>
                   <hr>
               <?php endif; ?>
</div>

</article>

<?php endwhile; ?>

<div id="pagination">
       <?php echo paginate_links(); ?>
   </div>
<?php else : ?>
   <p>Aucun résultat</p>
<?php endif; ?>
</div>
</div>
<?php
get_footer();
