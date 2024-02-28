<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>FlowerAdvisor - Landing</title>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" />
</head>

<body>
    <div class="hero_area">
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <span>
                            FlowerAdvisor
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <a class="nav_button" target="_blank" href="https://www.floweradvisor.com.ph/flowersphilippines">Make someone’s day</a>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="quote_btn-container ">
                            <div>
                                Hello, <strong style="color: #e1603a">{{ Auth::user()->name }}</strong>&nbsp;|&nbsp;
                            </div>
                            <form role="form" method="POST" action="{{ url('/logout') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button class="btn btn-link btn-sm text-black-50" type="submit">Log Out</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        
        <section class=" slider_section position-relative">
            <div class="container">
                <div class="row">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="col-lg-6 col-md-8">
                                    <div class="detail_box">
                                        <h2>
                                            Moments of Magic!
                                        </h2>
                                        <h1>
                                            Don&apos;t Miss Out
                                        </h1>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been
                                            the
                                            industry's
                                            standard dummy text ever since
                                        </p>
                                        <div>
                                            <button onclick="copyGiftCode('HALLOW10')">Using Code : <strong>HALLOW10</strong></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-6 col-md-8">
                                    <div class="detail_box">
                                        <h2>
                                            Sending Gifts
                                        </h2>
                                        <h1>
                                            Made Simple
                                        </h1>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been
                                            the
                                            industry's
                                            standard dummy text ever since
                                        </p>
                                        <a target="_blank" href="https://itunes.apple.com/us/app/online-florist-floweradvisor/id1185232807">
                                            <img class="pb-4" width="50%" src="{{ asset('images/app-store.png') }}" alt="App Store download button">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel_btn-container">
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer_section_trans p-3">
            <a target="_blank" href="https://www.floweradvisor.com.ph">
                <img height="40px" src="{{ asset('images/logo.webp') }}" alt="">
            </a>
        </footer>
    </div>

    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <script>
        function copyGiftCode(code) {
            navigator.clipboard.writeText(code);

            alert("Gift Code Copied");
        }
    </script>
</body>

</html>
