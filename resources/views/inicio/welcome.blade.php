<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Arcoiris Kids</title>
    <link rel="stylesheet" href="{{ asset('css/all2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tooplate-infinite-loop.css') }}" />
    <!--
Tooplate 2117 Infinite Loop
https://www.tooplate.com/view/2117-infinite-loop
-->

</head>

<body>
    <!-- Hero section -->
    <section id="infinite" class="text-white tm-font-big tm-parallax">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-md tm-navbar" id="tmNav">
            <div class="container">
                <div class="tm-next">
                    <a href="#infinite" class="navbar-brand">Estacion Arcoiris Kids</a>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars navbar-toggler-icon"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link tm-nav-link" href="#whatwedo">Quienes somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tm-nav-link" href="#testimonials">Opiniones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tm-nav-link" href="#gallery">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tm-nav-link" href="#contact">Contacto</a>
                        </li>
                    </ul>
                </div>
                <div
                    class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                    @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                            @auth
                                <a href="{{ url('/home') }}"
                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">hogar</a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Iniciar
                                    seccion</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrarse</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </nav>

        <div class="text-center tm-hero-text-container">
            <div class="tm-hero-text-container-inner">
                <h2 class="tm-hero-title">ESTACION ARCOIRIS KIDS</h2>
                <p class="tm-hero-subtitle">
                    El mejor lugar para tus niños
                    <br>no te quedes sin vivir esta experiencia en familia
                </p>
            </div>
        </div>

        <div class="tm-next tm-intro-next">
            <a href="#whatwedo" class="text-center tm-down-arrow-link">
                <i class="fas fa-2x fa-arrow-down tm-down-arrow"></i>
            </a>
        </div>
    </section>

    <section id="whatwedo" class="tm-section-pad-top">

        <div class="container">

            <div class="row tm-content-box">
                <!-- first row -->
                <div class="col-lg-12 col-xl-12">
                    <div class="tm-intro-text-container">
                        <h2 class="tm-text-primary mb-4 tm-section-title">Quienes somos</h2>
                        <p class="mb-4 tm-intro-text">
                            Bienvenidos a Estación Arcoíris Kids, una empresa apasionada por brindar experiencias únicas
                            para nuestros clientes. Nos especializamos en el alquiler de equipos inflables, como
                            castillos, toboganes, obstáculos y otros productos para eventos. Desde nuestra fundación
                            hace 6 años, hemos estado comprometidos en ofrecer la más alta calidad de productos y
                            servicios para nuestros clientes. Somos una empresa orgullosamente localizada en Palmira y
                            amamos apoyar a la comunidad en todos los eventos, grandes o pequeños.
                            Ponemos el mejor esfuerzo en asegurarnos de que nuestros productos sean de la más alta
                            calidad, limpios y seguros para nuestros clientes. Nuestra selección de equipos de inflables
                            es una de las más grandes en la región, y estamos siempre buscando nuevas formas de mantener
                            nuestros productos frescos y emocionantes. Además, contamos con un equipo altamente
                            calificado que se preocupa por nuestra misión y visión, y estamos siempre buscando maneras
                            de proveer un excelente servicio al cliente.
                            En Estación Arcoíris Kids, creemos que todo evento es especial y único, y hacemos lo posible
                            por convertir la visión de nuestros clientes en una experiencia memorable e inolvidable.
                            Estamos dedicados a trabajar con nuestros clientes para crear una experiencia personalizada
                            y satisfacer todas sus necesidades.
                            ¡Gracias por confiar en Estación Arcoíris Kids para su evento de alquiler de inflables!</p>

                    </div>
                </div>

            </div><!-- first row -->
        </div>
    </section>

    <section id="testimonials" class="tm-section-pad-top tm-parallax-2">
        <div class="container tm-testimonials-content">
            <div class="row">
                <div class="col-lg-12 tm-content-box">
                    <h2 class="text-white text-center mb-4 tm-section-title">OPINIONES</h2>
                    <p class="mx-auto tm-section-desc text-center">
                        estos son algunos de nuestros clientes que dan su opinion.
                    </p>
                    <div class="mx-auto tm-gallery-container tm-gallery-container-2">
                        <div class="tm-testimonials-carousel">
                            <figure class="tm-testimonial-item">
                                <img src="{{ asset('img/testimonial-img-01.jpg') }}" alt="Image"
                                    class="img-fluid mx-auto">
                                <blockquote>Esta empresa ofrece los mejores inflables de la ciudad de Palmira, la
                                    recomiento para pasar un agradable tiempo con sus hijos.</blockquote>
                                <figcaption>Catherine Win</figcaption>
                            </figure>

                            <figure class="tm-testimonial-item">
                                <img src="{{ asset('img/testimonial-img-02.jpg') }}" alt="Image"
                                    class="img-fluid mx-auto">
                                <blockquote>Recomiendo mucho a esta empresa, mis hijos la pasaron super.</blockquote>
                                <figcaption>Dual Rocker</figcaption>
                            </figure>

                            <figure class="tm-testimonial-item">
                                <img src="{{ asset('img/testimonial-img-03.jpg') }}" alt="Image"
                                    class="img-fluid mx-auto">
                                <blockquote>Esta es una de las mejores empresas que he conocido y la atencion es de lo
                                    mejor.</blockquote>
                                <figcaption>Sandar Soft </figcaption>
                            </figure>

                            <figure class="tm-testimonial-item">
                                <img src="{{ asset('img/testimonial-img-04.jpg') }}" alt="Image"
                                    class="img-fluid mx-auto">
                                <blockquote>Vivan experiencias como la que ofrecen ellos, pase la mejor tarde con mi
                                    familia, super recomendado.</blockquote>
                                <figcaption>Oliva Htoo</figcaption>
                            </figure>

                            <figure class="tm-testimonial-item">
                                <img src="{{ asset('img/testimonial-img-02.jpg') }}" alt="Image"
                                    class="img-fluid mx-auto">
                                <blockquote>Pase un buen moemnto con mis hijos, apesar de que un trabajador tuvo una
                                    mala actitud pero se hablo con el encargado y tomo cartas en el asunto.</blockquote>
                                <figcaption>Jacob Joker</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tm-bg-overlay"></div>
    </section>

    <section id="gallery" class="tm-section-pad-top">
        <div class="container tm-container-gallery">
            <div class="row">
                <div class="text-center col-12">
                    <h2 class="tm-text-primary tm-section-title mb-4">Galeria</h2>
                    <p class="mx-auto tm-section-desc">
                        estos son algunos de nuestros juegos
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="mx-auto tm-gallery-container">
                        <div class="grid tm-gallery">
                            <a href="{{ asset('img/burbujas.jpg') }}">
                                <figure class="effect-honey tm-gallery-item">
                                    <img src="{{ asset('img/burbujas.jpg') }}" alt="Image 1" class="img-fluid">
                                    <figcaption>
                                        <h2><i>Bumpers ball <span>¡DIVIERTETE!</span></i></h2>
                                    </figcaption>
                                </figure>
                            </a>
                            <a href="{{ asset('img/inflable.jpg') }}">
                                <figure class="effect-honey tm-gallery-item">
                                    <img src="{{ asset('img/inflable.jpg') }}" alt="Image 2" class="img-fluid">
                                    <figcaption>
                                        <h2><i>Inflable Sony <span>¡JUEGA!</span></i></h2>
                                    </figcaption>
                                </figure>
                            </a>
                            <a href="{{ asset('img/trampolin.jpg') }}">
                                <figure class="effect-honey tm-gallery-item">
                                    <img src="{{ asset('img/trampolin.jpg') }}" alt="Image 3" class="img-fluid">
                                    <figcaption>
                                        <h2><i><span>Brinca Brinca</span>¡SALTA!</i></h2>
                                    </figcaption>
                                </figure>
                            </a>
                            <a href="{{ asset('img/DINO.jpg') }}">
                                <figure class="effect-honey tm-gallery-item">
                                    <img src="{{ asset('img/DINO.jpg') }}" alt="Image 4" class="img-fluid">
                                    <figcaption>
                                        <h2><i>Inflable<span>Dinosaurio</span></i></h2>
                                    </figcaption>
                                </figure>
                            </a>
                            <a href="{{ asset('img/mario.jpg') }}">
                                <figure class="effect-honey tm-gallery-item">
                                    <img src="{{ asset('img/mario.jpg') }}" alt="Image 5" class="img-fluid">
                                    <figcaption>
                                        <h2><i><span>Inflable</span> Mario</i></h2>
                                    </figcaption>
                                </figure>
                            </a>
                            <a href="{{ asset('img/tiburon.jpg') }}">
                                <figure class="effect-honey tm-gallery-item">
                                    <img src="{{ asset('img/tiburon.jpg') }}" alt="Image 6" class="img-fluid">
                                    <figcaption>
                                        <h2><i>Inflable <span>Tiburon</span></i></h2>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="tm-section-pad-top tm-parallax-2">

        <div class="container tm-container-contact">

            <div class="row">

                <div class="text-center col-12">
                    <h2 class="tm-section-title mb-4">Contacto</h2>
                    <p class="mb-5">
                        conctatanos por medio de nuestras redes sociales.
                    </p><br>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div>
                        <a href="https://www.facebook.com/estacionarcoiriskids/">FACEBOOK</a>
                    </div>
                    <div>
                        <a href="https://www.instagram.com/estacionarcoiriskids/?hl=es">INSTAGRAM</a>
                    </div>
                    <div class="contact-item">
                        <a rel="nofollow" href="mailto:Estacion@gmail.com" class="item-link">
                            <i class="far fa-2x fa-envelope mr-4"></i>
                            <span class="mb-0">Estacion@gmail.com</span>
                        </a>
                    </div>

                    <div class="contact-item">
                        <a rel="nofollow"
                            href="https://www.google.com/maps/place/Estaci%C3%B3n+Arco%C3%ADris+Kids/@3.5065815,-76.303121,17z/data=!3m1!4b1!4m6!3m5!1s0x8e3a051f78e1d413:0x7ac75438017068f7!8m2!3d3.5065815!4d-76.3009323!16s%2Fg%2F11pd96dtp3?entry=ttu"
                            class="item-link">
                            <i class="fas fa-2x fa-map-marker-alt mr-4"></i>
                            <span class="mb-0">Nuestra Ubicacion</span>
                        </a>
                    </div>

                    <div class="contact-item">
                        <a rel="nofollow" href="tel:3177908872" class="item-link">
                            <i class="fas fa-2x fa-phone-square mr-4"></i>
                            <span class="mb-0">3177908872</span>
                        </a>
                    </div>
                </div><!-- row ending -->

            </div>
        </div>

        <footer class="text-center small tm-footer">
            <p class="mb-0">
                Copyright &copy; 2020 Estacion Arcoiris Kids
                . <a rel="nofollow" href="https://www.tooplate.com" title="HTML templates"></a></p>
        </footer>

    </section>

    <script src="{{ asset('js/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/easing.min.js') }}"></script>
    <script src="{{ asset('js/jquery.singlePageNav.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script>
        function getOffSet() {
            var _offset = 450;
            var windowHeight = window.innerHeight;

            if (windowHeight > 500) {
                _offset = 400;
            }
            if (windowHeight > 680) {
                _offset = 300
            }
            if (windowHeight > 830) {
                _offset = 210;
            }

            return _offset;
        }

        function setParallaxPosition($doc, multiplier, $object) {
            var offset = getOffSet();
            var from_top = $doc.scrollTop(),
                bg_css = 'center ' + (multiplier * from_top - offset) + 'px';
            $object.css({
                "background-position": bg_css
            });
        }

        // Parallax function
        // Adapted based on https://codepen.io/roborich/pen/wpAsm
        var background_image_parallax = function($object, multiplier, forceSet) {
            multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
            multiplier = 1 - multiplier;
            var $doc = $(document);
            // $object.css({"background-attatchment" : "fixed"});

            if (forceSet) {
                setParallaxPosition($doc, multiplier, $object);
            } else {
                $(window).scroll(function() {
                    setParallaxPosition($doc, multiplier, $object);
                });
            }
        };

        var background_image_parallax_2 = function($object, multiplier) {
            multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
            multiplier = 1 - multiplier;
            var $doc = $(document);
            $object.css({
                "background-attachment": "fixed"
            });

            $(window).scroll(function() {
                if ($(window).width() > 768) {
                    var firstTop = $object.offset().top,
                        pos = $(window).scrollTop(),
                        yPos = Math.round((multiplier * (firstTop - pos)) - 186);

                    var bg_css = 'center ' + yPos + 'px';

                    $object.css({
                        "background-position": bg_css
                    });
                } else {
                    $object.css({
                        "background-position": "center"
                    });
                }
            });
        };

        $(function() {
            // Hero Section - Background Parallax
            background_image_parallax($(".tm-parallax"), 0.30, false);
            background_image_parallax_2($("#contact"), 0.80);
            background_image_parallax_2($("#testimonials"), 0.80);

            // Handle window resize
            window.addEventListener('resize', function() {
                background_image_parallax($(".tm-parallax"), 0.30, true);
            }, true);

            // Detect window scroll and update navbar
            $(window).scroll(function(e) {
                if ($(document).scrollTop() > 120) {
                    $('.tm-navbar').addClass("scroll");
                } else {
                    $('.tm-navbar').removeClass("scroll");
                }
            });

            // Close mobile menu after click
            $('#tmNav a').on('click', function() {
                $('.navbar-collapse').removeClass('show');
            })

            // Scroll to corresponding section with animation
            $('#tmNav').singlePageNav({
                'easing': 'easeInOutExpo',
                'speed': 600
            });

            // Add smooth scrolling to all links
            // https://www.w3schools.com/howto/howto_css_smooth_scroll.asp
            $("a").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;

                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 600, 'easeInOutExpo', function() {
                        window.location.hash = hash;
                    });
                } // End if
            });

            // Pop up
            $('.tm-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                }
            });

            $('.tm-testimonials-carousel').slick({
                dots: true,
                prevArrow: false,
                nextArrow: false,
                infinite: false,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });

            // Gallery
            $('.tm-gallery').slick({
                dots: true,
                infinite: false,
                slidesToShow: 5,
                slidesToScroll: 2,
                responsive: [{
                        breakpoint: 1199,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    </script>
</body>

</html>
