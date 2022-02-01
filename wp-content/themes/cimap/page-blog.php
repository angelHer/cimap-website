<?php get_header(); ?>

<div class="container">
    <div class="row g-5 mt-4">
        <div class="col-md-12   ">
            <h1 class="text-center">Blog</h1>
            <hr> 
        </div>
        <div class="col-md-8">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <?php $the_query = new WP_Query( array('category_name' => '') ); ?>
                <?php if ( $the_query -> have_posts() ) : while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                    <div class="col">
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
        </div>
        <!-- sidebar -->
        <?php get_sidebar(); ?>
    </div>
</div>

<!-- <ul>

<?php $the_query2 = new WP_Query( array( 'category_name' => '' ) ); ?>

<?php while ($the_query2 -> have_posts()) : $the_query2 -> the_post(); ?>

<li>

<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( '' ); } ?></a>
<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
<p><?php the_excerpt(); ?></p>

</li>

<?php endwhile;?>

</ul> -->
<?php get_footer(); ?>