<?php get_header(); ?>

<div class="container">
    <div class="row g-5 mt-4">
        <div class="col-md-12   ">
            <h1 class="page-title"><?php printf( __( 'Resultados de: %s', 'twentyfifteen' ), get_search_query() ); ?></h1>
            <hr>
        </div>
        <div class="col-md-12">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="col">
                        <?php get_the_category(); ?>
                        <div class="card border-0">
                            <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('post-thumbnails', array(
                                        'class' => 'card-img-top blog__thumbnail'
                                    ));
                                }
                            ?>
                            <div class="card-body">
                                <h5 class="card-title blog__card-title"><?php the_title(); ?></h5>
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="card-footer bg-transparent border-0">
                                <a class="blog__link" href="<?php the_permalink(); ?>">Ver más...</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
            <div class="row">
                <?php if (!have_posts()): ?>
                    <h5 class="text-center">No se encontraron resultados con los criterios de búsqueda</h5>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>