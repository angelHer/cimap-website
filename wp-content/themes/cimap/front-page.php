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
            <img
                class="services__image img-fluid"
                src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/boton-monitoreo.jpg"
                alt=""
                data-bs-custom-class="services__tooltip"
                data-bs-toggle="tooltip"
                data-bs-html="true"
                title="
                    <h2 class='services__tooltip-title'>Monitoreo de medios</h2>
                    <p>Monitoreo de la publicidad y contenidos en 11 periódicos, locales y nacionales, 6 estaciones de radio regionales, portales de internet y redes sociales.</p>
                "
            >
            <div class="px-2">Monitoreo de medios</div>
        </div>
        <div class="col-6 col-sm-4 col-md-2 col-lg p-0 services__service">
            <img
                class="services__image img-fluid"
                src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/boton-foda.jpg"
                alt=""
                data-bs-custom-class="services__tooltip"
                data-bs-toggle="tooltip"
                data-bs-html="true"
                title="
                    <h2 class='services__tooltip-title'>Diagnóstico FODA</h2>
                    <p>Se analizará la situación mediática con la finalidad de detectar fortalezas y áreas de oportunidad que potencialicen su posicionamiento individual y como parte de una estructura organizacional más amplia.</p>
                "
            >
            <div class="px-2">Diagnóstico FODA</div>
        </div>
        <div class="col-6 col-sm-4 col-md-2 col-lg p-0 services__service">
            <img
                class="services__image img-fluid"
                src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/boton-analisis.jpg"
                alt=""
                data-bs-custom-class="services__tooltip"
                data-bs-toggle="tooltip"
                data-bs-html="true"
                title="
                    <h2 class='services__tooltip-title'>Análisis</h2>
                    <p>Documento realizado por un equipo multidisciplinario, el cual concentrará datos e información que será útil para la toma de decisiones. Puede ser de medios de información, de temas políticos o tendencias coyunturales.</p>
                "
            >
            <div class="px-2">Análisis</div>
        </div>
        <div class="col-6 col-sm-4 col-md-2 col-lg p-0 services__service">
            <img
                class="services__image img-fluid"
                src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/boton-manejocrisis.jpg"
                alt=""
                data-bs-custom-class="services__tooltip"
                data-bs-toggle="tooltip"
                data-bs-html="true"
                title="
                    <h2 class='services__tooltip-title'>Manejo de crisis</h2>
                    <p>¿Una crisis se puede prevenir o evitar? Una crisis no se puede evitar, pero sí prevenir y disminuir el impacto negativo. ¿Cómo hacerlo? CIMAP te asesora con planes y estrategias de contención.</p>
                "
            >
            <div class="px-2">Manejo de crisis</div>
        </div>
        <div class="col-6 col-sm-4 col-md-2 col-lg p-0 services__service">
            <img
                class="services__image img-fluid"
                src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/boton-estrategiasintegrales.jpg"
                alt=""
                data-bs-custom-class="services__tooltip"
                data-bs-toggle="tooltip"
                data-bs-html="true"
                title="
                    <h2 class='services__tooltip-title'>Estrategias integrales de comunicación</h2>
                    <p>¿Cómo transmitir de manera efectiva y conectar con la ciudadanía? Convierte la comunicación en un activo estratégico, un factor importante para el éxito de tu empresa o institución creando un plan al corto, mediano y largo plazo que le dé un crecimiento de valor a tu gestión.</p>
                "
            >
            <div class="px-2">Estrategias integrales de comunicación</div>
        </div>
        <div class="col-6 col-sm-4 col-md-2 col-lg p-0 services__service">
            <img
                class="services__image img-fluid"
                src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/boton-analisis.jpg"
                alt=""
                data-bs-custom-class="services__tooltip"
                data-bs-toggle="tooltip"
                data-bs-html="true"
                title="
                    <h2 class='services__tooltip-title'>Encuestas organizacionales</h2>
                    <p>Empleados con la camiseta puesta, suman a la organización. ¿Quieres saber cómo se encuentra tu comunicación interna? CIMAP te ofrece la elaboración de encuestas internas para saber cómo mejorar la comunicación de tu organización, y te ofrecen un diagnóstico con líneas de acción e implementación.</p>
                "
            >
            <div class="px-2">Encuestas organizacionales</div>
        </div>

        <div class="col-6 col-sm-4 col-md-2 col-lg p-0 services__service">
            <img
                class="services__image img-fluid"
                src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/boton-capacitaciones.jpg"
                alt=""
                data-bs-custom-class="services__tooltip"
                data-bs-toggle="tooltip"
                data-bs-html="true"
                title="
                    <h2 class='services__tooltip-title'>Capacitaciones integrales</h2>
                    <p>CIMAP puede capacitar a tus áreas de comunicación para eficientar tus procesos y recursos.</p>
                    <p>Podrán aprender la creación de boletines, procesos de comunicación, manejo de crisis y uso de redes sociales.</p>
                "
            >
            <div class="px-2">Capacitaciones integrales</div>
        </div>
        <div class="col-6 col-sm-4 col-md-2 col-lg p-0 services__service">
            <img
                class="services__image img-fluid"
                src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/boton-creacioncontenido.jpg"
                alt=""
                data-bs-custom-class="services__tooltip"
                data-bs-toggle="tooltip"
                data-bs-html="true"
                title="
                    <h2 class='services__tooltip-title'>Creación de contenido</h2>
                    <p>¿Tus redes y tus boletines siempre dicen lo mismo? El futuro de la comunicación es el contenido, nosotros te decimos cómo mejorarlo y te apoyamos a crearlo.</p>
                "
            >
            <div class="px-2">Creación de contenido</div>
        </div>
        <div class="col-6 col-sm-4 col-md-2 col-lg p-0 services__service">
            <img
                class="services__image img-fluid"
                src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/boton-asesorias.jpg"
                alt=""
                data-bs-custom-class="services__tooltip"
                data-bs-toggle="tooltip"
                data-bs-html="true"
                title="
                    <h2 class='services__tooltip-title'>Asesorías personalizadas</h2>
                    <p>Mediante una reunión presencial o vía Zoom, te ayudaremos a resolver cualquier problemática en el ámbito mediático y gubernamental.</p>
                "
            >
            <div class="px-2">Asesorías personalizadas</div>
        </div>
        <div class="col-6 col-sm-4 col-md-2 col-lg p-0 services__service">
            <img
                class="services__image img-fluid"
                src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/boton-creacioncampana.jpg"
                alt=""
                data-bs-custom-class="services__tooltip"
                data-bs-toggle="tooltip"
                data-bs-html="true"
                title="
                    <h2 class='services__tooltip-title'>Creación de campañas</h2>
                    <p>Generamos campañas publicitarias innovadoras.</p>
                "
            >
            <div class="px-2">Creación de campañas</div>
        </div>
        <div class="col-6 col-sm-4 col-md-2 col-lg p-0 services__service">
            <img
                class="services__image img-fluid"
                src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/boton-mktingdigital.jpg"
                alt=""
                data-bs-custom-class="services__tooltip"
                data-bs-toggle="tooltip"
                data-bs-html="true"
                title="
                    <h2 class='services__tooltip-title'>Marketing digital</h2>
                    <p>Alto contenido de valor que te permita conectar con tu público meta, mediante una parrillada de marketing afin a tu público meta.</p>
                "
            >
            <div class="px-2">Marketing digital</div>
        </div>
        <div class="col-6 col-sm-4 col-md-2 col-lg p-0 services__service">
            <img
                class="services__image img-fluid"
                src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/boton-videofotografia.jpg"
                alt=""
                data-bs-custom-class="services__tooltip"
                data-bs-toggle="tooltip"
                data-bs-html="true"
                title="
                    <h2 class='services__tooltip-title'>Video y fotografía</h2>
                    <p>Contamos con el equipo y personal especializado para la realización de shootings.</p>
                "
            >
            <div class="px-2">Video y fotografía</div>
        </div>
        <div class="col-6 col-sm-4 col-md-2 col-lg p-0 services__service">
            <img
                class="services__image img-fluid"
                src="<?php echo home_url(); ?>/wp-content/uploads/2021/12/boton-espacios.jpg"
                alt=""
                data-bs-custom-class="services__tooltip"
                data-bs-toggle="tooltip"
                data-bs-html="true"
                title="
                    <h2 class='services__tooltip-title'>Espacios y pautas</h2>
                    <p>Reportajes especiales y boletines informativos que serán difundidos en nuestras redes sociales.</p>
                    <p>Patrocinio y menciones semanales en secciones y contenidos generados por CIMAP.</p>
                "
            >
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
        <div class="col col-sm-8 col-md-4 contact__container">
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
            <div class="mb-3 mt-4 d-flex justify-content-end">
                <button type="button" class="btn btn-light">Enviar</button>
            </div>
            <div class="">
                <span class="fw-light">Av. Revolución 3107 Plaza Bella, Periodistas, 42060 Pachuca de Soto, Hgo.</span>
                <span class="fw-light">+1 (234) 56789, +1 987 654 3210</span>
                <span class="fw-light">contacto@cimaconsultores.com</span>
            </div>
        </div>
        <div class="col col-sm-8 col-md-4 p-0 contact__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1113.8297283026998!2d-98.7455302468183!3d20.114776876515695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d109fe4b975257%3A0xf0250188bde51ca5!2sAv%20Revoluci%C3%B3n%201307%2C%20Periodistas%2C%2042060%20Pachuca%20de%20Soto%2C%20Hgo.!5e0!3m2!1ses-419!2smx!4v1642547702694!5m2!1ses-419!2smx"
                width="100%"
                height="100%"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
            ></iframe>
        </div>
    </div>
</div>
<?php get_footer(); ?>