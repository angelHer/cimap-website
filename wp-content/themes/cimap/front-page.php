<?php get_header(); ?>

<?php
    $templateUri = get_template_directory_uri();
    $slides =  [
        (object) [
            'image' => "" . $templateUri . "/public/images/home/carrousel/imagen1.jpg"
        ],
        (object) [
            'image' => "" . $templateUri . "/public/images/home/carrousel/imagen2.jpg"
        ],
        (object) [
            'image' => "" . $templateUri . "/public/images/home/carrousel/imagen3.jpg"
        ]
    ];
?>

<!-- Carrousel -->
<div class="content home">
    <div id="carouselExampleSlidesOnly" class="carousel slide h-100" data-bs-ride="carousel">
        <div class="carousel-inner h-100">
            <?php
                foreach($slides as $key => $slide) {
            ?>
                <div class="carousel-item <?php if ($key===0) { echo 'active'; }?> h-100">
                    <div class="home__carousel-steps h-100" style="background-image: url(<?php echo $slide->image; ?>)"></div>
                </div>
            <?php
                }
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- Nosotros -->
<div class="about" id="about">
    <div class="container py-5 h-100 d-flex align-items-center">
        <div class="row">
            <div class="col-12 col-md-6">
                <h2 class="about__title">Nosotros</h2>
                <p>Nuestro equipo te ofrece la información necesaria para <span class="about__text--highlighted">estar enterado de lo que tu marca genera en materia de medios de comunicación.</span></p>
                <p>Somos un ente externo a tu organización que, de manera profesional y objetiva, da <span class="about__text--highlighted">seguimiento a tu información para detectar áreas de oportunidad.</span></p>
                <p>Trascender tu comunicación y elevar el posicionamiento a través de una estrategia exitosa, es nuestro trabajo.</p>
            </div>
        </div>
    </div>
</div>

<!-- Productos / servicios -->
<div>
    <div class="row w-100 m-0">
        <div class="col-6 col-sm-4 col-md-2 col-lg p-0 services__service">
            <img
                class="services__image img-fluid"
                src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/boton-sintesis.jpg"
                alt=""
                data-bs-custom-class="services__tooltip"
                data-bs-toggle="tooltip"
                data-bs-html="true"
                title="
                    <h2 class='services__tooltip-title'>Síntesis digital de noticias</h2>
                    <p>Documento diario que contiene lo más destacable de la prensa local y nacional en medios impresos y digitales.</p>
                    <p>Estar informado siempre es un elemento clave en la toma de decisiones.</p>
                "
            >
            <div class="px-2">Síntesis digital de noticias</div>
        </div>
        <div class="col-6 col-sm-4 col-md-2 col-lg p-0 services__service">
            <img class="services__image img-fluid" src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/boton-monitoreo.jpg" alt="">
            <div class="px-2">Monitoreo de medios</div>
        </div>
        <div class="col-6 col-sm-4 col-md-2 col-lg p-0 services__service">
            <img class="services__image img-fluid" src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/boton-foda.jpg" alt="">
            <div class="px-2">Diagnóstico FODA</div>
        </div>
        <div class="col-6 col-sm-4 col-md-2 col-lg p-0 services__service">
            <img class="services__image img-fluid" src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/boton-analisis.jpg" alt="">
            <div class="px-2">Análisis</div>
        </div>
        <div class="col-6 col-sm-4 col-md-2 col-lg p-0 services__service">
            <img class="services__image img-fluid" src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/boton-manejocrisis.jpg" alt="">
            <div class="px-2">Manejo de crisis</div>
        </div>
        <div class="col-6 col-sm-4 col-md-2 col-lg p-0 services__service">
            <img class="services__image img-fluid" src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/boton-estrategiasintegrales.jpg" alt="">
            <div class="px-2">Estrategias integrales de comunicación</div>
        </div>
        <div class="col-6 col-sm-4 col-md-2 col-lg p-0 services__service">
            <img class="services__image img-fluid" src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/boton-analisis.jpg" alt="" data-bs-custom-class="services__tooltip" data-bs-toggle="tooltip" data-bs-html="true" title="The tooltip text Extra text">
            <div class="px-2">Encuestas organizacionales</div>
        </div>


        <div class="col-6 col-sm-4 col-md-2 col-lg p-0 services__service">
            <img class="services__image img-fluid" src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/boton-capacitaciones.jpg" alt="">
            <div class="px-2">Capacitaciones integrales</div>
        </div>
        <div class="col-6 col-sm-4 col-md-2 col-lg p-0 services__service">
            <img class="services__image img-fluid" src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/boton-creacioncontenido.jpg" alt="">
            <div class="px-2">Creación de contenido institucional</div>
        </div>
        <div class="col-6 col-sm-4 col-md-2 col-lg p-0 services__service">
            <img class="services__image img-fluid" src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/boton-asesorias.jpg" alt="">
            <div class="px-2">Asesorías personalizadas</div>
        </div>
        <div class="col-6 col-sm-4 col-md-2 col-lg p-0 services__service">
            <img class="services__image img-fluid" src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/boton-creacioncampana.jpg" alt="">
            <div class="px-2">Creación de campañas</div>
        </div>
        <div class="col-6 col-sm-4 col-md-2 col-lg p-0 services__service">
            <img class="services__image img-fluid" src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/boton-mktingdigital.jpg" alt="">
            <div class="px-2">Marketing digital y manejo de redes sociales</div>
        </div>
        <div class="col-6 col-sm-4 col-md-2 col-lg p-0 services__service">
            <img class="services__image img-fluid" src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/boton-videofotografia.jpg" alt="">
            <div class="px-2">Video y fotografía institucional</div>
        </div>
        <div class="col-6 col-sm-4 col-md-2 col-lg p-0 services__service">
            <img class="services__image img-fluid" src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/boton-espacios.jpg" alt="">
            <div class="px-2">Espacios y pautas en nuestra página, síntesis y agencia de noticias</div>
        </div>
    </div>
