@extends('layout.layout')

@section('title')
    {{ $data->title }}
@endsection

@section('meta')
    <meta name="description" content="" />
    <meta property="og:url"           content="{{ route('posts.show', $data->slug) }}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{ $data->title }}" />
    <meta property="og:description"   content="{{ $data->resume }}" />
    <meta property="og:image"         content="/storage/{{ $data->picture }}" />
@endsection

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="bread">
                <a href="/">Accueil</a> <i class="fa fa-angle-right"></i> Article <i class="fa fa-angle-right"></i> <a href="">{{ strtoupper($data->title) }}</a>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-12">

                    <div class="body-page">

                        <p class="">
                            {{ $data->subtitle }}
                        </p>

                        <div class="" style="color: rgb(0, 153, 0);font-size: 20px;font-weight: bold; margin-left: 7px;">
                            {{ $data->title }}
                        </div>

                        <div class="separator">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div id="fb-root"></div>
                                    <div class="fb-share-button" data-href="{{ route('posts.show', $data->slug) }}" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ route('posts.show', $data->slug) }}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager</a></div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <i class="fa fa-clock-o"></i> {{ date('d', strtotime($data->updated_at)) .' / '. date('m', strtotime($data->updated_at)).' / '. date('Y', strtotime($data->updated_at)) }} | {{ $data->vues }} vues
                                </div>
                            </div>

                        </div>

                        <div class="subtitle">
                            <em>{{ $data->resume }}</em>
                        </div>

                        <div class="content text-justify">

                            <div>
                                <a href="/storage/{{ $data->picture }}" data-lightbox="gallery" data-title="{{ $data->title }}">
                                    <img class="img-responsive" src="/storage/{{ $data->picture }}" alt="{{ $data->title }}" style="border: 3px solid #eee;">
                                </a>
                            </div>


                            {!! $data->content !!}

                        </div>

                        <br><br>
                        <div class="comment">
                            <div class="title">
                                Commentaires
                            </div>
                            <hr>
                            {{--<div class="fb-comments" data-href="{{ route('posts.show', 1) }}" data-width="780"></div>--}}
                            <div class="fb-comments" data-href="{{ route('posts.show', $data->slug) }}" data-width="780" data-numposts="5"></div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-3">
            @include('partials.sidebar')
        </div>
    </div>

@endsection