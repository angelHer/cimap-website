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

    $clients = [
        (object) [
            'image' => "" . $templateUri . "/public/images/clients/1-capitan.png"
        ],
        (object) [
            'image' => "" . $templateUri . "/public/images/clients/2-Edumac.png"
        ],
        (object) [
            'image' => "" . $templateUri . "/public/images/clients/3-engrande.png"
        ],
        (object) [
            'image' => "" . $templateUri . "/public/images/clients/4-cachimochi.png"
        ],
        (object) [
            'image' => "" . $templateUri . "/public/images/clients/5-SalonFama.png"
        ],
        (object) [
            'image' => "" . $templateUri . "/public/images/clients/6-LugarBife.png"
        ],
        (object) [
            'image' => "" . $templateUri . "/public/images/clients/7-PuertoBife.png"
        ],
        (object) [
            'image' => "" . $templateUri . "/public/images/clients/8-publimedios.png"
        ],
        (object) [
            'image' => "" . $templateUri . "/public/images/clients/9-MundoTuzo.png"
        ],
        (object) [
            'image' => "" . $templateUri . "/public/images/clients/10-BifeSports.png"
        ],
        (object) [
            'image' => "" . $templateUri . "/public/images/clients/11-MundoFutbol.png"
        ],
        (object) [
            'image' => "" . $templateUri . "/public/images/clients/12-Veova.png"
        ],
        (object) [
            'image' => "" . $templateUri . "/public/images/clients/13-Hidalgo.png"
        ],
        (object) [
            'image' => "" . $templateUri . "/public/images/clients/14-renace.png"
        ],
        (object) [
            'image' => "" . $templateUri . "/public/images/clients/15-RDC.png"
        ],
        (object) [
            'image' => "" . $templateUri . "/public/images/clients/16-Tulancingo.png"
        ],
        (object) [
            'image' => "" . $templateUri . "/public/images/clients/17-Tuzoofari.png"
        ],
        (object) [
            'image' => "" . $templateUri . "/public/images/clients/18-Hidalgo.png"
        ],
        (object) [
            'image' => "" . $templateUri . "/public/images/clients/19-GrupoPachuca.png"
        ],
        (object) [
            'image' => "" . $templateUri . "/public/images/clients/20-AlmaQuezada.png"
        ]
    ];
?>

<!-- Carrousel -->
<div class="content home">
    <div id="carouselHome" class="carousel slide h-100" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php
                foreach($slides as $key => $slide) {
            ?>
                <button
                    type="button"
                    data-bs-target="#carouselHome"
                    data-bs-slide-to="<?php echo $key; ?>"
                    class="home__indicators <?php if ($key===0) { echo 'active'; }?>"
                    <?php if ($key===0) { echo 'aria-current="true"'; }?>
                    aria-label="Slide 1"
                ></button>
            <?php
                }
            ?>
        </div>
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
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
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
<div class="pt-5" id="servicios">
    <div class="row row-cols my-5">
        <h2 class="about__title text-center">Servicios / Productos</h2>
    </div>
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
            <div class="px-2">Creación de contenido</div>
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
            <div class="px-2">Marketing digital</div>
        </div>
        <div class="col-6 col-sm-4 col-md-2 col-lg p-0 services__service">
            <img class="services__image img-fluid" src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/boton-videofotografia.jpg" alt="">
            <div class="px-2">Video y fotografía</div>
        </div>
        <div class="col-6 col-sm-4 col-md-2 col-lg p-0 services__service">
            <img class="services__image img-fluid" src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/boton-espacios.jpg" alt="">
            <div class="px-2">Espacios y pautas</div>
        </div>
    </div>
</div>

<!-- Blog -->
<div class="container pt-5" id="blog">
    <div class="row row-cols my-5">
        <h2 class="about__title text-center">Blog</h2>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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

<!-- clientes -->
<div class="container py-5" id="clientes">
    <div class="row row-cols my-5">
        <h2 class="about__title text-center">Clientes</h2>
    </div>
    <div class="row row-cols-2 row-cols-md-5 g-4">
        <?php
            foreach($clients as $key => $client) {
        ?>
            <div class="col">
                <img src="<?php echo $client->image; ?>" class="card-img-top" alt="...">
            </div>
        <?php
            }
        ?>
    </div>
</div>

<!-- Contacto -->
<div class="contact d-flex align-items-center justify-content-center" id="contacto">
    <div class="row justify-content-center w-100">
        <div class="col-8 d-flex contact__container">
            <div class="col-6 contact__contact">
                <h2 class="contact__form-title">Contacto</h2>
                <div class="mb-3">
                    <input
                        type="email"
                        class="form-control contact__input"
                        id="exampleInputEmail1"
                        aria-describedby="emailHelp"
                        placeholder="Correo electrónico"
                    >
                </div>
                <div class="mb-3 mt-4">
                    <input
                        type="email"
                        class="form-control contact__input"
                        id="exampleInputEmail1"
                        aria-describedby="emailHelp"
                        placeholder="Nombre"
                    >
                </div>
                <div class="mb-3 mt-4">
                    <textarea class="form-control contact__input-textarea" id="exampleFormControlTextarea1" rows="3" placeholder="Mensaje"></textarea>
                </div>
                <div class="">
                    <span class="fw-light">Av. Revolución 3107 Plaza Bella, Periodistas, 42060 Pachuca de Soto, Hgo.</span>
                    <span class="fw-light">+1 (234) 56789, +1 987 654 3210</span>
                    <span class="fw-light">contacto@cimaconsultores.com</span>
                </div>
            </div>
            <div class="col-6">
                Mapa
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>