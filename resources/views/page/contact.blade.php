@extends('layout.layout')

@section('title')
    {{ setting('site.title') }}
@endsection

@section('meta')
    <meta name="description" content="{{ setting('site.description') }}" />
@endsection

@section('content')

    <div class="row">

        <div class="col-sm-12">
            <div class="bread">
                <a href="">Accueil</a> <i class="fa fa-angle-right"></i> <a href="#">Contacts</a>
            </div>
        </div>
        <!-- content bar -->
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-12">

                    <div class="body-page">

                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 mb20">
                                <div class="element-icon valign-wrapper">
                                    <br>
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="element-content">
                                    <span class="title-content">Adresse E-mail</span>
                                    <span class="detail-content">{{ setting('site.email') }}</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 mb20">
                                <div class="element-icon valign-wrapper">
                                    <br>
                                    <i class="fa fa-mobile-phone"></i>
                                </div>
                                <div class="element-content">
                                    <span class="title-content">Numéro de téléphone</span>
                                    <span class="detail-content">{{ setting('site.mobile_one') }}</span> <br>
                                    <span class="detail-content">{{ setting('site.mobile_two') }}</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 mb20">
                                <br>
                                <div class="element-icon valign-wrapper">
                                    <br>
                                    <i class="fa fa-file-text-o"></i>
                                </div>
                                <div class="element-content">
                                    <span class="title-content">Localisation</span>
                                    <span class="detail-content">{!! setting('site.location') !!}</span> <br>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 mb20">
                                <br>
                                <div class="element-icon valign-wrapper">
                                    <br>
                                    <i class="fa fa-file-text-o"></i>
                                </div>
                                <div class="element-content">
                                    <span class="title-content">Réseaux sociaux</span>
                                    <span class="detail-content">

                                        @if(!empty(setting('fb')))
                                            <a href="{{ setting('site.fb') }}" style="margin: 2px;" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
                                        @endif

                                        @if(!empty(setting('tw')))
                                            <a href="{{ setting('site.tw') }}" style="margin: 2px; color: #3AA6E9;" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a>
                                        @endif

                                        @if(!empty(setting('yb')))
                                            <a href="{{ setting('site.yb') }}" style="margin: 2px; color: #D1001A;" target="_blank"><i class="fa fa-youtube-square fa-2x"></i></a>
                                        @endif

                                        @if(!empty(setting('ln')))
                                            <a href="{{ setting('site.ln') }}" style="margin: 2px; color: #2C6CC4;" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a>
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>

                        <br><br>
                        <div class="row">
                            <div class="col-sm-12">
                                @include('partials.respons')
                            </div>
                            <form method="POST" action="{{ route('contact.send') }}" accept-charset="UTF-8">
                                {{ csrf_field() }}
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Nom &amp; Prénom(s)" name="name" type="text" required>
                                    </div>
                                </div>
                                {{--<div class="col-sm-6">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<input class="form-control" placeholder="Adresse E-mail" name="email" type="email">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Numéro de téléphone" name="mobile" type="text" required>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea class="form-control" style="max-width: 100%; height: 100px;" name="message" cols="50" rows="10" required></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-send-o"></i> Envoyer mon message</button>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>

                </div>
            </div>

        </div>

        <!-- sidebar -->

        <div class="col-sm-3">
            @include('partials.sidebar')
        </div>
    </div>

@endsection