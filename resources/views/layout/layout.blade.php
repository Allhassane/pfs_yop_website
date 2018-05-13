<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @yield('meta')
    <meta name="keywords" content="Productivité, café, Cacao, Riz, ressources animales" />
    <meta name="author" content="KOMPTECH-CIMAT" />
    <meta name="copyright" content="PFS-Yopougon" />

    <!-- style -->
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/style_mobile.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
    <link href="/img/logo_pfs.png" rel="shortcut icon" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- end -->
</head>
<body>

@if(count($infos) > 0)
    @include('partials.flash')
@endif

    <div style="margin-top: 6%;"></div>

    <div class="container">
        <div class="body">
            <div class="header">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="logo-sm">
                            <a href="/">
                                <img class="logo" src="/img/logo_pfs.png" alt="logo pfs-yopougon">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12 text-center">
                        <div class="pub">

                            <div class="website-title">
                                {{ setting('site.title') }}
                            </div>
                            <div class="website-subtitle">
                                {{ setting('site.subtitle') }}
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <ul id="menu-md">
                            <li><a href="/">Accueil</a></li>
                            <li><a href="{{ route('page', 'a-propos-de-pfs-yopougon') }}">Apropos</a></li>
                            <li><a href="{{ route('posts') }}">Actualités</a></li>
                            <li><a href="{{ route('page', 'les-organes-de-la-pfs-yopougon') }}">Organes</a></li>
                            <li><a href="">Offres</a>
                                <ul class="sous-menu">
                                    <li><a href="{{ route('page', 'les-mesures-et-passerelles-d-insertion-professionnelle-de-la-pfs-yop') }}">Offres d'insertion</a></li>
                                    <li><a href="{{ route('page', 'les-autres-offres-proposees-par-le-pfs-yopougon') }}">Autres offres</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('page', 'le-bilan-des-actions-d-insertion-de-la-pfs-yopougon') }}">Données & Statistiques</a></li>
                            <li><a href="{{ route('partenaire') }}">Partenaires</a></li>
                            <li><a href="">Multimedia</a>
                                <ul class="sous-menu">
                                    <li><a href="{{ route('album') }}">Photothèque</a></li>
                                    <li><a href="">Vidéothèque</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('contact') }}">Contacts</a></li>
                        </ul>

                        {{--<!-- menu sm -->--}}
                        {{--<ul id="menu-sm">--}}
                            {{--<li><a href="#" class="nav-sm"><i class="fa fa-navicon"></i></a></li>--}}
                            {{--<ul class="toggle">--}}
                                {{--<li><a href="/">Accueil</a></li>--}}
                                {{--<li><a href="{{ route('page', 'a-propos-de-pfs-yopougon') }}">Apropos</a></li>--}}
                                {{--<li><a href="{{ route('posts.list') }}">Actualités</a></li>--}}
                                {{--<li><a href="{{ route('page', 'les-organes-de-la-pfs-yop') }}">Organes</a></li>--}}
                                {{--<li><a href="">Offres</a>--}}
                                    {{--<ul class="sous-menu">--}}
                                        {{--<li><a href="{{ route('page', 'les-mesures-et-passerelles-d-insertion-professionnelle-de-la-pfs-yop') }}">Offres d'insertion</a></li>--}}
                                        {{--<li><a href="{{ route('page', 'les-autres-offres-proposees-par-le-pfs-yopougon') }}">Autres offres</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a href="{{ route('page', 'le-bilan-des-actions-d-insertion-de-la-pfs-yopougon') }}">Données & Statistiques</a></li>--}}
                                {{--<li><a href="{{ route('partenaire') }}">Partenaires</a></li>--}}
                                {{--<li><a href="">Multimedia</a>--}}
                                    {{--<ul class="sous-menu">--}}
                                        {{--<li><a href="{{ route('album') }}">Photothèque</a></li>--}}
                                        {{--<li><a href="{{ route('video') }}">Vidéothèque</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a href="{{ route('contacts') }}">Contacts</a></li>--}}
                            {{--</ul>--}}

                        {{--</ul>--}}
                    </div>
                </div>


                <br>

                @yield('content')

                <br><br><br>
                <div class="row footer">
                    <div class="col-sm-12 text-center"><br>
                        &copy; CopyRight Mars 2018 PFS-YOPOUGON - Tout droit réservé <br>
                        Développé par <a href="https://komptech-cimat.net/" target="_blank" style="color: #fff">Komptech</a>
                    </div>
                    <div class="col-sm-12">
                        <div style="text-align: center;">
                            <img src="/storage/{{ setting('site.separator') }}" alt="" style="color: #fff; width: 60%; height: 10px;">
                        </div>
                        <ul>
                            <li><a target="_blank" href="http://www.pfs-ci.com">PFS - CI </a>&nbsp;&nbsp;&nbsp;&nbsp;|</li>
                            <li><a target="_blank" href="http://www.pnud.org">PNUD </a>&nbsp;&nbsp;&nbsp;&nbsp;|</li>
                            <li><a target="_blank" href="http://www.fdfp.or.ci/fdfp/">FDFP </a>&nbsp;&nbsp;&nbsp;&nbsp;|</li>
                            <li><a target="_blank" href="http://www.agepe.ci">AGEPE </a>&nbsp;&nbsp;&nbsp;&nbsp;|</li>
                            <li><a target="_blank" href="http://www.agefop.ci">AGEFOP </a>&nbsp;&nbsp;&nbsp;&nbsp;|</li>
                            <li><a target="_blank" href="http://www.ilo.org/">ILO </a>&nbsp;&nbsp;&nbsp;&nbsp;|</li>
                            <li><a target="_blank" href="http://www.komptech-ci.net/">KOMPTECH </a>&nbsp;&nbsp;&nbsp;&nbsp;|</li>
                            <li><a target="_blank" href="http://www.cimat-ci.net/">CIMAT-IATA </a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/script.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/slick.min.js"></script>
<script src="/admin/lightbox2/dist/js/lightbox.js"></script>

<script>
    $('.main-slide-content').slick({
        dots: false,
        infinite: true,
        speed: 800,
        autoplaySpeed: 5000,
        fade: false,
        cssEase: 'linear',
        autoplay: true,
        arrows: true,
        nextArrow: '#main-slide .control-left',
        prevArrow: '#main-slide .control-right'
    });
    $('.content-img').slick({
        dots: false,
        infinite: true,
        speed: 800,
        autoplaySpeed: 5000,
        fade: false,
        cssEase: 'linear',
        autoplay: true,
        arrows: false
    });
    $('.medicament-slide-content').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        speed: 800,
        autoplay: true,
        arrows: true,
        nextArrow: '.medicament-slide .medicament-control-left',
        prevArrow: '.medicament-slide .medicament-control-right'
    });
    $('.nav-sm').on('click', function(e){
        e.preventDefault();


        $('.toggle').slideToggle('normal');
    })
</script>
</body>
</html>