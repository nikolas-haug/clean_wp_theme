<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
        <!-- <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.css"> -->
        <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <?php wp_head(); ?>

        <style>
            .showcase {
                height: 700px;
                background: url('./img/showcase.jpg');
            }
            .banner {
                background: url('./img/banner.jpg') no-repeat center;
            }
        </style>

    </head>

    <body>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>
                <button class="navbar-toggler" type="button"
                    data-toggle="collapse"
                    data-target="#navbarsExampleDefault"
                    aria-controls="navbarsExampleDefault" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse"
                    id="navbarsExampleDefault">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="showcase animated fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="showcase-content">
                            <h1>Clean Cut Theme</h1>
                            <p class="lead">Custom Wordpress Theme By You</p>
                            <a href="" class="btn btn-secondary btn-lg"><i
                                    class="fab fa-facebook-square"></i> Facebook</a>
                            <a href="" class="btn btn-secondary btn-lg"><i
                                    class="fab fa-twitter-square"></i> Twitter</a>
                            <a href="" class="btn btn-secondary btn-lg"><i
                                    class="fab fa-linkedin-in"></i> Linkedin</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-a">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-6 animated fadeInLeft">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h2 class="section-heading">Section Heading</h2>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Incidunt in aliquid impedit sed,
                            quia voluptas perferendis odio possimus nobis
                            provident laborum velit numquam excepturi voluptatum
                            mollitia tempore rerum accusamus quas.</p>
                    </div>
                    <div class="col-lg-5 offset-lg-2 col-sm-6">
                        <img src="img/pic1.jpg" alt="" class="img-fluid
                            rounded-circle animated fadeInRight">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-b">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-6 animated fadeInLeft">
                        <img src="img/pic2.jpg" alt="" class="img-fluid
                            rounded-circle">
                    </div>
                    <div class="col-lg-5 offset-lg-2 col-sm-6 animated fadeInRight">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h2 class="section-heading">Section Heading</h2>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Incidunt in aliquid impedit sed,
                            quia voluptas perferendis odio possimus nobis
                            provident laborum velit numquam excepturi voluptatum
                            mollitia tempore rerum accusamus quas.</p>
                    </div>
                    
                </div>
            </div>
        </section>

        <section class="section-a">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-6 animated fadeInLeft">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h2 class="section-heading">Section Heading</h2>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Incidunt in aliquid impedit sed,
                            quia voluptas perferendis odio possimus nobis
                            provident laborum velit numquam excepturi voluptatum
                            mollitia tempore rerum accusamus quas.</p>
                    </div>
                    <div class="col-lg-5 offset-lg-2 col-sm-6 animated fadeInRight">
                        <img src="img/pic3.jpg" alt="" class="img-fluid
                            rounded-circle">
                    </div>
                </div>
            </div>
        </section>

        <section class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>Follow Us On Social Media:</h2>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-inline banner-social-buttons">
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-secondary btn-lg">
                                    <i class="fab fa-twitter-square">
                                        <span class="network-name">Twitter</span>
                                    </i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-secondary btn-lg">
                                    <i class="fab fa-twitter-square">
                                        <span class="network-name">Twitter</span>
                                    </i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-secondary btn-lg">
                                    <i class="fab fa-twitter-square">
                                        <span class="network-name">Twitter</span>
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#">Home</a></li>
                            <li class="list-inline-item"><a href="#">About</a></li>
                            <li class="list-inline-item"><a href="#">Services</a></li>
                            <li class="list-inline-item"><a href="#">Contacts</a></li>
                        </ul>
                        <p class="copyright text-muted small">
                            Copyright &copy; Clean Cut Theme 2020. All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
        </footer>

    <?php wp_footer(  ); ?>
    </body>
</html>