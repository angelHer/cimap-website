<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cimap</title>
    <?php wp_head(); ?>
</head>

<body>

    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light shadow">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img class="navbar-brand header__logo" src="<?php echo home_url(); ?>/wp-content/themes/cimap/public/images/logo-cimap-150x150.png" alt ="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo esc_url( home_url( '/#about' ) ); ?>">Nosotros</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="<?php echo esc_url( home_url( '/#servicios' ) ); ?>">Servicios / productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo esc_url( home_url( '/#blog' ) ); ?>">Columnistas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo esc_url( home_url( '/#clientes' ) ); ?>">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo esc_url( home_url( '/#contacto' ) ); ?>">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>