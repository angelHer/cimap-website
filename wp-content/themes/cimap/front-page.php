<?php get_header(); ?>

<!-- Carrousel -->
<div class="content">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo home_url(); ?>/wp-content/themes/cimap/public/images/home/carrousel/imagen1.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="<?php echo home_url(); ?>/wp-content/themes/cimap/public/images/home/carrousel/imagen2.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="<?php echo home_url(); ?>/wp-content/themes/cimap/public/images/home/carrousel/imagen3.jpg" class="d-block w-100" alt="">
            </div>
        </div>
    </div>
</div>

<!-- Nosotros -->
<div class="about">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1>Nosotros</h1>
                <p>Nuestro equipo te ofrece la información necesaria para <span class="about__text--highlighted">estar enterado de lo que tu marca genera en materia de medios de comunicación.</span></p>
                <p>Somos un ente externo a tu organización que, de manera profesional y objetiva, da <span class="about__text--highlighted">seguimiento a tu información para detectar áreas de oportunidad.</span></p>
                <p>Trascender tu comunicación y elevar el posicionamiento a través de una estrategia exitosa, es nuestro trabajo.</p>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>