</div>

<!-- Blog -->
<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card border-0">
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/9_2021_1632445184764-150x150.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title blog__card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer bg-transparent border-0">
                    <a class="blog__link" href="#">Ver más...</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0">
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/9_2021_1632445184764-150x150.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title blog__card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer bg-transparent border-0">
                    <a class="blog__link" href="#">Ver más...</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0">
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/9_2021_1632445184764-150x150.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title blog__card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer bg-transparent border-0">
                    <a class="blog__link" href="#">Ver más...</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0">
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/9_2021_1632445184764-150x150.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title blog__card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer bg-transparent border-0">
                    <a class="blog__link" href="#">Ver más...</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0">
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/9_2021_1632445184764-150x150.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title blog__card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer bg-transparent border-0">
                    <a class="blog__link" href="#">Ver más...</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- clientes -->
<div class="container">
    <h1>Clientes</h1>
    <div class="row row-cols-2 row-cols-md-5 g-4">
        <div class="col">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/9_2021_1632445184764-150x150.png" class="card-img-top" alt="...">
        </div>
        <div class="col">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/9_2021_1632445184764-150x150.png" class="card-img-top" alt="...">
        </div>
        <div class="col">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/9_2021_1632445184764-150x150.png" class="card-img-top" alt="...">
        </div>
        <div class="col">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/9_2021_1632445184764-150x150.png" class="card-img-top" alt="...">
        </div>
        <div class="col">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/9_2021_1632445184764-150x150.png" class="card-img-top" alt="...">
        </div>
        <div class="col">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/9_2021_1632445184764-150x150.png" class="card-img-top" alt="...">
        </div>
    </div>
</div>

<!-- Contacto -->
<div>
    <div class="row justify-content-center">
        <div class="col-4">
            <h2>Contacto</h2>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Comments</label>
                </div>
            </div>
        </div>
        <div class="col-3">
            Mapa
        </div>
    </div>
</div>
<?php get_footer(); ?>