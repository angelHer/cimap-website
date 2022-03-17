<?php get_header(); ?>

<?php
    $templateUri = get_template_directory_uri();
    $slides =  [
        (object) [
            'image' => "" . $templateUri . "/public/images/home/carrousel/imagen1.jpg",
            'image_movil' => "" . $templateUri . "/public/images/home/carrousel/imagen1-movil.jpg"
        ],
        (object) [
            'image' => "" . $templateUri . "/public/images/home/carrousel/imagen2.jpg",
            'image_movil' => "" . $templateUri . "/public/images/home/carrousel/imagen2-movil.jpg"
        ],
        (object) [
            'image' => "" . $templateUri . "/public/images/home/carrousel/imagen3.jpg",
            'image_movil' => "" . $templateUri . "/public/images/home/carrousel/imagen3-movil.jpg"
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

    $the_query = new WP_Query(array(
        'post_type' => 'post_type_columnista',
        'posts_per_page' => 6
    ));

    $query_services = new WP_Query(array(
        'post_type' => 'post_type_servicios',
        'posts_per_page' => 28,
        'orderby' => 'ID',
        'order' => 'ASC'
    ));
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
                    <div class="home__carousel-steps h-100 d-none d-sm-none d-md-block" style="background-image: url(<?php echo $slide->image; ?>)"></div>
                    <div class="home__carousel-steps h-100 d-block d-sm-block d-md-none" style="background-image: url(<?php echo $slide->image_movil; ?>)"></div>
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
        <?php if ( $query_services -> have_posts() ) : while ($query_services -> have_posts()) : $query_services -> the_post(); ?>
            <div class="col-6 col-sm-4 col-md-2 col-lg p-0 services__service">
                <?php
                    if ( has_post_thumbnail() ) {
                ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php
                            the_post_thumbnail('post-thumbnails', array(
                                'class' => 'services__image img-fluid',
                                'data-bs-custom-class' => 'services__tooltip',
                                'data-bs-toggle' => 'tooltip',
                                'data-bs-html' => "true",
                                'title' => "
                                    <h2 class='services__tooltip-title'>".get_post_meta( get_the_ID(), 'titulo_de_miniatura', true )."</h2>
                                    <p>".get_post_meta( get_the_ID(), 'contenido_de_miniatura', true )."</p>
                                "
                            ));
                        ?>
                        </a>
                <?php
                    }
                ?>
                <div class="px-2"><?php the_title(); ?></div>
            </div>
        <?php endwhile; endif; ?>
    </div>
</div>

<!-- Blog -->
<div class="container pt-5" id="blog">
    <div class="row row-cols my-5">
        <h2 class="about__title text-center">Columnistas</h2>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
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
                        <p>
                            <?php
                                $key_1_value = get_post_meta( get_the_ID(), 'introduction', true );
                                // Check if the custom field has a value.
                                if ( ! empty( $key_1_value ) ) {
                                    echo $key_1_value;
                                }
                            ?>
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a class="blog__link" href="<?php the_permalink(); ?>">Ver más...</a>
                    </div>
                </div>
            </div>
        <?php endwhile; endif; ?>
    </div>
    <div class="d-flex justify-content-center">
        <!-- <?php
            get_template_part( 'template-parts/content', 'pagination');
            echo bootstrap_pagination($the_query);
        ?> -->
        <a type="button" class="btn button__primary" href="<?php echo esc_url( home_url( '/post_type_columnista' ) ); ?>">Ver más</a>
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
            <form id="frmContact">
                <h2 class="contact__form-title">Contacto</h2>
                <div class="mb-3">
                    <input
                        type="email"
                        class="form-control contact__input"
                        id="email"
                        name="Email"
                        required
                        aria-describedby="emailHelp"
                        placeholder="Correo electrónico"
                    >
                </div>
                <div class="mb-3 mt-4">
                    <input
                        type="text"
                        class="form-control contact__input"
                        id="name"
                        name="Nombre"
                        required
                        aria-describedby="emailHelp"
                        placeholder="Nombre"
                    >
                </div>
                <div class="mb-3 mt-4">
                    <textarea
                        class="form-control contact__input-textarea"
                        id="message"
                        name="Mensaje"
                        required
                        rows="3"
                        placeholder="Mensaje"
                    ></textarea>
                </div>
                <div class="mb-3 mt-4 d-flex justify-content-end">
                    <button type="submit" class="btn btn-light">Enviar</button>
                </div>
                <div id="success-message" class="alert alert-success" role="alert" style="display: none;">
                    Gracias por ponerte en contacto con nosotros, recibiras respuesta lo antes posible.
                </div>
                <div id="error-message" class="alert alert-danger" role="alert" style="display: none;">
                    Lo sentimos, ocurrió un error al enviar el mensaje.
                </div>
            </form>
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