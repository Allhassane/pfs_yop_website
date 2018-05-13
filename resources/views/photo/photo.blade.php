@extends('layout.layout')

@section('css')
    <link rel="stylesheet" href="/admin/lightbox2/dist/css/lightbox.css">
@endsection

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
                <a href="/">Accueil</a> <i class="fa fa-angle-right"></i> <a href="">Multimedia</a> <i class="fa fa-angle-right"></i> <a href="">Photothèque</a> <i class="fa fa-angle-right"></i> <a href="{{ route('album') }}">Album</a> <i class="fa fa-angle-right"></i> <a href="">{{ $album->title }}</a>
            </div>
        </div>
        <!-- content bar -->
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-12">

                    <div class="body-page">

                        <div class="title">
                            Album : {{ $album->title }}
                        </div>
                        <div class="separator-second"></div>

                        @if(count($datas) > 0)
                        <div class="row">
                            @foreach($datas as $data)
                            <div class="col-sm-4">
                                <div class="photo-box">
                                    <a href="/storage/{{ $data->picture }}" data-lightbox="gallery" data-title="Image de l'album {{ $album->title }}">
                                        <img src="/storage/{{ $data->picture }}" alt="{{ $data->title }}">
                                    </a>

                                    <div class="date">
                                        <i class="fa fa-clock-o"></i> {{ date('d', strtotime($data->created_at)).' / '.date('m', strtotime($data->created_at)).' / '.date('Y', strtotime($data->created_at)) }}
                                    </div>
                                    {{--<div class="caption">--}}
                                        {{--<a href="{{ route('photo', $data->slug) }}">--}}
                                            {{--{{ substr($data->title, 0, 20) }} @if(strlen($data->title) > 20) ... @endif--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @else
                            @include('partials.empty')
                        @endif

                    </div>

                </div>
            </div>

        </div>
        <div class="col-sm-3">
            @include('partials.sidebar')
        </div>

    </div>
@endsection

@section('js')
    <script src="/admin/lightbox2/dist/js/lightbox.js"></script>
@endsection