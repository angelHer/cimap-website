<?php
    get_header();
    $image = get_field('imagen_de_servicio');
    $image_url = $image['sizes']['large'];
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6">
                <h1 class="single-post__title"><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
            <div class="col-12 col-sm-12 col-md-6 d-flex align-items-center">
                <img src="<?php echo $image_url ?>" class="img-fluid">
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>