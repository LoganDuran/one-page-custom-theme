<!DOCTYPE html>
<html <?php language_attributes(); ?>>


<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="Your Name or Your Site's Name">

    <title><?php wp_title('|', true, 'right');
            bloginfo('name'); ?></title>
    <link rel="icon" type="image/x-icon" href="img/Pumpkin-logo-webp.webp" />

    <?php wp_head(); ?>

</head>

<body>
    <!-- UniversalHeader -->

    <header class="header">
        <div>
            <a draggable="false" href="#" class="logo">Be<span></span>Like<span>Now</span></a>
            <h1 class="heading">
                Piercing & Tattoo <br />
                Studio
            </h1>
        </div>
        <img
            class="logoimg"
            src="<?php echo esc_url(get_template_directory_uri() . '/img/Pumpkin-logo-webp.webp'); ?>"
            draggable="false"
            alt="be like now pumpkin logo" />
        <nav class="nav">
            <ul class="navlist">
                <li>
                    <a draggable="false" class="navlinks" href="#about">O nama</a>
                </li>
                <li>
                    <a draggable="false" class="navlinks" href="#services">Usluge</a>
                </li>
                <li>
                    <a draggable="false" class="navlinks" href="#gallery">Galerija</a>
                </li>
                <li>
                    <a draggable="false" class="navlinks" href="#contact">Kontakt</a>
                </li>
                <li>
                    <a draggable="false" class="navlinks" href="en.html">En</a>
                </li>
            </ul>
        </nav>
        <div class="hamMenu">
            <div class="hamButton"></div>
        </div>
    </header>
    <main>
        <div class="spacer spacer-section offset-bottom"></div>
        <section id="about">
            <div class="bgfilter">
                <div class="wrapper"></div>
            </div>
        </section>
        <div class="spacer spacer-section flip offset-top"></div>

        <div class="column-fixed">
            <h2 class="chapter">O nama</h2>

            <div class="frame-content">

                <h2>Be<span></span>Like<span></span>Now</h2>
                <p>
                    Nekadazastupljen u plemenskim narodima radi ukazivanja statusa ili
                    religijske simbolike, danas je pirsing izuzetno popularna vrsta
                    bodi arta među mladima i starima ne samo na Zapadu već i širom
                    sveta.
                </p>
            </div>
        </div>

        <section id="services">
            <div class="bgfilter">


                <div class="column ">
                    <h2 class="chapter">Usluge</h2>
                    <div class="row">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/services-1.webp'); ?>" alt="" />
                        <div class="column-content">

                            <p>studio za pirsing nudi Vam najkvalitetnije usluge pirsinga.</p>
                            <p>
                                Pored samih usluga, takođe nudimo i raznovrsnu paletu nakita za
                                pirsing, isključivo izrađenog od najkvalitetnijeg hirurškog čelika
                                i titanijuma.
                            </p>
                        </div>
                    </div>

                    <div class="row reverse">

                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/services-2.webp'); ?>" alt="" />
                        <div class="column-content">
                            <p>
                                Iskažite svoju individualnost i obeležite nešto Vama važno uz najkvalitetnije pirsinge na raznim delovima tela: usnama, bradavicama, obrvama, pupku, ušima, jeziku itd. Radimo isključivo uz najviše higijenske standarde, pa samim tim i koristimo opremu za jednokratnu upotrebu koju otvaramo pred vašim očima.
                            </p>
                            <p>
                                Uz uslugu pirsinga takođe možete odabrati i komad nakita po Vašoj želji, izrađenog od najkvalitetnijeg hirurškog čelika.

                                Imamo i odličan izbor drugog nakita poput narukvica, prstenja, minđuša, privezaka, ogrlica od hirurškog čelika ili srebra.

                                Tu je i idealan poklon – atraktivne kožne narukvice.</p>
                        </div>
                    </div>
                </div>
        </section>

        <section id="gallery">

            <div class="bgfilter">
                <div class="spacer spacer-section"></div>
                <div class="gallery-wrapper">
                    <h2 class="chapter">Galerija</h2>
                    <div class="gallery-content">


                        <img class="image" src="<?php echo esc_url(get_template_directory_uri() . '/img/gallery/slike (1).webp'); ?>" alt="" />

                        <img class="image" src="<?php echo esc_url(get_template_directory_uri() . '/img/gallery/slike (2).webp'); ?>" alt="" />

                        <img class="image" src="<?php echo esc_url(get_template_directory_uri() . '/img/gallery/slike (3).webp'); ?>" alt="" />

                        <img class="image" src="<?php echo esc_url(get_template_directory_uri() . '/img/gallery/slike (4).webp'); ?>" alt="" />

                        <img class="image" src="<?php echo esc_url(get_template_directory_uri() . '/img/gallery/slike (5).webp'); ?>" alt="" />

                        <img class="image" src="<?php echo esc_url(get_template_directory_uri() . '/img/gallery/slike (6).webp'); ?>" alt="" />

                        <img class="image" src="<?php echo esc_url(get_template_directory_uri() . '/img/gallery/slike (14).webp'); ?>" alt="" />

                        <img class="image" src="<?php echo esc_url(get_template_directory_uri() . '/img/gallery/slike (12).webp'); ?>" alt="" />

                        <img class="image" src="<?php echo esc_url(get_template_directory_uri() . '/img/gallery/slike (13).webp'); ?>" alt="" />

                        <img class="image" src="<?php echo esc_url(get_template_directory_uri() . '/img/gallery/slike (15).webp'); ?>" alt="" />

                        <img class="image" src="<?php echo esc_url(get_template_directory_uri() . '/img/gallery/slike (17).webp'); ?>" alt="" />

                        <img class="image" src="<?php echo esc_url(get_template_directory_uri() . '/img/gallery/slike (16).webp'); ?>" alt="" />

                        <img class="image" src="<?php echo esc_url(get_template_directory_uri() . '/img/gallery/slike (18).webp'); ?>" alt="" />

                        <img class="image" src="<?php echo esc_url(get_template_directory_uri() . '/img/gallery/slike (19).webp'); ?>" alt="" />

                        <img class="image" src="<?php echo esc_url(get_template_directory_uri() . '/img/gallery/slike (20).webp'); ?>" alt="" />

                        <img class="image" src="<?php echo esc_url(get_template_directory_uri() . '/img/gallery/slike (26).webp'); ?>" alt="" />

                        <img class="image" src="<?php echo esc_url(get_template_directory_uri() . '/img/gallery/slike (25).webp'); ?>" alt="" />

                        <img class="image" src="<?php echo esc_url(get_template_directory_uri() . '/img/gallery/slike (27).webp'); ?>" alt="" />

                        <img class="image" src="<?php echo esc_url(get_template_directory_uri() . '/img/gallery/slike (21).webp'); ?>" alt="" />

                        <img class="image" src="<?php echo esc_url(get_template_directory_uri() . '/img/gallery/slike (23).webp'); ?>" alt="" />

                        <img class="image" src="<?php echo esc_url(get_template_directory_uri() . '/img/gallery/slike (22).webp'); ?>" alt="" />

                        <img class="image" src="<?php echo esc_url(get_template_directory_uri() . '/img/gallery/slike (7).webp'); ?>" alt="" />

                        <img class="image" src="<?php echo esc_url(get_template_directory_uri() . '/img/gallery/slike (8).webp'); ?>" alt="" />

                        <img class="image" src="<?php echo esc_url(get_template_directory_uri() . '/img/gallery/slike (10).webp'); ?>" alt="" />

                        <img class="image" src="<?php echo esc_url(get_template_directory_uri() . '/img/gallery/slike (9).webp'); ?>" alt="" />

                        <img class="image" src="<?php echo esc_url(get_template_directory_uri() . '/img/gallery/slike (24).webp'); ?>" alt="" />

                        <img class="image" src="<?php echo esc_url(get_template_directory_uri() . '/img/gallery/slike (11).webp'); ?>" alt="" />


                    </div>
                </div>
                <div class="spacer spacer-section flip"></div>
            </div>
        </section>



        <section id="contact">
            <div class="contact-content">
                <h2 class="chapter">Kontakt</h2>
                <div class="wrapper">
                    <div name="map" class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2831.401428881207!2d20.474474142432292!3d44.79300707121488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7071c1a75979%3A0x8efa1103644559dc!2sBe%20Like%20Now!5e0!3m2!1sen!2srs!4v1700225653782!5m2!1sen!2srs"
                            frameborder="0"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Location of the studio on Google maps">
                        </iframe>
                    </div>
                    <div class="contact-cards">
                        <a
                            class="card"
                            draggable="false"
                            href="https://www.facebook.com/belikenow/">
                            <div class="card">
                                <iconify-icon
                                    icon="ri:facebook-fill"
                                    width="3.3em"
                                    height="3.3em"
                                    style="color: #88857e"></iconify-icon>
                            </div>
                        </a>
                        <a
                            class="card"
                            draggable="false"
                            href="https://www.instagram.com/belikenow/">
                            <div class="card">
                                <iconify-icon
                                    icon="lucide:instagram"
                                    width="3.3em"
                                    height="3.3em"
                                    style="color: #88857e"></iconify-icon>
                            </div>
                        </a>
                        <a class="card" draggable="false" href="tel:063123567">
                            <div class="card">
                                <iconify-icon
                                    icon="line-md:phone-call-loop"
                                    width="3.3em"
                                    height="3.3em"
                                    style="color: #88857e"></iconify-icon>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="spacer footerspacer"></div>

            <div class="socials">
                <span>
                    <a draggable="false" href="#" class="logo-bottom">Be<span></span>Like<span>Now</span>
                    </a>
                    &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                </span>
            </div>
        </footer>
    </main>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="header.js"></script>
    <script src="main.js"></script>
    <?php wp_footer(); ?>
</body>

</html>