<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="container single-post">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="single-post__title"><?php the_title(); ?></h1>
                <img
                    src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/Matilde-Gomez-Vega.jpg"
                    class="single-post__img"
                    alt="..."
                >
                <p class="fw-lighter"><span><?php the_author(); ?></span> | <span>Publicado: <?php the_time('F j, Y'); ?></span></p>
            </div>
            <?php the_content(); ?>
        </div>
    </div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>