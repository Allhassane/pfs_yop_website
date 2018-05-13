@extends('layout.layout')

@section('title')
    {{ setting('site.title') }}
@endsection

@section('meta')
    <meta name="description" content="{{ setting('site.description') }}" />
@endsection

@section('content')
    <div class="row slide-sidebar">

        @include('partials.slide')

        <div class="col-md-3 col-sm-4">
            <div class="row news-letter">
                <div class="col-sm-12">
                    <div class="title">
                        newsLetter
                    </div>
                    <div class="content">
                        <form action="">
                            <input type="text" placeholder="Saisire votre e-mail">
                            <button type="submit">
                                Souscrire
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            @include('partials.foundator')

        </div>
    </div>

    <br>
    <div class="row">
        <div class="col-sm-9">
            @include('partials.section')
        </div>
        <!-- facebook -->
        <div class="col-xs-3">

            @include('partials.facebook')

        </div>
    </div>

    @if(count($posts) > 0)
        @include('partials.post')
    @endif

    @include('partials.album')

    <div class="row">
        <div class="col-sm-8">
            <div class="bilan-block" style="padding-bottom: 18px;">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title">
                            Bilan des Activités par Pôle
                        </div>
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="card" style="width: 100%;">
                                        <img class="card-img-top" src="img/pfs3.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="">Pôle information, Accueil et Orientation</a></h5>
                                            <p class="card-text">Repartition globale des jeunes identifiés par missions, selon le type de mission, selon le type d'emploi sollicité ... <a href="#" class="">lire</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card" style="width: 100%;">
                                        <img class="card-img-top" src="img/pfs2.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="">Pôle Qualification</a></h5>
                                            <p class="card-text">Repartition globale des jeunes identifiés par missions, selon le type de mission, selon le type d'emploi sollicité ... <a href="#" class="">lire</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card" style="width: 100%;">
                                        <img class="card-img-top" src="img/pfs1.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="">Pôle Entrepreunariat</a></h5>
                                            <p class="card-text">Repartition globale des jeunes identifiés par missions, selon le type de mission, selon le type d'emploi sollicité ... <a href="#" class="">lire</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="partenary-block">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title">
                            Partenaires
                        </div>
                        <div class="content">
                            <img class="pnud" src="img/pnud.jpg" alt="">
                            <img class="fco" src="img/fco.gif" alt="">
                            <img class="bit" src="img/bit.jpg" alt="">
                            <img class="papc" src="img/papc.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection