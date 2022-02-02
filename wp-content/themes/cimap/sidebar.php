
<div class="col-md-4">
    <!-- <div class="card-body">
        <h4>Publicidad</h4>
        <hr>
    </div> -->
    <?php if ( is_active_sidebar( 'blog_sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'blog_sidebar' ); ?>
    <?php else : ?>
        <!-- Time to add some widgets! -->
    <?php endif; ?>
</div>