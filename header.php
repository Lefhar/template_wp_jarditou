<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php echo get_bloginfo('title');?></title>
<meta name="description" content="<?php if(is_singular()) : 
       echo strip_tags(get_the_excerpt());
    
    
        $description; else: echo get_bloginfo('description'); endif;?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <?php wp_head(); ?>
</head>
<body>

<header>
   <!--
        header

    -->   
        <!--

            logo du site avec le titre à droite
        -->
        <div class="container-fluid">
            <div class="row">
                <div class="col 12 col-lg-2 pt-2">
         
                <img src="<?php bloginfo( 'template_directory' ); ?>/assets/src/img/jarditou_logo.jpg"  class="img-fluid" alt="Jarditou" title="Jarditou">   
              </div>
            
              <div class="col 12 col-lg-10 pt-2">
                <div class="text-right h1"><?php echo get_bloginfo('description');?></div>
            </div>
            </div>
    </div>
    <!--
        barre du menu
    -->
    <?php if ( has_nav_menu( 'header_menu' ) ) : ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!--bouton sur mobile-->
            <a class="nav-brand navbar-text" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">


                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'header_menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'header-menu',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ));
            ?>



            
            <!--
                barre de recherche dans la nav bar
            -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <form class="form-inline ml-auto" action="<?php echo home_url( '/' );?>" role="search" method="get" id="searchform" >
                  <div class="md-form my-0">
                    <input class="form-control"  type="text" placeholder="entrer votre recherche" aria-label="Search"  name="s" id="s">
                  </div>
                  <button class="btn btn-outline-success btn-md my-0 ml-sm-2" type="submit">Rechercher</button>
                </form>
            
              </div>
        </div>
    </nav>
    <?php endif; ?>
    <div class="container-fluid"><div class="row"><img src="<?php bloginfo( 'template_directory' ); ?>/assets/src/img/promotion.jpg" class="w-100" alt="Jarditou" title="Jarditou"></div></div>
    </header> 
