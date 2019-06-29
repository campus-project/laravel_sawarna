<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <style>

        </style>
    </head>
    <body id="top">
        <div class="preloader">
            <div class="status">
                <div class="status-mes"></div>
            </div>
        </div>

        <section class="wrapper" id="parallax-1">
            <div class="overlay">
                <header class="d-flex-r clear justify-content-space-between">
                    <div class="my-1" id="logo">
                        <a href="/">
                            <img src="{{ asset('img/logo.png') }}" alt="{{ config('app.name', 'Laravel') }}">
                        </a>
                    </div>

                    <nav class="fl_right font-xs text-uppercase" id="main-navbar">
                        <ul class="clear">
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#destinations">Popular Destination</a></li>
                            <li><a href="#galery">Galery</a></li>
                            <li><a href="#main-footer">Subscribe</a></li>
                        </ul>
                    </nav>
                </header>

                <div id="banner-text" class="d-flex-c text-left">
                    <article>
                        <h1 class="heading text-left text-uppercase text-bold font-x3">{{ config('app.name', 'Laravel') }}</h1>
                        <p class="my-3 font-xs">
                            <span>“There is no place like the beach… where the land meets the sea and the sea meets the sky.” — Umair Siddiqui</span>
                        </p>
                        <footer>
                            <button class="btn inverse" onClick="document.getElementById('about').scrollIntoView()">Click To Know More</button>
                        </footer>
                    </article>
                </div>
            </div>
        </section>

        <section class="wrapper text-dark bg-grey" id="about">
            <div class="d-flex-c container">

                <div class="text-center">
                    <h6 class="heading text-uppercase my-1 font-x2">{{ config('app.name', 'Laravel') }}</h6>
                    <p class="my-2">Lodging in Sawarna consists of villas, resorts, semi hotels, homestays that you can choose
                        <br> according to the number of participants, desired facilities and budget.</p>
                </div>

                <div>
                    <div class="one_half" id="extra-text">
                        <ul class="mx-2">
                            <li class="one_half">
                                <article>
                                    <p class="nospace text-justify">Pantai Sawarna, sebuah kawasan pantai di Banten yang membentangkan berbagai pantai-pantai yang menjadi ikon Banten. Tempat wisata rekomendasi para traveller ini menjadi destinasi liburan yang seru untuk Anda karena pesona alamnya yang unik sekaligus sangat eksotis. Disebut-sebut nama pantai ini berasal dari nama seseorang yang menjadi kepala desa Swarna yang hidup pada tahun 1900 silam.
                                    </p>
                                </article>
                            </li>

                            <li class="one_half">
                                <article>
                                    <p class="nospace text-justify">Pantai Sawarna yang memiliki satu goa dan juga tujuh pantai dengan panorama alam yang berbeda satu sama lain ini mempunyai beragam jenis obyek wisata. Letak pantai Sawarna yaitu di desa Sawarna, sebuah desa pinggir pantai yang ada di kecamatan Lebak, Banten. Jarak pantai dari Jakarta sekitar 183 hingga 234 kilometer. Meski jauh, pantai Sawarna menjadi tujuan para wisatawan dan peselancar.</p>
                                </article>
                            </li>
                        </ul>
                    </div>

                    <div class="one_half" id="main-text">
                        <p class="text-justify">Sejarah keberadaan Desa Sawarna tidak terlepas dari sepupu Pelukis Legendaris Dunia Vincent Van Gogh, yang bernama Jean Louis Van Gogh yang membuka perkebunan kelapa di pinggir Pantai Tanjung Layar dan Ciantir seluas 54 hektar.</p>
                        <p class="my-1 text-justify">Perkebunan yang mempekerjakan penduduk pribumi dari berbagai daerah tersebut membuat adanya perbedaan logat dan dialek dalam percakapan sehari-hari yang dalam bahasa Sunda disebut “Sorana” yang artinya “suaranya” sehingga nama wilayah tersebut dikemudian hari disebut Sawarna yang berasal dari kata Sorana.</p>
                        <p class="my-1 text-justify">Ada juga pendapat yang mengatakan bahwa nama Sawarna diambil dari nama Swarna, Tetua atau Kepala Desa pertama di wilayah tersebut yang hidup pada tahun 1900-an.</p>
                        <p class="my-1 text-justify">Pendapat lainnya tentang asal-usul nama Sawarna diambil dari Bahasa Sunda “Swarna” yang artinya “Satu Warna” untuk menegaskan bahwa penduduk yang tinggal di lokasi tersebut satu warna yaitu masyarakat Sunda.</p>
                        <p class="my-1 text-justify">Seiring dengan berjalannya waktu, Desa Sawarna yang awalnya merupakan area perkebunan bermetamorfosis menjadi Desa Wisata.</p>
                        <p class="my-1 text-justify">Hal tersebut ditandai dengan banyaknya Homestay yaitu perumahan penduduk yang disewakan bagi para pendatang dengan tujuan untuk berwisata. Selain itu, banyak penduduk yang menggeluti profesi sampingan menjadi pemandu wisata.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="wrapper" id="parallax-2">
            <article class="d-flex-c container text-center">
                <div class="my-2">
                    <h6 class="heading font-x2">{{ config('app.name', 'Laravel') }}</h6>
                    <p>Lodging in Sawarna consists of villas, resorts, semi hotels, homestays that you can choose
                        <br> according to the number of participants, desired facilities and budget.</p>
                </div>
            </article>
        </section>

        <section class="wrapper text-dark bg-grey" id="destinations">
            <div class="container d-flex-c">
                <div class="text-center">
                    <h6 class="heading my-3 font-x2">Popular Destinations</h6>
                </div>

                <ul class="d-flex-r nospace">
                    <li class="hover1">
                        <img src="{{ asset('img/portfolio/1.jpg') }}" alt="">
                        <div class="overlay">
                            <h2>Tanjung Layar</h2>
                        </div>
                    </li>

                    <li class="hover1">
                        <img src="{{ asset('img/portfolio/2.jpg') }}" alt="">
                        <div class="overlay">
                            <h2>Karang Taraje</h2>
                        </div>
                    </li>

                    <li class="hover1">
                        <img src="{{ asset('img/portfolio/3.jpg') }}" alt="">
                        <div class="overlay">
                            <h2>Pantai Ciantir</h2>
                        </div>
                    </li>
                </ul>

                <ul class="d-flex-r nospace">
                    <li class="hover1">
                        <img src="{{ asset('img/portfolio/4.jpg') }}" alt="">
                        <div class="overlay">
                            <h2>Pantai Legon Pari</h2>
                        </div>
                    </li>

                    <li class="hover1">
                        <img src="{{ asset('img/portfolio/5.jpg') }}" alt="">
                        <div class="overlay">
                            <h2>Karang Beureum</h2>
                        </div>
                    </li>

                    <li class="hover1">
                        <img src="{{ asset('img/portfolio/6.jpg') }}" alt="">
                        <div class="overlay">
                            <h2>Bukit Cariang</h2>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="wrapper text-dark" id="other-issues">
            <div class="d-flex-c container">
                <div class="text-center my-2">
                    <h6 class="heading font-x2">Hotels</h6>
                    <p>Lodging in Sawarna consists of villas, resorts, semi hotels, homestays that you can choose
                        <br>according to the number of participants, desired facilities and budget.</p>
                    <div class="d-flex-r">
                        <article class="hover2 mx-2">
                            <a href="#">
                                <figure class="my-1"><img src="{{ asset('img/package/1.jpg') }}" alt=""></figure>
                            </a>
                            <h3 class="heading font-x1">Cottage & Resort Sawarna Paradiso</h3>
                            <button class="btn my-2">IDR 450K/Night</button>
                        </article>

                        <article class="hover2 mx-2">
                            <a href="#">
                                <figure class="my-1"><img src="{{ asset('img/package/2.jpg') }}" alt=""></figure>
                            </a>
                            <h3 class="heading font-x1">Little Hula Hula Sawarna</h3>
                            <button class="btn my-2">IDR 400K/Night</button>
                        </article>

                        <article class="hover2 mx-2">
                            <a href="#">
                                <figure class="my-1"><img src="{{ asset('img/package/3.jpg') }}" alt=""></figure>
                            </a>
                            <h3 class="heading font-x1">Sinar Matahari Resort Sawarna</h3>
                            <button class="btn my-2">IDR 350K/Night</button>
                        </article>

                        <article class="hover2 mx-2">
                            <a href="#">
                                <figure class="my-1"><img src="{{ asset('img/package/4.jpg') }}" alt=""></figure>
                            </a>
                            <h3 class="heading font-x1">Villa Bukit Indah Sawarna</h3>
                            <button class="btn my-2">IDR 200K/Night</button>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="wrapper" id="galery">
            <div class="d-flex-r">
                <div class="one_half text-dark text-right">
                    <div class="border-right m-2 p-2">
                        <h6 class="font-x2 heading">Galery</h6>
                    </div>
                </div>

                <div class="one_half" id="fixed-1">
                </div>
            </div>
        </section>

        <div class="wrapper bg-green">
            <footer class="d-flex-r clear container text-white" id="main-footer">
                <div class="mx-2">
                    <h6 class="heading font-x1 my-1">Contact Us</h6>
                    <ul class="nospace linkedlist contact">
                        <li><i class="fa fa-phone"></i> +6221 123-123-12</li>
                        <li><i class="fa fa-envelope-o"></i>{{ 'info@' . str_replace('http://', '', config('app.url', 'localhost')) }}</li>
                    </ul>
                </div>

                <div class="mx-2" id="subscribe">
                    <h6 class="heading my-1 font-x1">Subscribe</h6>
                    <form action="" id="subscribe-form">
                        <fieldset>
                            <input type="text" id="name" class="my-1" placeholder="Name" required>
                            <input type="email" id="email" class="my-1" placeholder="Email" required>
                            <button type="submit" class="btn">Subscribe</button>
                        </fieldset>
                    </form>
                </div>
            </footer>

            <div class="d-flex-r clear justify-content-space-between" id="copyright">
                <p class="d-flex-r">Copyright &copy; {{ date("Y") }}&nbsp;-&nbsp;All Right Reserved&nbsp;-&nbsp;<a href="{{ config('app.url', 'localhost') }}">{{ config('app.name', 'Laravel') }}</a></p>
                <a href="#top" id="backtotop"><i class="fa fa-chevron-up"></i></a>
            </div>
        </div>

        <div class="modal"></div>

        <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
