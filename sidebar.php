<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php
                query_posts('offset=1');
                get_template_part('loop');
            ?>
        </div>
        <div class="col-md-4">
            <?php dynamic_sidebar('main-sidebar'); ?>
        </div>
    </div>
</div>